<?php include 'includes/sesion_starter.php';?>
<?php include 'includes/get_users.php';?>
<?php include 'includes/get_friend_list.php';?>
 
<!DOCTYPE html>

<html>
<head>

<link rel="shortcut icon" type="image/x-icon" href="img/logo_site.png" />
<title>Real-time chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="">


<link rel="stylesheet" href="css/Chat_box.css">
<link rel="stylesheet" href="css/top-nav.css">
<link rel="stylesheet" href="css/top-nav-overlay.css">
<link rel="stylesheet" href="css/left-nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/chat_messages.css">
<link rel="stylesheet" href="css/friend_butons.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="moment.js/moment.js.js"></script>
<script src="js/top-nav-overlay.js"></script>
<script src="js/chat.js"></script>
<script src="js/user-list.js"></script>
<script src="js/slide_add_friends.js"></script>
<script src="js/slide_search_friend.js"></script>
<script src="js/select_friend.js"></script>

</head>
<body style="background-image:url('img/startbg.jpg')">

<!-- top-nav start -->
<div class="logo">
<img src="img/logo_site.png" class="logo"><a>Real-time chat</a>
</div>

<div class="topnav">
<div class="topnav-left">
<form action="includes/sesion_destroyer.php" method=post>
  <a onclick="openNav_profil()">Profil</a></div>
<div class="topnav-right">
  <a href="Login.php"><button type="submit" name="exit">Logout</button></a></div>
  </form>
  </div>

<!-- Profile overlay -->
<div id="profile" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav_profil()">&times;</a>
  <div class="overlay-content">
  
<div id="Profil" class="tabcontent">
<br>
<img src="img/user.png" width=150px style="float: left; margin-right:30px;">
 <h1> <?php echo " Username: ". $_SESSION["Username"];
echo "<br><hr>";
echo "Sesion User_Id: ". $_SESSION["User_Id"] . "<br> session_id() ". $_SESSION["Session_Id"];
?> 
   </h1>
   <br><br>

</div>
 
  </div>
</div>


<!-- top-nav end -->


<!-- left-nav start -->
<!-- All Friends -->	
<div class="sidebar">
  <a class="active">

  <!--button add friends -->
  <br>
  <div id="flip">
  <div id="slide_button1" >
  <img src="img/add.png" width=30px>
  </div>

  <h2>Friends</h2> 

  <!-- add friends -->
  <div class="search-container">
    <form action="includes/user_friend_list.php" method="post" class="add_friend" id="drop_textarea1" >
  <input type=text placeholder="Add friend" name="user">
  <button type="submit"  name="submit" ><img src="img/add.png" width=15px></button> 
  </form>
  <br>
  <!-- user list -->
<div id="drop-down">

 <?php
  foreach($users as $user){ ?>
    
  <h3> <?php 
  
  $Username_of_users= htmlspecialchars($user['Username']);

    echo $Username_of_users;} 
  ?> </h3>

</div>
</div>
  </div>


</a>



<!-- friend list -->
  <div id="friends">
  <?php

 
  foreach($friends as $friend){ ?>
		 

	 <?php 
	$now = date("Y-m-d H:i:s");
	$chat_with= htmlspecialchars($friend["Username"]);
	$_SESSION["chat_with"] = $chat_with; ?>
		
<div class="select_friend">
	<button onclick="change_user('<?php echo $chat_with ?>')">
    <!-- inca nu e finalizat -->
<?php
    if($friend["Logged_out"] == NULL ){

    echo "<span class='status_online'></span>" . '<div class="has1">' . $_SESSION["chat_with"] . '</div> <br><br><br> <div class="pe_online"> Online </div>' ;

  }

  if($friend["Logged_out"] < $now && $friend["Logged_out"] != NULL){

    echo "<span class='status_offline'></span>" . '<div class="has1">' . $_SESSION["chat_with"] . '</div> <br><br><br> <div class="pe_offline"> Last seen:' . $friend["timp"][0]. $friend["timp"][1] . " hours ago</div>" . "<br>";

  }

  //imi mai treuie un if in care sa am status_pending dar nu stiu cum sa fac interogarea
?> 
	</button> 
</div>
	<hr>
	 
	<?php } ?>
	</div>
  <br><br>

</div>


<!-- left-nav end -->


<!-- content start -->
<!-- <br> este temporar sau cel putin ar trebuii :D 
NU SCOATE <br> :))  O IA RAZNA AFISAREA
-->
<br><br>

<div id="main_window" > 


<div class="content"  id="content">
	
	<div class="chat-popup" id="myForm">
	<form target=_self action="includes/chat_message.php" class="form-container" method=post>
		<div class="mydivheader"><h1>
	<div id="friend"></div></h1>
</div>
	<button type="button" class="cancel" id="cancel"><h2>__</h2></button>
	
	<!--messages -->

<div id="main_chat_window"  class="messages_box"  >
</div>

    <textarea placeholder="Type message.." name="msg"></textarea>
    <button type="submit" class="btn" name="submit">Send</button>
  </form>

</div>
</div>
</div>

</body>

</html>

