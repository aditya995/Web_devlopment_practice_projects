<?php
	
	/* taking the contents from .json file ****and keeping it stored as a json obj *****and converting it to a php array **** again converting to json obj*/

	
	$info = file_get_contents('info.json'); // storing it as a json obj in php 
	print_r($info);
	$dogs = file_get_contents('dogs.json');// storing it as a json obj in php
	print_r($dogs);
	//Decoding the json obj into php associative/indexed  (depending on the data)  array
	//Getting a json data by >>  file_get_contents(file_name.json);
	//Finally taking Informations as php array using json_decode($variable);
	
	$decode1 = json_decode($info);//array created
	$decode2 = json_decode($dogs);//array created
	/*$decode1 = json_decode($info,true);  //will create an associative array  */
	echo'<br /><pre>';
	print_r($decode1);
	echo'</pre><br /><pre>';
	
	print_r($decode2);
	echo'</pre><br />';
	
	/*Finally taking the php array and again converting it to json obj in php*/
	$encode1=json_encode($decode1);
	$encode2=json_encode($decode2);
	
	echo'<br /><pre>';
	print_r($encode1);
	echo'</pre><br /><pre>';
	
	print_r($encode2);
	echo'</pre><br />';
	
?>