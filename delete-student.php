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
<table class="black" width="610" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Delete Students (A Group)</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Class/Department</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
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
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Delete Students"></td>
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
	$Class=$_POST['Class'];
	$Batch=$_POST['Batch'];
	$Section=$_POST['Section'];
	
	$query= "DELETE FROM `students` WHERE `Class`='$Class' AND `Batch`='$Batch' AND `Section`='$Section'";
	if(mysql_query($query))
		{
			echo  "<script>alert('Students Record has been deleted Successfully.')</script>";
		}
		else
		{
			//echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
		mysql_close($con);
}
}//Closing Isset
?>