<!-- Script to find the factorial of a given number and display the result. -->

<?php

$num= 3;
$f =1;

for ($i=1; $i <= $num ; $i++) 
{ 
	$f = $f * $i;
}

echo $f;

?>