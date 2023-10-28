<!-- Remove the email element from the associative array and display the updated array. -->

<?php

	$person = array(
          "Name" => "Mahaveersinh",
          "Age"  => 21,
          "Email" => "mahaveerrajput84@gmail.com"
);

    unset($person["Email"]);
    
    // Display the updated array
    
    echo "Updated Array :<br>";
    print_r($person);
?>