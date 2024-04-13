<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bdm";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete_query = "DELETE FROM contactus WHERE id=$id";
    if ($conn->query($delete_query) === true) {
        header("Location: your_page.php"); // Redirect to the page after deletion
        exit;
    }
}

$select_query = "SELECT * FROM contactus";
$result = $conn->query($select_query);

$contactInfo = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contactInfo[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Font-Awesome/addbloodbankfinals.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script></head>
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
        .delete-button {
            background-color: #980000;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

        
   
</head>
<body>
<div class="headingA">
        <h1 align="center">Welcome to RedDrops Contact Us data Dashboard</h1>
        <h2 align="center">Here you can check contact us charts and entry table.</h2>
        <a href='dashboard.php' align="center"><i class='fa fa-tachometer' style='font-size: 20px; color: white'></i>Back to  Dashboard</a>
    </div>
    <div class="heading2" style="width:100%; height: 40px; background-color: white; display: flex; justify-content: space-between;">
    
    <div class="right" style="width:50%; height: 100%; background-color: white; margin-top:10px;">
        <h1 style="line-height:10px; text-align: center; font-size:30px; color: #980000;">Contact Us graph</h1>
    </div>
</div>
    
    <div class="chart-container">
    <div id="barchart" style="width: 1000px; height: 400px; margin-top:10px;"></div>   
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php foreach ($contactInfo as $row) : ?>
            <tr>
            <td><?php echo$row['id'];?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['d_ate'];?></td>
               
                <td>
                    <button class="delete-button" data-id="<?php echo $row['id']; ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <script>
        document.querySelectorAll(".delete-button").forEach(function(button) {
            button.addEventListener("click", function() {
                var id = button.getAttribute("data-id");
                if (confirm("Are you sure you want to delete this record?")) {
                    window.location.href = "your_page.php?delete_id=" + id;
                }
            });
        });
    </script>
</body>
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
</html>
