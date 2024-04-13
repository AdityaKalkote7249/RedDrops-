<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bdm';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $f_name = $_POST['f_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $blood_group = $_POST['blood_group'];
    $district = $_POST['district'];
    $taluka = $_POST['taluka'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $passwor_d = $_POST['passwor_d'];
    $confirm_password = $_POST['confirm_password'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Upload image
        $imageDir = './assets/data/';
        $imageName = $_FILES['image']['name'];
        $imagePath = $imageDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            // Insert data into the database
            $query = "INSERT INTO sign_up (f_name, age, gender, email, mobile_number, blood_group, district,
        taluka, address, pincode, passwor_d, confirm_password, image_path) VALUES ('$f_name', '$age',
        '$gender', '$email', '$mobile_number', '$blood_group', '$district',
        '$taluka', '$address', '$pincode', '$passwor_d', '$confirm_password', '$imagePath')";
            $result = mysqli_query($conn, $query);
            $query = "SELECT COUNT(*) AS count FROM sign_up WHERE email = '$email'";

            if ($result) {
                // Display a JavaScript alert to the user
                echo '<script>';
                echo 'alert("User information and image uploaded successfully.");';
                echo 'window.location.href = "login.php";'; 
                echo '</script>';
            } else {
                echo "Error: " . mysqli_error($conn); 
            }
        }
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $userExists = $row['count'];
        
            if ($userExists > 0) {
                echo json_encode(['message' => 'User already exists']);
            } else {
                echo json_encode(['message' => 'User does not exist']);
            }
        } else {
            echo json_encode(['message' => 'Error in query']);
        }
        
    }
}
?>
