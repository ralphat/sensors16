<?php
	ini_set('display_errors','off');
        
        if(empty($_POST)){
        	header("Location: index.html");
        	exit;
	}
	$error = 0;
	if(empty($_POST['name']))$error++;
	else if (!preg_match("/^[a-zA-Z. ]*$/",$_POST['name']))$error++;

	if(empty($_POST['dateofbirth']))$error++;
	else if(substr_count($_POST['dateofbirth'],'/')!=2)$error++;
	
	$dob=explode("/",$_POST['dateofbirth']);
	if(!checkdate($dob[1],$dob[0],$dob[2]))$error++;
	
	if(isset($_POST['sex']) && (!($_POST['sex']=='Male' || $_POST['sex']=='Female')) )$error++;
	
	if(empty($_POST['phonenumber']))$error++;
	else if(strlen($_POST['phonenumber'])!=10)$error++;

	if(empty($_POST['college']))$error++;
	
	if(!is_numeric($_POST['phonenumber']) || (substr_count(".",$_POST['phonenumber']) || substr_count("-",$_POST['phonenumber'])))$error++;
	
	if(empty($_POST['email']))$error++;
	
	$email=explode("@",$_POST['email']);
	if(count($email)!=2 || substr_count($email[1],".")==0 || $email[0]=="")$error++;
	else if($email[1]=="spambot.org" || $email[1]=="mailnator.com")$error++;
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)$error++;
	
	if(!isset($_POST['select_dept']))$error++;
	else if(isset($_POST['select_dept']) && (!($_POST['select_dept']=='archi' || $_POST['select_dept']=='cse' || $_POST['select_dept']=='eee' || $_POST['select_dept']=='ece' || $_POST['select_dept']=='chem' || $_POST['select_dept']=='ice' || $_POST['select_dept']=='ei'|| $_POST['select_dept']=='civ'|| $_POST['select_dept']=='meta' || $_POST['select_dept']=='prod' || $_POST['select_dept']=='other')) )$error++;
	
	if(!isset($_POST['select_year']))$error++;
	else if(isset($_POST['select_dept']) && (!($_POST['select_year']=='1' || $_POST['select_year']=='2' || $_POST['select_year']=='3' || $_POST['select_year']=='4' || $_POST['select_year']=='5' )) )$error++;

	if(empty($_POST['password']) || $_POST['password']!=$_POST['repassword'] || !preg_match("/^[a-zA-Z0-9_]*$/",$_POST['password']))
	$error++;
	
	if($error == 0){
		include '../connect.php';
                $college = mysql_real_escape_string($_POST['college']);
                $email_id = mysql_real_escape_string($_POST['email']);

		$checkIfExist = "select * from `main` where Email = '".$email_id."'";
		$query = mysql_query($checkIfExist);
		if(!mysql_num_rows($query)){
		
		$checkInTemp = "select * from `temp` where Email = '".$email_id."'";
		$queryTemp = mysql_query($checkInTemp);
		
		if(!mysql_num_rows($queryTemp))
		$insertIntoTemp="INSERT INTO `temp` VALUES ('".$_POST['name']."','".$_POST['dateofbirth']."','".$email_id."','".md5($_POST['password'])."','".$_POST['phonenumber']."','".$college."','".$_POST['select_dept']."','".$_POST['select_year']."','".$_POST['sex']."')";
 		else 
 		$insertIntoTemp="UPDATE `temp` SET Name = '".$_POST['name']."',DOB = '".$_POST['dateofbirth']."',Email = '".$email_id."',Password = '".md5($_POST['password'])."',Mobile = '".$_POST['phonenumber']."', College = '".$college."',Department = '".$_POST['select_dept']."',Gender = '".$_POST['sex']."',Year='".$_POST['select_year']."' where Email = '".$email_id."' ";
 		
 		if (!mysql_query($insertIntoTemp))
 			die('Error: ' . mysql_error());
  
                require_once 'mailToUser.php';
 		}
		else{
		$output = "Email ID already registered.";
		}
		mysql_close($con);	
	}
	else{
        	header("Location: index.html");
        	exit;
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
<center><h1><?php echo $output;?></h1><center>
<br />
<center><a href="./index.html">Create another account</a></center>
</body>
</html>