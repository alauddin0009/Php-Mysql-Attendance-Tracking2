<html>
<head>
<title>Teacher's Home Page</title>
<style type="text/css">
	   /* unvisited link */
	a:link {
		color: #400000;
		text-decoration:none;
	}

	/* visited link */
	a:visited {
		
	}

	/* mouse over link */
	a:hover {
		color: hotpink;
	}

	/* selected link */
	a:active {
		color: blue;
	}
  </style>
<?php
session_start();
if(!isset($_SESSION['t_id'])){
	header("location: index.php");
	}
else {
	$te_id=$_SESSION['t_id'];
?>
</head>
<p align="right"><a href="logout.php">Log Out</a></P>
<h2 align="center">List of Classes</h2>
<p align="center"><a href="teache-edit.php?t_id=<?php echo $te_id;?>">Edit My Information</a></P>
<?php
$teacher_Id=$_GET['t_id'];
include("connect.php");
	$query= "SELECT * FROM `$teacher_Id`";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
		if ($count==0)
		{
			echo "You have not been assigned any class.";
		}
		else
		{
			echo "<table border='1px' align='center'>";
			echo "<tr><td>"."Code"."</td><td>"."Title"."</td><td>"."Year"."</td><td>"."My Id"."</td><td>"."Class/Department"."</td><td>"."Batch"."</td><td>"."Semester"."</td><td>"."Section"."</td><td>"."Credit"."</td></tr>";
			while($row = mysql_fetch_array($result)) 
			{
				echo "<tr><td><a href='attendance-entry.php?Co=".$row['0']."&T=". $row['1']."&Y=". $row['2']."
				&I=". $row['3']."&Cl=". $row['4']."&B=". $row['5']."&S=". $row['6']."
				&Sc=". $row['7']."&cr=". $row['8']."'>".$row['0']."</a></td><td>".$row['1']."</td><td>".$row['2']."</td><td>".$row['3']."</td><td>".$row['4']."</td><td>".$row['5']."</td><td>".$row['6']."</td><td>".$row['7']."</td><td>".$row['8']."</td></tr>";
			}
			echo "<table>";
		}
	mysql_close($con);

?>
<?php  
}//closing of isset
?>
</html>
