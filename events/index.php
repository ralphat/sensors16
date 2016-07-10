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

	<title>Sensors'16</title>
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
	<button id="moore-" class="tab active" onclick="change(this);">Moore's Labyrinth</button>
	<button id="paper-" class="tab" onclick="change(this);">Paper Presentation</button>
	<button id="encipher-" class="tab" onclick="change(this);">Encipher</button>
	<button id="quiz-" class="tab" onclick="change(this);">Quiz</button>
	<button id="sensor-" class="tab" onclick="change(this);">Sensor Design</button>
</div>

<div class="desc-container">
	<div id="moore-d" class="show">
	<h2>MOORE’S LABYRINTH:</h2>
	<p>Interested in electronics and pretty good at it? Are you ready to fight others to know where you stand? Here's your battlefield. We welcome you to get rattled in the maze where not just your theoretical skills matter, but your practical skills too.</p><p><b>EVENT MANAGER:</b>&nbsp; Vishnu ( 94898 08241 )</p></br>
	<div class="dont-show" id="moores_labyrinth_r">You've registered for Moore's Labyrinth.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['moores_labyrinth']==1)
	echo 'You\'ve registered for Moore\'s Labyrinth';
	else
	echo '<button id="moores_labyrinth" onclick="event_register(this);">Register for Moore\'s Labyrinth</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
	?>
	</div>
	
	<div id="paper-d" class="dont-show">
	<h2>PAPER PRESENTATION:</h2
	<p><b>“EVERYTHING HAS NOT YET BEEN INVENTED. THE WORLD IS JUST BEGINNING”</b></p>
	<p>Fuel your brain to think of ideas that have never existed. Ignite within you a spark of innovation to improve the lives around you. Here is the platform where you can present your innovative ideas to everyone.</p><p><b>EVENT MANAGER:</b>&nbsp; Hariharan ( 91763 27069 )</p><p><b>DEADLINE:</b>&nbsp; 9th March, 2016 6pm.</p><p>Send in your submissions to paperpresentation@sensors.org.in</p> </br>
	<div class="dont-show" id="paper_presentation_r">You've registered for Paper Presentation.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['paper_presentation']==1)
	echo 'You\'ve registered for Paper presentation.';
	else
	echo '<button id="paper_presentation" onclick="event_register(this);">Register for Paper Presention</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
	?>
	</div>
	
	<div id="encipher-d" class="dont-show">
	<h2>ENCIPHER:</h2>
	<p>Want to put your coding skills to test? Here’s a head start to use your grey cells to find solution for problems posed by us. Programming languages are C, C++ and Java. This contest calls for people who think themselves worthy, come! Put your coding skills to test.</p><p><b>EVENT MANAGER:</b>&nbsp; Tushara ( 72007 43499 )</p></br>
	<div class="dont-show" id="encipher_r">You've registered for Encipher.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['encipher']==1)
	echo 'You\'ve registered for Encipher.';
	else
	echo '<button id="encipher" onclick="event_register(this);">Register for Encipher</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
	?>
	</div>
	
	<div id="quiz-d" class="dont-show">
	<h2>QUIZ:</h2>
	<p>Do you know exactly how measurements are done and how the instruments work? To test your understanding of instrumentation world take this quiz to measure your skills. It's a chance to expose your mind to the world of technology and innovation. Challenging to know where you stand, this is the quiz event. Compete with others and win exciting prizes.</p><p><b>EVENT MANAGER:</b>&nbsp; Apuroop ( 82202 85481 )</p></br>
	<div class="dont-show" id="quiz_r">You've registered for Quiz.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['quiz']==1)
	echo 'You\'ve registered for Quiz.';
	else
	echo '<button id="quiz" onclick="event_register(this);">Register for Quiz</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
	?>
	</div>
	
	<div id="sensor-d" class="dont-show">
	<h2>SENSOR DESIGN:</h2>
	<p>You can design a sensor but are you really good at it?  Do you have the spark in you to take sensing to the next level?</p><p>Unleash your sensor designing skills, let your skills reign the domain. Let us give this chance to pave the path for futuristic sensors.</p><p><b>EVENT MANAGER:</b>&nbsp; Atul ( 95437 82397 )</p></br>
	<div class="dont-show" id="sensor_design_r">You've registered for Sensor Design.</div>
	<?php
	if(isset($_COOKIE['SID'])){
	if($event['sensor_design']==1)
	echo 'You\'ve registered for Sensor Design.';
	else
	echo '<button id="sensor_design" onclick="event_register(this);">Register for Sensor Design</button>';
	}
	else{
	echo '<i>Kindly login to register.</i>';
	}
	?>
	</div>

	</div>
</div>

<div id="marquee-container"><marquee onmouseover="this.stop();" onmouseout="this.start();">Rule book updated.&nbsp;<a target="_blank" style="text-decoration:underline;color:#fff;margin-right:100%;" href="./rulebook.pdf">Click here to download rulebook</a>The deadline for paper presentaion is 6pm, 9th of March, 2016. Kindly submit it to paperpresentaion@sensors.org.in</marquee></div>

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