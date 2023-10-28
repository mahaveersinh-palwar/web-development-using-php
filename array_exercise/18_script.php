<!-- Remove a city of your choice from the array and display the updated list. -->

<?php

    $cities = array("Amreli","Ahemdabad","Gandhinagar","Bhuj","Junagadh");

    print_r($cities);
    echo "<br><br>";


     array_splice($cities, 2 , 1);  
    
     echo " After remove a city  and display : ";

   

    print_r($cities);
?>