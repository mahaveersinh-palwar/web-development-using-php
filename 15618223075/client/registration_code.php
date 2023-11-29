<?php

$re_id = $_POST['reg_id'];
$first_name = $_POST['f_name'];
$middle_name = $_POST['m_name'];
$last_name = $_POST['l_name'];
$email = $_POST['email'];
$mo_no = $_POST['mobile'];
$password = $_POST['password'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$e_qualification = $_POST['e_qualification'];
$gender = $_POST['gender'];

$connection = mysqli_connect("localhost","root","","15618223075");
$insert = "INSERT INTO `registration`( `first_name`, `middle_name`, `last_name`, `email`, `mobile`, `password`, `city`, `state`, `country`, `education_qualification`, `gender`) VALUES ('$first_name','$middle_name','$last_name','$email','$mo_no','$password','$city','$state','$country','$e_qualification','$gender')";

$query = mysqli_query($connection,$insert);

if($query == TRUE)
{
    echo "<script>alert('Data Insert Successfully');</script>";
    echo "<script>window.location='../client/data_display.php'</script>";
}  
else
{
	echo "<script>alert('Failed To Insert Data');</script>";
	echo "<script>window.location='client/registration_design.php'</script>";
}         

?>