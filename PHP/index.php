<!doctype html>
<html>
<head>
	<title> </title>
</head>	
<body align=center>
<h2>Signup</h2>
	<form action="includes/signup.inc.php" method="POST" >
	<input type="text" name="Fname" placeholder="FirstName">
	<br>
	<input type="text" name="Lname" placeholder="LastName">
	<br>
	<input type="text" name="Email" placeholder="Email">
	<br>
	<input type="text" name="UID" placeholder="Username">
	<br>
	<input type="password" name="PWD" placeholder="Password">
	<br>
	<button type="submit" name="submit">Sign up</button>
</form>
<?php
/*$fullUrl = "http://$_SERVER[HTTP_HOST],$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "signup=empty") == true) {
	echo "You did not fill in all feilds";}
	elseif (strpos($fullUrl,"signup=success") == true) {
		echo "You're Sign Up was Successful!";}
*/

if (!isset($_GET["signup"])){exit();}
else {$signupcheck = $_GET['signup'];}
if ($signupcheck == "empty") {
	echo "You did not fill in all feilds";
	exit();
}
elseif ($signupcheck == "success") {
	echo "You're Sign Up was Successful!";
	exit();
}
?>
</body>
</html>