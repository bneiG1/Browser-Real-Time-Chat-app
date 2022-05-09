<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';


$sql = "SELECT User_Id_sender, User_Id_reciver, Message, Date FROM chat_instance WHERE User_Id_sender='".$_SESSION["User_Id"]."' ORDER BY Date  ";


$result_Messages = mysqli_query($conn,$sql);

$messages_sent = mysqli_fetch_all($result_Messages,MYSQLI_ASSOC);



mysqli_free_result($result_Messages);


