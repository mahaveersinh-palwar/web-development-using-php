<!-- Create a PHP script to check if a given year is a leap year and display the result.--> 

<?php 
$leap = 2020;

if($leap%4 == 0)
{
    echo "leap year:".$leap;
}
else
{
    echo "Not Leap Year:".$leap;
}



?>