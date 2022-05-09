<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';

$now = date("Y-m-d H:i:s");
$user_id = $_SESSION["User_Id"];

//verificare online sau offline
$sql="SELECT users.User_Id, users.Logged_in, users.Logged_out FROM `users` 
JOIN `friend_list` ON users.User_Id = friend_list.User_Id 
WHERE '".$user_id."' = friend_list.User_Id_friend;";

$exec_sql = mysqli_query($conn,$sql);

$results = mysqli_fetch_all($exec_sql,MYSQLI_ASSOC);

//verificare daca prietenul este mutual
$sql_check_for_friend="SELECT users.User_Id, users.Logged_in, users.Logged_out FROM `users` 
JOIN `friend_list` ON users.User_Id = friend_list.User_Id 
WHERE '".$user_id."' = friend_list.User_Id_friend;";

$exec_sql_check_for_friend = mysqli_query($conn,$sql_check_for_friend);

$results_sql_check_for_friend = mysqli_fetch_all($exec_sql,MYSQLI_ASSOC);


foreach($results as $result){

	if($result["Logged_out"] != NULL){

		echo $now.  "<span class='status_online'></span>". "<br>";

	}

	if($result["Logged_out"] < $now){

		echo $now.  "<span class='status_offline'></span>". "<br>";

	}

}

// tre sa fac ceva querry ca sa vad daca am prieten mutual
// foreach($results_sql_check_for_friend as $check){

//todo

// }


