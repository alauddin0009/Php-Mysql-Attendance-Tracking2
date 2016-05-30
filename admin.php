<html>
<head>

<title>Admin Panel</title>
<?php
session_start();
if(!isset($_SESSION['a_username'])){
	header("location: index.php");
	}
else {
?>
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
	p{
		font-size: 20px;
		padding-top: 10px;
		padding-right: 0px;
		padding-bottom: 10px;
		padding-left: 0px;
	}
  </style>
</head>
<body>
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
</body>
<?php
}
?>
</html>