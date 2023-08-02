<?php
function checkSumEquals30($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber === 30;
}

// Sample Input
$firstNumber = 15;
$secondNumber = 16;

// Check if the sum equals 30 and output the result
if (checkSumEquals30($firstNumber, $secondNumber)) {
    echo "true";
} else {
    echo "false";
}
?>


