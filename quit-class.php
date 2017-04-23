<html>
<head>
<meta charset="utf-8">
<title>Delete A Class</title>
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
<form name="form1" method="post" onsubmit="return confirm('Really Want To Delete The Class?');">
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1">
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
					$query= "SELECT DISTINCT `T_Id` FROM `classes` ORDER BY T_Id ASC";
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
					$query= "SELECT DISTINCT `Class` FROM `classes` ORDER BY Class ASC";
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
					$query= "SELECT DISTINCT `Batch` FROM `classes` ORDER BY Batch ASC";
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
					$query= "SELECT DISTINCT `Code` FROM `classes` ORDER BY Code ASC";
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
		<td><font size=4 color="black">Year</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="CurrentYear" class="textfield05" id="CurrentYear">
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `CurrentYear` FROM `classes` ORDER BY `CurrentYear` ASC";
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
							echo "<option value='".$row['CurrentYear']."'>".$row['CurrentYear']."</option>";
						}
					}
					mysql_close($con);
				?>
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
					$query= "SELECT DISTINCT `Section` FROM `classes` ORDER BY `Section` ASC";
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
					$query= "SELECT DISTINCT `Semester` FROM `classes` ORDER BY `Semester` ASC";
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
	$query= "DELETE FROM `classes` WHERE `Class`='$Class' AND `Batch`='$Batch' AND `Semester`='$Semester' AND `Section`='$Section' AND `T_Id`='$T_Id'";
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
		echo  "<script>alert('Attendance Record Dropped')</script>";
	}
	else
	{
		echo "<script>alert('Database problem')</script>";
	}
	mysql_close($con);
		
}
}//Closing Isset
?>