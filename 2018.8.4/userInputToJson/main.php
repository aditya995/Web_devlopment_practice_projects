<p>Fill all fields.</p>
<form action="main.php" method="GET">
Username: <br />
	<input type="text"name="user"/> <br /><br /><br />
Passward: <br />
	<input type="text" name="pass"/> <br /><br /><br />
	<input type="submit"value="Click!" name="submit"/> 
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET['user'])&&isset($_GET['pass'])){
		if(!empty($_GET['user'])&&!empty($_GET['pass'])){
			$user=$_GET['user'];
			$pass=$_GET['pass'];
			$data = array('username'=>$user,'password'=>$pass);
			$infojson=json_encode($data);
			echo "Using GET method.<br />";
			echo'The data from user created through encoding Json object.<pre>';
			print_r ($infojson);
			echo'</pre>';
			$infophp=json_decode($infojson,true);
			echo'The data array created by decoding it.<pre>';
			print_r ($infophp);
			echo'</pre>';
		}
	}
}else {
		http_response_code(405);
		echo http_response_code();
		echo'405 method not allowed !!';
}
?>
