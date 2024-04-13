<!--program for confirm information and destroying session-->
<?php
session_start();
if (isset($_POST['confirm'])) {
    // Destroy the session data
    unset($_SESSION['user_data']);
    echo "Session data has been destroyed.";
}
// Redirect the user to original form
header("Location: addbloodbankfinal.php");
exit();
?>