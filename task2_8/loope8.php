<?php
$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
        $n = $n + 1;
    }
    echo "<br/>";
}
?>


