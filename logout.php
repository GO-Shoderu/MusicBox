<?php include './config.php' ?>

<?php
  // Check if session variable was previously set
  $loggedIn=isset($_SESSION["status"]);
  // Remove a single session variable
  if($loggedIn) unset($_SESSION["status"]);
  // Remove all session variables
  session_unset();
  // Destroy the session, its ID and corresponding file
  session_destroy();

  header("Location: index.php");
?>
