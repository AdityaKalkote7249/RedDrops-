<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bdm";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user inputs
function sanitize_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["add"])) {
        // Add new blood bank
        $bank_name = sanitize_input($_POST["bank_name"]);
        $email = sanitize_input($_POST["email"]);
        $mobileNumber = sanitize_input($_POST["mobileNumber"]);
        $address = sanitize_input($_POST["address"]);
        $district = sanitize_input($_POST["district"]);
        $taluka = sanitize_input($_POST["taluka"]);
        $category = sanitize_input($_POST["category"]);

        $insert_query = "INSERT INTO abbank (h_name, email, mobileNumber, address, district, taluka, category) 
            VALUES ('$bank_name', '$email', '$mobileNumber', '$address', '$district', '$taluka', '$category')";

        if ($conn->query($insert_query) === true) {
            $successMessage = "Blood bank added successfully.";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
        $id = $_POST["id"];
        $district = $_POST["district"];
        $taluka = $_POST["taluka"];
        $h_name = sanitize_input($_POST["h_name"]);
        $mobileNumber = sanitize_input($_POST["mobileNumber"]);
        $email = sanitize_input($_POST["email"]);
        $category = sanitize_input($_POST["category"]);
        $address = sanitize_input($_POST["address"]);

        // Update the blood bank information
        $update_query = "UPDATE abbank 
            SET district='$district', taluka='$taluka', h_name='$h_name', mobileNumber='$mobileNumber', email='$email', category='$category', address='$address'
            WHERE id=$id";

        if ($conn->query($update_query) === true) {
            $successMessage = "Blood bank updated successfully.";
            header("Location: updateadmin.php"); // Redirect to the updateadmin.php page
            exit; // Terminate the script
        }
    } elseif (isset($_POST["delete"])) {
        // Delete existing blood bank
        $id = $_POST["id"];

        $delete_query = "DELETE FROM abbank WHERE id=$id";

        if ($conn->query($delete_query) === true) {
            header("Location: " . $_SERVER['PHP_SELF']); // Redirect to refresh the page
            exit; // Terminate the script
        }
    }
}

// Retrieve blood bank data from the database
$select_query = "SELECT * FROM abbank";
$result = $conn->query($select_query);
$abbank = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $abbank[] = $row;
    }
}

$conn->close();
?>

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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
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

    .button {
        color: white;
        font-size: 20px;
        background-color: #980000;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-family: 'Dosis', sans-serif;
        font-weight: 500;

    }
</style>
</head>

<body>
    <div class="headingA">
        <h1 align="center">Welcome to RedDrops New Blood Bank data details</h1>
        <h2 align="center">Here you will be able to see new blood banks data</h2>
        <a href='dashboard.php' align="center"><i class='fa fa-tachometer'
                style='font-size: 20px; color: white'></i>Back to Dashboard</a>
    </div>
    <div class="heading2"
        style="width:100%; height: 40px; background-color: white; display: flex; justify-content: space-between;">
        <div class="left" style="width:50%; height: 100%; background-color: white; margin-top:40px;">
            <h1 style="line-height: 10px; font-size:30px; text-align: center; color: #980000;">New blood bank graph</h1>
        </div>
    </div>
    <div class="container">

        <div class="chart-container">

            <div id="barchart" style="width: 1000px; height: 400px;"></div>
        </div>
    </div>
    <?php if (isset($successMessage)): ?>
        <div class="success-message">
            <?= $successMessage ?>
        </div>
    <?php endif; ?>
    <button onclick="window.location.href='addbloodbankfinal.php'" class="button">Add Blood Bank</button>
    <table>
        <tr>
            <th>ID</th>
            <th>District</th>
            <th>Taluka</th>
            <th>Hospital Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Category</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($abbank as $bank): ?>
            <tr>
                <td>
                    <?= $bank['id'] ?>
                </td>
                <td>
                    <?= $bank['district'] ?>
                </td>
                <td>
                    <?= $bank['taluka'] ?>
                </td>
                <td>
                    <?= $bank['h_name'] ?>
                </td>
                <td>
                    <?= $bank['mobileNumber'] ?>
                </td>
                <td>
                    <?= $bank['email'] ?>
                </td>
                <td>
                    <?= $bank['category'] ?>
                </td>
                <td>
                    <?= $bank['address'] ?>
                </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?= $bank['id'] ?>">
                        <input type="submit" name="update" value="Update" class="button"
                            onclick="window.location.href='updateadmmin.php'">
                        <input type="submit" name="delete" value="Delete"
                            onclick="return confirm('Are you sure you want to delete this record?')" class="button">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
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