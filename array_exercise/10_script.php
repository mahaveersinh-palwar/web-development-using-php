<!-- Sort the array from question 9 in reverse alphabetical order. -->

<?php

	$color = array("Red","Green","Yellow");

	echo "Before Reverse Short Array :";
	print_r($color);

	rsort($color);

	echo "<br>After Reverse Short Array :";
	print_r($color);

?>