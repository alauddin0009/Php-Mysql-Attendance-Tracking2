<html>
<head>
<meta charset="utf-8">
<title>Student Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
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
<p align="right"><a href="logout.php">Log Out</a></P>
<form name="form1" method="post">
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Delete A Class</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Teacher's ID</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select  style="width: 150px;" name="T_Id" class="textfield05" id="T_Id" required>
				<?php 
					include("connect.php");
					$query= "SELECT `T_Id` FROM `teachers` ORDER BY T_Id ASC";
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
							echo "<option value='".$row['T_Id']."'>".$row['T_Id']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td><font size=4 color="black">Class/Department</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Class" class="textfield05" id="Class" required>
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
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Batch</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Batch" class="textfield05" id="Batch" required>
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
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Subject Code</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Code" class="textfield05" id="Code" required>
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
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Current Year</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="CurrentYear" class="textfield05" id="CurrentYear">
				<option value="2016">2016</option><option value="2017">2017</option>
				<option value="2018">2018</option><option value="2019">2019</option>
				<option value="2020">2020</option><option value="2021">2021</option>
				<option value="2022">2022</option><option value="2023">2023</option>
				<option value="2024">2024</option><option value="2025">2025</option>
				<option value="2026">2026</option><option value="2027">2027</option>
				<option value="2028">2028</option><option value="2029">2029</option>
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Section</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Section" class="textfield05" id="Section" required>
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
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Semester</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Semester" class="textfield05" id="Semester" required>
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
		</font>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Delete Class"></td>
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
	$CurrentYear=$_POST['CurrentYear'];
	$T_Id=$_POST['T_Id'];
	$Class=$_POST['Class'];
	$Batch=$_POST['Batch'];
	$Semester=$_POST['Semester'];
	$Section=$_POST['Section'];
	
	$table_name=$T_Id."-".$CurrentYear."-".$Class."-".$Batch."-".$Semester."-".$Code."-".$Section;
	//Deleting Data from Current Teacher Table(T_Id)
	$query= "DELETE FROM `$T_Id` WHERE `Class`='$Class' AND `Batch`='$Batch' AND `Semester`='$Semester' AND `Section`='$Section'";
	if(mysql_query($query))
		{
			echo  "<script>alert('Subject's Record Deleted Successfully')</script>";
		}
		else
		{
			echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
	mysql_close($con);
	//Deleting Requested Attendance Table
	include("connect.php");
	$query= "DROP TABLE IF EXISTS `$table_name`";
	if(mysql_query($query))
	{
		echo  "<script>alert('Attendance Record Table Dropped')</script>";
	}
	else
	{
		echo "<script>alert('Database problem')</script>";
	}
	mysql_close($con);
		
}
}//Closing Isset
?>