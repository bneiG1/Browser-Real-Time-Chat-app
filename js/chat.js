$(document).ready(function(){
  $("#cancel").click(function(){
    $("#content").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#friends").click(function(){
    $("#content").slideDown("slow");
  });
});