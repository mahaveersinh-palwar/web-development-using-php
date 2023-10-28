<!-- Develop a PHP script to remove and replace elements from an array using the array_splice() function. -->
<?php

$number = array(1,3,4,5,6,7);

$a = array_splice($number,0);

print_r($a);

?>