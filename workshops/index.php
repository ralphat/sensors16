<?php
ini_set('display_errors','off');
include '../connect.php';
if(isset($_COOKIE["SID"])){
	$id = mysql_real_escape_string($_COOKIE["SID"]);
	$workshop_query = "select * from registration where ID=".$id;
	$workshop_list = mysql_query($workshop_query);
	$workshop = mysql_fetch_array($workshop_list);
}
?>
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
	<link type="text/css" rel="stylesheet" href="workshops-style.css" />

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
	<div id="page">WORKSHOPS</div>
	<a href="../"><div id="logo"></div></a>
	<div id="link-container">
	<a href="../about">About</a>
	<a href="../workshops">Workshops</a>
	<a href="../events">Events</a>
	<a href="../team">Team</a>
	<a href="../contact">Contact</a>
	</div>
</div>

<div id="workshop-container">
<h1>Gesture controlled robotic manipulator</h1>
<img src="./workshop/drawing-bot.jpg" class="image" />
<p>An arm that mirror’s your arm! In this workshop you’ll learn to create a robotic arm that does exactly this. Through the duration of the workshop the participants shall learn about inverse kinematics, serial manipulators, basic electronics for building such a device and the mechanical fabrication required. A basic MCU peripheral shall be used to control the arm.</p><br />
<div class="info">
<div class="dont-show" id="gesture_control_r">You've registered for this workshop.</div>
<?php
	if(isset($_COOKIE['SID'])){
	if($workshop['gesture_control']==1)
	echo 'You\'ve registered for this workshop.';
	else
	echo '<button id="gesture_control" onclick="workshop_register(this);">Register for this workshop</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
?>
</div>
<div class="line"></div>

<h1 class="right">Data science and business analytics</h1>
<img src="./workshop/data-science.jpg" class="image" />
<p>We live in a world where the ambitious have to always stay one step ahead to even be a worthy competitor. This just goes on to show how much the world of business and economics has changed. This interesting workshop will teach you how to clean data sets for prediction. In addition to this one shall learn about the different parameters that are used as well as the algorithms for prediction like Neural Nets and Forest. Statistics for prediction shall be taught alongside marker basket analysis and other business analytics case studies.</p><br />
<div class="info">
<div class="dont-show" id="data_science_r">You've registered for this workshop.</div>
<?php
	if(isset($_COOKIE['SID'])){
	if($workshop['data_science']==1)
	echo 'You\'ve registered for this workshop.';
	else
	echo '<button id="data_science" onclick="workshop_register(this);">Register for this workshop</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
?>
</div>
<div class="line"></div>

<h1>Design workshop- illustration and aftereffects in Photoshop.</h1>
<img src="./workshop/design.jpg" class="image" />
<p>This exciting and innovative workshop will educate students how to design from scratch. It shall teach the art of branding and you’ll know the concepts behind the logos of major brands. Apart from this, important differences between Illustrator and Photoshop will be highlighted. However, the highlight of this workshop is when the student will learn how to integrate Photoshop and Illustrator for motion graphics in after effects.</p><br />
<div class="info">
<div class="dont-show" id="design_r">You've registered for this workshop.</div>
<?php
	if(isset($_COOKIE['SID'])){
	if($workshop['design']==1)
	echo 'You\'ve registered for this workshop.';
	else
	echo '<button id="design" onclick="workshop_register(this);">Register for this workshop</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
?>
</div>
<div class="line"></div>

<h1 class="right">Machine learning using python</h1>
<img src="./workshop/machine.jpg" class="image" />
<p>Machine learning is an up and coming field that interests everyone and has applications in various areas. Through this workshop one will be given an introduction to machine learning using Python. Some of the topics that will be covered will be regression and classification. By the end of the workshop all those who’ve attended would have learnt to create an e-mail spam filter.</p><br />
<div class="info">
<div class="dont-show" id="machine_learning_r">You've registered for this workshop.</div>
<?php
	if(isset($_COOKIE['SID'])){
	if($workshop['machine_learning']==1)
	echo 'You\'ve registered for this workshop.';
	else
	echo '<button id="machine_learning" onclick="workshop_register(this);">Register for this workshop</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
?>
</div>
<div class="line"></div>

<h1>Brain wave robotics and hexapod</h1>
<img src="./workshop/brain-wave.jpg" class="image" />
<p>Hexapod is a six legged robot which can walk over any terrain and can climb stairs through wireless communication. It detects sound and moves towards it. Through this workshop some of the things you shall learn are detection of source of sound and the reason for the C-shaped legs. During the course of building this bot you shall learn its specifications, how to control its legs and the Bluetooth control which ultimately binds all the various operations. <p>The special traits of this bot are inverted operation, step climbing and ramp climbing.</p>
EOG (Brain Wave Robot) controls devices using brainwave signals via electrodes. Then it is decoded to control devices (robot control) and used for actions like sending mail to medical assistance in case of medical emergency. The inspiration behind this bot was to create an efficient method of communication with the external environment to help paralyzed people. Apart from medical applications it can also be used for smart home control as well.</p><br />
<div class="info">
<div class="dont-show" id="brain_wave_r">You've registered for this workshop.</div>
<?php
	if(isset($_COOKIE['SID'])){
	if($workshop['brain_wave']==1)
	echo 'You\'ve registered for this workshop.';
	else
	echo '<button id="brain_wave" onclick="workshop_register(this);">Register for this workshop</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
?>
</div>
<div class="line"></div>

<h1 class="right">Music production workshop</h1>
<img src="./workshop/music-production.jpg" class="image" />
<p>At sensors forget the mundane technical workshops, we present to you an interesting twist- Music Production workshop! Exercise your ear and brain and it's a skill you can enjoy for years to come. The workshop will begin with an introduction to the scales of music theory, such as notations and scales. Introduction to music will be taught by concepts such as usage of DAW, basics of mixing and mastering a track. The workshop will contain exposure to eastern as well as western music production.</p><p><b>REQUIREMENT: PARTICIPANTS NEED TO BRING THEIR LAPTOPS FOR THIS WORKSHOP</b></p><br />
<div class="info">
<div class="dont-show" id="music_production_r">You've registered for this workshop.</div>
<?php
	if(isset($_COOKIE['SID'])){
	if($workshop['music_production']==1)
	echo 'You\'ve registered for this workshop.';
	else
	echo '<button id="music_production" onclick="workshop_register(this);">Register for this workshop</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
?>
</div>
<div class="line"></div>
</div>
</div>


<div id="form-container">
<?php
if(isset($_COOKIE['SID']))
echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
else
echo '<button id="login">Login</button> / <a target="_blank" href="../register"> Register</a>';
?>
</div>

<div class="fb-like" style="position:absolute;top:94.5%;right:4%;" data-href="https://www.facebook.com/sensorsNITTrichy/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	
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
function workshop_register(item){
$.post( "workshop-register.php", { workshop: $(item).attr("id") }, function(){
$("#"+$(item).attr("id")+"_r").removeClass('dont-show');
$("#"+$(item).attr("id")+"_r").addClass('show');
$("#"+$(item).attr("id")).css('display','none');} );
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