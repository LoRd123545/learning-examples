<?php
// Database configuration
$db_host = 'db';
$db_username = 'admin';
$db_password = 'password';
$db_name = 'users';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>