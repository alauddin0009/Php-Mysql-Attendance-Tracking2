<html>
<head>
<meta charset="utf-8">
<title>Adding Teacher Record</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	form[name=form1] { 
		width:60%;
		background:#EFF8FB;
		padding:30px 10px 30px 20px;
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
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Add A Teacher</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Teacher's ID</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="T_ID" type="text" id="T_ID" placeholder="Id Is Automatic" readonly></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Teacher's Name</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="T_Name" type="text" id="T_Name" placeholder="Enter Teacher Name" required></td>
	</tr>
	<tr>
		<td><font size=4 color="black">Teacher's Password</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="T_Password" type="password" id="T_Password" pattern=".{0}|.{5,10}" title="5-10 Characters" placeholder="Choose A Password" required></td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Phone/Mobile No</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="T_Phone" type="text" id="T_Phone" placeholder="Enter Phone No" required></td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">E-mail Id</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="T_Email" type="email" id="T_Email" placeholder="Enter E-mail" required></td>
		</font>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Add Teacher"></td>
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
	$T_Name=$_POST['T_Name'];
	$T_Password=$_POST['T_Password'];
	$T_Phone=$_POST['T_Phone'];
	$T_Email=$_POST['T_Email'];

	$query= "INSERT INTO `teachers`(`T_Name`, `T_Password`, `T_Phone`, `T_Email`) VALUES ('$T_Name','$T_Password','$T_Phone','$T_Email')";
	if(mysql_query($query))
		{
			echo  "<script>alert('Successfully saved in database')</script>";
		}
		else
		{
			//echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
		mysql_close($con);

//Collecting Current T_Id for creating TABLE
include("connect.php");
$result = mysql_query("SHOW TABLE STATUS WHERE `Name` = 'teachers'");
$data = mysql_fetch_assoc($result);
$next_increment = $data['Auto_increment']-1;
echo $next_increment;
mysql_close($con);
//Creating Table with current T_Id
include("connect.php");
$query2="CREATE TABLE IF NOT EXISTS `$next_increment` (Code VARCHAR(10) NOT NULL, Sub_Name VARCHAR(90) NOT NULL, CurrentYear INT(8) NOT NULL,
T_Id INT(8) NOT NULL, Class VARCHAR(15) NOT NULL, Batch VARCHAR(10) NOT NULL, Semester VARCHAR(15) NOT NULL, Section VARCHAR(10) NOT NULL, Credit float(5) NOT NULL)";
if(mysql_query($query2))
{
	//echo  "<script>alert('Teacher Table has been created')</script>";
}
else
{
	die(mysql_error());
}
}
}//Closing of Isset
?>