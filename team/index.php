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
<img src="./team/anurudh.jpg" width="150" height="150" />
<div class="name">Anurudh Charummel</div>
<div class="designation">Chairman, ICEA</div>
</div>
<div class="pic">
<img src="./team/vasanth.jpg" width="150" height="150" />
<div class="name">Vasanth</div>
<div class="designation">Overall Coordinator</div>
</div>
<div class="pic">
<img src="./team/sajith.jpg" width="150" height="150" />
<div class="name">Sajith AB</div>
<div class="designation">Head, Organising Committee</div>
</div>
<div class="pic">
<img src="./team/vishwa.jpg" width="150" height="150" />
<div class="name">Vishwarupa</div>
<div class="designation">Treasurer</div>
</div>
<div class="pic">
<img src="./team/vamshi.jpg" width="150" height="150" />
<div class="name">Vamshi</div>
<div class="designation">Head, Marketing</div>
</div>
<div class="pic">
<img src="./team/pradeep.jpg" width="150" height="150" />
<div class="name">A Pradeep</div>
<div class="designation">Technical Secretary</div>
</div>
<div class="pic">
<img src="./team/ria.jpg" width="150" height="150" />
<div class="name">Ria</div>
<div class="designation">Editor, ICEA Newsletter</div>
</div>
<div class="pic">
<img src="./team/narendar.jpg" width="150" height="150" />
<div class="name">S. Narendar</div>
<div class="designation">Head, Workshops</div>
</div>
<div class="pic">
<img src="./team/akhil.jpg" width="150" height="150" />
<div class="name">N Akhil Sai Kiran</div>
<div class="designation">Head, Events</div>
</div>
<div class="pic">
<img src="./team/apuroop.jpg" width="150" height="150" />
<div class="name">M Apuroop</div>
<div class="designation">Co-Head, Events</div>
</div>
<div class="pic">
<img src="./team/arvind.jpg" width="150" height="150" />
<div class="name">V. Arvind</div>
<div class="designation">Head, Public Relations</div>
</div>
<div class="pic">
<img src="./team/renuka.jpg" width="150" height="150" />
<div class="name">Renuka Rajkumar</div>
<div class="designation">Head, Public Relations & Hospitality</div>
</div>
<div class="pic">
<img src="./team/amara.jpg" width="150" height="150" />
<div class="name">Akhilesa Amara</div>
<div class="designation">Head, Hospitality</div>
</div>
<div class="pic">
<img src="./team/medha.jpg" width="150" height="150" />
<div class="name">Medhasri Yekula</div>
<div class="designation">Head, Ambience</div>
</div>
<div class="pic">
<img src="./team/sudharshan.jpg" width="150" height="150" />
<div class="name">Sudharshan Suresh</div>
<div class="designation">Head, Content</div>
</div>
<div class="pic">
<img src="./team/Ln.jpg" width="150" height="150" />
<div class="name">Lakshminarayanan</div>
<div class="designation">Head, Design</div>
</div>
<div class="pic">
<img src="./team/rt.jpg" width="150" height="150" />
<div class="name">Aarthi Krishnan</div>
<div class="designation">Head, CSG</div>
</div>

</div>
</div>

<div class="fb-like" style="position:absolute;top:94.5%;right:4%;" data-href="https://www.facebook.com/sensorsNITTrichy/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

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