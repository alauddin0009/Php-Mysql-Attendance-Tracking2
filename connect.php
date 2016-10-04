<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auddin";


$con=mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
// if(mysql_select_db($dbname)){
// 	echo "Connection Success!";
// }else{
// 	echo "Failed to connect!";
// }
?>