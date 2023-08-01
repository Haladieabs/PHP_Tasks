<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);

foreach($fruits as $x => $x_value) {
  echo "" . $x . "=" . $x_value;
  echo "<br>";
}




?>