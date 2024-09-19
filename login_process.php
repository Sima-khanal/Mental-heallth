<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental_health_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
  $stmt->bind_result($hashed_password);
  $stmt->fetch();

  if (password_verify($password, $hashed_password)) {
    $_SESSION['email'] = $email;
    header("Location: dashboard.php"); // Redirect to dashboard or another page
  } else {
    echo "Invalid password.";
  }
} else {
  echo "No account found with that email.";
}

$stmt->close();
$conn->close();
