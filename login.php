<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="form-container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p>Forgot your password? <a href="#">Reset here</a></p>
    <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
  </div>
</body>

</html>