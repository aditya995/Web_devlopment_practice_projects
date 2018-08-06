<?php
	session_start();
	$i=$_SESSION['NAME'];
	if($i!=NULL){
		echo "<h3>".$_SESSION['NAME']." is successfully logged in.</h3>";
		if($_SESSION['sex']=="male"){
			$pronoun="His";
		}else $pronoun="Her";
		
		echo "<h3>".$pronoun." password is ".$_SESSION['PASS']."</h3>";
		echo"<strong>The users:</strong></br>
<h4>User name &nbsp &nbsp &nbsp &nbsp &nbsp Password &nbsp &nbsp &nbsp &nbsp &nbsp Sex</h4>";
		foreach($_SESSION['sendname'] as $i=>$v){
			echo"<li>$v &nbsp &nbsp &nbsp ".$_SESSION['sendpass'][$i]." &nbsp &nbsp &nbsp ".$_SESSION['sendgen'][$i]."</li>";
		}
		echo'<br /><a href="logout.php"><button>Logout !!</button></a>';
	}else{
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'index.php';
		header("Location: http://$host$uri/$extra");
		die();
	}
	
?>

