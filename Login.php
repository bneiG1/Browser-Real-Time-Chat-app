<?php include 'includes/sesion_starter.php';?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<link rel="shortcut icon" type="image/x-icon" href="img/logo_site.png" />
<title>Real-time chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="">



</head>
<body style="	background-image: url('img/bg.jpg');   
  						background-repeat: no-repeat;
  						background-attachment: fixed;
  						background-size: 100% 100%;">


<form action="includes/login.inc.php" method="post">


  <div class="imgcontainer">
    <img src="img/logo_site.png" alt="Avatar" class="avatar">
	<h2>Login</h2>

<?php
			if(isset($_GET["error"])){
				
				if($_GET["error"] == "wronglogin"){
					echo "<p style='color:red; text-align: center'>Wrong Username or Password!</p>";
				}

				if($_GET["error"] == "emptyinput"){
					echo "<p style='color:red; text-align: center'>Please fill the fields</p>";
				}
			}
?>
  </div>

	<div class="container">
    <label for="uname"><b>Username</b></label><br><br>
    <input type="text" placeholder="Enter Username" name="uname" required>

	</div>
	
	<br>
	
	<div class="container">
    <label for="psw"><b>Password</b></label><br><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
	</div>
	
        <br><br>
		
    <button type="submit" name="submit">Login</button>
    <h3 style="text-align: center">OR</h3>
	
	 <a href="Sign-up.php">
	<div class="butonas">
	<p style="text-align: center">Sign-up</p>
	 </div></a>
	 
	<br>
</form>


</body>

</html>

