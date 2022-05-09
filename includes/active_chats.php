<?php
  
require_once 'includes/dbh.inc.php';
require_once 'includes/sesion_starter.php';

$sql_get_Message = "SELECT Message FROM chat_instance WHERE User_Id_sender = '".$_SESSION["User_Id"]."' AND User_Id_sender = '".$_SESSION["chat_with"]."';";
$sql_get_Date = "SELECT Date FROM chat_instance WHERE User_Id_sender = '".$_SESSION["User_Id"]."' AND User_Id_sender = '".$_SESSION["chat_with"]."';";

$result_Message = mysqli_query($conn, $sql_get_Message);
$Message = mysqli_fetch_array($result_Message, MYSQLI_ASSOC);

$result_Date = mysqli_query($conn, $sql_get_Date);
$Date = mysqli_fetch_array($result_Date, MYSQLI_ASSOC);

mysqli_free_result($result_Message);
mysqli_free_result($result_Date);