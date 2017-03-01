
<?php
ini_set('display_errors','off');
include '../connect.php';
if(isset($_COOKIE["SID"])){
	$id = $db->escape_string($_COOKIE["SID"]);
	$event_query = "SELECT * FROM `registration` WHERE id = ".$id;
	$event_list = $db->query($event_query);
	$workshop = $event_list->fetch_assoc();
}
?>
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
	<link type="text/css" rel="stylesheet" href="../events/Event-style.css" />

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
}(document, 'script', 'facebook-jssdk'));
</script>

<div id="bg">
<div id="header">
	<div id="page">WORKSHOPS</div>
	<a href="../"><div id="logo"></div></a>
	<div id="link-container">
		<a href="../">Home</a>
		<a href="../about">About</a>
		<a href="../workshops">Workshops</a>
		<a href="../events">Events</a>
		<a href="../team">Team</a>
		<a href="../contact">Contact</a>
	</div>
</div>

<div class="tab-container">
	<button id="carrom-" class="tab active" onclick="change(this);">Carrom Arm using Gesture Tracking</button>
	<button id="stat-" class="tab" onclick="change(this);">Statistically Speaking</button>
	<button id="sign-" class="tab" onclick="change(this);">SignAloud Smart Gloves</button>
	<button id="aero-" class="tab" onclick="change(this);">AEROControl</button>
	<button id="speech-" class="tab" onclick="change(this);">Speech Controlled Bot</button>
	<button id="techni-" class="tab" onclick="change(this);">Technicolor - The Smart Pen</button>
	<button id="digit-" class="tab" onclick="change(this);">D1G1T R3C0GN1S3R</button>
</div>

<div class="desc-container">
	<div id="carrom-d" class="show">
		<h1> CARROM ARM USING GESTURE TRACKING </h1>
		<h3> Play Carrom using a Robot and Image Processing, the Engineer’s way </h3>
		<div style="display: inline-block;">
		<img src="./workshop/2_carrom.jpg" class="image" style="float: left; margin: 20px 0; max-width: 40%;" />
		<img src="./workshop/2_carrom2.jpg" class="image" style="float: right; margin: 20px 0; width: 60%" />
		</div>
		<p>Wondered how it is like to play carrom without a real friend? Sounds bizarre? Not anymore. Plunge
		into the ocean of robotics by building a robotic arm which not only imitates you, but also plays
		carrom. Your arm movement will be tracked using a camera, and the robotic arm plays carrom for
		you based on your gesture. You will learn to construct a 2 DoF arm and position it using servo
		motors. Workshop content also includes Inverse kinematics, the basics of Arduino microcontroller
		and tracking your arm using Image Processing in Python.<br /> <br />For more details or queries, contact :<br />Mohammed Naveed ( 91596 47127 )</p><br />
		<div class="info">
		<div class="dont-show" id="carrom_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['carrom']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="carrom" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
	<div id="stat-d" class="dont-show">
		<h1>STATISTICALLY SPEAKING</h1>
		<h3> Step foot into the next big thing in the market, DATA SCIENCES </h3>
		<img src="./workshop/1_stat.jpg" class="image" />
		<p>The Harvard Business Review recently proclaimed the Data Scientist to be the snazziest job of the
		21st Century. Data Science, in very technical terms, is an amalgamation of statistical methods,
		probability theory, programming and business. It finds extensive use in day-to-day transactions at
		banks, shops and E-commerce websites. In today's world, we are drowning in information, but we
		hardly have any knowledge! In this workshop, we aim to teach you how to discover knowledge from
		unstructured, dirty and non-uniform data. With us, you will explore data science and business
		analytics via standard tools like R, Python, Excel, Sqlite and so on. On completion, participants
		would have also completed designing a Sentiment analysis app using R.<br /> <br />For more details or queries, contact :<br />Pragyaditya ( 87542 18356 )</p><br />
		<div class="info">
		<div class="dont-show" id="stat_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['stat']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="stat" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
	<div id="sign-d" class="dont-show">
		<h1 class="right">SignAloud SMART GLOVES</h1><h3>Convert American Sign Language to Voice using Smart Gloves and Flex Sensors</h3>
		<img src="./workshop/6_smartglove.jpg" class="image" />
		<p>From using human motion to generate electricity, to Snap Inc’s highly sophisticated camera
		equipped sunglasses that allow you to record 10 second clips, Wearable technology is the new
		dazzling leap in smart electronics.<br />
		In this workshop we unveil to you our own contribution to wearable technology: a glove which
		helps the speech impaired communicate with the world. Using the powerful field of machine
		learning, this glove is trained to recognize gestures from the American Sign Language and
		translate it to speech. The workshop will delve into details of circuitry involved in this technology.
		We will also provide an introduction to single board computers used in wearables.
		Step into the next era with us!<br /> <br />For more details or queries, contact :<br />Subramanian ( 98407 40700 )</p><br />
		<div class="info">
		<div class="dont-show" id="sign_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['sign']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="sign" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
	<div id="aero-d" class="dont-show">
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
		<div class="dont-show" id="aero_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['aero']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="aero" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
	<div id="speech-d" class="dont-show">
		<h1>SPEECH CONTROLLED BOT</h1> <h3>Build and Run a Speech guided autonomous robot</h3>
		<img src="./workshop/3_speechbot.png" class="image" />
		<p>“Your request is my command!”<br />
		Sensors ’17 provides you, an opportunity to make your own Jarvis! Control robots with the power
		of speech and make them move in the assigned directions. The voice signals will be processed in a
		smart phone using an app, sent to the robot wirelessly and the directions will be inferred. You will
		be guided through concepts such as mobile robots, Arduino microcontrollers, speech recognition,
		electronics and app development using MIT app inventor.<br />
		Join us in giving life to Machines.<br /> <br />For more details or queries, contact :<br />Bala Durgesh ( 98415 49244 )</p><br />
		<div class="info">
		<div class="dont-show" id="speech_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['speech']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="speech" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
	<div id="techni-d" class="dont-show">
		<h1>TECHNICOLOUR - THE SMART PEN</h1><h3>Science imitates art? The Smart Pen</h3>
		<img src="./workshop/5_smartpen.jpg" class="image" />
		<p>An artist's tool is only as great as an artist. But, a great tool can help redefine what the artist sees.
		This year, Sensors'17 brings to you, a device that frees you from the finite number of colours in a
		paint box and lets you use the natural colours from around you!<br />
		In this workshop, you are taught to work with a two ended Smart Pen – with an RGB color sensor at
		one and an electronic nib at the other. The sensor can convert the colours you point at to its RGB
		components and feed them to an Arduino as ADC values. A resistive touch pad is provided, which
		will display the very same colours on your laptop screen in shapes that you make using the nib.
		Embedded systems concepts such as UART, ADC, Interrupts will be explained with a java based IDE
		called Processing. Whether you’re a coder, a tronix person or just an appreciator of art, this
		workshop is bound to be a colourful affair!<br /> <br />For more details or queries, contact :<br />Venkatesh ( 73584 05467 )</p><br />
		<div class="info">
		<div class="dont-show" id="techni_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['techni']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="techni" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
	<div id="digit-d" class="dont-show">
		<h1 class="right">D1G1T R3C0GN1S3R</h1><h3>Using Artificial Neural Networks and Machine Learning</h3>
		<img src="./workshop/7_digit.png" class="image" />
		<p>2016 went down as “The year of Machine Learning”. If you are amazed by the design of Facebook or
		thrilled by the concept of a ‘Driverless Car’ and excited about ML but don’t have any clear idea of it,
		move closer to Silicon Valley by attending this workshop and designing your own Digit Recognizer.<br />
		Starting from basics of ML, the content of the workshop includes the types of Learning, basics of
		ANN, establishing the relationship between Biological Neuron and Artificial Neuron and
		implementing the topology of an ANN in MATLAB.<br />
		The digit recognition algorithm is explained from scratch through four basic stages namely loading,
		preprocessing, ANN model training and testing for new inputs. By the end of the workshop you
		would be able to write your own code for approximating any function using an ANN model in
		MATLAB.<br /> <br />For more details or queries, contact :<br /> Hemprasanth ( 90037 39889 )</p><br />
		<div class="info">
		<div class="dont-show" id="digit_r">You've registered for this workshop.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($workshop['digit']==1)
			echo 'You\'ve registered for this workshop.';
			else
			echo '<button id="digit" onclick="workshop_register(this);">Register for this workshop</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
		</div>
	</div>
</div>
</div>

<div id="schedule-container">
		<p align="center"><b>WORKSHOPS SCHEDULE</b>
<br>
Workshops will commence for a total duration of 4 hours. There  are two slots per day.
<br>
Day 1: (11/3/2017)
Morning slot: 9am to 1pm
Evening slot:  2pm to 6pm
<br>
Day 2: (12/3/2017)
Morning slot: 9am to 1pm
Evening slot:  2pm to 6pm
<br>
All 7 workshops will happen simaltaneously.</p>
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
<div class="label"><b>Email ID</b></div>
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
$.post( "../events/event-register.php", { event: $(item).attr("id") }, function(){
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

$("#carrom-").removeClass("active");
$("#stat-").removeClass("active");
$("#aero-").removeClass("active");
$("#techni-").removeClass("active");
$("#sign-").removeClass("active");
$("#speech-").removeClass("active");
$("#digit-").removeClass("active");

$("#"+id).addClass("active");

$("#carrom-d").removeClass("show");
$("#stat-d").removeClass("show");
$("#aero-d").removeClass("show");
$("#techni-d").removeClass("show");
$("#sign-d").removeClass("show");
$("#speech-d").removeClass("show");
$("#digit-d").removeClass("show");

$("#carrom-d").addClass("dont-show");
$("#stat-d").addClass("dont-show");
$("#aero-d").addClass("dont-show");
$("#techni-d").addClass("dont-show");
$("#sign-d").addClass("dont-show");
$("#speech-d").addClass("dont-show");
$("#digit-d").addClass("dont-show");

$("#"+id+"d").removeClass("dont-show");
$("#"+id+"d").addClass("show");
}
</script>

</html>
