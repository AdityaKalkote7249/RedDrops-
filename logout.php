<!DOCTYPE html>
<html>

<head>
  <title>Logout Tab</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png" />
  <style>
    .logout-tab {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      z-index: 9999;
    }

    .blur-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(5px);
      z-index: 9998;
    }

    button {
      width: 49%;
      padding: 10px;
      background-color: #980000;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <button onclick="showLogoutTab()">Logout</button>

  <div id="logoutTab" class="logout-tab">
    <h2 style="text-align: center;">Confirm Logout</h2>
    <p>Are you sure you want to logout?</p>
    <button onclick="logout()">Yes</button>
    <button onclick="hideLogoutTab()">No</button>
  </div>

  <div id="blurBackground" class="blur-background"></div>

  <script>
    function showLogoutTab() {
      document.getElementById("logoutTab").style.display = "block";
      document.getElementById("blurBackground").style.display = "block";
    }

    function hideLogoutTab() {
      document.getElementById("logoutTab").style.display = "none";
      document.getElementById("blurBackground").style.display = "none";
    }

    function logout() {
      // Perform logout functionality here
      alert("You have been logged out!");
    }
  </script>
</body>

</html>
<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: index.php");
exit();
?>