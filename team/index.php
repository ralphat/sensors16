<!DOCTYPE html>	
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=0.5" />

	<title>Sensors'16</title>
	<meta name="author" content="Sarwesh Krishnan" />
	<meta name="description" content="Instrumentation and Contol Engineering department, NITT symposium website." />
	<meta name="keywords"  content="sensors,symposium,NITT,ICE,instrumentation,control" />
	<meta name="Resource-type" content="Document" />
	
        <link rel = "shortcut icon" href = "../tab_image.ico"/>
	<link type="text/css" rel="stylesheet" href="../normalise.css" />
	<link type="text/css" rel="stylesheet" href="../common.css" />
	<link type="text/css" rel="stylesheet" href="team-style.css" />

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
	<div id="page">TEAM</div>
	<a href="../"><div id="logo"></div></a>
	<div id="link-container">
	<a href="../about">About</a>
	<a href="../workshops">Workshops</a>
	<a href="../events">Events</a>
	<a href="../team">Team</a>
	<a href="../contact">Contact</a>
	</div>
</div>
<div id="team-bg"></div>
<div id="team-container">
<div class="pic">
<img src="./team/hani.jpg" width="150" height="150" />
<div class="name">Hani</div>
<div class="designation">Chairman, ICEA</div>
</div>
<div class="pic">
<img src="./team/monish.jpg" width="150" height="150" />
<div class="name">Monish</div>
<div class="designation">Overall Coordinator</div>
</div>
<div class="pic">
<img src="./team/renuka.jpg" width="150" height="150" />
<div class="name">Renuka</div>
<div class="designation">Treasurer</div>
</div>
<div class="pic">
<img src="./team/deepak.jpg" width="150" height="150" />
<div class="name">Deepak</div>
<div class="designation">Head, Workshops</div>
</div>
<div class="pic">
<img src="./team/lakshmi.jpg" width="150" height="150" />
<div class="name">Lakshmi</div>
<div class="designation">Head, Events</div>
</div>
<div class="pic">
<img src="./team/subashree.jpg" width="150" height="150" />
<div class="name">Subashree</div>
<div class="designation">Head, Public Relations</div>
</div>
<div class="pic">
<img src="./team/kranthi.jpg" width="150" height="150" />
<div class="name">Kranthi</div>
<div class="designation">Head, Public Relations</div>
</div>
<div class="pic">
<img src="./team/sarwesh.jpg" width="150" height="150" />
<div class="name">Sarwesh</div>
<div class="designation">Head, CSG</div>
</div>
<div class="pic">
<img src="./team/tanmai.jpg" width="150" height="150" />
<div class="name">Tanmai</div>
<div class="designation">Head, Hospitality</div>
</div>
<div class="pic">
<img src="./team/soundarya.jpg" width="150" height="150" />
<div class="name">Soundarya</div>
<div class="designation">Head, Ambience</div>
</div>
<div class="pic">
<img src="./team/vj.jpg" width="150" height="150" />
<div class="name">Vyjayanthi</div>
<div class="designation">Head, Content</div>
</div>
<div class="pic">
<img src="./team/praveen.jpg" width="150" height="150" />
<div class="name">Praveen</div>
<div class="designation">Head, Design</div>
</div>

</div>
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