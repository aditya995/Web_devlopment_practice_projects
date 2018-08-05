<?php
	$user_input="Write some thing !!";
	$find=array('nigga','ass','bitch','fuck');
	$replace=array('ni**a','a**','bi**h','f**k');
	if(isset($_POST['user_input'])and!empty($_POST['user_input'])){
		$user_input=$_POST['user_input'];
		$user_input_rep=str_ireplace($find,$replace,$user_input);
		echo $user_input;
	}

?>

<hr />
<form action="index.php" method="POST">
	<textarea name="user_input" cols="30" rows="10"><?php echo $user_input_rep ?></textarea><br /><br />
	<input type="submit" value="Done!"/>
</form>