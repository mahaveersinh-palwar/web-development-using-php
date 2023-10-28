<!-- Write a PHP script that removes duplicate values from an associative array using the array_unique() function. -->

<?php

$number = array(1,2,3,4,4,5,6,7,8,9);

$unique = (array_unique($number));

print_r($unique);

?>