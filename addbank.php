<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your existing code for handling other form fields
    $district = $_POST['district'];
    $taluka = $_POST['taluka'];
    $pincode = $_POST['pincode'];
    $h_name = $_POST['h_name'];
    $mobileNumber = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $blood_availiblity = $_POST['blood_availiblity'];
    $category = $_POST['category'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    // Data for database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdm";

    // Establish a database connection
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert form data into the database
    $stmt = $conn->prepare("INSERT INTO abbank (district, taluka, pincode, h_name, mobileNumber, email, blood_availiblity, category, address, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $district, $taluka, $pincode, $h_name, $mobileNumber, $email, $blood_availiblity, $category, $address, $city);

    if ($stmt->execute()) {
        // After successfully inserting into the database
        $_SESSION['user_data'] = $_POST; // Store the form data in a session
        header("Location: display.php"); // Redirect to the display page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Please select a file to upload.";
}
?>
