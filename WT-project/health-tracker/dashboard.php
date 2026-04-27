<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">🩺 HealthTracker</div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="view_data.php">My Data</a></li>
    </ul>
</nav>

<h2 style="text-align:center; margin-top:30px;">Dashboard</h2>

<!-- Card Layout -->
<div style="
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    margin-top:30px;
">

    <!-- Card 1 -->
    <a href="add_data.php" style="
        background:white;
        color:#333;
        width:200px;
        margin:15px;
        padding:25px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        text-decoration:none;
    ">
        ➕<br><br>
        Add Health Data
    </a>

    <!-- Card 2 -->
    <a href="view_data.php" style="
        background:white;
        color:#333;
        width:200px;
        margin:15px;
        padding:25px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        text-decoration:none;
    ">
        📊<br><br>
        View Data
    </a>

    <!-- Card 3 -->
    <a href="bmi.php" style="
        background:white;
        color:#333;
        width:200px;
        margin:15px;
        padding:25px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        text-decoration:none;
    ">
        ⚖️<br><br>
        BMI Calculator
    </a>

    <!-- Card 4 -->
    <a href="contact.php" style="
        background:white;
        color:#333;
        width:200px;
        margin:15px;
        padding:25px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        text-decoration:none;
    ">
        📩<br><br>
        Contact
    </a>

</div>

</body>
</html>