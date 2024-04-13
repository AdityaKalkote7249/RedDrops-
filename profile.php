<?php
session_start();

if (!isset($_SESSION['user_data'])) {
    header("Location: login.php");
    exit();
}

// Add your database connection code here to fetch user information
// Replace these lines with your database query
$userEmail = $_SESSION['user_data']['email'];
$userInfo = getUserInfoByEmail($userEmail);

// Function to get user information from the database
function getUserInfoByEmail($email)
{
    // Add your database query logic here
    // Query the database and return user information as an associative array
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "bdm"; // Replace with your MySQL database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example query to retrieve user information including image path
    $sql = "SELECT f_name, age, gender, email, mobile_number, blood_group, district, taluka, address, pincode, passwor_d,confirm_password, image_path FROM sign_up WHERE email = '$email'";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user information as an associative array
        $userInfo = $result->fetch_assoc();
    } else {
        // Handle the case when the user is not found
        $userInfo = null;
    }

    // Close the database connection
    $conn->close();

    return $userInfo;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Font-Awesome/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--css link-->
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* Add CSS to style the square user image */

        .user-image {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            /* Make the image square with rounded corners */
            object-fit: cover;
            /* Ensure the image covers the entire square */
        }

        .profile {
            background-color: #980000;
            width: 100%;
            height: 80px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
        }

        h1 {
            color: white;
            font-size: 50px;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            text-decoration: underline;
            text-align: center;
        }

        /* Hide user information by default */
        .user-info {
            display: block;

        }

        .image {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .image-button {
            margin-top: 50px;
            margin-left: 20px;
            background-color: white;
            border: none;
            border-radius: 2px;
        }

        .personal-button {
            background-color: #980000;
            border: none;
            border-radius: 2px;
        }

        /* Add some spacing between the information sections */
        .column {
            height: 335px;
            width: 100%;
            background-color: #980000;
            overflow: hidden;

        }


        .left {
            float: left;
            margin: 0 auto;
            width: 50%;

            border-radius: 10px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .left1 {
            float: left;
        }

        .right1 {
            float: left;
            width: 25%;
        }

        .right {
            float: left;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        /* Style for the edit forms */
        .edit-form {
            display: none;
            border: 1px solid #ccc;
            padding: 20px;
        }

        .container1 {
            display: none;
            border: 1px solid #ccc;
            padding: 10px;
            margin-left: 40px;
            float: right;
            width: 33%;
            background-color: white;
            border-radius: 5px;

        }

        .container2 {
            display: none;
            border: 1px solid #ccc;
            padding: 10px;
            float: right;
            width: 33%;
            background-color: white;
            margin-left: 50px;
            border-radius: 5px;
        }


        /* Style for the edit buttons */
        .edit-button {
            background-color: #0074d9;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Style for the image upload form */
        .image-upload-form {
            display: none;
            border: 2px solid #980000;
            border-radius: 5px;

            padding: 10px;
            margin-top: 10px;
            background-color: white;
        }

        /* Style for the image upload button */
        .image-upload-button {
            background-color: #0074d9;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        p {
            color: white;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            font-size: 20px;
        }

        h2 {
            color: white;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            font-size: 40px;
        }

        .column2 {
            background-color: #980000;
            width: 100%;
            height: 340px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;

        }


        .container3 {
            width: 17%;
            display: none;
            background-color: white;
            float: left;
            margin-left: 50px;
            padding: 10px;
            border-radius: 5px;
        }

        label {
            color: #980000;
            font-family: 'Dosis', sans-serif;
            font-size: 20px;
            font-weight: 500;
        }

        input {
            border: none;
            border-bottom: 1px solid #980000;
            padding: -5px;
        }

        .edit {
            padding: 5px;
            margin-top: 5px;
            background-color: #980000;
            border: none;
            border-radius: 5px;
            color: white;
            font-family: 20px;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;

        }
        #showUserInfoButton{
            display: none;
        }

        .user-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -16px;
        }

        .user-image {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid white;
            /* White border for the image */
            margin-top: 21px;
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="./index.php" class="logo">
                        <img src="./assets/img/rops (297 x 69 px).png" alt="" class="logo_img" >  
                    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-dark" href="./index.php">Back to home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="./logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <!--div for image-->
    <?php if ($userInfo): ?>
        <div class="user-info">
            <div class="user-image-container">
                <img src="<?php echo $userInfo['image_path']; ?>" alt="User Image" class="user-image">
                <button class="image-button" id="editImageInfoButton"><i class='fas fa-pen'
                        style='font-size:20px;color:#980000'></i></button>
                <div class="image-upload-form" id="editImageInfoForm">
                    <form method="post" action="updateall.php" enctype="multipart/form-data">
                        <label for="image">Select New Image:</label>
                        <input type="file" id="image" name="image">
                        <button type="submit" class="edit">Upload</button>
                    </form>
                </div>
            </div>
                <!-- Div for Name, Age, Gender, and Blood Group -->

                <div class="column">
                    <div class="left">
                        <div class="left1">

                            <h2>Personal <br> Credentials:-</h2>
                            <p>Name:
                                <?php echo $userInfo['f_name']; ?>
                            </p>
                            <p>Age:
                                <?php echo $userInfo['age']; ?>
                            </p>
                            <p>Gender:
                                <?php echo $userInfo['gender']; ?>
                            </p>
                            <p>Blood Group:
                                <?php echo $userInfo['blood_group']; ?>
                            </p>


                            <button class="personal-button" id="editBasicInfoButton"><i class='fas fa-pen'
                                    style='font-size:20px;color:white'></i></button>

                        </div>

                        <div class="container1" id="editBasicInfoForm">

                            <form method="post" action="updateall.php">

                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="<?php echo $userInfo['f_name']; ?>">
                                <label for="age">Age:</label>
                                <input type="number" id="age" name="age" value="<?php echo $userInfo['age']; ?>">
                                <label for="age">Gender:</label>
                                <input type="text" id="gender" name="gender" value="<?php echo $userInfo['gender']; ?>">
                                <label for="bloodgroup">Blood Group:</label>
                                <input type="text" id="blood_group" name="blood_group"
                                    value="<?php echo $userInfo['blood_group']; ?>">


                                <button type="submit" class="edit">Update</button>
                            </form>
                        </div>
                    </div>

                    <!-- Div for Email and Password -->
                    <div class="right">
                        <div class="right1">
                            <h2>Login Credentials:-</h2>
                            <p>Email:
                                <?php echo $userInfo['email']; ?>
                            </p>
                            <p>Password:
                                <?php echo $userInfo['passwor_d']; ?>
                            </p>


                            <button class="personal-button" id="editEmailPasswordButton"><i class='fas fa-pen'
                                    style='font-size:20px;color:white'></i></button>

                        </div>

                        <div class="container2" id="editEmailPasswordForm">

                            <form method="post" action="updateall.php">

                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="<?php echo $userInfo['email']; ?>">
                                <label for="password">Password:</label>
                                <input type="passwor_d" id="passwor_d" name="passwor_d"
                                    value="<?php echo $userInfo['passwor_d']; ?>">

                                <button type="submit" class="edit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column2">
                    <div class="left3">
                        <h2>Contact <br> Credentials:-</h2>
                        <p>Mobile Number:
                            <?php echo $userInfo['mobile_number']; ?>
                        </p>

                        <p>Address:
                            <?php echo $userInfo['address']; ?>
                        </p>

                        <p>Taluka:
                            <?php echo $userInfo['taluka']; ?>
                        </p>

                        <p>District:
                            <?php echo $userInfo['district']; ?>
                        </p>



                        <button class="personal-button" id="editContactInfoButton"><i class='fas fa-pen'
                                style='font-size:20px;color:white'></i></button>

                    </div>

                    <div class="container3" id="editContactInfoForm">

                        <form method="post" action="updateall.php">

                            <label for="mobile_number">Mobile Number:</label>
                            <input type="text" id="mobile_number" name="mobile_number"
                                value="<?php echo $userInfo['mobile_number']; ?>">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" value="<?php echo $userInfo['address']; ?>">
                            <label for="taluka">Taluka:</label>
                            <input type="text" id="taluka" name="taluka" value="<?php echo $userInfo['taluka']; ?>">
                            <label for="district">District:</label>
                            <input type="text" id="district" name="district" value="<?php echo $userInfo['district']; ?>">

                            <button type="submit" class="edit">Update</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
      <!-- Add this HTML code at the end of your HTML body, after the </div> that closes the user-info section -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="popup-message">Your data is updated.</p>
    </div>
</div>

    <?php else: ?>
        <p>User information not found.</p>
    <?php endif; ?>


    <script>
        // JavaScript to toggle the visibility of user information and hide the button
        document.getElementById('showUserInfoButton').addEventListener('click', function () {
            var userInfoDiv = document.querySelector('.user-info');
            var showUserInfoButton = document.getElementById('showUserInfoButton');

            userInfoDiv.style.display = 'block';
            showUserInfoButton.style.display = 'none';
        });

        // JavaScript to toggle the visibility of edit forms
        document.getElementById('editBasicInfoButton').addEventListener('click', function () {
            var editForm = document.getElementById('editBasicInfoForm');
            editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';
        });

        document.getElementById('editEmailPasswordButton').addEventListener('click', function () {
            var editForm = document.getElementById('editEmailPasswordForm');
            editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';
        });

        document.getElementById('editContactInfoButton').addEventListener('click', function () {
            var editForm = document.getElementById('editContactInfoForm');
            editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';
        });

        // JavaScript to toggle the visibility of the image upload form
        document.getElementById('editImageInfoButton').addEventListener('click', function () {
            var editForm = document.getElementById('editImageInfoForm');
            editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';
        });
    </script>
    
<!-- Add this JavaScript code at the end of your HTML body -->
<script>
    function showPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'block';
    }

    // Check if the image update session variable is set
    <?php if (isset($_SESSION['image_updated']) && $_SESSION['image_updated'] === true): ?>
    showPopup();
    <?php
    // Reset the session variable
    $_SESSION['image_updated'] = false;
    endif;
    ?>
</script>


</body>

</html>