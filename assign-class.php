<html>
<head>
<meta charset="utf-8">
<title>Assign A New Class</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	form[name=form2] { 
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
<form name="form2" method="post">
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Assign A Class</font></strong></td>
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
							echo "<option value='".$row['T_Id']."'>".$row['T_Id']." (".$row['T_Name'].")"."</option>";
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
					$query= "SELECT DISTINCT `Code`, `Sub_Name` FROM `subjects` ORDER BY Code ASC";
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
							echo "<option value='".$row['Code']."'>".$row['Code']." (".$row['Sub_Name'].")</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Subject Name</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Sub_Name" class="textfield05" id="Sub_Name" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Sub_Name` FROM `subjects` ORDER BY Sub_Name ASC";
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
							echo "<option value='".$row['Sub_Name']."'>".$row['Sub_Name']."</option>";
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
		<td><font size=4 color="black">Credit</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Credit" class="textfield05" id="Credit" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Credit` FROM `subjects` ORDER BY Code ASC";
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
							echo "<option value='".$row['Credit']."'>".$row['Credit']."</option>";
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
		<td><input align='right' type="submit" name="Submit" value="Assign"></td>
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
	$CurrentYear=$_POST['CurrentYear'];
	$T_Id=$_POST['T_Id'];
	$Class=$_POST['Class'];
	$Batch=$_POST['Batch'];
	$Semester=$_POST['Semester'];
	$Section=$_POST['Section'];
	$Credit=$_POST['Credit'];
	
	//$query= "INSERT INTO `$T_Id`(`Code`, `Sub_Name`, `CurrentYear`, `T_Id`, `Class`, `Batch`, `Semester`, `Section`, `Credit`) VALUES ('$Code','$Sub_Name','$CurrentYear','$T_Id','$Class','$Batch','$Semester','$Section','$Credit')";
	$query= "INSERT INTO `classes`(`Code`, `Sub_Name`, `CurrentYear`, `T_Id`, `Class`, `Batch`, `Semester`, `Section`, `Credit`) VALUES ('$Code','$Sub_Name','$CurrentYear','$T_Id','$Class','$Batch','$Semester','$Section','$Credit')";
	if(mysql_query($query))
		{
			echo  "<script>alert('Successfully saved in database')</script>";
		}
		else
		{
			//echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
		mysql_close($con);
		//Collecting Attendance Table Data
		$table_name=$T_Id."-".$CurrentYear."-".$Class."-".$Batch."-".$Semester."-".$Code."-".$Section;
		$arrays = array();
		include("connect.php");
		$query = "SELECT `S_Id` FROM `students` WHERE `Class`='$Class' AND `Batch`='$Batch' AND `Section`='$Section' ORDER BY S_Id ASC";
		$result = mysql_query($query);
		$arrays = array();
		while($row = mysql_fetch_assoc($result)) {
		  $arrays[] = $row['S_Id'];
		}
		mysql_close($con);
		//Creating Table
		include("connect.php");
		//$str1="CREATE TABLE IF NOT EXISTS `".$table_name."` (Date datetime NOT NULL DEFAULT NOW(), ";(for mysql 5.6)
		$str1="CREATE TABLE IF NOT EXISTS `".$table_name."` (Date TEXT NOT NULL, ";
			//CREATE TABLE IF NOT EXISTS `TableTime` (`Date` TEXT NOT NULL);
		$str2 = '';
		for($i=0; $i<=sizeof($arrays)-1; $i++){
			$str2 .= " `".$arrays[$i]."`"." INT(2) NOT NULL";
			if($i!=sizeof($arrays)-1){
				$str2 .= ",";
			}
		}
	
		$query1=$str1.$str2." )";
		mysql_query($query1);
}

}//Closing Isset
?>