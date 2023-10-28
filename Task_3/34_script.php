<!-- Develop a PHP script to check if a specific value exists in an array using the in_array() function. -->

<?php

$number = array(10,50,20,55,15);

$ValueToCheck = 50;

if(in_array($ValueToCheck, $number))
{
    echo "Value '$ValueToCheck' exists in the array.";
} 
else 
{
    echo "Value '$ValueToCheck' does not exist in the array.";
}

?>