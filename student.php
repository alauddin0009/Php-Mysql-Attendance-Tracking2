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
	if(isset($_POST['Submit']))
{
	$S_Id=$_POST['S_Id'];
	$T_Id=$_POST['T_Id'];
	$Code=$_POST['Code'];
	$CurrentYear=$_POST['CurrentYear'];
	$Class=$_POST['Class'];
	$Batch=$_POST['Batch'];
	$Semester=$_POST['Semester'];
	$Section=$_POST['Section'];
	header("location:myatten.php?Co=$Code&Cu=$CurrentYear&Cl=$Class&B=$Batch&Se=$Semester&Sc=$Section&I=$S_Id&TI=$T_Id");
}
?>
<!--Header php file do not support here-->			
<?php
include("header-all.php");
?>
<div class="content_main">
<!--Header php file do not support here-->
<p align="right"><a href="logout.php" style="text-decoration:underline; color:#2E9AFE;">Log Out</a></P>
<p align="center"><a href="student-edit.php">Edit My Information</a></P>
<form name="form1" method="post">
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To See Attendance</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Subject Code</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="Code" class="textfield05" id="Code" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Code` FROM `subjects` ORDER BY Code ASC";
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
							echo "<option value='".$row['Code']."'>".$row['Code']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >My Id</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294"><input name="S_Id" type="number" min="1" id="S_Id" placeholder="Enter Your Id" required></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >My Teacher Id </font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select  style="width: 170px;" name="T_Id" class="textfield05" id="T_Id" required>
				<?php 
					include("connect.php");
					$query= "SELECT `T_Id`, `T_Name` FROM `teachers` ORDER BY T_Id ASC";
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
							echo "<option value='".$row['T_Id']."'>".$row['T_Id']." (".$row['T_Name'].")"."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Class/Department</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="Class" class="textfield05" id="Class" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Class` FROM `students` ORDER BY Class ASC";
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
							echo "<option value='".$row['Class']."'>".$row['Class']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Batch</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="Batch" class="textfield05" id="Batch" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Batch` FROM `students` ORDER BY Batch ASC";
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
							echo "<option value='".$row['Batch']."'>".$row['Batch']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Semester</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="Semester" class="textfield05" id="Semester" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Semester` FROM `subjects` ORDER BY `Semester` ASC";
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
							echo "<option value='".$row['Semester']."'>".$row['Semester']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Section</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="Section" class="textfield05" id="Section" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Section` FROM `students` ORDER BY `Section` ASC";
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
							echo "<option value='".$row['Section']."'>".$row['Section']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Year</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select style="width: 170px;" name="CurrentYear" class="textfield05" id="CurrentYear">
				<option value="2016">2016</option><option value="2017">2017</option>
				<option value="2018">2018</option><option value="2019">2019</option>
				<option value="2020">2020</option><option value="2021">2021</option>
				<option value="2022">2022</option><option value="2023">2023</option>
				<option value="2024">2024</option><option value="2025">2025</option>
				<option value="2026">2026</option><option value="2027">2027</option>
				<option value="2028">2028</option><option value="2029">2029</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="See Attendance"></td>
	</tr>
</table>
</form>
<!--Footer php file do not support here-->
</div>
<?php //include("footer.php");?>
<!--Footer php file do not support here-->

<?php

include("footer.php");
}//closing of isset
?>