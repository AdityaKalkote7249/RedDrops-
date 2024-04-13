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

<!DOCTYPE html>
<html>

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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<link rel="stylesheet" href="assets\css\dashboard.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
            title: 'Blood Banks by Category'
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

    th,
    td {
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
        <h1 align="center">Welcome to RedDrops blood bank data</h1>
        <h2 align="center">Here you will be able to see blood bank data</h2>
        <a href='dashboard.php' align="center"><i class='fa fa-tachometer'
                style='font-size: 20px; color: white'></i>Back to Dashboard</a>
    </div>
    <h3>Entry Count:</h3>
    <div id="counter" style="font-size: 24px;">0</div>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

    <!-- Display blood bank information in a table -->
    <table>
        <tr>
            <th>Hospital Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>District</th>
            <th>Taluka</th>
            <th>Category</th>
        </tr>
        <?php
        $mysqli = new mysqli("localhost", "root", "", "bdm");
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Query to fetch blood bank information
        $query = "SELECT bi.bank_name, bi.email, bi.mobile_number, bi.address, bi.district, bi.taluka, bi.category FROM bank_info bi";
        $result = $mysqli->query($query);

        $bloodBanks = array(); // Array to store blood bank information
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bloodBanks[] = $row;
            }
        } else {
            echo "No data available.";
        }

        $mysqli->close();

        foreach ($bloodBanks as $bank) {
            echo "<tr>";
            echo "<td>" . $bank['bank_name'] . "</td>";
            echo "<td>" . $bank['email'] . "</td>";
            echo "<td>" . $bank['mobile_number'] . "</td>";
            echo "<td>" . $bank['address'] . "</td>";
            echo "<td>" . $bank['district'] . "</td>";
            echo "<td>" . $bank['taluka'] . "</td>";
            echo "<td>" . $bank['category'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>