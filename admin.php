<html>
<head>
<meta charset="utf-8">
<title>Admin Main Page || Attendance Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<style type="text/css">
	a { 
		color:#FE9A2E;
	} 
	tr{
		height:40px;
	}
	.link{
		padding-left: 50px;
	}
	a:hover{
		text-decoration:underline;	
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
<p align="right"><a href="logout.php" style="text-decoration:underline; color:#2E9AFE; padding-right:50px;">Log Out</a></P>
<table align="center">
	<tr>
		<td><p><a class="link" href="add-student.php">Add student</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="add-teacher.php">Add teacher</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="add-subject.php">Add Subject</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="assign-class.php">Assign a class</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="delete-student.php">Delete Student</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="delete-teacher.php">Delete Teacher</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="quit-class.php">Delete Class</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="all-teacher.php">View Teacher</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="attendance-sheet.php">Create Attendance Sheet</a></p></td>
	</tr>
	<tr>
		<td><p><a class="link" href="admin-edit.php">Change My User Password</a></p></td>
	</tr>
</table>
</div>
<?php
include("footer.php");
?>
<?php
}
?>
