<html>
<head>
<meta charset="utf-8">
<title>Adding Subject || Attendance Management System</title>
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
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Add A Subject</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Subject Code</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="Code" type="text" id="Code" placeholder="Enter Subject Code" required></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Subject Title</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="Sub_Name" type="text" id="Sub_Name" placeholder="Enter Subject Name" required></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Class/Department</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="Class" class="textfield05" id="Class">
				<option value="CSE">CSE</option>
				<option value="BBA">BBA</option>
				<option value="MBA">MBA</option>
				<option value="M.CSE">M.CSE</option>
				<option value="Other">Other</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><font size=4 color="black">Semester</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select  style="width: 170px;" name="Semester" class="textfield05" id="Semester" required>
				<option value="1st">1st</option><option value="2nd">2nd</option><option value="3rd">3rd</option>
				<option value="4th">4th</option><option value="5th">5th</option><option value="6th">6th</option><option value="7th">7th</option>
				<option value="8th">8th</option><option value="9th">9th</option><option value="10th">10th</option><option value="11th">11th</option>
				<option value="12th">12th</option><option value="Common">Common</option>
			</select>		
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Credit</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="Credit" type="text" id="Credit" placeholder="Enter Semester (ex: 0,1,1.5,2..)" required></td>
		</font>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Add Subject"></td>
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
	$Code=$_POST['Code'];
	$Sub_Name=$_POST['Sub_Name'];
	$Class=$_POST['Class'];
	$Semester=$_POST['Semester'];
	$Credit=$_POST['Credit'];

	$query= "INSERT INTO `subjects`(`Code`, `Sub_Name`, `Class`, `Semester`, `Credit`) VALUES ('$Code','$Sub_Name','$Class','$Semester','$Credit')";
	if(mysql_query($query))
		{
			echo  "<script>alert('Successfully saved in database')</script>";
		}
		else
		{
			//echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
}

}//Closing of Isset
?>