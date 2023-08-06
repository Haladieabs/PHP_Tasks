<?php
function armstrong($num){
    $sl =strlen($num);
    $sum =0;
    $num = (string)$num;
    for ($i=0; $i < $sl; $i++) { 
        $sum =$sum + pow((int)$num[$i],$sl);
    }
        if ((int)$sum ==(int)$num) {
            return "True";
        }
            else{
                return "False";
            }
    }

echo armstrong(153);
echo "<br>";
echo armstrong(8);
echo "<br>";
echo armstrong(21);
?>