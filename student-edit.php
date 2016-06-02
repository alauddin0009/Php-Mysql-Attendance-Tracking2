<html>
<head>
<meta charset="utf-8">
<title>Student Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();
if(!isset($_SESSION['s_username'])){
	header("location: index.php");
	}
else {
	$st_username=$_SESSION['s_username'];
?>
<?php
include("header-all.php");
?>
<div class="content_main">
	<div class="back_logout_div" style="height:30px;">
		<div class="back_div" style="float:left; height:100%;"><p align="left"><a href="student.php" style="text-decoration:underline; color:#2E9AFE;">Back</a></P></div>
		<div class="back_div" style="float:right; height:100%;"><p align="right"><a href="logout.php"style="text-decoration:underline; color:#2E9AFE;">Log Out</a></P></div>
	</div>
<form name="form1" method="post">
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Edit Your Information</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Student's Name</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="S_Name" type="text" id="S_Name" placeholder="Enter Student Name" required></td>
	</tr>
	<tr>
		<td><font size=4 color="black">Student's Password</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_Password" type="password" id="S_Password" placeholder="Choose A Password" pattern=".{0}|.{5,10}" title="5-10 Characters" required></td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Phone/Mobile No</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_Phone" type="text" id="S_Phone" placeholder="Enter Phone No" required></td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">E-mail Id</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_Email" type="email" id="S_Email" placeholder="Enter E-mail" required></td>
		</font>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Change"></td>
	</tr>
</table>
</form> 
</div>
<?php
include("footer.php");
?>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	$S_Name=$_POST['S_Name'];
	$S_Password=$_POST['S_Password'];
	$S_Phone=$_POST['S_Phone'];
	$S_Email=$_POST['S_Email'];

	$query= "UPDATE `students` SET `S_Name`='$S_Name',`S_Password`='$S_Password',`S_Phone`='$S_Phone',`S_Email`='$S_Email' WHERE `S_UserName`='$st_username'";
	if(mysql_query($query))
		{
			echo  "<script>alert('Successfully saved in database')</script>";
		}
		else
		{
			echo "<script>alert('Something wrong')</script>";
		}
}
}//session closing
?>