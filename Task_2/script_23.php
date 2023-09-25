<!-- Script to determine the largest among three numbers and display the result. -->
<?php 

 $a = 600;
 $b = 500;
 $c = 100;

if ($a > $b) 
{
	echo $a."Number Is largest";
}
elseif($b > $c) 
{
	echo $b."Number Is largest";
}

elseif($c > $a) 
{
	echo $c."Number Is largest";
}
?>