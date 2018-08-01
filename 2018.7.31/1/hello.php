<?php
	//session_start(); //If we were trying to redirect to this page then we should use the session_start();
	echo "<h3>".$_SESSION['NAME']." is successfully logged in.</h3>";
	if($_SESSION['sex']=="male"){
		$pronoun="His";
	}else $pronoun="Her";
	
	echo "<h3>".$pronoun." password is ".$_SESSION['PASS']."</h3>";
?>
