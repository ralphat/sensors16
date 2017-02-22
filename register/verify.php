<?php

ini_set('display_errors','off');

if(empty($_GET["id"])){
        header("Location: index.html");
        exit;
	}
include '../connect.php';
$hashedId = $_GET["id"];

$mainCheck = "select * from `main` where MD5(Email) = '".$hashedId."'";
$mainCheckQuery = mysql_query($mainCheck);

if(mysql_num_rows($mainCheckQuery)){
$output = "User already registered.";
$registration = "done";
}
else{
$checkIfExist = "insert into main(Name,DOB,Email,Password,Mobile,College,Department,Year,Gender) select * from `temp` where MD5(Email) = '".$hashedId."'";

if(mysql_query($checkIfExist))
$output = "User registered.";
else{
	header("Location: index.html");
        exit;
}
}
$id = mysql_fetch_array(mysql_query($mainCheck));
$output = $output." Your Sensors'16 ID is ".$id['ID'];
if($registration!="done"){
$create_registration_query = "insert into registration(ID) values (".$id['ID'].")";
mysql_query($create_registration_query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sensors'16</title>
	<meta name="author" content="Sarwesh Krishnan" />
	<meta name="description" content="Instrumentation and Contol Engineering department, NITT symposium website." />
	<meta name="keywords"  content="sensors,symposium,NITT,ICE,instrumentation,control" />
	<meta name="Resource-type" content="Document" />
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	
	<style>
	body{
	background-color:#024986;
	}
	
	h1{
	font-family:'Source Sans Pro';
	margin:250px auto;
	color:#fff;
	}
	
	a{
	font-color:#000;
	text-decoration:none;
	color:#000;
	}
	a:hover{
	border-bottom:1px solid #000;
	}
	</style>
</head>
<body>
<center><h1><?php echo $output;?></h1></center>
<br />
<center><a href="./index.html">Create another account</a></center>
</body>
</html>