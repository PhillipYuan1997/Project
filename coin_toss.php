<?php
// Initialize the counters for heads and tails
$heads = 0;
$tails = 0;

// Simulate tossing the coin 100 times
for ($i = 1; $i <= 100; $i++) {
    // Generate a random number, 0 or 1, where 0 represents heads and 1 represents tails
    $toss = rand(0, 1);

    // Count the heads or tails based on the random number
    if ($toss == 0) {
        $heads++;  // Heads
    } else {
        $tails++;  // Tails
    }
}

// Display the results
echo "<h2>Coin Toss Results</h2>";
echo "<p>Heads: " . $heads . " times</p>";
echo "<p>Tails: " . $tails . " times</p>";
?>
