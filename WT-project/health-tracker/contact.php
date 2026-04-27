<?php
if(isset($_POST['send'])){
    $msg = $_POST['message'];
    $success = "Message sent: " . $msg;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">🩺 HealthTracker</div>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="index.php">Home</a></li>
    </ul>
</nav>

<!-- Contact Form -->
<form method="POST">
    <h2 style="text-align:center;">Contact Us</h2>

    <?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <textarea name="message" placeholder="Enter your message..." rows="5" required></textarea>

    <button name="send">Send Message</button>
</form>

</body>
</html>