<!--
Using header(); to redirect the pages.A simple login system with $_SESSION[''] 
-->
<?php
	session_start();
	$name=array("ADITYA","SHOVON","SALLY","AMANDA");
	$c=count($name);
	$j=-1;
	$password=array("123456","234567","345678","456789");
	$sex=array("male","male","female","female");
	if(isset($_POST['user'])&& isset($_POST['pass'])){
		$uname = $_POST['user'];
		$passw = $_POST['pass'];
		if(!empty($uname)&& !empty($passw)){
			for($i=0;$i<$c;$i++){
				if($uname===$name[$i]){
					$j=$i;
				}
			}
			if($j!=-1){
				if($password[$j]===$passw){
					$_SESSION['NAME']=$uname;
					$_SESSION['PASS']=$passw;
					$_SESSION['sex']=$sex[$j];
					$host  = $_SERVER['HTTP_HOST'];
					$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
					$extra = 'hello.php';
					header("Location: http://$host$uri/$extra");
					die();
				}else echo'<p style="color:red;">Wrong password</p><br />';
			}else{
				echo '<p style="color:red;">Wrong User name !!</p><br />';
			}
		}else{
			echo '<p style="color:red;">Please fill all forms carefully. </p><br />';
		}
	}
?>
<h3>Give your logging informations</h3>
<strong>The users:</strong></br>
<h4>User name &nbsp &nbsp &nbsp &nbsp &nbsp Password</h4>
<ul>
<?php
	foreach($name as $i=>$v){
		echo"<li>$v &nbsp &nbsp &nbsp $password[$i]</li>";
	}
?>
</ul>
<form action="index.php" method="POST">
Your User name: <br /><br />
	<input type="text" name="user" placeholder="Enter username"/><br />
your password: <br /><br />
	<input type="text" name="pass" placeholder="Enter password"/><br /><br /><br />
	<input type="submit" name="sub" value="log in now !"/>
</form>