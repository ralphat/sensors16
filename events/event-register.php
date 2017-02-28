<?php
	ini_set('display_errors','off');
	include '../connect.php';
	if(isset($_COOKIE['SID']))
	{
		$id = $db->escape_string($_COOKIE['SID']);
		$check = "SELECT * FROM `registration` WHERE id = ".$id;
		if(mysqli_num_rows($db->query($check))){
			$query = "UPDATE `registration` SET ".$_POST['event']." = 1 where id = ".$id;
			$db->query($query);
		}
	}
?>
