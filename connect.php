<?php
$servername = "localhost";
//$username = "sensom6o_admin";
$username = "root";
//$password = "";
$password = "groves";
//$dbname = "sensom6o_sensors";
$dbname = "sensors17";

// Create connection
$con = mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
