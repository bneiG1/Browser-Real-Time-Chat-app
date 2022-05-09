<?php

	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "real-time chat";

	$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

	if(!$conn){
	
		die("Connection failed: ".msqli_connect_error());
	
	}

