<?php include 'includes/sesion_starter.php';?>
<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="css/sign-up.css">
<script src="js/main_script.js"></script>
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


<form action="includes/signup.inc.php" method="post">
  <div class="imgcontainer">
    <img src="img/logo_site.png" alt="Avatar" class="avatar">
	<h2>Sign-up</h2>
  </div>

<?php
			if(isset($_GET["error"])){
				
				if($_GET["error"] == "emptyinput"){
					echo "<p style='color:red; text-align: center'>Fill in all fields!</p>";
				}
				elseif($_GET["error"] == "invalidUid"){
					echo "<p style='color:red; text-align: center'>Chose a proper username!</p>";
				}
				elseif($_GET["error"] == "invalidEmail"){
					echo "<p style='color:red; text-align: center'>Chose a proper email!</p>";
				}
				elseif($_GET["error"] == "passwordsdontmatch"){
					echo "<p style='color:red; text-align: center'>Passwords don't match!</p>";
				}
				elseif($_GET["error"] == "stmtfailed"){
					echo "<p style='color:red; text-align: center'>Something went wrong, try again!</p>";
				}
				elseif($_GET["error"] == "usernametaken"){
					echo "<p style='color:red; text-align: center'>The username  is already taken!</p>";
				}
				elseif($_GET["error"] == "emailtaken"){
					echo "<p style='color:red; text-align: center'>The email  is already taken!</p>";
				}
				elseif($_GET["error"] == "none"){
					echo "<p style='color:green; text-align: center'>Succes!</p>";
				}
			}
		?>

	<div class="container">
    <label for="uname"><b>Email</b></label><br><br>
    <input type="text" placeholder="Enter the email addres" name="email" required>
	</div>
	<br>
	
	<div class="container">
    <label for="uname"><b>Username</b></label><br><br>
    <input type="text" placeholder="Enter your username" name="uname" required>
	</div>
	<br>
	
	<div class="container">
    <label for="uname"><b>Password</b></label><br><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
	</div>
	<br>
	
	<div class="container">
    <label for="psw"><b>Repeat the password</b></label><br><br>
    <input type="password" placeholder="Enter Password" name="psw-repeat" required>
	</div>
        <br><br>
		
	<button type="submit" name="submit">Sign-up</button>

    <h3 style="text-align: center">OR</h3>
	<a href="Login.php">
	<div class="butonas">
	 <p style="text-align: center">Login</p>
	 </div>
 

</form>


</body>

</html>

