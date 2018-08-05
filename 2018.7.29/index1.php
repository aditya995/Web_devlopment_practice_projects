<!--
Form Information showing using css display property !!

-->

<style type="text/css">
	.a{display:none;}
</style>
<?php
	$name = '';
	$class = '';
	$roll = '';
	$section = '';
	if(isset($_POST['name'])&& isset($_POST['class'])&& isset($_POST['roll'])&& isset($_POST['section'])){
		$name = $_POST['name'];
		$class = $_POST['class'];
		$roll = $_POST['roll'];
		$section = $_POST['section'];
		if(!empty($name)&& !empty($class)&& !empty($roll)&& !empty($section)){
			echo '<p style="color:green;">Successfully submitted! </p><br />';
			echo '<style type="text/css">.a{display:block;}</style>';
		}else{
			echo '<p style="color:red;">Please fill all forms. </p><br />';
		}
	}
?>
<form action="index1.php" method="POST">( Required fields * )
	<br />Name: *<br />
	<input type="text" name="name"/><br />
	<br />Class: *<br />
	<input type="text" name="class"/><br />
	<br />Roll: *<br />
	<input type="text" name="roll"/><br />
	<br />Section: *<br />
	<input type="text" name="section"/><br /><br />
	<input type="submit" value="Click it!!"/>
</form>
<hr />
<div class="a" >
	<h3>The informations are below.  (It will be updated after submitting the form )</h3>
	<h4>Student's Name:</h4>
	<p><?php echo $name?></p>
	<h4>Student's Class:</h4>
	<p><?php echo $class?></p>
	<h4>Student's Roll:</h4>
	<p><?php echo $roll?></p>
	<h4>Student's Section:</h4>
	<p><?php echo $section?></p>
</div>

