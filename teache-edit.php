<html>
<head>
<meta charset="utf-8">
<title>Edit Teacher Information || Attendance Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	form[name=form1] { 
		width:60%;
		background:#EFF8FB;
		padding:30px 10px 30px 20px;
		margin:30px 40px 30px 230px;
	} 
	.back_logout_div{
		width:90%;
		padding-left:40px;
		padding-top:40px;
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
if(!isset($_SESSION['t_id'])){
	header("location: index.php");
	}
else {
	$te_id=$_GET['t_id'];
?>
<?php
include("header-all.php");
?>
<div class="content_main">
	<div class="back_logout_div" style="height:30px;">
		<div class="back_div" style="float:left; height:100%;"><p align="left"><a href="teacher.php?t_id=<?php echo $te_id;?>" style="text-decoration:underline; color:#2E9AFE;">Back</a></P></div>
		<div class="back_div" style="float:right; height:100%;"><p align="right"><a href="logout.php"style="text-decoration:underline; color:#2E9AFE;">Log Out</a></P></div>
	</div>
<table align="center">
	<tr>
		<td colspan="3" align="center" text-align="center">
			<!--Admin ------------------------------------------------------------------------------------->
			<form name="form1" method="post">
			<table class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1">
			<tr>
			<td colspan="3" align="center" ><strong><font size=6 color="#C0C0C0">Edit Information</font></strong></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_password" pattern=".{0}|.{5,10}" type="password" id="t_password" placeholder="Password at least 5 word" required></td>
			</font>
			</tr>
			<tr>
			<td><font size=4 color="black">Name</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_name" type="text" id="t_name" placeholder="Name" required></td>
			</font>
			</tr><tr>
			<td><font size=4 color="black">Phone</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_phone" type="text" id="t_phone" placeholder="Phone" required></td>
			</font>
			</tr>
			<tr>
			<td><font size=4 color="black">E-mail</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_email" type="email" id="t_email" placeholder="E-mail" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="a_Submit" value="Change"></td>
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
<?php
include("connect.php");
if(isset($_POST['a_Submit'])){
	// username and password sent from form
	$t_password=$_POST['t_password'];
	$t_name=$_POST['t_name'];
	$t_phone=$_POST['t_phone'];
	$t_email=$_POST['t_email'];
	$sql="UPDATE `teachers` SET `T_Name`='$t_name',`T_Password`='$t_password',`T_Phone`='$t_phone',`T_Email`='$t_email' WHERE `T_Id`='$te_id'";
	$result=mysql_query($sql);


	if($result){
		echo  "<script>alert('Your information have been modified.')</script>";
	}
	else {
		echo  "<script>alert('Something wrong')</script>";
	}
	mysql_close($con);
}
}//session closedir
?>