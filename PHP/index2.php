<!DOCTYPE html>
<header>
<?php
include_once 'includes/dbh.inc.php'
?>
	<title></title>
</header>
<body>
	
	<?php
	$data = "John";
	//Created a template
	$sql = "Select* From users Where user_uid=?";
	//Creat a prepared statement
	$stmt = mysqli_stmt_init($conn, );
	//Prepare the prepared statemejnt
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL statement failed";
	}else{
		//Bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt, "s", $data);
		//Run paramters inside database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
}
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
?>
</body>
</html>