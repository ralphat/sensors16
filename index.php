<!DOCTYPE html>	
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="viewport" content="height=device-height, initial-scale=0.5, maximum-scale=1"/>

	<title>Sensors'16</title>
	<meta name="author" content="Sarwesh Krishnan" />
	<meta name="description" content="Instrumentation and Contol Engineering department, NITT symposium website." />
	<meta name="keywords"  content="sensors,symposium,NITT,ICE,instrumentation,control" />
	<meta name="Resource-type" content="Document" />
	
        <link rel = "shortcut icon" href = "./tab_image.ico"/>
	<link type="text/css" rel="stylesheet" href="normalise.css" />
	<link type="text/css" rel="stylesheet" href="common.css" />
	<link type="text/css" rel="stylesheet" href="style.css" />
        

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>
<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1063823873635962";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="form-container">
<?php
if(isset($_COOKIE['SID']))
echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
else
echo '<button id="login">Login</button> / <a target="_blank" href="./register"> Register</a>';
?>
</div>

	<div id="background-container"></div>
	<a id="about-link" href="./about"></a>
	<a id="workshops-link" href="./workshops"></a>	
	<a id="events-link" href="./events"></a>
	<a id="team-link" href="./team"></a>
	<a id="contact-link" href="./contact"></a>
	
<a target="_blank" href="http://www.uniqtechnologies.co.in/"><img id="uniq" src="./uniq/uniq.jpg" /></a>
	
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
<div class="label">New user? Click here to <a href="./register">register</a></div>
<div id="return">Return to previous page</div>
</form>
</div>

<div id="uniq-container">
<div id="uniq-link">
<hr>
<a href="http://www.inplanttraining.org/">Inplant training</a><br /><br />
<a href="http://www.internshipinchennai.com/">Internship</a><br /><br />
<a href="http://www.ieeefinalyearprojects.org/">IEEE projects</a><br /><br />
<a href="http://www.androidtraininginchennai.com/">Android training</a><br /><br />
<hr>
<div class="fb-like" data-href="https://www.facebook.com/uniqtechnologies/" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
</div>
<div>UNIQ technologies</div>
</div>

<div class="fb-like" id="fbLike" style="position:absolute;top:94.5%;right:4%;" data-href="https://www.facebook.com/sensorsNITTrichy/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

</body>
<script>
$("#logout").click(function(){
    	$.post("clearcookie.php","",function(data){location.reload();});

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

$.post("verify.php",
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