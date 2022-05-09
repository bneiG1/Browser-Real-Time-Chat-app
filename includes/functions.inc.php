<?php
function emptyInputSignup($email, $username, $psw, $psw_re){
	
	$result;
	
	if(empty($email)|| empty($username) || empty($psw) || empty($psw_re) ){
		
		$result = true;
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
	
}

function invalidUid($username){
	
	$result;
	
	if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		
		$result = true; 
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
}

function invalidEmail($email){
	
	$result;
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		
		$result = true; 
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
}

function pswMatch($psw, $psw_re){
	
	$result;

	if($psw != $psw_re){
		
		$result = true; 
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
}

function uidExists($conn, $username, $email){
	
	$sql = "SELECT * FROM users WHERE Username = ? OR Email = ?;";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		
		header("location: ../Sign-up.php?error=stmtfailed");
		exit();
		
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)){
		
		return $row;
		
	}
	else{
		
		$result = false;
		return $result;
		
	}
	
	mysqli_stmt_close($stmt);
	
}

function createUser($conn, $username, $email, $psw){
	
	$create_user = "INSERT INTO users (Username, Email, Password) VALUES (?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$create_user)){
		
		header("location: ../Sign-up.php?error=stmtfailed");
		exit();
		
	}
	
	//encryption
	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '1234567891011121';
	$encryption_key = "Real-time chat application";
	
	$psd_encryption = openssl_encrypt($psw, $ciphering,
            $encryption_key, $options, $encryption_iv);
	
	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $psd_encryption);
	
	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("location: ../Sign-up.php?error=none");
	exit();
	
	
	
}

function emptyInputLogin($username, $psw){
	
	$result;
	
	if(empty($username) || empty($psw)){
		
		$result = true;
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
	
	
}

function loginUser($conn, $username, $psw){
	
	$uidExists = uidExists($conn, $username, $username);
	
	if($uidExists === false){
		
		header("location: ../Login.php?error=wronglogin");
		exit();
		
	}
	
	$psw_from_db = $uidExists["Password"];
	
	
	//decryption
	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$decryption_iv = '1234567891011121';
	$decryption_key = "Real-time chat application";
	
	$psd_decryptied=openssl_decrypt ($psw_from_db, $ciphering, 
        $decryption_key, $options, $decryption_iv);
	
	
	$checkPwd =strcmp($psw, $psd_decryptied);
	
	if($checkPwd !== 0){

		header("location: ../Login.php?error=wronglogin");
		exit();
		
	}
	elseif($checkPwd === 0){
		
		require_once 'sesion_starter.php';
		require_once 'dbh.inc.php';

		
		
		// create session variables
		$_SESSION["Username"] = $uidExists["Username"];
		
		$sql = "SELECT * FROM users WHERE Username = '".$_SESSION["Username"]."'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		// asta ii variabila pe care o tot cautai >:(		
		$_SESSION["User_Id"]=$row["User_Id"];
		
		
		session_regenerate_id(true);
		$_SESSION["Session_Id"]=session_id();
		

		$now = date("Y-m-d H:i:s");
		$sql_date_login="UPDATE users SET Logged_in = '".$now."', Logged_out = NULL WHERE User_Id='".$_SESSION["User_Id"]."'; ";
		$execute_sql_date_login = $conn->query($sql_date_login);

		header("location: ../Logged_in.php");
		exit();
		
	}
	
	
}