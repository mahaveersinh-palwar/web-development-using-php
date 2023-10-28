<!-- Develop a PHP script that searches for a specific element in an array using the array_search() function and displays the index if found. -->

<?php

$search = 5;

$number = array(1,2,3,4,5,6,7);

$a = array_search($search, $number);

echo "Search Elemrnt's Index Number Is : ".$a;



?>