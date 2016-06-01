<html>
<head>
<meta charset="utf-8">
<title>Student Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();
if(!isset($_SESSION['t_id'])){
	header("location: index.php");
	}
else {
?>
<?php
include("header-all.php");
?>
<div class="content_main">
<?php

	$Code=$_GET['Co'];
	$Sub_Name=$_GET['T'];
	$CurrentYear=$_GET['Y'];
	$T_Id=$_GET['I'];
	$Class=$_GET['Cl'];
	$Batch=$_GET['B'];
	$Semester=$_GET['S'];
	$Section=$_GET['Sc'];
	$Credit=$_GET['cr'];
	$table_name=$T_Id."-".$CurrentYear."-".$Class."-".$Batch."-".$Semester."-".$Code."-".$Section;
	
	include("connect.php");
	$arrays = array();
	$arrays1 = array();
	$query= "SHOW COLUMNS FROM `$table_name`";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
		if ($count==0)
		{
			echo "You have not been assigned any class.";
		}
		else
		{
			while($row = mysql_fetch_array($result)) 
			{
				$arrays[] = $row['Field'];
			}
		}
		mysql_close($con);
		//Collecting Column Nmae
		$str1='(';
		for($i=1; $i<=sizeof($arrays)-1; $i++){
			$str1.= "`".$arrays[$i]."`";
			if($i!=sizeof($arrays)-1){
				$str1 .= ", ";
			}
		}
		$attendance=0;
?>
<p align="right"><a href="logout.php">Log Out</a></P>
<table align="center">
	<form method="post">
	<?php  for($i=1; $i<=sizeof($arrays)-1; $i++){?>
		<tr>
		<td>
		<input type="checkbox" name="<?php echo $arrays[$i]; ?>" id="atten">&nbsp; <?php echo $arrays[$i]; ?>
		(
		<?php
			include("connect.php");
			$query= "SELECT `S_Name` FROM `students` WHERE `Class`='$Class' AND `Batch`='$Batch' AND `Section`='$Section' AND `S_Id`='$arrays[$i]'";
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
					echo $row['S_Name'];
				}
			}
			mysql_close($con);
		?>
		)
		</td>
		</tr>
		<?php  
		if (isset($_POST[$arrays[$i]])) 
		{
		$attendance=1;
		} 
		else 
		{
		$attendance=0;
		}
		$arrays1[] = $attendance;
		
	}  
	?>
	<tr>
	<td><input align='right' type="submit" name="Submit" value="Submit"></td>
	</tr>
	</form>
	
</table>
<p align="center"><a href="attendance-details.php?tn=<?php echo $table_name; ?>">See Details Attendance</a></P>
</div>
<?php
include("footer.php");
?>
<?php
include("connect.php");
if(isset($_POST['Submit']))
{
	$str3='(';
		for($i=0; $i<=sizeof($arrays1)-1; $i++){
			$str3.= "'".$arrays1[$i]."'";
			if($i!=sizeof($arrays1)-1){
				$str3 .= ", ";
			}
		}
		$str4= $str3.")";
		$query="INSERT INTO `$table_name`".$str1.") VALUES ".$str3.")";
		if(mysql_query($query))
		{
			echo  "<script>alert('Successfully Tracked')</script>";
		}
		else
		{
			//echo "<script>alert('All Post And Image has Not been send in database')</script>";
		}
		mysql_close($con);
}
}//closing of isset
?>

