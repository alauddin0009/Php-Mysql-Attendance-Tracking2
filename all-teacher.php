<html>
<head>
<meta charset="utf-8">
<title>Retrive All Teacher || Attendance Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	.back_logout_div{
		width:90%;
		padding-left:40px;
		padding-top:40px;
	}
	tr{
		height:35px;
		border:none;
	}
	.teacher_table{
		margin-left:100px;
		margin-top:30px;
	}
	td{
		width:22%;
	}
	* {
		font-family: Raleway;
	}
</style>
</head>
<?php
session_start();
if(!isset($_SESSION['a_username'])){
	header("location: index.php");
	}
else {
?>
<?php
include("header-all.php");
?>
<div class="content_main">
	<div class="back_logout_div" style="height:30px;">
		<div class="back_div" style="float:left; height:100%;"><p align="left"><a href="admin.php" style="text-decoration:underline; color:#2E9AFE;">Back</a></P></div>
		<div class="back_div" style="float:right; height:100%;"><p align="right"><a href="logout.php"style="text-decoration:underline; color:#2E9AFE;">Log Out</a></P></div>
	</div>
<table class="teacher_table" align="center" border="1">
	<tr>
		<td>Teacher's Id</td>
		<td>Teacher's Name</td>
		<td>Phone</td>
		<td>E-mail</td>
	</tr>
	
	<?php 
					include("connect.php");
					$query= "SELECT * FROM `teachers` ORDER BY T_Id DESC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<tr><td>".$row['T_Id']."</td><td>".$row['T_Name']."</td><td>".$row['T_Phone']."</td><td>".$row['T_Email']."</td></tr>";
						}
					}
					mysql_close($con);
				?>
	
</table>
</div>
<?php
include("footer.php");
?>
<?php
}//session close
?>