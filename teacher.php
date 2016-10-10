<html>
<head>
<meta charset="utf-8">
<title>Teacher Main Page || Attendance Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	.back_logout_div{
		width:90%;
		padding-left:40px;
		padding-top:40px;
	}
	tr{
		height:35px;
		border:none;
	}
	.teacher_table{
		margin-left:80px;
		margin-top:30px;
	}
	.small{
		width:50px;
	}
	* {
		font-family: Raleway;
	}
	.ancor_edi_my_inf{
		padding-top:40px;
		margin-left:-20px;
	}
</style>
</head>
<?php
session_start();
if(!isset($_SESSION['t_id'])){
	header("location: index.php");
	}
else {
	$te_id=$_SESSION['t_id'];
?>
<?php
include("header-all.php");
?>
<div class="content_main">
<p align="right"><a href="logout.php" style="text-decoration:underline; color:#2E9AFE; padding-right:50px;">Log Out</a></P>
<p align="center"class="ancor_edi_my_inf"><a href="teache-edit.php?t_id=<?php echo $te_id;?>">Edit My Information</a></P>
</br>
<?php
$teacher_Id=$_GET['t_id'];
include("connect.php");
	//$query= "SELECT * FROM `$teacher_Id`";
	$query= "SELECT * FROM `classes` WHERE `T_Id`='$teacher_Id';";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
		if ($count==0)
		{
			echo "You have not been assigned any class.";
		}
		else
		{
			echo "<table border='1px' align='center' class='teacher_table'>";
			echo "<tr><td class='small'>"."Code"."</td><td>"."Title"."</td><td class='small'>"."Year"."</td><td class='small'>"."My Id"."</td><td class='small'>"."Class/Dep."."</td><td class='small'>"."Batch"."</td><td>"."Semester"."</td><td class='small'>"."Section"."</td><td class='small'>"."Credit"."</td></tr>";
			while($row = mysql_fetch_array($result)) 
			{
				echo "<tr><td><a href='attendance-entry.php?Co=".$row['0']."&T=". $row['1']."&Y=". $row['2']."
				&I=". $row['3']."&Cl=". $row['4']."&B=". $row['5']."&S=". $row['6']."
				&Sc=". $row['7']."&cr=". $row['8']."'>".$row['0']."</a></td><td>".$row['1']."</td><td>".$row['2']."</td><td>".$row['3']."</td><td>".$row['4']."</td><td>".$row['5']."</td><td>".$row['6']."</td><td>".$row['7']."</td><td>".$row['8']."</td></tr>";
			}
			echo "</table>";
		}
	mysql_close($con);

?>
</br></br>
</div>
<?php
include("footer.php");
?>
<?php  
}//closing of isset
?>
