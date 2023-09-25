<!-- Create a PHP script that calculates the sum of all numbers from 1 to 100 and displays the result. -->

<?php

$num = 0;

for($i = 0; $i <= 100; $i++)
{
    $num = $i + $num;
    
}
echo $num;
?>