<?php
ini_set('display_errors','off');
include 'connect.php';

$value = 'something from somewhere';


$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string(md5($_POST['pass']));

if(empty($username)||empty($password))
echo 0;
else{
$sql1 = "select id from main where email='".$username."' and password='".$password."'";
$res1=mysql_query($sql1);
$row1=mysql_fetch_array($res1);

//echo $row1;

if($row1[0]>0){
setcookie("SID", $row1["id"]);
echo 1;
}
else
echo 0;
}
?>
