<?php

$connection = mysqli_connect("localhost","root","","15618223075");

$select_query = "select * from add_product";

$execute = mysqli_query($connection,$select_query);

$count = mysqli_num_rows($execute);

echo"<form action='delete_record.php' method='post'>";
echo "<table border=1><tr><td>Id</td><td>Name</td><td>Description</td><td>Category</td><td>Price</td><td>SKU</td><td>Barcode</td><td>Weight</td><td>Dimensions</td><td>Quantity</td><td>Variants</td><td>Shipping_Info</td><td>SEO_Info</td><td>Brand</td><td>Features</td><td>Benefits</td><td>Related Product</td><td>Reviews</td><td>Create_at</td><td>Image</td>
<td>Delete</td></tr>";


for($i=1;$i<=$count;$i++)
{
	$fetch = mysqli_fetch_row($execute);

	echo"<tr><td>$fetch[0]</td><td>$fetch[1]</td><td>$fetch[2]</td><td>$fetch[3]</td><td>$fetch[4]</td><td>$fetch[5]</td><td>$fetch[6]</td><td>$fetch[7]</td><td>$fetch[8]</td><td>$fetch[9]</td><td>$fetch[10]</td><td>$fetch[11]</td><td>$fetch[12]</td><td>$fetch[13]</td><td>$fetch[14]</td><td>$fetch[15]</td><td>$fetch[16]</td><td>$fetch[17]</td><td>$fetch[18]</td><td><img src=$fetch[19]></td>
	<td><input type='checkbox' name='delete_record[]' value='$fetch[0]'></td></tr>";
}

echo"</table>";
echo"<input type='submit' name='submit'>";
echo"</form>";
?>