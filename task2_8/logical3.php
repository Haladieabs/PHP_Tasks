<?php
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;

    // Check if the two values are the same
    if ($firstInteger === $secondInteger) {
        $tripleSum = $sum * 3;
        return "( $firstInteger + $secondInteger ) * 3 = $tripleSum <br>it is summertime ";
        
    } else {
        return "$firstInteger + $secondInteger = $sum <br>it is not" ;
        
    }
}





// Sample Input
$firstInteger = 2;
$secondInteger = 2;

// Calculate the sum and apply the triple sum condition if necessary
$result = calculateSum($firstInteger, $secondInteger);

// Output the result
echo $result;
?>
