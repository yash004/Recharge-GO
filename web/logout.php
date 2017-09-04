<?php
session_start();
unset($_SESSION['email']['password']);
session_destroy();

header("Location: signinw.php");
exit;
?>