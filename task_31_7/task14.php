<?php
$sub_string = 'fox' ;
$str = 'The quick brown fox jumps over the lazy dog';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";
?>
