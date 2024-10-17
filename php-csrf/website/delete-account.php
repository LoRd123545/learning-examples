<?php
// Start session
session_start();

// Get username from form submission
$username = $_SESSION['username'];

// Connect to database
require_once 'db.php';

// Delete user from database
$query = "DELETE FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check if deletion was successful
if ($result) {
  // Destroy session and redirect to login page
  session_destroy();
  header('Location: index.php');
  exit;
} else {
  // Display error message
  echo 'Error deleting account: ' . mysqli_error($conn);
}
?>