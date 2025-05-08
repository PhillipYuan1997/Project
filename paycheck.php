<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
    $hours = $_POST['hours'];
    $rate = $_POST['rate'];

    // Calculate the salary
    $salary = $hours * $rate;

    // Display the result
    echo "<h2>Your Salary</h2>";
    echo "<p>Hours Worked: " . $hours . " hours</p>";
    echo "<p>Rate of Pay: $" . $rate . " per hour</p>";
    echo "<p><strong>Total Salary: $" . $salary . "</strong></p>";
}
?>
