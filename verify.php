<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
ini_set('display_errors','off');
include 'connect.php';

$username = $db->escape_string($_POST['username']);
$password = $db->escape_string(md5($_POST['pass']));

if(empty($username)||empty($password))
echo 0;
else{
$sql = "SELECT id FROM `main` WHERE email = '".$username."' AND password='".$password."' AND registered = '1'";
$result = $db->query($sql);
$row = $result->fetch_assoc();

if(mysqli_num_rows($result)){
setcookie("SID", $row['id']);
echo 1;
}
else
echo 0;
}
?>

