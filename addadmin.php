<!DOCTYPE html>
<html>

<head>

  <title>User Sign Up</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="assets\css\addbloodbank.css" rel="stylesheet"></a>


</head>

<body>

  <body>
    <div class="center-div">
      <h1>Add admin here</h1>

    </div>
    <div class="container">
      <h2>Admin Sign Up</h2>
      <form id="signupForm" method="post" action="admininsert.php" enctype="multipart/form-data">
        <!-- Your form content here -->
        <a href="adminlogin.php" id="login-link" style="display: none;"></a>
        <table style="padding-top: 1%;
      padding-bottom: 1%;
      padding-left: 10%;
      padding-right: 0%; column-gap: 10%;">

          <tr>
            <td style="padding:3%;">

              <label for="name">Name:-</label>
              <input type="text" id="text-input" name="f_name" class="alpabet-input" required style="width: 96%;">
              <p id="text-error" style="color: #980000; "></p>
            </td>
            <td style="padding:3%;">
              <label for="age">Age:-</label>
              <input type="number" name="age" required style="width: 96%;" maxlength="2">

            </td>
          </tr>

          <tr>
            <td style="padding:3%;">
              <label for="gender">Gender:-</label>
              <select id="gender" name="gender" placeholder="blood-group" required style="width: 109%;">
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </td>
            <td style="padding:3%;">
              <label for="email">Email:-</label>
              <input type="email" id="email" name="email" required style="width: 96%;">
            </td>
          </tr>

          <tr>
            <td style="padding: 3%;">

              <label for="contact" class="label1">Contact:-</label>
              <input type="number" name="mobile_number" required style="width: 96%; height: 15px;" id="phone_number">
              <p id="phone-error" style="color: #980000; "></p>
            </td>


            <td style="padding:3%">
              <label for="image">Photo:-</label>
              <input type="file" id="image" name="image" acept="image/*">
            </td>
          </tr>



          <tr>
            <td style="padding:3%;">
              <label for="password">Password:-</label>
              <input type="password" id="password" name="passwor_d" required style="width: 105%; height: 30px;">
            </td>
            <td style="padding:3%;">
              <div class="form-group">
                <label for="confirm-password">Confirm Password:-</label>
                <input type="password" id="confirm-password" name="confirm_password" required
                  style="width: 105%; height: 30px;">
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;">
              <div class="error" id="password-error" style="color: #ff0000;"></div>
            </td>
          </tr>

        </table>
        <input type="submit" value="Add" class="btn">
        <input type="hidden" id="existingUserCheck" name="existingUserCheck" value="0">
      </form>
      <p style="text-align: center;">Already have an account? <a href="Login.php">Login</a></p>
    </div>

    <script>
      const PasswordInput = document.getElementById('password');
      const confirmPasswordInput = document.getElementById('confirm-password');
      const passwordError = document.getElementById('password-error');

      function validatePassword() {
        const Password = PasswordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (Password.length < 8 || !/\d/.test(Password) || !/[!@#$%^&*]/.test(Password)) {
          passwordError.textContent = 'Password must be 8 characters long and contain at least 1 number and 1 special symbol.';
        } else if (Password !== confirmPassword) {
          passwordError.textContent = 'Enter correct password in confirm password field.';
        } else {
          passwordError.textContent = '';
        }
      }

      PasswordInput.addEventListener('input', validatePassword);
      confirmPasswordInput.addEventListener('input', validatePassword);
    </script>


    <!--validation script of input fields-->

    <script>
      $(document).ready(function () {
        $("#signupForm").submit(function (event) {
          event.preventDefault(); // Prevent the form from submitting traditionally

          // Validation functions
          function validateText(input, errorElement) {
            const textValue = input.value;
            if (!/^[a-zA-Z\s]+$/.test(textValue)) {
              errorElement.textContent = 'Please enter only letters (and spaces) (no numbers or special characters).';
              return false; // Prevent form submission if validation fails
            } else {
              errorElement.textContent = '';
              return true; // Allow form submission if validation passes
            }
          }

          function validatePhoneNumber() {
            const phoneNumber = $("#phone_number").val();
            const cleanedPhoneNumber = phoneNumber.replace(/\D/g, '');

            if (cleanedPhoneNumber.length !== 10 || !/^\d{10}$/.test(cleanedPhoneNumber)) {
              $("#phone-error").text('Please enter a valid 10-digit phone number.');
              return false; // Prevent form submission if validation fails
            } else {
              $("#phone-error").text('');
              return true; // Allow form submission if validation passes
            }
          }

          // Perform validation
          const isTextValid = validateText(document.getElementById('text-input'), document.getElementById('text-error'));
          const isPhoneNumberValid = validatePhoneNumber();

          // Check if all validations pass before submitting
          if (isTextValid && isPhoneNumberValid) {
            // Submit the form
            this.submit(); // The form submission will proceed
          }
        });
      });
      // Add an event listener to check for an existing user when the email field changes
      document.getElementById('email').addEventListener('change', function () {
        const email = this.value;
        if (email) {
          checkExistingUser(email);
        }
      });

      $.ajax({
        type: 'POST',
        url: 'admininsert.php',
        data: formData,
        dataType: 'json',  // Expect JSON response
        success: function (response) {
          if (response.message === 'User already exists') {
            alert('You already have an account. Please log in.');
            // Clear the form
            document.getElementById('signupForm').reset();
          } else {
            // Submit the form
            document.getElementById('existingUserCheck').value = '0';
            document.getElementById('signupForm').submit();
          }
        },
        error: function (err) {
          console.error(err);
        }
      });
    </script>
    <!--End of all scripts-->
    </div>
  </body>

</html>