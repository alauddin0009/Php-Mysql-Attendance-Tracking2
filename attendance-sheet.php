<html>
<head>
<meta charset="utf-8">
<title>Attendance Sheet</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	form[name=form1] { 
		width:67%;
		background:#EFF8FB;
		padding:30px 70px 30px 20px;
		margin:30px 40px 30px 130px;
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
<form name="form1" method="post">
<table class="black" width="650" border="0" align="center" cellpadding="0" cellspacing="1">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Create Attendance Sheet</font></strong></td>
	</tr>
	<tr>
		<td width="530"><font color="black" size=4 >I Want To Create Attendance Sheet For (No. of Subject)</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="170"><input name="no_of_sub" type="number" max="12" min="1" id="no_of_sub" placeholder="Enter no of subject" required></td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Go"></td>
	</tr>
</table>
</div>
<?php
include("footer.php");
?>
<?php
if(isset($_POST['Submit'])){
	$no_of_sub=$_POST['no_of_sub'];
	header("location:attendance-input.php?id=$no_of_sub");
	
}

}//closing of Isset
?>