<?php
$servername = "localhost";
//$username = "sensom6o_admin";
$username = "root";
//$password = "";
$password = "vishnugt";
//$dbname = "sensom6o_sensors";
$dbname = "sensors17";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
//mysql_select_db($dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
