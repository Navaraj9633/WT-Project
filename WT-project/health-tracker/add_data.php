<?php
session_start();
include 'db.php';

if(isset($_POST['submit'])){
    $uid = $_SESSION['user_id'];
    $water = $_POST['water'];
    $sleep = $_POST['sleep'];
    $exercise = $_POST['exercise'];
    $calories = $_POST['calories'];

    $query = "INSERT INTO health_data (user_id,water,sleep,exercise,calories,date)
              VALUES ('$uid','$water','$sleep','$exercise','$calories',CURDATE())";

    if(mysqli_query($conn, $query)){
        $success = "Data added successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Health Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">🩺 HealthTracker</div>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="view_data.php">View Data</a></li>
    </ul>
</nav>

<!-- Form Card -->
<form method="POST">
    <h2 style="text-align:center;">Add Health Data</h2>

    <?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <input type="number" name="water" placeholder="Water Intake (L)" required>
    <input type="number" step="0.1" name="sleep" placeholder="Sleep (hours)" required>
    <input type="number" name="exercise" placeholder="Exercise (minutes)" required>
    <input type="number" name="calories" placeholder="Calories" required>

    <button name="submit">Save Data</button>
</form>

</body>
</html>