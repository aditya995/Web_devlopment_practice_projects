<?php
	$browser = get_browser(null,true);
	print_r($browser);
	echo '<br /><br />The current browser is >>>>   '.$browser['browser'];
	$browsre_inf = strtolower($browser['browser']);
	if($browsre_inf=='chrome'){
		echo '</br>You are experiencing the best of our site.';
	}else{
		echo '</br>You can experience the best of our site in chrome.';
	}
?>