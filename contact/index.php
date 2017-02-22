<!DOCTYPE html>	
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=0.5" />

	<title>Sensors'17</title>
	<meta name="description" content="Instrumentation and Contol Engineering department, NITT symposium website." />
	<meta name="keywords"  content="sensors,symposium,NITT,ICE,instrumentation,control" />
	<meta name="Resource-type" content="Document" />
	
        <link rel = "shortcut icon" href = "../tab_image.ico"/>
	<link type="text/css" rel="stylesheet" href="../normalise.css" />
	<link type="text/css" rel="stylesheet" href="../common.css" />
	<link type="text/css" rel="stylesheet" href="contact_style.css" />

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1063823873635962";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="bg">
<div id="header">
	<div id="page">CONTACT</div>
	<a href="../"><div id="logo"></div></a>
	<div id="link-container">
	<a href="../about">About</a>
	<a href="../workshops">Workshops</a>
	<a href="../events">Events</a>
	<a href="../team">Team</a>
	<a href="../contact">Contact</a>
	</div>
</div>
<h1 class="title">For queries, kindly contact</h1>
<div id="contact-div">
		<div class="team">
		<h2>Vasanth</h2>
		<p style="color:#ffe4b5">Overall coordinator</p>
		<p><b>+91 91763 85387</b></p>	
		</div>
		<div  class="team">
		<h2>Anurudh Charummel</h2>
		<p style="color:#ffe4b5">Chairman, ICEA</p>
		<p><b>+91 96778 52941</b></p>	
		</div>
		<div class="team">
		<h2>S Narendar</h2>
		<p style="color:#ffe4b5">Head, Workshops</p>
		<p><b>+91 94449 69493 </b></p>	
		</div>
		<div class="team">
		<h2>Pradeep A</h2>
		<p style="color:#ffe4b5">Technical Secretary</p>
		<p><b>+91 96007 29063</b></p>	
		</div>
</div>
<div class="line"></div>
<iframe id="map-container" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ49dVDBT1qjsRzFm7wd82bsA&destination=place_id:ChIJ4RqOdUeNqjsRWrDqnjgWPgs&key=AIzaSyAnWo5tAVsYKpRV-gLrWXf25fywwY3PAGE" allowfullscreen>	</iframe>
</div>

<div class="fb-like" style="position:absolute;top:94.5%;right:4%;" data-href="https://www.facebook.com/sensorsNITTrichy/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

<div id="form-container">
<?php
if(isset($_COOKIE['SID']))
echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
else
echo '<button id="login">Login</button> / <a target="_blank" href="../register"> Register</a>';
?>
</div>
	
<div id="login-container" class="hide">
<form id="login-form">
<div class="label"><b>Email ID or Sensors ID</b></div>
<input type="text" name="username" id="username" />
<div class="label"><b>Password</b></div>
<input type="password" name="pass" id="pass" />
<button name="signin" id="signin">Sign In</button>
<label id="error" style="color:red;display:none;padding:5px;">Invalid username or password</label>
<label id="success" style="color:green;display:none;padding:5px;">Login successful</label>
<br />
<div class="label">New user? Click here to <a href="../register">register</a></div>
<div id="return">Return to previous page</div>
</form>
</div>

</body>

<script>
function event_register(item){
$.post( "event-register.php", { event: $(item).attr("id") } );

}

$("#logout").click(function(){
    	$.post("../clearcookie.php","",function(data){location.reload();});

});

$("#login").click(function(){
	$("#login-container").removeClass("hide");
});
$("#return").click(function(){
	$("#login-container").addClass("hide");
});

$("#login-form").submit(function(){return false;});

$("#signin").click(function(){
var formData = $("#login-form input").serialize();

$.post("../verify.php",
	formData,
	function(data){
	if(data == 1){
		$("#error").css("display","none");
		$("#success").css("display","inline-block");
		location.reload();
	}
	else if(data == 0)
		$("#error").css("display","inline-block");
	});
});
</script>

</html>