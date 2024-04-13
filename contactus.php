<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $mobileNumber = $_POST["mobileNumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $conn = mysqli_connect("localhost", "root", "", "bdm");
    if ($conn === false) {
        die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT INTO contactus (fname, mobileNumber, email, message) VALUES ('$fname', '$mobileNumber', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully

        // Redirect back to the form page with a success parameter
        $_SESSION['success'] = true;
    } else {
        // Handle the error, display specific error message
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
