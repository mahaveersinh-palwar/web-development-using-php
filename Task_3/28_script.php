<!-- Develop a PHP script that sorts an array of integers in ascending order using the sort() function. -->

<?php

$number = array(10,50,20,55,15);

 sort($number);

foreach ($number as $n) 
{
	echo $n."<br>";
}

?>