<?php
include 'db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (name,email,password)
              VALUES ('$name','$email','$password')";
    
    if(mysqli_query($conn, $query)){
        $success = "Registered Successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">🩺 HealthTracker</div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<!-- Register Form -->
<form method="POST">
    <h2 style="text-align:center;">Register</h2>

    <?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button name="submit">Register</button>

    <p style="text-align:center; margin-top:10px;">
        Already have an account? <a href="login.php">Login</a>
    </p>
</form>

</body>
</html>