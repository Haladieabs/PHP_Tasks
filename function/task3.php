<?php
function lower(){
    $x='HALA';
    if(ctype_lower($x)){
        echo "this is in lower case";
    }
    else{
        echo "this is not in lower case";
    }
}
echo lower();

?>