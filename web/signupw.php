<?php
include"connect.php";
if(isset($_REQUEST['submit']))
{
	$name = 	$_REQUEST['name'];
	$phonenumber = 	$_REQUEST['phonenumber'];
	$email = 	$_REQUEST['emailid'];
	$password = 	$_REQUEST['password'];
	$result=mysql_query("insert into signupw set name='$name',phone_number='$phonenumber', email='$email',password='$password'");
	if($result==true)
	{
		echo "<script>alert('user successfully added')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	
}
?>