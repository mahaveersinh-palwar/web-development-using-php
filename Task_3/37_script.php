<!-- Develop a PHP script that uses the array_push() function to add elements to an array and the array_pop() function to remove elements from the end. -->

<?php 

$color = array("Blue","Red","Green");

array_push($color, "Yellow");

print_r($color);

echo " <br> After Remove Element <br>";

array_pop($color);

print_r($color);

?>