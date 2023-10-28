<!-- Write a PHP script to merge two arrays using the array_merge() function and display the combined result. -->

<?php

$color = array("Blue", "Red", "Green");

$number = array(1,2,3);

$mrg = array_merge($color, $number);

print_r($mrg);

?>