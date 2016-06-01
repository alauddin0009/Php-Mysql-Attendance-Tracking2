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
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Delete A Teacher</font></strong></td>
	</tr>
	<tr>
		<td width="78"><font color="black" size=4 >Teacher's ID</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="294">
			<select  style="width: 150px;" name="T_Id" class="textfield05" id="T_Id" required>
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
							echo "<option value='".$row['T_Id']."'>".$row['T_Id']." (".$row['T_Name']. ")</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Delete Teacher"></td>
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
	$T_Id=$_POST['T_Id'];
	
	$query= "DELETE FROM `teachers` WHERE `T_Id`='$T_Id'";
	if(mysql_query($query))
		{
			echo  "<script>alert('Theacher's Record Deleted Successfully')</script>";
		}
		else
		{
			echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
	mysql_close($con);
		
	//Deleting Table Named current T_Id
	include("connect.php");
	$query1= "DROP TABLE IF EXISTS `$T_Id`";
	if(mysql_query($query1))
	{
		echo  "<script>alert('Theacher's Table Dropped')</script>";
	}
	else
	{
		echo "<script>alert('All Post And Image has Not been send in database')</script>";
	}
	mysql_close($con);
	echo  "<script>alert('You Are Ok To Go.')</script>";
		
}
}//Closing Isset
?>