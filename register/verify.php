<?php
ini_set('display_errors','off');
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
include '../connect.php';

$username = $_POST['id'];

if($username){
	$sql = "SELECT * FROM `main` where `email`='".$username."'";
	if(!$result = $db->query($sql)){
	    die('There was an error running the query [' . $db->error . ']');
	}
	if(mysqli_num_rows($result)){
		$row = $result->fetch_assoc();
		$id = $row['id'];
		echo $id;
		$update_query = "UPDATE `main` SET registered = 1 where `email`='".$username."'";
		if(!$result = $db->query($update_query)){
	    	die('There was an error running the query [' . $db->error . ']');
		}
	} else {
		echo "Empty returned";
	}
} else {
	echo "Empty string";
}
$db->close();
?>