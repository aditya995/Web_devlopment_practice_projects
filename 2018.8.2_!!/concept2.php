<?php //ob_start(); ?>

<h1>My page</h1>
<p>The header is set before the php header function.
The call for header(); will show some error. But to solve this we can use >> ob_start();
 and finally >> <br />ob_end_clean();// To clean all page content when we are not redirecting.
 <br />ob_end_flush(); // Not to clean the page informations when we are not redirecting
 </p>
<br />
<?php
	//header('Location:'.'http://google.co.uk');
	//ob_end_clean(); // To clean all page content when we are not redirecting.
	//ob_end_flush(); // Not to clean the page informations when we are not redirecting
	
	/*IP address check*/
	$IP=$_SERVER['REMOTE_ADDR'];
	echo $IP;
	
	
	
?>