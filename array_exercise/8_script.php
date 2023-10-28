<!-- Remove a specific number of your choice from the array and display the updated array. -->

<?php

$number = array(1,2,3,4,5,6,7,8,9,10);

echo "Before Remove Element Array : <br>";
print_r($number);

array_splice($number,1,2);

echo("<br> After Remove Element Array :");

print_r($number);

?>