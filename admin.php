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
<table align="center">
	<tr>
		<td><p><a href="add-student.php">Add student</a></p></td>
	</tr>
	<tr>
		<td><p><a href="add-teacher.php">Add teacher</a></p></td>
	</tr>
	<tr>
		<td><p><a href="add-subject.php">Add Subject</a></p></td>
	</tr>
	<tr>
		<td><p><a href="assign-class.php">Assign a class  (Add TID Data)</a></p></td>
	</tr>
	<tr>
		<td><p><a href="delete-student.php">Delete Student</a></p></td>
	</tr>
	<tr>
		<td><p><a href="delete-teacher.php">Delete Teacher(also TID)</a></p></td>
	</tr>
	<tr>
		<td><p><a href="quit-class.php">Delete Class</a></p></td>
	</tr>
	<tr>
		<td><p><a href="all-teacher.php">View Teacher</a></p></td>
	</tr>
	<tr>
		<td><p><a href="attendance-sheet.php">Create Attendance Sheet</a></p></td>
	</tr>
	<tr>
		<td><p><a href="admin-edit.php">Change My User Password</a></p></td>
	</tr>
</table>
</div>
<?php
include("footer.php");
?>
<?php
}
?>
