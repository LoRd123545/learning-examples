<?php
// Include database connection
require_once './db.php';

// Get registration form data
$username = $_POST['username'];
$password = $_POST['password'];

// Insert new user into database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);

// Check if user was inserted successfully
if ($result) {
  header('Location: index.php');
  exit;
} else {
  echo 'Error registering user: ' . mysqli_error($conn);
}
?>