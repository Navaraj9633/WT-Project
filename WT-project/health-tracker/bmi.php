<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
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

<!-- BMI Card -->
<form onsubmit="return false;">
    <h2 style="text-align:center;">BMI Calculator</h2>

    <input type="number" id="weight" placeholder="Weight (kg)" required>
    <input type="number" id="height" placeholder="Height (cm)" step="0.01" required>

    <button onclick="calc()">Calculate</button>

    <p id="result" style="text-align:center; margin-top:10px;"></p>
</form>

<script>
function calc(){
  let w = document.getElementById("weight").value;
  let h = document.getElementById("height").value;

  // convert cm → meters
  let heightInMeters = h / 100;

  let bmi = w / (heightInMeters * heightInMeters);

  document.getElementById("result").innerText = "Your BMI: " + bmi.toFixed(2);
}
</script>

</body>
</html>