<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--css link-->
  <link rel="stylesheet" href="./assets/css/contact.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
   .navbar-nav.ml-auto li {
    margin-left: 20px;
}

.navbar-nav.ml-auto li a {
    color: black;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 10px 15px;
    text-decoration: none;
}

.navbar-nav.ml-auto li a:hover, .navbar-nav.ml-auto li a.active {
    color: #980000; /* Change color on hover and for active link */
}</style>
</head>

<body>
  <div class="preload">
    <img src="./assets/img/blooddrop.gif" alt="Loading">
  </div>
  <!--Navbar-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="./contactusfinal.php" class="logo">
                        <img src="./assets/img/rops (297 x 69 px).png" alt="" class="logo_img" >  
                    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
    <li><a href="./index.php">Home</a></li>

    <li><a href="./about.php">About Us</a></li>

    <li><a href="./faq.html">FAQ</a></li>

    <li><a href="./gallery.html">Gallery</a></li>

    <li><a href="#" class="active">Contact Us</a></li>

    <li><a href="./signup.php">Register</a></li>

    <li><a href="./login.php">Login</a></li>
</ul>

      </div>
    </nav>
  </header>
  <!--end of navbar-->
  <!--Quick links-->
  <div class="column">
    <div class="container1">
      <a href="#"> <img src="assets\img\blood contactus.jpg" alt="" class="photu"> </a>
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
            <span class="iocns" align="center" style="cursor:pointer;"><i class="fas fa-envelope"></i></span>
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
              As we have no full time employees, our team works from their respective homes / offices and we conduct our
              meetings/activities
              in the common areas in an office / college. Our corporate, college partners help us with these for free
              and we can do all our
              team meetings there. Our registered office is used to store all of our material and documents.
              You should reach out via this form, we can certainly take forward then.
            </p>
          </div>
        </li>
      </div>
    </ul>
  </div>
  <!--end of questions-->
</body>
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
    // Simulate a delay to show the preload screen (you can replace this with actual content loading logic)
    setTimeout(() => {
      preload.style.display = "none";
    }, 2500); // Adjust the delay time as needed
  });
</script>

</html>
<?php
if (isset($_SESSION['success']) && $_SESSION['success'] === true) {
  echo '<div id="success-message" class="success-message">Your data submitted successfully</div>';
  // Clear the session variable
  unset($_SESSION['success']);
}
