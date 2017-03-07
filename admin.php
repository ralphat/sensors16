<?php
ini_set('display_errors','On');
include 'connect.php';

$i = 1;
$sql = "SELECT * FROM main";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Info</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="bootstrap.css" />

	<style type="text/css">
		.table-fixed{
		  width: 100%;
		  background-color: #f3f3f3;
		  tbody{
		    height:200px;
		    overflow-y:auto;
		    width: 100%;
		    }
		  thead,tbody,tr,td,th{
		    display:block;
		  }
		  tbody{
		    td{
		      float:left;
		    }
		  }
		  thead {
		    tr{
		      th{
		        float:left;
		       background-color: #f39c12;
		       border-color:#e67e22;
		      }
		    }
		  }
		}
	</style>
</head>
<body>
	<table class="table table-striped table-bordered table-fixed">
		<thead>
			<tr style="background-color: black; color: white;">
				<th>#</th>
				<th>Id</th>
				<th>Name</th>
				<th>College</th>
				<th>Codequest</th>
				<th>Paper Expo</th>
				<th>Quiz</th>
				<th>Tars</th>
				<th>Trail by Tronix</th>
				<th>Statistically Speaking</th>
				<th>Carrom Arm</th>
				<th>Speech Bot</th>
				<th>Aerocontrol</th>
				<th>Technicolor</th>
				<th>Sign Language</th>
				<th>Digit Recogniser</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	$sql = "SELECT * FROM registration WHERE id = ".$row['id'];
				    	$res = $db->query($sql);
				    	while($r = $res->fetch_assoc()) {
			?>
			
			<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["college"]; ?></td>
				<td><?php echo $r["codequest"]; ?></td>
				<td><?php echo $r["expo"]; ?></td>
				<td><?php echo $r["quiz"]; ?></td>
				<td><?php echo $r["tars"]; ?></td>
				<td><?php echo $r["tbyt"]; ?></td>
				<td><?php echo $r["stat"]; ?></td>
				<td><?php echo $r["carrom"]; ?></td>
				<td><?php echo $r["speech"]; ?></td>
				<td><?php echo $r["aero"]; ?></td>
				<td><?php echo $r["techni"]; ?></td>
				<td><?php echo $r["sign"]; ?></td>
				<td><?php echo $r["digit"]; ?></td>
			</tr>
			<?php
				    	}
				    }
				} else {
				    echo "0 results";
				}
				$db->close();
			?>
		</tbody>
	</table>
</body>
</html>

