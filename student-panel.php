<html>
<head>
<meta charset="utf-8">
<title>Student Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php 
session_start();
?>
<?php
include("header-all.php");
?>
<div class="content_main">
<table align="center">
	<tr>
		<td>
			<!--Student------------------------------------------------------------------------------------->
			<form name="form3" method="post">
			<table align='left' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
			<tr>
			<td colspan="3" align="center"><strong><font  size=6 color="#C0C0C0">Student Login</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font color="black" size=4 >Username</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="s_username" type="text" id="s_username" placeholder="Student's Username" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="s_password" type="password" id="s_password" placeholder="Student's Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="s_Submit" value="Login"></td>
			</tr>
			</table>
			</form>
		</td>
	</tr>
</table>
</div>
<?php
include("footer.php");
?>
<!--Student Login-->
<?php
include("connect.php");
if(isset($_POST['s_Submit'])){
	// username and password sent from form
	$username=$_POST['s_username'];
	$password=$_POST['s_password'];
	$sql="SELECT * FROM `students` WHERE `S_UserName`='$username' AND `S_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$_SESSION['s_username']=$username;
		header("location:student.php");
	}
	else {
		header("location:redirect.php");
	}
	mysql_close($con);
}
?>
