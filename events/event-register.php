<?php
	ini_set('display_errors','off');
	include '../connect.php';
	if(isset($_COOKIE['SID']))
	{
		$id = mysql_real_escape_string($_COOKIE['SID']);
		$check = "select * from registration where ID=".$id;
		if(mysql_num_rows(mysql_query($check))){
		if($_POST['event'] == "moores_labyrinth"){
			$query = "update registration set moores_labyrinth=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['event'] == "paper_presentation"){
			$query = "update registration set paper_presentation=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['event'] == "encipher"){
			$query = "update registration set encipher=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['event'] == "quiz"){
			$query = "update registration set quiz=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['event'] == "sensor_design"){
			$query = "update registration set sensor_design=1 where ID=".$id;
			mysql_query($query);
		}
		}
	}
?>