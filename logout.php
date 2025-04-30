
 <!-- code such that logout button shall appear on home page -->

<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

// Redirect to home page after logout
header("Location: index.php");
exit();
?>
