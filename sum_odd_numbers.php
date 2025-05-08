<?php
// Initialize the sum variable to 0
$sum = 0;

// Loop through all numbers from 1 to 75
for ($i = 1; $i <= 75; $i++) {
    // Check if the number is odd
    if ($i % 2 != 0) {
        // Add the odd number to the sum
        $sum += $i;
    }
}

// Display the sum of all odd numbers
echo "<h2>Sum of Odd Numbers from 1 to 75</h2>";
echo "<p>The sum is: " . $sum . "</p>";
?>
