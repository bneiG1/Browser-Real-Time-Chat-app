
var global_friend = ""; 
var global_response = "";

function change_user(Username){

	$.ajax({
         type:'POST',
         url: 'includes/get_messages.php',
         data:{
         friend : Username
         },
         success:function(response){ 

		    console.log(Username);
		    global_friend = Username;
			console.log(response);

			$('#main_chat_window').empty();
			document.getElementById("friend").innerHTML = Username;
			document.getElementById("main_chat_window").innerHTML = response;
 		    // refresh(global_friend);

 
		}

	});

}


//merge dar acuma da imi blocheaza scrollul numai sus >:(

setInterval(
function refresh(Username){

	$.ajax({
         type:'POST',
         url: 'includes/get_messages.php',
         data:{
         friend : global_friend
         },
         success:function(response){ 

		    console.log(global_friend);
		    global_friend = global_friend;
			console.log(response);

			$('#main_chat_window').empty();
			document.getElementById("friend").innerHTML = global_friend;
			document.getElementById("main_chat_window").innerHTML = response;
			$(window).scroll(function(){

				var scrollbarLocation = $ (this).scrollTop();

			})
 

 
		}

	});


	
 },10000);
