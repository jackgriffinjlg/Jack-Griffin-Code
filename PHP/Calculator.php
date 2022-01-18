<html>
<header>
</header>
<body>
	<h1 style="text-align: center;">
<form>	
<input type="number" name="number1"></input>
<br>
<input type="number" name="number2"></input>
<br>
<select name="operator">
	<option>None</option>
	<option>Add</option>
	<option>Subtract</option>
	<option>Multiply</option>
	<option>Divide</option>
</select>
<br>
<button type="submit" name="submit" value="submit">Apply</button>
</form>
<p>The Answer is.....</p>
<?php
if (isset($_GET['submit'])) {
	$result1 = $_GET['number1'];
	$result2 = $_GET['number2'];
	$operator = $_GET['operator'];
	switch ($operator) {
		case 'Add':
			echo $result1+$result2;
			break;
		case 'Subtract':
			echo $result1-$result2;
			break;
		case 'Multiply':
			echo $result1*$result2;
			break;
		case 'Divide':
			echo $result1/$result2;
			break;
		case 'None':
			echo 'Invalid Entry you should know better why are you trying to break the system';
			break;
		
		default:
			// code...
			break;
	}
}
?></h1>
</body>