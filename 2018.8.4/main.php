<?php
	// taking the contents from .json file
	$info = file_get_contents('info.json');
	//Decoding the json infos into array
	//Getting a json data by >>  file_get_contents(file_name.json);
	//Finally taking Informations as php array using json_decode($variable);
	
	$decode = json_decode($info);
	print_r($decode);
	
?>