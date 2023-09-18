<!DOCTYPE html>
<html>
<title>Live Chat with KirtiAnandrao Ramchandani's Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<body class="w3-white" style="color:green !important;">

<header class="w3-large w3-padding w3-teal">
  Live@LinuxOS_virtual:: PID #4856
</header>

<div class="w3-col w3-padding-large">
<div class="w3-col s12" style="overflow:scroll;width:96%;min-height:60%;max-height:500px;" id="chat" class="scroll">




</div>
</div>

<div class="w3-bottom"><center>
<input class="w3-col s7 w3-input --" placeholder="Type Your Message" type="text" id="conv">
<span class="w3-col s5 w3-button w3-padding w3-blue btn">Send Message</span>
<center>
</div>

<style>
body{
    displ ay:flex;
    flex-dire ction:column;
    justify-cen tent:center;
    paddi ng: 10px;
    font-family:'Montserrat';
    }

</style>

<script>

setInterval( function(){
    $(document).ready(function(){
        $('#chat').load('load_chat.php', function(){
            "x";
            });

}); },3000);
$(document).ready(function(){
    $(".btn").click(function(){
        $.post("database.php",{conv: $("#conv").val()},function(){
                      $("#conv").val("");

        });

        });
});
</script>

