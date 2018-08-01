<?php
/******
Some concepts of php language from the new New Boston & W3Schools.
*******/
	$x = 5;
	$y = 10;
	var_dump($x);
	function myTest() {
		global $x, $y;
		$y = $x + $y;
	}

	myTest();
	echo "<br />$y <br />";
	
	
	/**/
	$x1 = 5;
	$y1 = 10;

	function myest() {
		$GLOBALS['y1'] = $GLOBALS['x1'] + $GLOBALS['y1'];
		static $x2 = 0;
		echo 'counting the function call '.$x2."<br />";
		$x2++;
	}
	myest();
	echo "$y1 <br />";
	myest();
	myest();
	
	
	/**/
	$x='Baler net speed ';
	$y='Dude !!';
	echo '$x lol <br />'.$y;
	
	echo " <br />Fuck bro $x lol <br />".$y.'<br />';
	
	
	/**/
	$t = date("H");

	if ($t < "19") {
		echo "Have a good day! <br />";
	}
	
	
	/**/
	$favcolor = "blue";

	switch ($favcolor) {
		case "red":
			echo "Your favorite color is red!";
			break;
		case "blue":
			echo "Your favorite color is blue!";
			break;
		case "green":
			echo "Your favorite color is green!";
			break;
		default:
			echo "Your favorite color is neither red, blue, nor green!";
	}
	echo '<br />';
	
	
	/**/
	$x = 5; 

	while($x--) {
		echo "The number is: $x <br>";
    }
	define("GREETING", "Welcome to W3Schools.com!", true);
	echo greeting.'<br />';
	
	
	/**/
	$x = 1; 

	do {
		echo "The number is: $x <br>";
		$x++;
	} while ($x <= 5);
	
	
	/**/
	for ($x = 0; $x <= 10; $x++) {
		echo "The number is: $x <br>";
	}
	
	
	/**/
	$colors = array("red", "green", "blue", "yellow"); 

	foreach ($colors as $value) {
		echo "$value <br>";
	}
	
	
	/**/
	function setHeight($minheight = 50) {
		echo "The height is : $minheight <br>";
	}

	setHeight(350);
	setHeight(); // will use the default value of 50
	setHeight(135);
	setHeight(80);
	
	
	/**/
	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}

	echo "5 + 10 = " . sum(5, 10) . "<br>";
	echo "7 + 13 = " . sum(7, 13) . "<br>";
	echo "2 + 4 = " . sum(2, 4)."<br>";
	
	
	/**/
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	echo "Peter is " . $age['Peter'] . " years old.";
	
	
	/**/
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	foreach($age as $x => $x_value) {
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}
	
	
	/*  Super Globals*/
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
	
	
	/**/
	echo '<br />';
	$f_string='This is an example & string .';
	$string_word_count = str_word_count($f_string);
	$string_character_count = str_word_count($f_string,1,'&.');
	print_r($string_word_count);
	echo '<br />';
	print_r($string_character_count);
	echo '<br />';
	
	
	/**/
	$string = 'abcdefghijklmnopqrstuvwxyz0123456789_.';
	$suffled = str_shuffle($string);
	$final=substr($suffled,0,20);
	echo 'Random name generator >>  '.$final.'<br />';
	$st1="Hello, there .Today is a great day.I'm hungry.";
	$st2="Butt fuck it.";
	similar_text($st1,$st2,$result);
	echo 'The similarity = '.$result. '<br />';
	
	
	/**/
	$str='&nbsp fuck you&nbsp';
	echo $str.'<br />';
	$string= trim($str," ");
	echo $string.'<br />';
	
	
	/**/
	$string='This is an <img src="ddd.jpg" alt="Fuck da bullshit." /> image';
	$string_slashes=htmlentities(addslashes($string));
	echo $string.'<br />';
	echo $string_slashes.'<br />';
	$string_slashes=htmlentities(stripslashes($string));
	echo $string_slashes.'<br />';
	
	
	/*Array */
	$food=array('1','2','3','4');
	$food[6]='6';
	print_r($food);
	echo '<br />The value in the 0th index ='.$food[0].'<br />';
	
	
	/* Associative array */
	$food=array('salad'=>10,'meat'=>20,'chicken'=>30,'pasta'=>40);
	print_r($food);
	echo '<br />The value in the key salad ='.$food['salad'].'<br />';
	
	
	/*Multidimentional Array and foreeach loop */
	$f=array('healthy'=>array('salad','vegetables'),'Unhealthy'=>array('Pizza','Ice-cream'));
	echo '<i>'.$f['healthy'][1].'</i><br />';
	
	foreach($f as $element=>$inner_element){
		echo '<b>'.$element.'</b><br />';
		foreach($inner_element as $item){
			echo '<em>'.$item.'</em><br />';
		}
	}
	echo '<br />';
	foreach($f['healthy'] as $item){
		echo '<em>'.$item.'</em><br />';
	}
	
	/* exit and die function*/
	//trying to connect to a database and if failed then use die or exit function
	mysql_connect('localhost','root','') || die('Could not connect to the server. <br />');
	echo 'Connected <br />';
	
	
	/* the @ sign is for hiding the default errors.It will only show our own error message.*/
	@mysql_connect('localhos','','') || die('Could not connect to the server. <br /><h1>Page is killed after this.</h1><br />');
	echo 'Connected <br />';
	
	mysql_connect('localhos','','') || die('Could not connect to the server. <br />');
	echo 'Connected <br />';
	
	
	
	
?>











