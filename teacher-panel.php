<html>
<head>
<meta charset="utf-8">
<title>Teacher Login Panel || Attendance Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	form[name=form2] { 
		background:#EFF8FB;
		padding:30px 30px 30px 50px;
		margin:40px 30px 30px 180px;
	}   
	tr{
		height:40px;
	}
	* {
		font-family: Raleway;
	}
</style>
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
			<!--teacher ------------------------------------------------------------------------------------->
			<form name="form2" method="post">
			<table align='center' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1">
			<tr>
			<td colspan="3" align="center"><strong><font  size=6 color="#C0C0C0">Teacher Login</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font color="black" size=4 >Teacher's Id</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="t_id" type="text" id="t_id" placeholder="Teacher's Id" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_password" type="password" id="t_password" placeholder="Teacher's Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="t_Submit" value="Login"></td>
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
<!--Theacher Login-->
<?php
include("connect.php");
if(isset($_POST['t_Submit'])){
	// username and password sent from form
	$t_id=$_POST['t_id'];
	$password=$_POST['t_password'];
	$sql="SELECT * FROM `teachers` WHERE `T_Id`='$t_id' AND `T_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$_SESSION['t_id']=$t_id;
		header("location:teacher.php?t_id=$t_id");
	}
	else {
		header("location:redirect.php");
	}
	mysql_close($con);
	
}
?>
