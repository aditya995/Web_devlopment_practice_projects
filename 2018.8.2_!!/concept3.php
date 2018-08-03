<?php
	echo $_SERVER['HTTP_USER_AGENT'] . "</br>".$_SERVER['PHP_SELF'] . "</br>".$_SERVER['SERVER_NAME'] . "</br>";
	echo $_SERVER['REMOTE_ADDR'] . "</br>"./*$_SERVER['REMOTE_HOST'].*/'<br />'.$_SERVER['REMOTE_PORT'] . "</br>";
	echo $_SERVER['SERVER_SIGNATURE'] . "</br>".$_SERVER['SCRIPT_NAME'] . "</br>"/*.$_SERVER['SCRIPT_URI'] */. "</br>";
	$browser = get_browser(null, true);
	print_r($browser);
	echo"<br /> ".$browser['browser']." <br />";
	phpinfo();
?>