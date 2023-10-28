<!-- Check if the color "Green" exists in the array from question 1. -->

<?php

$color = array("Blue","Red","Green","Yellow","Orange");

//$check = array_search($color, "Green");

if(array_search("Green",$color))
{
	echo "Green Color Exists";
}
else
{
	echo "Green Color Does Not Exists";
}

?>