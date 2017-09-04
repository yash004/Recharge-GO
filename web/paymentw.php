<?php
include"connect.php";
if(isset($_REQUEST['submit']))
{
	$card = 	$_REQUEST['debit'];
	$date = 	$_REQUEST['date'];
	/*$email = 	$_REQUEST['emailid'];
	$password = 	$_REQUEST['password'];*/
	$result=mysql_query("insert into debit_card set debit_no='$card',date='$date'");
	if($result==true)
	{
		echo "<script>alert('card saved')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	
}
?>