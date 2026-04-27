<?php
session_start();
include 'db.php';

$uid = $_SESSION['user_id'];

$query = "SELECT * FROM health_data WHERE user_id='$uid'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Health Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">🩺 HealthTracker</div>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="add_data.php">Add Data</a></li>
    </ul>
</nav>

<h2 style="text-align:center; margin-top:30px;">My Health Data</h2>

<div style="display:flex; flex-wrap:wrap; justify-content:center;">

<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <div style="
        background:white;
        padding:20px;
        margin:15px;
        border-radius:10px;
        width:250px;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        color:#333;
    ">
        <p><b>💧 Water:</b> <?php echo $row['water']; ?> L</p>
        <p><b>😴 Sleep:</b> <?php echo $row['sleep']; ?> hrs</p>
        <p><b>🏃 Exercise:</b> <?php echo $row['exercise']; ?> mins</p>
        <p><b>🔥 Calories:</b> <?php echo $row['calories']; ?></p>
    </div>
<?php
}
?>

</div>

</body>
</html>