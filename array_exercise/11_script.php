<!-- Create two arrays, one with fruits and another with vegetables. Merge them into a single array. -->

<?php

$fruits = array("Apple","Kiwi","Graps","Banana");

$vegetables = array("potato", "onion", "garlic", "tomato");

$merge = array_merge($fruits,$vegetables);

print_r($merge);


?>