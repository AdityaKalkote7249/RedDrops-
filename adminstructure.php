<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdm";

// Connecting to the database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Creating the table
$sql = "CREATE TABLE admin_add (
    id INT AUTO_INCREMENT PRIMARY KEY,
    f_name VARCHAR(50) NOT NULL,age INT(20)NOT NULL,gender VARCHAR(20)NOT NULL,email VARCHAR(50)NOT NULL,
    mobile_number INT(13)NOT NULL,passwor_d VARCHAR(10)NOT NULL,confirm_password INT(10)NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table is created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
