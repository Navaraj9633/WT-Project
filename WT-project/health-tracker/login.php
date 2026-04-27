<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];

        header("Location: dashboard.php");
    } else {
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">🩺 HealthTracker</div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
</nav>

<!-- Login Form -->
<form method="POST">
    <h2 style="text-align:center;">Login</h2>

    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button name="login">Login</button>

    <p style="text-align:center; margin-top:10px;">
        Don't have an account? <a href="register.php">Register</a>
    </p>
</form>

</body>
</html>