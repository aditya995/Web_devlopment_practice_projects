<?php
/* Time stamp*/

// time(); date(); strtotime();
	$time = time();
	$actual_time = date('d/m/y & H:i:s'/*D M Y/d m y H i S/*/,$time);
	echo '<b><i>The current time is '.$actual_time.'</i></b>';
	echo'<br />Click refresh to update the time.<br />';
	$modify = '-1 year 1 seconds';
	$modify_time = strtotime($modify);
	$time_modified = date('d/m/y & H:i:s',$modify_time);
	echo'<br />'.$modify.' and the time is '.$time_modified.'<br /><br />';
	
	$time_modified = date('d/m/y & H:i:s',$time-(60*60*24*365+1));/* Definitly not de way man !!!*/
	echo'<br />'.$modify.' and the time is '.$time_modified.'<br /><br />';
	
	/* rand();*/
	
	$rand=rand(1,6);  // with parameters or without ,rand(); rand(1,6);
	$max = getrandmax();
	if(isset($_POST['click'])){
		echo 'You rolled a dice. It returned '.$rand.'<br />';
	}
	
?>
<form action="concepts.php" method="POST">
	<input type="submit" value="Rand ( ) ;" name="click"/>
</form>
<?php
	
?>


