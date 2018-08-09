<!--	The methods GET and POST are frequently used . POST outputs the data in the url , but POST doesn't.	-->

<form action="1.php" method="POST">
	<input type="text" name="user" placeholder="Type your name here...."/>
	<input type="password" name="pass" placeholder="Type your password here...."/>
	<input type="textarea" name="area" placeholder="Type your reason for visiting this site here...."/>
	<input type="submit" name="sub" value="SUBMIT"/>
</form>
<?php
	/*Form in php*/
	/*For security use htmlentities(); to pass the data without any html tags(RAW TEXT) , not as a html markup !!!
	So that we can avoide mysql injections !!! through form submitions  */

	
	if(isset($_POST['user'])&&isset($_POST['pass'])&&isset($_POST['area'])&&!empty($_POST['user'])&&!empty($_POST['pass'])&&!empty($_POST['area'])){
		$user = htmlentities($_POST['user']);
		$pass = htmlentities($_POST['pass']);
		$text = $_POST['area']; // should use htmlentities(); functions
		echo 'The user name : '.$user.' Pass : '.$pass.' Reason : '.$text;
	}else if(empty($_POST['user'])&&empty($_POST['pass'])&&empty($_POST['area'])){
		echo 'Please fill in the form.';
	}else if(empty($_POST['user'])||empty($_POST['pass'])||empty($_POST['area'])){
		echo 'Fill in all fields.';
	}

?>