<?php

function prime(){
    $x=10;
    if ($x%2==1) {
        return "the number is prime";
    }
    else {
        return "the number is not prime";
    }
};
echo  prime();