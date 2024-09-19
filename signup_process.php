<?php
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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$address = $_POST['address'];

// Check if passwords match
if ($password !== $confirm_password) {
  echo "Passwords do not match.";
  exit();
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, date_of_birth, gender, address) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $first_name, $last_name, $email, $hashed_password, $date_of_birth, $gender, $address);

if ($stmt->execute()) {
  echo "New record created successfully. <a href='login.php'>Login here</a>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
