<?php
include"connect.php";
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
	$name = 	$_REQUEST['name'];
	$phonenumber = 	$_REQUEST['phonenumber'];
	$email = 	$_REQUEST['email'];
	/*$password = 	$_REQUEST['password'];*/
	$result=mysql_query("update signupw set name='$name', email='$email',phone_number='$phonenumber' WHERE user_id = '$id'");
	if($result==true)
	{
		echo "<script>alert('user updated')</script>";
		echo "<script>window.location.href='settings.php'</script>";
	}
	
}
?>