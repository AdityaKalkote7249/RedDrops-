<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Red Drop">
    <link rel="shortcut icon" href="./assets/img/favicon.png" />

    <!--Bootstrap and other Links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--Styles-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />

    <link rel="stylesheet" href="./assets/css/less/layout.less" />

<body>
    <div class="preload">
        <img src="./assets/img/blooddrop.gif" alt="Loading">
    </div>

    <!--Header-->

    <header class="header" id="home">
        <div class="nav">
            <div class="container">
                <div class="nav__blog">
                    <a href="#" class="logo">
                        <img src="./assets/img/rops (297 x 69 px).png" alt="" class="logo_img">
                    </a>
                    <ul class="nav__list">
                        <li><a href="./index.php" class="nav__link">Home</a></li>

                        <li><a href="./about.php" class="nav__link">About Us</a></li>

                        <li><a href="./faq.html" class="nav__link">FAQ</a></li>

                        <li><a href="./gallery.html" class="nav__link">Gallery</a></li>

                        <li><a href="./contactusfinal.php" class="nav__link">Contact Us</a></li>

                        <li><a href="./signup.html" class="nav__link">Register</a></li>

                        <li><a href="./login.html" class="nav__link">Login</a></li>

                    </ul>
                    <div class="menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="head__main">
            <div class="container">
                <div class="head__blog">
                    <h2 class="head__info"><span>Donor </span>The Wall Of Honor</h2>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / <a href="#"> About Us</a> / <a href="#"> FAQ </a> / <a href="index.php">
                            Gallery</a>
                    </p>
                    <h1 class="head__name">GALLERY</h1>
                </div>
            </div>
        </div>
    </header>


    <div class="column">
        <div class="container1">
            <a href="contactus.html"> <img src="assets\img\blood contactus.jpg" alt=""></a>
        </div>
        <div class="container2">
            <h1>Let's get in touch</h1>
            <p>We're open for any suggestion or just to have a chat.</p>
        </div>
    </div>
    <div class="touch">
        <h2>Get in touch</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address details">
                    <div class="topic">
                        <span class="iocns" style="cursor:pointer;"> <i class="fas fa-map-marker-alt"></i></span>
                        <h3 align="center">Address</h3>
                        <p align="center">BMCC
                            Shivajinagar,Pune</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="phone details">
                    <div class="topic">
                        <span class="iocns" style="cursor:pointer;"><i class="fas fa-phone-alt"></i></span>
                        <h3 align="center">Call Us At</h3>
                        <p align="center">+91 0000000000 <br>+91 1111111111</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="email details">
                    <div class="topic">
                        <span class="iocns" align="center" style="cursor:pointer;"><i
                                class="fas fa-envelope"></i></span>
                        <h3 align="center">Write Us At</h3>
                        <p align="center">reddrops@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of quick links-->
    <!--contact form-->
    <main>
        <div class="form">
            <h1 align="center">Reach out to us</h1>
            <form id="bloodBankForm" method="post" action="contactus.php">
                <div class="inputbox">
                    <input type="text" name="fname" id="fname" required>
                    <span>Full Name:-</span>
                    <p id="fname-error" style="color: #980000;" align="center"></p>
                </div>
                <div class="inputbox">
                    <input type="number" name="mobileNumber" id="mobileNumber" required>

                    <span>Mobile Number:-</span>
                    <p style="color: #980000; " id="mobileNumber-error" align="center"></p>
                </div>
                <div class="inputbox">
                    <input type="email" name="email" id="email" required>
                    <span>Email:-</span>
                </div>
                <div class="inputbox">
                    <textarea name="message" id="message" required></textarea>
                    <span>Message:-</span>
                    <p style="color: #980000; " id="message-error" align="center"></p>
                </div>
                <input type="submit" class="pop-button" value="submit"></button>
            </form>
        </div>

    </main>
    <!--end of form-->

    <!--Questions-->
    <div class="column1">
        <ul class="accordion">
            <div class="left">
                <li>
                    <input type="radio" name="accordion" id="first">
                    <label for="first">Where can you find FAQs about blood donation?</label>
                    <div class="content">
                        <p>
                            You will certainly find some of the FAQs on the page: Join Us→ Register As a Donor.
                            We have tried to cover the concerns there. For more, please do check the Resources tab.
                        </p>
                    </div>
                </li>
            </div>
            <div class="right">
                <li>
                    <input type="radio" name="accordion" id="second">
                    <label for="second">How can I help in this noble cause as a responsible citizen?</label>
                    <div class="content">
                        <p>
                            You can help in many ways -
                            1. Help us Organize a Camp in your College/Society/Company
                            2. Sponsor Us that would help us save more lives!
                            3. Register as an emergency donor
                            4. Join Our team

                            You can easily find links to all these options on our website.
                            In case of any issues, please Contact Us.
                        </p>
                    </div>
                </li>
            </div>
        </ul>
    </div>
    <div class="column2">
        <ul class="accordion">
            <div class="left1">
                <li>
                    <input type="radio" name="accordion" id="third">
                    <label for="third">How many employees does BloodConnect have?</label>
                    <div class="content">
                        <p>
                            Zero. We are completely volunteer driven and have no full time employees
                        </p>
                    </div>
                </li>
            </div>
            <div class="right1">
                <li>
                    <input type="radio" name="accordion" id="fourth">
                    <label for="fourth">Can I reach the BloodConnect office and help out?</label>
                    <div class="content">
                        <p>
                            As we have no full time employees, our team works from their respective homes / offices and
                            we conduct our
                            meetings/activities
                            in the common areas in an office / college. Our corporate, college partners help us with
                            these for free
                            and we can do all our
                            team meetings there. Our registered office is used to store all of our material and
                            documents.
                            You should reach out via this form, we can certainly take forward then.
                        </p>
                    </div>
                </li>
            </div>
        </ul>
    </div>
    <!--end of questions-->



    <!-- Footer -->
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2><b>Red Drops</b></h2>
                    <p class="text-justify">The Red Drops is a platform designed to connect blood donors with
                        individuals in need of blood transfusions. The purpose of this project is to streamline the
                        process of finding and requesting blood donations, making it easier for those in critical need
                        to locate compatible donors quickly..</p>
                </div>


                <div class="quick col-xs-6 col-md-3">
                    <h6><b>Quick Links</b></h6>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contactusfinal.php">Contact Us</a></li>
                        <li><a href="adminlogin.php">Admin</a></li>
                        <li><a href="login.php">SignUp/Login</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                        <a class="drops" href="#">Red Drops</a> | <a class="privacy" target="_blank"
                            href="Privacy_Policy.pdf">Privacy
                            Policy</a>
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="btn btn-m btn-danger square position-fixed bottom-0 end-0 translate-middle d-none"
            onclick="scrollToTop()" id="back-to-up"><i class="fas fa-chevron-up" style="color: #980000;"></i></a>
    </footer>
    <!-- Footer -->
    <!--Back To Top-->


    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/waypoints-sticky.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/jquery.stellar.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/custom-scripts.js"></script>
    <script>
        $(document).ready(function () {
            $("#bloodBankForm").submit(function (event) {
                event.preventDefault(); // Prevent the form from submitting traditionally
                // Validate input fields
                const fnameInput = document.getElementById('fname');
                const mobileNumberInput = document.getElementById('mobileNumber');
                const emailInput = document.getElementById('email');
                const messageInput = document.getElementById('message');
                const fnameError = document.getElementById('fname-error');
                const mobileNumberError = document.getElementById('mobileNumber-error');
                const emailError = document.getElementById('email-error');
                const messageError = document.getElementById('message-error');
                function validateText(input, errorElement) {
                    let textValue = input.value;
                    textValue = textValue.replace(/\s/g, '');
                    if (!/^[a-zA-Z]+$/.test(textValue)) {
                        errorElement.textContent = 'Please enter only letters (no numbers or special characters).';
                        return false; // Prevent form submission if validation fails
                    } else {
                        errorElement.textContent = '';
                        return true;
                    }
                }
                function validateMessage(textarea, errorElement) {
                    let textValue = textarea.value;
                    textValue = textValue.replace(/\s/g, '');
                    if (!/^[a-zA-Z]+$/.test(textValue)) {
                        errorElement.textContent = 'Please enter only letters (no numbers or special characters).';
                        return false; // Prevent form submission if validation fails
                    } else {
                        errorElement.textContent = '';
                        return true;
                    }
                }
                function validatePhoneNumber() {
                    const phoneNumber = mobileNumberInput.value;
                    const cleanedPhoneNumber = phoneNumber.replace(/\D/g, '');
                    if (cleanedPhoneNumber.length !== 10 || !/^\d{10}$/.test(cleanedPhoneNumber)) {
                        mobileNumberError.textContent = 'Please enter a valid 10-digit phone number.';
                        return false; // Prevent form submission if validation fails
                    } else {
                        mobileNumberError.textContent = '';
                        return true; // Allow form submission if validation passes
                    }
                }
                const isFnameValid = validateText(fnameInput, fnameError);
                const isPhoneNumberValid = validatePhoneNumber();
                const isMessageValid = validateMessage(messageInput, messageError);
                // You can add more validation for email and message fields here
                const isFormValid = isFnameValid && isPhoneNumberValid && isMessageValid; // Add other validation checks here
                if (isFormValid) {
                    // Get form data
                    const formData = $(this).serialize();
                    // Send the form data to the PHP script using AJAX
                    $.ajax({
                        type: "POST",
                        url: "contactus.php",
                        data: formData,
                        success: function (response) {
                            // Display a success message
                            $("#success-message").fadeIn().delay(2000).fadeOut(); // Show message for 2 seconds
                            alert("Your data submitted successfully");
                            // Clear the form
                            $("#bloodBankForm")[0].reset();
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            // Handle the error, display specific error message or log to console
                            console.error(jqXHR.responseText);
                            alert("An error occurred. Please try again later.");
                        },
                    });
                }
            });
        });
    </script>
    <script>
        // script.js
        window.addEventListener("load", function () {
            const preload = document.querySelector(".preload");
            const mainContent = document.querySelector(".content");
            // Simulate a delay to show the preload screen (you can replace this with actual content loading logic)
            setTimeout(() => {
                preload.style.display = "none";
                content.style.display = "block";
            }, 2500); // Adjust the delay time as needed
        });
    </script>
    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] === true) {
        echo '<div id="success-message" class="success-message">Your data submitted successfully</div>';
        // Clear the session variable
        unset($_SESSION['success']);
    }
    ?>







</body>

</html>