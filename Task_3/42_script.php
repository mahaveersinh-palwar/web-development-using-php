<!-- Create a PHP script that finds the difference between two arrays using the array_diff() function.-->

<?php
$array1 = array(1,2,3,4,5);
$array2 = array(2,3,8,9,6);

$ary_diff = array_diff($array1, $array2);

print_r($ary_diff);
?>