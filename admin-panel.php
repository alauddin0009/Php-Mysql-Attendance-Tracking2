<html>
<head>
<meta charset="utf-8">
<title>Admin Login Panel</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	   font{
	font-family: Raleway;
	}
	form[name=form1] { 
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
		<td colspan="3" align="center">
			<!--Admin ------------------------------------------------------------------------------------->
			<form name="form1" method="post">
			<table class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1">
			<tr>
			<td colspan="3" align="center" ><strong><font size=6 color="#C0C0C0">Admin Login</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font size=4 >Username</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="a_username" type="text" id="a_username" placeholder="Admin Username" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="a_password" type="password" id="a_password" placeholder="Admin Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="a_Submit" value="Login"></td>
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
<!--Admin Login-->
<?php
include("connect.php");
if(isset($_POST['a_Submit'])){
	// username and password sent from form
	$username=$_POST['a_username'];
	$password=$_POST['a_password'];
	$sql="SELECT * FROM `admin` WHERE `A_UserName`='$username' AND `A_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$_SESSION['a_username']=$username;
		header("location:admin.php");
	}
	else {
		header("location:redirect.php");
	}
	mysql_close($con);
}
?>