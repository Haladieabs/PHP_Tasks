<?php
$emailid = 'info@orange.com';
$username = strstr($emailid, "@", true);
echo $username."\n"; 
?>