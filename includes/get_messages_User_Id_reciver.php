<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';

	$username_of_User_Id_reviver = $_SESSION["chat_with"];

	$sql_get_all_for_User_Id_reciver = "SELECT * FROM users WHERE Username = '".$username_of_User_Id_reviver."';";
	$result_User_Id_reciver = $conn->query($sql_get_all_for_User_Id_reciver);
	$row_for_User_Id_reciver = $result_User_Id_reciver->fetch_assoc();	
	
	$User_Id_of_User_Id_reciver=$row_for_User_Id_reciver["User_Id"];

$sql = "SELECT User_Id_sender, User_Id_reciver, Message, Date FROM chat_instance WHERE User_Id_sender='".$User_Id_of_User_Id_reciver."' ORDER BY Date ";


$result_Messages = mysqli_query($conn,$sql);

$messages_recived = mysqli_fetch_all($result_Messages,MYSQLI_ASSOC);



mysqli_free_result($result_Messages);
 
