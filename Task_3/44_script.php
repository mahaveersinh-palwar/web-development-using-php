<!-- Write a PHP script to extract the values from an associative array using the array_values() function. -->

<?php
$student = array(
    "first_name" => "Mahaveersinh",
    "last_name" => "Palwar",
    "age" => 21,
);

$Values = array_values($student);

echo "Values from the associative array:<br>";

print_r($Values);

?>