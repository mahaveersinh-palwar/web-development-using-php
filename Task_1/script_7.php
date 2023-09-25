<!-- Write a PHP script to swap the values of two variables $x and $y using a temporary variable. Display the swapped values using the echo statement. -->

<?php

$x = 10;
$y = 20;
$temp;

echo "Before Swapping Value of X :".$x;
echo "<br>";
echo "Before Swapping Value of Y :".$y;
echo "<br>";
echo "<br>";

$temp = $x;
$x = $y;
$y = $temp;

echo "After Swapping Value of X :".$x;
echo "<br>";
echo "After Swapping Value of Y :".$y;

?>