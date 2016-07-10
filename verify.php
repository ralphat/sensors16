<?php
ini_set('display_errors','off');
include 'connect.php';

$value = 'something from somewhere';


$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string(md5($_POST['pass']));

if(empty($username)||empty($password))
echo 0;
else{
$sql1 = "select count(*),ID from main where ID='".$username."' and Password='".$password."'";
$sql2 = "select count(*),ID from main where Email='".$username."' and Password='".$password."'";
$res1=mysql_query($sql1);
$res2=mysql_query($sql2);
$row1=mysql_fetch_array($res1);
$row2=mysql_fetch_array($res2);

if($row1[0]>0){
setcookie("SID", $row1["ID"]);
echo 1;
}
else if($row2[0]>0){
setcookie("SID", $row2["ID"]);
echo 1;
}
else
echo 0;
}
?>