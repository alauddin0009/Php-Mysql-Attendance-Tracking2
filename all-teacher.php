<html>
<head>
<meta charset="utf-8">
<title>Student Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
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
<p align="right"><a href="logout.php">Log Out</a></P>
<table align="center" border="1">
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