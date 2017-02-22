<?php
ini_set('display_errors','off');

if(isset($_POST)){
if($_POST["user"]=="admin" && $_POST["pass"]=="peace"){
setcookie("admin", 1);
header("location: ./adminView.php");
}
}

if(!isset($_COOKIE["admin"]))
echo "<form action='./adminView.php' method='post'>user<input type='text' name='user' /><br />pass<input type='password' name='pass' /><br/><input type='submit' value='submit' /></form>";

else{
include 'connect.php';

$query = "SELECT * FROM main";
$result = mysql_query($query);
//iterate over all the rows
echo "<table border='1'>";
echo "<tr><td>SID</td><td>Name</td><td>DOB</td><td>Email</td><td>Phone</td><td>College</td><td>Department</td><td>Year</td><td>Gender</td></tr>";
while($row = mysql_fetch_assoc($result)){
    //iterate over all the fields
    echo "<tr>";
    foreach($row as $key => $val){
        //generate output
        if($key != "Password")
        echo "<td>" .$val. "</td>";
    }
    echo "</tr>";
}
echo "</table>";
}
?>