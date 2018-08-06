<!--
Form Information showing using PHP !!
--><?php
	if(isset($_POST['name'])&& isset($_POST['class'])&& isset($_POST['roll'])&& isset($_POST['section'])){
		$name = $_POST['name'];
		$class = $_POST['class'];
		$roll = $_POST['roll'];
		$section = $_POST['section'];
		if(!empty($name)&& !empty($class)&& !empty($roll)&& !empty($section)){
			echo '<hr /><p style="color:green;">Successfully submitted! </p>';
			echo'<div class="a" >
	<h2>The informations are below.</h2>
	<h4>Student\'s Name:</h4>
	<p>'.$name.'</p>
	<h4>Student\'s Class:</h4>
	<p>'.$class.'</p>
	<h4>Student\'s Roll:</h4>
	<p>'.$roll.'</p>
	<h4>Student\'s Section:</h4>
	<p>'.$section.'</p>
</div>';
			
		}else{
			echo '<p style="color:red;">Please fill all fields. </p>';
		}
	}
?>
<form action="index.php" method="POST">( Required fields * )
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




