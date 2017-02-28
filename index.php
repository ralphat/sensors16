<!DOCTYPE html>	
<html>

<head>
        <meta name="google-site-verification" content="AKxlCqUFO0nn7TVv3ocOMbn_oGaKuBOLnWkEI04upoE" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="viewport" content="height=device-height, initial-scale=0.5, maximum-scale=1"/>

	<title>Sensors'17</title>
	<meta name="author" content="Sarwesh Krishnan" />
	<meta name="description" content="Instrumentation and Contol Engineering department, NITT symposium website." />
	<meta name="keywords"  content="sensors,symposium,NITT,ICE,instrumentation,control" />
	<meta name="Resource-type" content="Document" />
	
    <link rel = "shortcut icon" href = "./tab_image.ico"/>
	<link type="text/css" rel="stylesheet" href="normalise.css" />
	<link type="text/css" rel="stylesheet" href="common.css" />
	<link type="text/css" rel="stylesheet" href="style_edited.css" />
        

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
<!--
<div id="form-container">
<?php
//if(isset($_COOKIE['SID']))
//echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
//else
//echo '<button id="login">Login</button> / <a target="_blank" href="./register"> Register</a>';
?>
</div>
-->
<div class="parallax">
	<!--<a target="_blank" href="http://www.uniqtechnologies.co.in/"><img id="uniq" src="./uniq/uniq.jpg" /></a>-->
	<div><img id="icea_logo" src="./website/icea_logo.png" /></div>
	<div><img id="sensors_middle" src="./website/sensors_middle.png" /></div>

	<a href="./workshops"><img id="workshops-link" src="./website/workshops.png"></a>	
	<a href="./events"><img id="events-link" src="./website/events.png"></a>
	<a href="./about"><img id="about-link" src="./website/about.png"></a>
	<a href="./contact"><img id="contact-link" src="./website/contact.png"></a>

<div id="sca">
	<h1>Sense&nbsp;.&nbsp;Control&nbsp;.&nbsp;Actuate&nbsp;.</h1>
</div>

<div id="form-container">
<?php
//if(isset($_COOKIE['SID']))
//echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
//else
//echo '<button id="login">Login</button> / <a target="_blank" href="./register">Register</a>';
?>
</div>
	
</div>
<!--
<div style="height:1000px;background-color:red;font-size:36px">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>
<div style="height:1000px;background-color:green;font-size:36px">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>
<div style="height:1000px;background-color:black;font-size:36px">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>
-->


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

<!--
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
<div>Sponsor Name Here</div>
</div>
-->
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
