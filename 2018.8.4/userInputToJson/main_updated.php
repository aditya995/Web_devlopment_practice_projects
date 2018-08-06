<body>
<p>Fill all fields.</p>
<form action="main_updated.php" method="GET">
Username: <br />
	<input type="text"name="user"/> <br /><br /><br />
Passward: <br />
	<input type="text" name="pass"/> <br /><br /><br />
	<input type="submit"value="Click!" name="submit"/> 
</form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET['user'])&&isset($_GET['pass'])){
		if(!empty($_GET['user'])&&!empty($_GET['pass'])){
			$infophp=(file_get_contents("php://input"));
			$info=array('user'=>$infophp,'pass'=>$infophp);
			echo'The data obj created by encoding it..';
			print_r ($infophp);
			echo'..';
		}
	}
}else {
		http_response_code(405);
		echo http_response_code();
		echo' method not allowed !!';
}
?>
