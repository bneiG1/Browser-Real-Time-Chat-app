<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';
if(isset($_POST['exit'])){

		$now = date("Y-m-d H:i:s");
		$sql_date_logout="UPDATE users SET Logged_out='".$now."' WHERE User_Id='".$_SESSION["User_Id"]."'; ";
		$execute_sql_date_logout = $conn->query($sql_date_logout);



	session_unset();

	session_destroy();

	header("location: ../Login.php");
	exit();
}
?>