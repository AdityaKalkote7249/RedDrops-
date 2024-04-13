<?php
$mysqli = new mysqli("localhost", "root", "", "bdm");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT d_ate, id, f_name, age, gender, email, mobile_number
          FROM sign_up;";

$result = $mysqli->query($query);
if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Font-Awesome/addbloodbankfinals.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script></head>
    <link rel="stylesheet" href="assets\css\dashboard.css">
    <style>
        body {
            font-family: 'Dosis', sans-serif;
        }
        
        .headingA {
            background-color: #980000;
            height: 100px;
            width: 100%;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #980000;
            margin-top: 20px;
            border-radius: 2px;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
            border: 2px solid #980000;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
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
        <h1 align="center">Welcome to RedDrops User data Dashboard</h1>
        <h2 align="center">This is where you can see user login data, chart of data, and table of user data.</h2>
        <a href='dashboard.php' align="center"><i class='fa fa-tachometer' style='font-size: 20px; color: white'></i>Back to  Dashboard</a>
    </div>
    <div class="heading2" style="width:100%; height: 40px; background-color: white; display: flex; justify-content: space-between;">
    <div class="left" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
        <h1 style="line-height: 10px; font-size:30px; text-align: center; color: #980000;">Users account graph</h1>
    </div>
    </div>
    <div class="container">

    <div class="chart-container">
        <div id="barchart" style="width: 900px; height: 400px;"></div>
    </div>
    </div>
    <?php
    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        echo'<p style="color:#980000; font-size:30px; font-wieght:500" align=center>User information table</p>';
        echo '<table>';
        echo '<tr>
            <th>Date</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile Number</th>
          </tr>';

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['d_ate'] . "</td>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['f_name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile_number'] . "</td>";
            echo "</tr>";
        }

        echo '</table>';
    } else {
        echo "<table>";
        echo '<tr>
        <th>Date</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile Number</th>
      </tr>';
        echo '<tr>
            <td colspan="7" style="text-align: center; color: black; font-weight: bold; font-family: "Dosis", sans-serif; font-size: 20px">No user data available.</td>
        </tr>';

        echo "</table>";
    }

    $mysqli->close();
    ?>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
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

      var options = {
        title: 'Data Count by Date',
        chartArea: { width: '50%' }, // Adjust the width as needed
        hAxis: {
          title: 'Date',
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
