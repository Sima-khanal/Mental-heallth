<!-- navbar.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mental Health Tracker</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <nav>
    <div class="nav-container">
      <a href="index.php" class="logo">Mental Health Tracker</a>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <span id="date"></span>
    </div>
  </nav>
  <script>
    // Display current date
    document.getElementById('date').innerText = new Date().toLocaleDateString();
  </script>
</body>

</html>