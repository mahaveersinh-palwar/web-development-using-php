<!-- Create a PHP script that removes duplicate values from an array using the array_unique() function. -->

<?php

$number = array(1,2,3,4,1,5,1,5);

$a = array_unique($number);

print_r($a);
?>