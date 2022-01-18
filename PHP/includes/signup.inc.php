<?php

	if (isset($_POST['submit'])) {
		include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['Fname']);
	$last = mysqli_real_escape_string($conn, $_POST['Lname']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$UID = mysqli_real_escape_string($conn, $_POST['UID']);
	$PWD = mysqli_real_escape_string($conn, $_POST['PWD']);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../index.php?signup=success");

} else {
  echo("$email is not a valid email address");
  		}
	if (empty($first) || empty($last) || empty($email) || empty($UID) || empty($PWD)) {
		header('Location: ../index.php?signup=empty');

		$sql = "Insert into users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES (?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
echo "SQL error";
} else {
mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $UID, $PWD);
mysqli_stmt_execute($stmt);}
}
}
?>