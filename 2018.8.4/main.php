<?php
	// taking the contents from .json file
	$info = file_get_contents('info.json');
	$dogs = file_get_contents('dogs.json');
	//Decoding the json infos into array
	//Getting a json data by >>  file_get_contents(file_name.json);
	//Finally taking Informations as php array using json_decode($variable);
	
	$decode1 = json_decode($info);
	$decode2 = json_decode($dogs);
	
	echo'Writing the first json file infos <br /><pre>';
	
	print_r($decode1);
	
	echo'</pre><br />Writing the second json file infos<br /><pre>';
	
	print_r($decode2);
	
	echo'</pre><br />';
	
?>