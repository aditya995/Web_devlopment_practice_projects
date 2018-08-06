<?php
/* Working with array in php 
	--> Indexed arrays - Arrays with a numeric index
	--> Associative arrays - Arrays with named keys
	--> Multidimensional arrays - Arrays containing one or more arrays
*/

/*****		INDEXED array		*****/

	echo "<b>INDEXED array </b><br />";
	$text = array("We","are", "learning","PHP");
	$arrlength = count($text);
// using for loop we are printing the array, using count() to know the number of elements in array.
	
	for($x = 0; $x < $arrlength; $x++) {
		echo $text[$x];
		if($x<$arrlength-1)echo " ";
	}
	echo ".<br>";
//using while we are concatenating the array values, putting it in a variable $string.
	
	$x = 0;
	$string='We are using concatenation.<br />-->>';
	while( $x < $arrlength ) {
		$string.=$text[$x];
		if($x<$arrlength-1)$string.=' ';
		$x++;
	}
	$string.=".<br>";
	echo $string;
	
/*****		ASSOCIATIVE array		*****/
	
	echo "<br /><b> ASSOCIATIVE array </b><br />";
	$st1=array("4"=>"Ben","5"=>"Billy","6"=>"Bob");
	$st2=array("Ben"=>"4","Billy"=>"5","Bob"=>"6");
// using for loop we are printing the array, using count() to know the number of elements in array.
	
	$arrlength = count($st1);
	for($i=4;$i<($arrlength+4);$i++){
		echo $st1[$i].' ';
	}
	echo'<br />';
// using foreach loop to access the array values and keys
	
	foreach($st2 as $key=>$value){
		echo 'The key is &nbsp&nbsp&nbsp&nbsp\''.$key.'\'. The value is &nbsp&nbsp&nbsp&nbsp\''.$value.'\'.<br />';
		$string.= 'The key is &nbsp&nbsp&nbsp&nbsp\''.$key.'\'. The value is &nbsp&nbsp&nbsp&nbsp\''.$value.'\'.<br />';
	}
	echo'<br />';
	echo $string;
	
/*****		Multidimensional array			*****/
	
	$st3=array(
		array("We ","are ", "learning ","PHP."),
		array("Programming ","is ", "fun to ","learn."),
		array("The real happiness is ","when ","I finally ", "solve ","the problem after trying a lot.")
		);
	$countRow=count($st3);
	echo "<br /> <b>Multidimensional array </b><br />";
	for($i=0;$i<$countRow;$i++){
		for($j=0;$j<($countColumn=count($st3[$i]));$j++){
			echo $st3[$i][$j];
		}echo '<br />';
	}


?>