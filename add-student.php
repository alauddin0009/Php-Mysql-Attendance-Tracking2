<html>
<head>
<meta charset="utf-8">
<title>Add A Student Record || Attendance Management System</title>
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
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Add A Student</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Student's ID</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="S_Id" type="text" id="S_Id" placeholder="Enter Student Id" required></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Student's Name</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="S_Name" type="text" id="S_Name" placeholder="Enter Student Name" required></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Session</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<!-- <input name="Session" type="text" id="Session" placeholder="Enter Session" required> -->
			<select style="width: 160px;" name="Session" class="textfield05" id="Session">
				<option value="2011-2012">2011-2012</option>
				<option value="2012-2013">2012-2013</option>
				<option value="2013-2014">2013-2014</option>
				<option value="2014-2015">2014-2015</option>
				<option value="2015-2016">2015-2016</option>
				<option value="2016-2017">2016-2017</option>
				<option value="2017-2018">2017-2018</option>
				<option value="2018-2019">2018-2019</option>
				<option value="2019-2020">2019-2020</option>
				<option value="2020-2021">2020-2021</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Class/Department</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 160px;" name="Class" class="textfield05" id="Class">
				<option value="CSE">CSE</option>
				<option value="BBA">BBA</option>
				<option value="MBA">MBA</option>
				<option value="M.CSE">M.CSE</option>
				<option value="Other">Other</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><font size=4 color="black">Batch</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="Batch" type="number" min="1" id="Batch" placeholder="Enter Batch(Only Number)" required></td>
	</tr>
	<tr>
		<td><font size=4 color="black">Section</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<!-- <input name="Section" type="text" id="Section" placeholder="Enter Section" required> -->
			<select style="width: 160px;" name="Section" class="textfield05" id="Section">
				<option value="Common">Common</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><font size=4 color="black">Student's Username</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_UserName" type="text" title="5-10 Characters" id="S_UserName" placeholder="Choose An Username" required></td>
	</tr>
	<tr>
		<td><font size=4 color="black">Student's Password</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_Password" type="password" id="S_Password" placeholder="Choose A Password" title="5-10 Characters" required></td>
	</tr>
	<tr>
		<td><font size=4 color="black">Phone/Mobile No</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_Phone" type="text" id="S_Phone" placeholder="Enter Phone No" required></td>
	</tr>
	<tr>
		<td><font size=4 color="black">E-mail Id</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td><input name="S_Email" type="email" id="S_Email" placeholder="Enter E-mail" required></td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Add Student"></td>
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
	$S_Id=$_POST['S_Id'];
	$S_Name=$_POST['S_Name'];
	$Session=$_POST['Session'];
	$Class=$_POST['Class'];
	$Batch=$_POST['Batch'];
	$Section=$_POST['Section'];
	$S_UserName=$_POST['S_UserName'];
	$S_Password=$_POST['S_Password'];
	$S_Phone=$_POST['S_Phone'];
	$S_Email=$_POST['S_Email'];

	$query= "INSERT INTO `students`(`S_Id`, `S_Name`, `Session`, `Class`, `Batch`, `Section`, `S_UserName`, `S_Password`, `S_Phone`, `S_Email`) VALUES ('$S_Id','$S_Name','$Session','$Class','$Batch','$Section','$S_UserName','$S_Password','$S_Phone','$S_Email')";
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