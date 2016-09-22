<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6136702";
$password = "CiEZDmJRed";
$dbname = "sql6136702";


$con=mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
// if(mysql_select_db($dbname)){
// 	echo "Connection Success!";
// }else{
// 	echo "Failed to connect!";
// }
?>