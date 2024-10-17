<?php
session_start();

// Include database connection
require_once 'db.php';

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Query database to find user
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Check if user exists
if (mysqli_num_rows($result) == 1) {
  $_SESSION['username'] = $username;
  header('Location: dashboard.php'); // Redirect to dashboard
  exit;
} else {
  echo 'Invalid username or password';
}
?>