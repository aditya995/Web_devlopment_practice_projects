<p>Fill all fields.</p>
<form action="main_updated.php" method="GET">
Username: <br />
	<input type="text"name="user"/> <br /><br /><br />
Passward: <br />
	<input type="text" name="pass"/> <br /><br /><br />
	<input type="submit"value="Click_it" name="submit"/> 
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if(isset($_GET['user'])&&isset($_GET['pass'])){
		if(!empty($_GET['user'])&&!empty($_GET['pass'])){
			$infophp=json_decode(file_get_contents("php://input"));
			echo'The data obj created by decoding it.<pre>';
			print_r ($infophp);
			echo'</pre>';
		}
	}
}else  if ($_SERVER['REQUEST_METHOD']=="POST"){
	echo'<br />POST method requested. <br />';
	http_response_code(405);
	echo http_response_code();
	echo' => method not allowed !!';
}else{
	http_response_code(405);
	echo http_response_code();
	echo' => method not allowed !!';
}
?>
