<?php
// Start session
session_start();

// Destroy previous session if exists
session_unset();
session_destroy();

// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swadghar.com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass_word = $_POST["pass_word"];

    // SQL to select user
    $sql = "SELECT * FROM user_sign_up WHERE email = '$email'";

    // Execute query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        if ($row["pass_word"] === $pass_word) {
            // Password is correct, start session and redirect
            $_SESSION['user_data'] = $row;
            header("Location: profile.php");
            exit();
        } else {
            // Password is incorrect, show error message in popup
            echo "<script>alert('Incorrect password!');</script>";
        }
    } else {
        // User not found, show error message in popup
        echo "<script>alert('Credentials are not correct!');</script>";
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* CSS code for styling the login page */
        body {
            font-family: Arial, sans-serif;
            background-color: #980000;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center; 
            align-items: center; 
            height: 90vh; 
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Dosis', sans-serif;
            font-weight: bold;
        }

        label {
           display: flex;
            margin-bottom: 10px;
            font-family: 'Dosis', sans-serif;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn {
            display: block;
            width: 11%;
            padding: 5px;
            margin-top: -39px;
            margin-left: 370px;
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

        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            margin-left: 10px;
            background-color: #980000;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border: #fff 2px solid;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 6px;
        }

        .captcha-image {
            padding-top: 3%;
            padding-bottom: 0%;
            text-align: center;
            padding-right: 0%;
            background-color: #ccc;
            margin-top: 10px;
        }

        .capcode {
            font-size: 21px;
        }

        .captcha-container input {
            width: 97.5%;
            height: 10px;
            background-color: #fff;
        }

        .center-div {
            /* Style for the center div */
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          
        }
    </style>
</head>

<body>
   
    <div class="container">
        <h2>User Login</h2>
        <form method="POST" action="">
            <!-- Note: Added 'method' and 'action' attributes to the form -->
            <label for="email">Email:-</label>
            <input type="email" id="email" name="email" required style="width: 100%; height: 30px;"
                placeholder="user@gmail.com">

            <label for="password" style="padding-top: 10px;">Password:-</label>
            <input type="password" id="password" name="passwor_d" class="password" required style="width: 97%; height: 17px;"
                placeholder="1**8**12">
            

            <div class="captcha-container">
                <div class="captcha-image">
                    <!-- Generate and display CAPTCHA code here -->
                    <span id="captcha-code" class="capcode">ABCD</span>
                </div>
                <button class="btn" type="button" onclick="refreshCaptcha()" style="font-size:24px"><i
                        class="fa fa-refresh"></i></button>
                <br>
                <input type="text" id="user-input" class="captcha" placeholder="Enter CAPTCHA code">
            </div>

            <input type="submit" value="Login" style="font-family: 'Dosis', sans-serif; font-weight: bold;"
                class="submit-button">
        </form>
        <p style=" text-align: center; padding-left: 20px; font-family: 'Dosis', sans-serif; font-weight: bold;">Don't
            have an account?<a href="signup.php">Sign up</a></p>
    </div>
</body>

<script>
    // JavaScript for refreshing CAPTCHA
    function refreshCaptcha() {
        // Generate a new CAPTCHA code
        var captchaCode = generateCaptchaCode();

        // Update the CAPTCHA code in the HTML
        document.getElementById("captcha-code").innerText = captchaCode;
    }

    // JavaScript for verifying CAPTCHA
    function verifyCaptcha() {
        // Get the user input
        var userInput = document.getElementById("user-input").value;

        // Get the CAPTCHA code from the HTML
        var captchaCode = document.getElementById("captcha-code").innerText;

        // Compare the user input with the CAPTCHA code
        if (userInput === captchaCode) {
            alert("CAPTCHA verification successful!");
        } else {
            alert("CAPTCHA verification failed!");
        }
    }

    // Function to generate a random CAPTCHA code
    function generateCaptchaCode() {
        var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        var captchaCode = "";

        for (var i = 0; i < 4; i++) {
            var randomIndex = Math.floor(Math.random() * characters.length);
            captchaCode += characters.charAt(randomIndex);
        }

        return captchaCode;
    }

    // Generate the initial CAPTCHA code on page load
    window.onload = function () {
        refreshCaptcha();
    };
</script>

</html>
