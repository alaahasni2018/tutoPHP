<?php
	session_start();
	session_destroy() ;
	unset($_SESSION['user']);
	$_SESSION = null ;

	header('location: login.php'); 
?>