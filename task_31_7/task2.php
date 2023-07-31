<?php
$str1= '0823075128723554'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>
