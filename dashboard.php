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
</head>

<body>
  <div class="content">
    <h1 align="center">Welcome to RedDrops Dashboard</h1>
    <h2 align="center">This is where you can manage your content, view charts, and explore various pages.</h2>
  </div>
  <div class="navbar">
    <div class="profile">
      <?php
      session_start();

      if (isset($_SESSION['user_data'])) {
        $user_data = $_SESSION['user_data'];
        $user_image = $user_data['image_path'];
        $user_name = $user_data['f_name'];

        echo "<div style='text-align: center;'>";
        echo "<img src='$user_image' alt='User Image'>";
        echo "<p style='color: white; font-size: 25px; font-family: \"Dosis\", sans-serif; font-weight: 500'>$user_name</p>";
        echo "<form method='POST' action='adminlogout.php'>";
        echo "<input type='submit' value='Logout' style=' 
            background-color: #980000;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-family: \"Dosis\", sans-serif;'>";
        echo "</form>";
        echo "</div>";

        echo "<a href='#dashboard'><i class='fa fa-tachometer' style='font-size: 20px; color: white'></i>Dashboard</a>";

        // Display the dropdown menu with page links
        echo "<div>";
        echo "<select id='pages' onchange='window.location.href = this.value;' class='B_B'>";
        echo "<option value='dashboard.php'>Pages</option>";
        echo "<option value='userlogindata.php'>User Login</option>";
        echo "<option value='bloodbankdata.php'>Blood Banks</option>";
        echo "<option value='newbloodbankdata.php'>New Blood Bank</option>";
        echo "<option value='blooddatadetails.php'>Blood details</option>";
        echo "<option value='contactusdata.php'>Contacts</option>";
        echo "</select>";
        echo "</div>";

        // Display the "Add admin" link
        echo "<a href='addadmin.php'>Add admin</a>";
      } else {
        // If the user is not logged in, only display the dashboard link
      
        echo "<p style='color:white; font-size:20px; padding:10px 20px;'>Note:-In order to update and do any other processes you will need to login first</p>";
        echo "<a href='#dashboard'><i class='fa fa-tachometer' style='font-size: 20px; color: white'></i>Dashboard</a>";
        echo "<a href='adminlogin.php'><i class='fa fa-user' style='font-size:20px;color:white;'></i>Admin Login</a>";
      }
      ?>
    </div>


  </div>

  <!-- Counter -->
  <div class="container">
    <div class="counter-card" style="border-left: 5px solid #980000;">
      <div class="card-body">
        <!-- Your Instagram Counter -->
        <div class="icon">
          <i class="fa fa-instagram"></i>
        </div>
        <div class="text-white">Instagram: <span id="instagramCounter">0</span>
          <p>Followers</p>
        </div>
      </div>
    </div>

    <div class="counter-card" style="border-left: 5px solid #980000;">
      <div class="card-body">
        <!-- Your Twitter Counter -->
        <div class="icon">
          <i class="fa fa-twitter"></i>
        </div>
        <div class="text-white1">Twitter: <span id="twitterCounter">0</span>
          <p>Followers</p>
        </div>
      </div>
    </div>

    <div class="counter-card" style="border-left: 5px solid #980000;">
      <div class="card-body">
        <!-- Your Facebook Counter -->
        <div class="icon">
          <i class="fa fa-facebook"></i>
        </div>
        <div class="text-white">Facebook: <span id="facebookCounter">0</span>
          <p>Followers</p>
        </div>
      </div>
    </div>

    <div class="counter-card" style="border-left: 5px solid #980000;">
      <div class="card-body">
        <!-- Your YouTube Counter -->
        <div class="icon">
          <i class="fa fa-youtube-play"></i>
        </div>
        <div class="text-white">YouTube: <span id="youtubeCounter">0</span>
          <p>Subscribers</p>
        </div>
      </div>
    </div>

  </div>

  <!--Heading div of bar chart -->
  <div class="heading2"
    style="width:100%; height: 40px; background-color: white; display: flex; justify-content: space-between;">
    <div class="left" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
      <h1 style="line-height: 10px; font-size:30px; text-align: center; color: #980000;">Users account graph</h1>
    </div>
    <div class="right" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
      <h1 style="line-height:10px; text-align: center; font-size:30px; color: #980000;">Contact Us graph</h1>
    </div>
  </div>
  <!--div class of barchart-->
  <div class="container">

    <div class="chart-container">
      <div id="barchart1" style="width: 50%; height: 400px;"></div>
    </div>
    <div class="chart-container">
      <div id="barchart2" style="width: 50%; height: 400px;"></div>
    </div>
  </div>
  <hr style="height:1px; background-color:black;">
  <!--heading of piechart-->
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
  <hr style="height:1px; background-color:black;">
  <!-- div class of blood bank-->
  <!--div class of heading blood bank-->
  <!--heading of piechart-->
  <div class="heading2"
    style="width:100%; height: 40px; background-color: white; display: flex; justify-content: space-between;">
    <div class="left" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
      <h1 style="line-height: 20px; font-size:30px; text-align: center; color: #980000;">Blood Bank in Maharashtra
        <br>as per category</h1>
    </div>
    <div class="right" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
      <h1 style="line-height:10px; text-align: center; font-size:30px; color: #980000;">Blood availability chart</h1>
    </div>
  </div>
  <div class="container">
    <div class="chart-container">
      <h2 style="color:black; margin-top: 20px; font-size: 30px; font-family:'Dosis',sans-serif; font-weight:500">Total
        Count:</h2>
      <div id="counter" style="font-size: 24px;">0</div>

      <div id="piechart" style="width: 500px; height: 500px; "></div>

    </div>
    <div class="chart-container">
      <div id="barchart" style="width: 500px; height: 400px;"></div>
    </div>

  </div>

  <script>
    // Set your counter end values here
    var instagramEndValue = 480;
    var twitterEndValue = 270;
    var facebookEndValue = 490;
    var youtubeEndValue = 600;

    // Update counters
    function updateCounters() {
      var instagramCounter = 0;
      var twitterCounter = 0;
      var facebookCounter = 0;
      var youtubeCounter = 0;

      var interval = setInterval(function () {
        document.getElementById("instagramCounter").textContent = instagramCounter;
        document.getElementById("twitterCounter").textContent = twitterCounter;
        document.getElementById("facebookCounter").textContent = facebookCounter;
        document.getElementById("youtubeCounter").textContent = youtubeCounter;

        if (instagramCounter < instagramEndValue) {
          instagramCounter += 10;
        }
        if (twitterCounter < twitterEndValue) {
          twitterCounter += 2;
        }
        if (facebookCounter < facebookEndValue) {
          facebookCounter += 20;
        }
        if (youtubeCounter < youtubeEndValue) {
          youtubeCounter += 5;
        }

        if (instagramCounter >= instagramEndValue &&
          twitterCounter >= twitterEndValue &&
          facebookCounter >= facebookEndValue &&
          youtubeCounter >= youtubeEndValue) {
          clearInterval(interval);
        }
      }, 20); // Update every 100 milliseconds
    }

    updateCounters();
  </script>

  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart1);

    function drawChart1() {
      // Fetch data from the database and create a data array for chart 1
      var data1 = google.visualization.arrayToDataTable([
        ['Date', 'Count'],
        // Your data for Chart 1 here
        <?php
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bdm";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch data from your database and count the entries for each date
        $sql = "SELECT DATE(d_ate) AS date, COUNT(*) AS count FROM sign_up GROUP BY DATE(d_ate)";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "['" . $row["date"] . "', " . $row["count"] . "],";
          }
        }

        $conn->close();
        ?>
      ]);

      var options1 = {
        title: 'Data Count from database',
        chartArea: { width: '80%' }, // Adjust the width as needed
        hAxis: {
          title: 'Date',
        },
        vAxis: {
          title: 'Count',
        },
        colors: ['#980000']
      };

      var chart1 = new google.visualization.ColumnChart(document.getElementById('barchart1'));

      chart1.draw(data1, options1);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
      // Fetch data from the database and create a data array for chart 2
      var data2 = google.visualization.arrayToDataTable([
        ['Date', 'Count'],
        // Your data for Chart 2 here
        <?php
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bdm";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch data from your database and count the entries for each date
        $sql = "SELECT DATE(d_ate) AS date, COUNT(*) AS count FROM contactus GROUP BY DATE(d_ate)";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "['" . $row["date"] . "', " . $row["count"] . "],";
          }
        }

        $conn->close();
        ?>
      ]);

      var options2 = {
        title: 'Data Count from database ',
        chartArea: { width: '80%' }, // Adjust the width as needed
        hAxis: {
          title: 'Date',
        },
        vAxis: {
          title: 'Count',
        },
        colors: ['#980000']
      };

      var chart2 = new google.visualization.ColumnChart(document.getElementById('barchart2'));

      chart2.draw(data2, options2);
    }
  </script>
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
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "bdm";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Query to get the count of blood banks by category
  $query = "SELECT category, COUNT(*) as count FROM bank_info GROUP BY category";
  $result = $conn->query($query);

  $data = array();

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $category = $row['category'];
      $count = $row['count'];
      $data[] = [$category, $count];
    }
  }

  // Query to count the entries in your table
  $query = "SELECT COUNT(*) as entry_count FROM bank_info";
  $result = $conn->query($query);

  if ($result) {
    $row = $result->fetch_assoc();
    $entryCount = $row['entry_count'];
  } else {
    $entryCount = 0; // Set a default value if there was an error
  }

  $conn->close();
  ?>
  <!--javascript code of blood bank-->
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Category', 'Count'],
        <?php
        foreach ($data as $row) {
          echo "['" . $row[0] . "', " . $row[1] . "],";
        }
        ?>
      ]);

      var options = {
        title: 'Data count from database'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);

      // JavaScript code to create a counter
      var currentCount = 0; // Initial counter value
      var maxCount = <?php echo $entryCount; ?>; // Maximum count value
      var counterElement = document.getElementById('counter');

      function updateCounter() {
        counterElement.textContent = currentCount;
        if (currentCount < maxCount) {
          currentCount++;
          setTimeout(updateCounter, 10); // Update every 1 second (1000 milliseconds)
        }
      }

      updateCounter(); // Start the counter
    }
  </script>
  <!--Start of add blood bank graph-->
  <!--with javascript and php-->
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Fetch data from the database and create a data array
      var data = google.visualization.arrayToDataTable([
        ['Date', 'Count'],
        <?php
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bdm";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch data from your database and count the entries for each date
        $sql = "SELECT DATE(d_ate) AS date, COUNT(*) AS count FROM abbank GROUP BY DATE(d_ate)";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "['" . $row["date"] . "', " . $row["count"] . "],";
          }
        }

        $conn->close();
        ?>
      ]);

      var options = {
        title: 'Data Count from databse',
        chartArea: { width: '50%' }, // Adjust the width as needed
        hAxis: {
          title: 'Add blood bank in month',
        },
        vAxis: {
          title: 'Count',
        },
        colors: ['#980000']
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('barchart'));

      chart.draw(data, options);
    }
  </script>
</body>

</html>