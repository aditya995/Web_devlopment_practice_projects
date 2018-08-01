<?php
	session_start();
	$i=$_SESSION['NAME'];
	if($i!=NULL){
		echo "<h3>".$_SESSION['NAME']." is successfully logged in.</h3>";
		if($_SESSION['sex']=="male"){
			$pronoun="His";
		}else $pronoun="Her";
		echo "<h3>".$pronoun." password is ".$_SESSION['PASS']."</h3>";
		echo'<a href="logout.php"><button>Logout !!</button></a>';
	}else{
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'index.php';
		header("Location: http://$host$uri/$extra");
		die();
	}
?>

