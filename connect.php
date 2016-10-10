<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auddin";



// $servername = "mysql9.000webhost.com";
// $username = "a5678155_ala";
// $password = "ala0009";
// $dbname = "a5678155_ala";


$con=mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
// if(mysql_select_db($dbname)){
// 	echo "Connection Success!";
// }else{
// 	echo "Failed to connect!";
// }
?>