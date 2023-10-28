<!-- Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function -->

<?php
    $student = array(array('id' => 101, 'name' => 'Veer', 'age' => 21 ),
                     array('id' => 201, 'name' => 'Dhaval', 'age' => 20 ),
                     array('id' => 301, 'name' => 'Yash', 'age' => 21 ),
                     array('id' => 401, 'name' => 'Mukesh', 'age' => 19 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>