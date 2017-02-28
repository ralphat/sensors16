
<!DOCTYPE html>	
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=0.5" />

	<title>Sensors'17</title>
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
<h1>STATISTICALLY SPEAKING <h1> <h3> Step foot into the next big thing in the market, DATA SCIENCES </h3>
<img src="./workshop/1_stat.jpg" class="image" />
<p>The Harvard Business Review recently proclaimed the Data Scientist to be the snazziest job of the 21st Century. Data Science, in very technical terms, is an amalgamation of statistical methods, probability theory, programming and business. It finds extensive use in day-to-day transactions at banks, shops and E-commerce websites. In today's world, we are drowning in information, but we hardly have any knowledge! Through this workshop, we aim to teach you how to discover knowledge from unstructured, dirty and non-uniform data. Through the course of the workshop, you will explore data science and business analytics via standard tools like R, Python, Excel, Sqlite and so on. By the end of the day, we would have also completed designing a Sentiment analysis app using R.<br /> <br />For more details or queries, contact :<br />Pragyaditya ( 87542 18356 )</p><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
<div class="line"></div>
<h1> CARROM ARM USING GESTURE TRACKING <h1> <h3> Play Carrom using a Robot and Image Processing, the Engineer’s way </h3>
<div style="display: inline-block;">
<img src="./workshop/2_carrom.jpg" class="image" style="float: left; margin: 20px 0; max-width: 40%;" /><img src="./workshop/2_carrom2.jpg" class="image" style="float: right; margin: 20px 0; width: 60%" />
</div>
<p>Ever thought of jumping into the world of robotics? Ever dreamt of playing carrom with your friend the engineer’s way? In this workshop you will build a robotic arm which imitates you, equipped to play carrom. Your arm movement will be tracked using a camera, and the robotic arm plays carrom for you based on your movement. You will learn to construct a 2 DoF arm and position it using servo motors. You will also be taught inverse kinematics, the basics of Arduino microcontroller and how to track your arm using image processing in Python.<br /> <br />For more details or queries, contact :<br />Mohammed Naveed ( 91596 47127 )</p><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
<div class="line"></div>

<h1>SPEECH CONTROLLED BOT</h1> <h3>Build and Run a Speech guided autonomous robot</h3>
<img src="./workshop/3_speechbot.png" class="image" />
<p>The world is seeing the rise of robots and machine intelligence and this is your chance to look at just the tip of the iceberg! The workshop will teach you how to build a robot that obeys your orders and move in the required direction. The voice signals will be processed in a smart phone using an app, sent to the robot wirelessly and the directions will be inferred. You will learn the basics of mobile robots, Arduino microcontrollers, speech recognition, electronics and app development using MIT app inventor. This is your chance to give life to your machines!<br /> <br />For more details or queries, contact :<br />Bala Durgesh ( 98415 49244 )</p><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
<div class="line"></div>

<h1 class="right">AEROcontrol</h1> <h3>Get core-ed and go sky high by Flight Instrumentation and Aerodynamic Control</h3>
<img src="./workshop/4_aero.jpg" class="image" />
<p>Always wanted to be a pilot and fly that super-sonic jet of yours? Now is the time to see your childhood dreams come to reality with the AEROcontrol Workshop. This workshop gives you an opportunity to understand the theory of the functioning of an aircraft and its design. Innovate by coming up with your own design of an RC aircraft and learn to fabricate it from scratch. An interactive lecture and design session will be delivered to aid your understanding as well.</p>
<ul> Course Highlights :
	<li>Introduction to Design Algorithm of an aircraft.</li>
	<li>Basics of Flight & Aeronautics.</li>
	<li>Stability & Control of an Aircraft.</li>
	<li>Instrumentation involved in Aerodynamics modeling.</li>
<br /> <br />For more details or queries, contact :<br />Sameer ( 94446 41311 )</ul><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
<div class="line"></div>

<h1>TECHNICOLOUR</h1><h3>The Smart Pen</h3>
<img src="./workshop/5_smartpen.jpg" class="image" />
<p>An artist's tool is only as great as an artist. But, a great tool can help redefine what the artist sees.
Gone are the days when an artist needs a mixing palette or a bunch of pencils to do their artwork.
This year, Sensors'17 presents to you an attractive, one-of-a-kind workshop where we borrow the
colours from around us. We will make use of a magic stylus with an RGB sensor attached at its end
to scan the color in the environment by extracting the red, green and the blue components. These
are brought to life by using the other end of the stylus on a touch-pad, eventually realized on a
laptop screen using the Processing IDE. This March, get ready to scan, scribble and have a taste of
the natural colors present in the universe. Do attend this workshop to have all the colors of the
world in your palette!<br /> <br />For more details or queries, contact :<br />Venkatesh ( 73584 05467 )</p><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
<div class="line"></div>

<h1 class="right">SignAloud SMART GLOVES</h1><h3>Convert American Sign Language to Voice using Smart Gloves and Flex Sensors</h3>
<img src="./workshop/6_smartglove.jpg" class="image" />
<p>It’s compact, sleek and fits seamlessly with your everyday life. Wearable technology is the next
dazzling leap in smart electronics. From using human motion to generate electricity, to Snap Inc’s
highly sophisticated camera equipped sunglasses that allow you to record 10 second clips, the
possibilities are limitless. Just like the human imagination.
In our workshop we unveil to you our own contribution to wearable technology: a glove which helps
the speech impaired communicate with the world. Using the powerful field of machine learning, this
glove is trained to recognize gestures from the American Sign Language and translate it to speech.
Details about the basics of the circuits used in the glove will be provided in our workshop. We will
also provide an introduction to single board computers used in wearables.
Step into the next era with us!<br /> <br />For more details or queries, contact :<br />Subramanian ( 98407 40700 )</p><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
<div class="line"></div>
<h1 class="right">D1G1T R3C0GN1S3R</h1><h3>Using Artificial Neural Networks and Machine Learning</h3>
<img src="./workshop/7_digit.png" class="image" />
<p>Wondering how machines mimic human cognition? Excited about Machine Learning and don't have
any clear idea of it? If you have these questions in mind, then this workshop is your doorway.
Evolved from the study of pattern recognition and computational learning theory in artificial
intelligence, machine learning explores the study and construction of algorithms that can learn from
and make predictions on data. This will be your first step in a fascinating and intriguing journey of
Machine Learning. In this workshop you will learn about how to make your computer recognize
handwritten digits. We'll walk you through the basics of Machine Learning and MATLAB followed by
Artificial Neural Networks, the most widely used algorithm in this field.
Using an ANN, you'll learn to implement the digit recognizer to make your computer recognize the
digits written by you.<br /> <br />For more details or queries, contact :<br /> Hemprasad ( 90037 39889 )</p><br />
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
	echo '<i>Registration will begin shortly.</i>';
	}
?>
</div>
</div>
</div>

<!--
<div id="form-container">
//<?php
//if(isset($_COOKIE['SID']))
//echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
//else
//echo '<button id="login">Login</button> / <a target="_blank" href="../register"> Register</a>';
?>
</div>
-->
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
