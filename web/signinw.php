<?php
include"connect.php";


$ID = $_POST['email'];
$Password = $_POST['password'];


function SignIn() 
{ 
    session_start(); //starting the session for user profile page 
if(!empty($_POST['email'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{ 
$query = mysql_query("SELECT * FROM signupw where email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error()); 
$row = mysql_fetch_array($query) or die(mysql_error()); 
    
    if(!empty($row['email']) AND !empty($row['password'])) 
{ 
$_SESSION['email'] = $row['password']; 
    
    echo "<script>alert('user successfully logged in')</script>";
		echo "<script>window.location.href='single.php'</script>";
    }
else 
{ 
echo "<script>alert('wrong email id or password')</script>";
		echo "<script>window.location.href='index.php'</script>";
} 
} 
} 
    
if(isset($_POST['submit'])) 
{ 
    
    
    SignIn();


}



?>