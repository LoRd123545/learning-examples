<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to login page if not logged in
  header('Location: index.php');
  exit;
}

// Rest of dashboard code here...
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  <?php
  // Include database connection
  require_once 'db.php';

  // Query database to retrieve all users
  $query = "SELECT * FROM users";
  $result = mysqli_query($conn, $query);

  // Check if query was successful
  if ($result) {
    // Display all users
    while ($row = mysqli_fetch_assoc($result)) {
      echo "Username: " . $row['username'] . "<br>";
      echo "Password: " . $row['password'] . "<br><br>";
    }
  } else {
    echo "Error retrieving users: " . mysqli_error($conn);
  }
  ?>
  <button><a href="logout.php">Logout</a></button>
  <button><a href="delete-account.php">delete account</a></button>
</body>

</html>