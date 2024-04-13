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
    // Your form data processing code here
    $f_name = $_POST['f_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    
    $passwor_d = $_POST['passwor_d'];
    $confirm_password = $_POST['confirm_password'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Upload image
        $imageDir = 'media/';
        $imageName = $_FILES['image']['name'];
        $imagePath = $imageDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            // Check if the user already exists
            $userCheckQuery = "SELECT COUNT(*) AS count FROM admin_add WHERE email = '$email'";
            $userCheckResult = mysqli_query($conn, $userCheckQuery);

            if ($userCheckResult) {
                $row = mysqli_fetch_assoc($userCheckResult);
                $userExists = $row['count'];

                if ($userExists > 0) {
                    // User already exists
                    echo '<script>';
                    echo 'alert("User with this email already exists. Please use a different email.");';
                    echo 'window.location.href = "adminlogin.php";'; // Redirect back to signup page
                    echo '</script>';
                } else {
                    // Insert data into the database
                    $query = "INSERT INTO admin_add (f_name, age, gender, email, mobile_number, passwor_d, confirm_password, image_path) VALUES ('$f_name', '$age',
                    '$gender', '$email', '$mobile_number',  '$passwor_d', '$confirm_password', '$imagePath')";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        // Account created successfully
                        echo '<script>';
                        echo 'alert("Your account has been created successfully.");';
                        echo 'window.location.href = "adminlogin.php";'; // Redirect to the login page
                        echo '</script>';
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                }
            } else {
                echo "Error in user check query: " . mysqli_error($conn);
            }
        }
    }
}
?>
