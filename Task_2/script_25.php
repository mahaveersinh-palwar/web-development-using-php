<!-- Script to swap 2 nos without using 3rd variable using arithmetic operators. -->
<?php 

$x = 5;
$y = 10;

echo "Before Swap X value Is :".$x;
echo "<br>";
echo "Before Swap Y value Is :".$y;
echo "<br>";
echo "<br>";

$x = $x + $y;
$y = $x - $y;
$x = $x - $y;

echo "After Swap X value Is :".$x;
echo "<br>";
echo "After Swap Y value Is :".$y;

?>