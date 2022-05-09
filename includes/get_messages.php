<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';
 
//tre sa ma folosesc de asta
$friend =$_POST["friend"]; 

//variabila asta o folosesti in includes/chat_message.php ca sa iti iei Id-ul lui friend 
$_SESSION['chat_with'] = $friend;

$session_user = $_SESSION["Username"];

$sql=" SELECT Sender, Reciver, Message, Date
FROM (
SELECT c.*, u1.Username AS 'Sender', u2.Username AS 'Reciver'
FROM `chat_instance` c
JOIN users u1 ON u1.User_Id = c.User_Id_sender 
JOIN users u2 ON u2.User_Id = c.User_Id_reciver )  Ddata
WHERE Sender = '".$session_user."' AND Reciver = '".$friend."' OR Sender = '".$friend."' AND Reciver = '".$session_user."' ORDER BY Date DESC
 ";
 
$result_Messages = mysqli_query($conn,$sql);

$messages = mysqli_fetch_all($result_Messages,MYSQLI_ASSOC);
 
echo "<div id='main_chat_window'  class='messages_box' >";

foreach($messages as $msg)
{

    if($msg["Sender"] == $session_user && $msg["Reciver"] == $friend) {

      echo  "<div class='container_sent'> " .
            "<img src='img/chat.png' alt='Avatar' class='container_sent_img' style='width:100%;'> <p style='text-align: right;'>" .
            $_SESSION["Username"] ."</p><hr>" .
            "<p style='text-align: justify;'>";

    $message_sent= htmlspecialchars($msg['Message']);

    echo $message_sent . "</p>" .
        "<span class='time-right' class='right'>" .
        $msg["Date"] . "</span>" .
        "</div>";
    }

    if($msg["Sender"] == $friend && $msg["Reciver"] == $session_user){

      echo  "<div class='container_recived'>  " .
            "<img src='img/chat.png' alt='Avatar' class='container_recived_img' style='width:100%;'> <p style='text-align: left;'>" .
            $friend ."<hr>" .
            "<p style='text-align: justify;'>";

    $message_recived = htmlspecialchars($msg['Message']);

    echo $message_recived . "</p>" .
        "<span class='time-left'>" .
        $msg["Date"] . "</span>" .
        "</div>";
    }

}


