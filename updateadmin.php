<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bdm";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

$id = isset($_GET["id"]) ? $_GET["id"] : null; // Check if "id" is set, if not, initialize it as null

// Initialize variables to prevent "Undefined variable" error
$district = $taluka = $h_name = $mobileNumber = $email = $category = $address = "";

$errorMessage = ""; // Initialize the error message

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update"])) {
    $district = sanitize_input($_POST["district"]);
    $taluka = sanitize_input($_POST["taluka"]);
    $h_name = sanitize_input($_POST["h_name"]);
    $mobileNumber = sanitize_input($_POST["mobileNumber"]);
    $email = sanitize_input($_POST["email"]);
    $category = sanitize_input($_POST["category"]);
    $address = sanitize_input($_POST["address"]);

    // Validate mobile number
    if (!preg_match("/^[0-9]{10}$/", $mobileNumber)) {
        $errorMessage = "Mobile number must be 10 digits.";
    } else {
        // Prepare the update query using a prepared statement
        $update_query = $conn->prepare("UPDATE abbank 
            SET district=?, taluka=?, h_name=?, mobileNumber=?, email=?, category=?, address=?
            WHERE id=?");
        $update_query->bind_param("sssssssi", $district, $taluka, $h_name, $mobileNumber, $email, $category, $address, $id);

        if ($update_query->execute()) {
            $successMessage = "Blood bank updated successfully.";
        } else {
            $errorMessage = "Error updating blood bank: " . $conn->error;
        }

        $update_query->close();
    }
}

// Retrieve blood bank data from the database if "id" is not null
if ($id !== null) {
    $select_query = "SELECT * FROM abbank WHERE id=$id";
    $result = $conn->query($select_query);

    if ($result !== false && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $h_name = $row["h_name"];
        $mobileNumber = $row["mobileNumber"];
        $email = $row["email"];
        $category = $row["category"];
        $address = $row["address"];
        $district = $row["district"];
        $taluka = $row["taluka"];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Blood Bank Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #980000;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .center-div {
            text-align: center;
            color: #fff;
        }

        .container {
            max-width: 530px;
            width: 90%;
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #980000;
            font-family: 'Dosis', sans-serif;
        }

        .form-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group .label {
            flex: 1;
            text-align: right;
            padding-right: 10px;
            color: #980000;
        }

        .form-group .input {
            flex: 2;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn {
            display: block;
            width: 65%;
            padding: 10px;
            margin: 20px auto;
            background-color: #980000;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border: #fff 2px solid;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 6px;
        }

        .btn:hover {
            transform: scale(1.1);
        }

        .dashboard-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="center-div container">
        <h1>Update Blood Bank Information</h1>
        <?php if (isset($successMessage)) : ?>
            <script>
                alert('<?php echo $successMessage; ?>');
                window.location.href = 'newbloodbankdata.php';
            </script>
        <?php endif; ?>
        <?php if (!empty($errorMessage)) : ?>
            <div class="error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <form action="updateadmin.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label class="label" for="h_name">Blood Bank Name:</label>
                <input class="input" type="text" name="h_name" value="<?php echo $h_name; ?>" required>
                <label class="label" for="mobileNumber">Mobile Number:</label>
                <input class="input" type="text" name="mobileNumber" value="<?php echo $mobileNumber; ?>" required>
            </div>
            <div class="form-group">
                <label class="label" for="email">Email:</label>
                <input class="input" type="email" name="email" value="<?php echo $email; ?>" required>
                <label class="label" for="category">Category:</label>
                <input class="input" type="text" name= "category" value="<?php echo $category; ?>" required>
            </div>
            <div class="form-group">
                <label class="label" for="address">Address:</label>
                <input class="input" type="text" name="address" value="<?php echo $address; ?>" required>
                <label class="label" for="district">District:</label>
                <input class="input" type="text" name="district" value="<?php echo $district; ?>" required>
            </div>
            <div class="form-group">
                <label class="label" for="taluka">Taluka:</label>
                <input class="input" type="text" name="taluka" value="<?php echo $taluka; ?>" required>
            </div>
            <input class="btn" type="submit" name="update" value="Update">
        </form>
       
    </div>
</body>
</html>
