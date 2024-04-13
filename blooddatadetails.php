<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Dashboard</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./Font-Awesome/addbloodbankfinals.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets\css\dashboard.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <style>
    body {
      font-family: 'Dosis', sans-serif;
    }

    .headingA {
      background-color: #980000;
      height: 100px;
      width: 100%;
    }


    a {
      margin-top: -10px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
      transition: 0.3s;
    }
  </style>
</head>

<body>
  <div class="headingA">
    <h1 align="center">Welcome to RedDrops Blood details data</h1>
    <h2 align="center">Here you will be able to check blood data details.</h2>
    <a href='dashboard.php' align="center"><i class='fa fa-tachometer' style='font-size: 20px; color: white'></i>Back to
      Dashboard</a>
  </div>


  <div class="heading2"
    style="width:100%; height: 40px; background-color: white; display: flex; justify-content: space-between;">
    <div class="left" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
      <h1 style="line-height: 10px; font-size:30px; text-align: center; color: #980000;">Blood availability chart</h1>
    </div>
    <div class="right" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
      <h1 style="line-height:10px; text-align: center; font-size:30px; color: #980000;">Blood availability chart</h1>
    </div>
  </div>
  <!--Div class of piechart-->
  <div class="container">
    <div class="chart-container">
      <div id="piechart_3d" style="width:500px; height: 500px;"></div>
    </div>
    <div class="chart-container">
      <div id="piechart1_3d" style="width: 500px; height: 500px;"></div>
    </div>
  </div>
  <!--Blood group graph-->
  <!--start of 1st blood cahrt-->
  <!--PHP code of blood group-->
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bdm";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT blood_group, availability FROM blood_details"; // Adjust the table and column names as needed
  $result = $conn->query($query);
  $rows = $result->fetch_all(MYSQLI_ASSOC);

  // Calculate the percentages
  $total = count($rows);
  $availabilityCounts = array_count_values(array_column($rows, 'availability'));

  $percentages = array(
    'Yes' => ($availabilityCounts['Yes'] / $total) * 100,
    'No' => ($availabilityCounts['No'] / $total) * 100,
  );
  ?>
  <!--Javascript code of blood group-->
  <script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn("string", "Blood Group");
      data.addColumn("number", "Percentage");

      // PHP code to generate data from the calculated percentages
      var phpData = <?php echo json_encode($percentages); ?>;
      var dataArray = [];

      // Convert PHP data into the format required by Google Charts
      for (var key in phpData) {
        dataArray.push([key, phpData[key]]);
      }

      data.addRows(dataArray);

      var options = {
        title: "Blood availibility in Maharashtra",
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById("piechart_3d"));
      chart.draw(data, options);
    }
  </script>
  <!--end of first blood cahrt-->
  <!--Start of 2nd blood chart-->
  <!--PHP code of 2nd blood group-->
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bdm";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT blood_group, availability FROM blood_details"; // Adjust the table and column names as needed
  $result = $conn->query($query);
  $rows = $result->fetch_all(MYSQLI_ASSOC);

  // Calculate the percentages for each blood group
  $availabilityCounts = array_count_values(array_column($rows, 'blood_group'));

  $percentages = array();
  foreach ($availabilityCounts as $group => $count) {
    $percentage = ($count / count($rows)) * 100;
    $percentages[$group] = $percentage;
  }
  ?>
  <!--Javascript code of 2nd blood chart-->
  <script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn("string", "Blood Group");
      data.addColumn("number", "Percentage");

      // PHP code to generate data from the calculated percentages
      var phpData = <?php echo json_encode($percentages); ?>;
      var dataArray = [];

      // Convert PHP data into the format required by Google Charts
      for (var key in phpData) {
        dataArray.push([key, phpData[key]]);
      }

      data.addRows(dataArray);

      var options = {
        title: "Blood availibility in goups",
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById("piechart1_3d"));
      chart.draw(data, options);
    }
  </script>
  <!--end of blood chart-->
  <!--Graph of blood bank-->
  <!--Graph of blood bank in Maharashtra-->
  <!--PHP code of graph-->
</body>

</html>