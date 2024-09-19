<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="dashboard-container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h1>
    <section class="metrics">
      <h2>Your Mental Health Metrics</h2>
      <div class="metric">
        <h3>Mood Tracker</h3>
        <!-- Placeholder for mood tracker chart -->
        <div id="mood-chart">Mood Chart Here</div>
      </div>
      <div class="metric">
        <h3>Stress Level</h3>
        <!-- Placeholder for stress level chart -->
        <div id="stress-chart">Stress Chart Here</div>
      </div>
      <div class="metric">
        <h3>Sleep Patterns</h3>
        <!-- Placeholder for sleep patterns chart -->
        <div id="sleep-chart">Sleep Chart Here</div>
      </div>
    </section>
    <section class="recent-activities">
      <h2>Recent Activities</h2>
      <ul>
        <!-- Placeholder for recent activities -->
        <li>Activity 1</li>
        <li>Activity 2</li>
        <li>Activity 3</li>
      </ul>
    </section>
    <section class="suggestions">
      <h2>Personalized Suggestions</h2>
      <p>Tip: Remember to take a few minutes for yourself every day!</p>
    </section>
  </div>
</body>

</html>