<?php
ini_set('display_errors','off');
include '../connect.php';
if(isset($_COOKIE["SID"])){
	$id = mysql_real_escape_string($_COOKIE["SID"]);
	$event_query = "select * from registration where ID=".$id;
	$event_list = mysql_query($event_query);
	$event = mysql_fetch_array($event_list);
}
?>
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
	<link type="text/css" rel="stylesheet" href="Event-style.css" />

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
	<div id="page">EVENTS</div>
	<a href="../"><div id="logo"></div></a>
	<div id="link-container">
	<a href="../about">About</a>
	<a href="../workshops">Workshops</a>
	<a href="../events">Events</a>
	<a href="../team">Team</a>
	<a href="../contact">Contact</a>
	</div>
</div>

<div class="tab-container">
	<button id="moore-" class="tab active" onclick="change(this);">Codequest</button>
	<button id="paper-" class="tab" onclick="change(this);">Exposition</button>
	<button id="encipher-" class="tab" onclick="change(this);">The Sensors General Quiz</button>
	<button id="quiz-" class="tab" onclick="change(this);">Find the TARS – Line Follower Event</button>
	<button id="sensor-" class="tab" onclick="change(this);">Trial by Tronix</button>
</div>

<div class="desc-container">
	<div id="moore-d" class="show">
	<h2>CODEQUEST</h2>
	<p>if (You’re a coder)<br />goto Sensors;<br />else<br />Printf("Well, there’s no be er place to start learning!");<br />Sensors:<br />Printf(“ Participate in Codequest\n Run your fingers through the keyboard\n Compile your brains out and watch the magic unfold onscreen”);</p><p><b>EVENT MANAGERS :</b><br />Ankit ( 82202 93471 ) <br /> Muralidharan ( 80983 88128 )</p></br>
	<div class="dont-show" id="moores_labyrinth_r">You've registered for Codequest.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['moores_labyrinth']==1)
	echo 'You\'ve registered for Codequest';
	else
	echo '<button id="moores_labyrinth" onclick="event_register(this);">Register for Codequest</button>';
	}
	else{
	echo '<i>Registrations will begin shortly.</i>';
	}
	?>
	</div>
	
	<div id="paper-d" class="dont-show">
	<h2>EXPOSITION</h2
	<p><b>Small minds discuss people, Average minds discuss events, Great minds discuss ideas<br />~ Eleanor Roosevelt</b></p>
	<p>Sensors serves as an amazing pla orm to bring out your interests, talents and depth of knowledge in your preferred domains. We invite you to present your ideas to inquisi ve minds from the engineering world, in this technical extravaganza.</p><p><b>EVENT MANAGERS :</b><br />Apuroop ( 82202 85481 )<br />Vaneesha ( 99522 14684 )</p></p> </br>
	<div class="dont-show" id="paper_presentation_r">You've registered for Paper Exposition.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['paper_presentation']==1)
	echo 'You\'ve registered for Paper Exposition.';
	else
	echo '<button id="paper_presentation" onclick="event_register(this);">Register for Paper Exposition</button>';
	}
	else{
	echo '<i>Registrations will begin shortly.</i>';
	}
	?>
	</div>
	
	<div id="encipher-d" class="dont-show">
	<h2>THE SENSORS GENERAL QUIZ</h2>
	<p>It's at this time that the tidbits of trivia you accumulated over time come in handy. Participate in this general themed quiz, work out questions and rack your head until the answer finally strikes you!</p>
	<p><b>EVENT RULES:</b><br />
	- Teams of 3, from colleges only. No restrictions on number of teams.<br />
	- Written prelims followed by finals.<br />
	- It is a general quiz, not specific to instrumentation and control.<br />
	- 6-8 teams qualify for finals.</p><p><b>EVENT MANAGER :</b><br />Surya ( 96889 71832 )</p></br>
	<div class="dont-show" id="encipher_r">You've registered for The Sensors General Quiz.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['encipher']==1)
	echo 'You\'ve registered for The Sensors General Quiz.';
	else
	echo '<button id="encipher" onclick="event_register(this);">Register for The Sensors General Quiz</button>';
	}
	else{
	echo '<i>Registrations will begin shortly.</i>';
	}
	?>
	</div>
	
	<div id="quiz-d" class="dont-show">
	<h2>FIND THE TARS – LINE FOLLOWER EVENT</h2>
	<p>A new face has been added to the solar system's family portrait: Scientists have discovered a new dwarf planet looping around the sun in the region beyond Pluto. TARS is a car-sized robotic rover exploring on this planet to collect information. It has to reach the base station within the stipulated time but it hasn’t returned yet. Your mission is to find whether the planet is habitable or not by reaching out to TARS. Build an autonomous line follower robot which would negotiate through obstacles, inversions and determine the correct path to find TARS.</p><p><b>EVENT MANAGERS :</b><br />Lokesh ( 89037 81031 )<br />Sathwik ( 82202 99470 )</p></br>
	<div class="dont-show" id="quiz_r">You've registered for Find the TARS.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['quiz']==1)
	echo 'You\'ve registered for Find the TARS.';
	else
	echo '<button id="quiz" onclick="event_register(this);">Register for Find the TARS</button>';
	}
	else{
	echo '<i>Registrations will begin shortly.</i>';
	}
	?>
	</div>
	
	<div id="sensor-d" class="dont-show">
	<h2>TRIAL BY TRONIX</h2>
	<p>For those who have been longing for an opportunity to flaunt their circuit design skills – the ultimate challenge to test your electronics knowledge is here. The event consists of two rounds: with a preliminary written round and a final hardware round. The written round will comprise of questions on basic analog, digital electronics and circuit design tasks. Around 8-10 teams will be shortlisted based on their performance to participate in the final round which involves the practical implementation of circuits for problem statements given on the spot.</p><p><b>EVENT MANAGERS :</b><br /> Krishna ( 87542 18578 )<br />Tejaswi ( 9487949352 )</p></br>
	<div class="dont-show" id="sensor_design_r">You've registered for Sensor Design.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['sensor_design']==1)
	echo 'You\'ve registered for Sensor Design.';
	else
	echo '<button id="sensor_design" onclick="event_register(this);">Register for Sensor Design</button>';
	}
	else{
	echo '<i>Registrations will begin shortly.</i>';
	}
	?>
	</div>

	</div>
</div>
<!--
<div id="marquee-container"><marquee onmouseover="this.stop();" onmouseout="this.start();">Rule book updated.&nbsp;<a target="_blank" style="text-decoration:underline;color:#fff;margin-right:100%;" href="./rulebook.pdf">Click here to download rulebook</a>The deadline for paper presentaion is 6pm, 9th of March, 2016. Kindly submit it to paperpresentaion@sensors.org.in</marquee></div>
-->
<div class="fb-like" style="position:absolute;top:94.5%;right:4%;" data-href="https://www.facebook.com/sensorsNITTrichy/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
<!--
<div id="form-container">
<?php
//if(isset($_COOKIE['SID']))
//echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
//else
//echo '<button id="login">Login</button> / <a target="_blank" href="../register"> Register</a>';
?>
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
<div class="label">New user? Click here to <a href="../register">register</a></div>
<div id="return">Return to previous page</div>
</form>
</div>

</body>

<script>
function event_register(item){
$.post( "event-register.php", { event: $(item).attr("id") }, function(){
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

function change(item){
var id= $(item).attr("id");

$("#moore-").removeClass("active");
$("#paper-").removeClass("active");
$("#encipher-").removeClass("active");
$("#quiz-").removeClass("active");
$("#sensor-").removeClass("active");

$("#"+id).addClass("active");

$("#moore-d").removeClass("show");
$("#paper-d").removeClass("show");
$("#encipher-d").removeClass("show");
$("#quiz-d").removeClass("show");
$("#sensor-d").removeClass("show");

$("#moore-d").addClass("dont-show");
$("#paper-d").addClass("dont-show");
$("#encipher-d").addClass("dont-show");
$("#quiz-d").addClass("dont-show");
$("#sensor-d").addClass("dont-show");

$("#"+id+"d").removeClass("dont-show");
$("#"+id+"d").addClass("show");
}
</script>

</html>