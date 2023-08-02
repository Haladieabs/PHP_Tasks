<!DOCTYPE html>
<html>
<body>
 
<?php  
$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year :this year is not a Leap Year.";    
}
?> 
 
</body>
</html>