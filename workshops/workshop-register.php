<?php
	ini_set('display_errors','off');
	include '../connect.php';
	if(isset($_COOKIE['SID']))
	{
		$id = mysql_real_escape_string($_COOKIE['SID']);
		$check = "select * from registration where ID=".$id;
		if(mysql_num_rows(mysql_query($check))){
		if($_POST['workshop'] == "gesture_control"){
			$query = "update registration set gesture_control=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['workshop'] == "data_science"){
			$query = "update registration set data_science=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['workshop'] == "design"){
			$query = "update registration set design=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['workshop'] == "machine_learning"){
			$query = "update registration set machine_learning=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['workshop'] == "brain_wave"){
			$query = "update registration set brain_wave=1 where ID=".$id;
			mysql_query($query);
		}
		else if($_POST['workshop'] == "music_production"){
			$query = "update registration set music_production=1 where ID=".$id;
			mysql_query($query);
		}
		}
	}
?>