
<?php
    $execute_query = $_POST['delete_record'];
    $connection=mysqli_connect("localhost","root","","15618223075");

    foreach($execute_query as $myquery){
        $query="DELETE FROM `add_product`  where product_id='$myquery'";
        $execute_query=mysqli_query($connection,$query);
    }
    
    if($query == TRUE)
{
    echo "<script>alert('Data Delete Successfully');</script>";
    echo "<script>window.location='../admin/product_view.php'</script>";
}  
else
{
	echo "<script>alert('Failed To Delete Data');</script>";
	echo "<script>window.location='../admin/product_view.php'</script>";
}         

?>