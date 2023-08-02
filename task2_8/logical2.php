<?php
function getSeason($temperature) {
    // Check if the temperature is below 20 to determine the season
    if ($temperature < 20) {
        return 'It is wintertime!';
    } else {
        return 'It is summertime!';
    }
}

// Sample Input
$temperature = 27;

// Get the season based on the temperature
$result = getSeason($temperature);

// Output the result
echo $result;
?>
