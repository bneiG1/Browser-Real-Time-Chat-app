<?php

require_once 'sesion_starter.php';
require_once 'dbh.inc.php';
$now = date("Y-m-d H:i:s");

$sql_get_Username_friend="SELECT *, TIMEDIFF('".$now."', users.Logged_in) AS timp FROM users JOIN friend_list on users.User_Id=friend_list.User_Id_friend WHERE friend_list.User_Id = '".$_SESSION["User_Id"]."';";

$result_Username_of_friends = mysqli_query($conn,$sql_get_Username_friend);

$friends = mysqli_fetch_all($result_Username_of_friends,MYSQLI_ASSOC);

mysqli_free_result($result_Username_of_friends);