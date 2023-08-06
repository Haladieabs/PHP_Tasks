<?php
function swap($x,$y){
    echo "Before swap";
    echo"<br>";
    echo"x=$x";
    echo"<br>";
    echo"y=$y"; echo"<br>"; echo"<br>";
    
    $x = $x +$y;
    $y =$x - $y;
    $x =$x -$y;

    echo "after swap";
    echo"<br>";
    echo"x = $x";
    echo"<br>";
    echo"y=$y";
    echo"<br>";

}
swap(10,20);