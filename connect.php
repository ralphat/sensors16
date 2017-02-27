<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "groves";
$dbname = "sensors18";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
if ($db->connect_errno)
  {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  }
?>
