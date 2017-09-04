<?php
include"connect.php";
if(isset($_REQUEST['submit']))
{
	$order = 	$_REQUEST['order'];
	$amount = 	$_REQUEST['amount'];
	/*$email = 	$_REQUEST['emailid'];
	$password = 	$_REQUEST['password'];*/
	$result=mysql_query("insert into orders set order='$order', amount='$amount'");
	if($result==true)
	{
		echo "<script>alert('user successfully added')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	
}
?>