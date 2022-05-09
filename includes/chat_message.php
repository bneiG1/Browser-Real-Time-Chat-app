<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';

if(isset($_POST['submit'])){
	
	$User_Id_sender=$_SESSION["User_Id"];
	$msg= $_POST['msg'];
	$now = date("Y-m-d H:i:s");

	$friend =$_SESSION['chat_with'];

	echo "friend:" . $friend;
	$sql="SELECT User_Id FROM users WHERE Username = '".$friend."';";

	$result = mysqli_query($conn,$sql);

	//User_Id_friend is User_Id_friend["User_Id"]
	$User_Id_reciver = mysqli_fetch_assoc($result);
	
	
		echo "User_Id: ".$User_Id_sender."<br>Message: ".$msg."<br>Date: ".$now ."<br>Chat_with: ".$User_Id_reciver["User_Id"];
	
	
	$log_chat_message = "INSERT INTO chat_instance (User_Id_sender, User_Id_reciver, Message, Date, Chat_Instance_Id) VALUES (?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$log_chat_message)){
		
		header("location: ../Logged_in.php?error=msg_not_sent");
		exit();
		
	}
	
	mysqli_stmt_bind_param($stmt, "sssss", $User_Id_sender, $User_Id_reciver["User_Id"], $msg, $now, $_SESSION["Session_Id"]);	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("location: ../Logged_in.php");
	exit();
}
