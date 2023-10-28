 <!-- Develop a PHP script to extract the keys from an associative array using the array_keys() function. -->

<?php

$student = array(
    "first_name" => "Mahaveersinh",
    "last_name" => "Palwar",
    "age" => 21,
);

$keys = array_keys($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>