<?php
header("Location: ../index.php");
ini_set('display_errors','off');
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
include '../connect.php';

$username = $_GET['id'];

if($username){
	$sql = "SELECT * FROM `main` where MD5(email) = '".$username."'";
	if(!$result = $db->query($sql)){
	    die('There was an error running the query [' . $db->error . ']');
	}
	if(mysqli_num_rows($result)){
		$row = $result->fetch_assoc();
		$id = $row['id'];
		echo "Verification successful!\nYour SID is " . $id;
		$update_query = "UPDATE `main` SET registered = 1 where MD5(email)='".$username."'";
		if(!$result = $db->query($update_query)){
	    	die('There was an error running the query [' . $db->error . ']');
		}
		$insert = "INSERT INTO `registration` VALUES ('".$id."', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
		//echo $insert;
		if(!$result = $db->query($insert)){
	    	die('There was an error running the query [' . $db->error . ']');
		}
	} else {
		echo "Your registeration was unsuccessful.\n Kindly register again";
	}
} else {
	echo "Your registeration was unsuccessful.\n Kindly register again";
}
$db->close();
?>
