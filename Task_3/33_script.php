<!-- Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function. -->

<?php 

$person = array(
   "Name" => "Mahaveersinh",
   "Age" => 21,
   "City" => "Amreli",
   "Country" => "india"
);

$KeyTocheck = "City";

if(array_key_exists($KeyTocheck, $person))
{
	echo "Key '$KeyTocheck' exists in the associative array.";
}
else
{
	echo "Key '$keyToCheck' does not exist in the associative array.";
}



?>