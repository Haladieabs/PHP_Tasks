<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return "yes it is palindrome";
  else
	  return "no it is not palindrome";
}
echo check_palindrome('eva')."\n";
?>
