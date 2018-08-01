<?php
	session_start();
	// remove all session variables
	session_unset(); //echo "All session variables are now removed <br />";
	// destroy the session 
	session_destroy(); //echo "The session is destroyed. <br />";
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'index.php';
	header("Location: http://$host$uri/$extra");
?>