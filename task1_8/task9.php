<?php

// Program to change strings in an array to upper case

$colors = array("red","blue", "white","yellow");

// print array before conversion of string
// print"Array before string conversion:\n";
// print_r($input);

// Step 1: flip array key => value
$colors = array_flip($colors);

// Step 2: change case of new keys to upper
$colors = array_change_key_case($colors, CASE_UPPER);

// Step 3: reverse the flip process to
// regain strings as value
$colors = array_flip($colors);

// print array after conversion of string
echo "<pre>";
// print"\nArray after string conversion:";
print_r($colors);
echo "</pre>";

?>
