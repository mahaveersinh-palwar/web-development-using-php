<?php

$connection = mysqli_connect("localhost","root","","15618223075");

$select_query = "SELECT * FROM `registration`";

$execute_query = mysqli_query($connection,$select_query);

$count_record = mysqli_num_rows($execute_query);

echo "<table border=1 align='center'><tr><td>Id<td>First_Name</td><td>Middle_Name</td><td>Last_Name</td><td>Email</td><td>Mobile</td><td>City</td><td>State</td><td>Country</td><td>E_Qualification</td><td>Gender</td></tr>";

for($i=1; $i<=$count_record; $i++)
{
	$fetch_data = mysqli_fetch_row($execute_query);

	echo "<tr><td>$fetch_data[0]</td><td>$fetch_data[1]</td><td>$fetch_data[2]</td><td>$fetch_data[3]</td><td>$fetch_data[4]</td><td>$fetch_data[5]</td><td>$fetch_data[7]</td><td>$fetch_data[8]</td><td>$fetch_data[9]</td><td>$fetch_data[10]</td><td>$fetch_data[11]</td></tr>";
}

echo "</table>";
?>