<html>
<?php 
session_start();
?>
<head>
  <style type="text/css">
      body{background:url(bb.jpg);
	   background-size:200% 200%;
	   -moz-background-size:180% 180%; /* Firefox 3.6 */
	   background-repeat:no-repeat;
	   word-wrap:break-word;}
  </style>
</head>

<body>
<table align="center">
	<tr>
		<td colspan="3" align="center" text-align="center">
			<!--Admin ------------------------------------------------------------------------------------->
			<form name="form1" method="post" action="index.php">
			<table class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
			<tr>
			<td colspan="3" align="center" ><strong><font size=6 color="#C0C0C0">Admin Login</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font color="black" size=4 >Username</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="a_username" type="text" id="a_username" placeholder="Admin Username" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="a_password" type="password" id="a_password" placeholder="Admin Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="a_Submit" value="Login"></td>
			</tr>
			</table>
			</form> 
		</td>
	</tr>
	<tr>
		<td>
			<!--teacher ------------------------------------------------------------------------------------->
			<form name="form2" method="post">
			<table align='left' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
			<tr>
			<td colspan="3" align="center"><strong><font  size=6 color="#C0C0C0">Teacher Login</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font color="black" size=4 >Teacher's Id</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="t_id" type="text" id="t_id" placeholder="Teacher's Id" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_password" type="password" id="t_password" placeholder="Teacher's Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="t_Submit" value="Login"></td>
			</tr>
			</table>
			</form>
		</td>
		<td>
		&nbsp&nbsp
		</td>
		<td>
			<!--Student------------------------------------------------------------------------------------->
			<form name="form3" method="post">
			<table align='left' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
			<tr>
			<td colspan="3" align="center"><strong><font  size=6 color="#C0C0C0">Student Login</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font color="black" size=4 >Username</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="s_username" type="text" id="s_username" placeholder="Student's Username" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="s_password" type="password" id="s_password" placeholder="Student's Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="s_Submit" value="Login"></td>
			</tr>
			</table>
			</form>
		</td>
	</tr>
</table>


<!--Admin Login-->
<?php
include("connect.php");
if(isset($_POST['a_Submit'])){
	// username and password sent from form
	$username=$_POST['a_username'];
	$password=$_POST['a_password'];
	$sql="SELECT * FROM `admin` WHERE `A_UserName`='$username' AND `A_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$_SESSION['a_username']=$username;
		header("location:admin.php");
	}
	else {
		header("location:redirect.php");
	}
	mysql_close($con);
}
?>
<!--Theacher Login-->
<?php
include("connect.php");
if(isset($_POST['t_Submit'])){
	// username and password sent from form
	$t_id=$_POST['t_id'];
	$password=$_POST['t_password'];
	$sql="SELECT * FROM `teachers` WHERE `T_Id`='$t_id' AND `T_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$_SESSION['t_id']=$t_id;
		header("location:teacher.php?t_id=$t_id");
	}
	else {
		header("location:redirect.php");
	}
	mysql_close($con);
	
}
?>
<!--Student Login-->
<?php
include("connect.php");
if(isset($_POST['s_Submit'])){
	// username and password sent from form
	$username=$_POST['s_username'];
	$password=$_POST['s_password'];
	$sql="SELECT * FROM `students` WHERE `S_UserName`='$username' AND `S_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$_SESSION['s_username']=$username;
		header("location:student.php");
	}
	else {
		header("location:redirect.php");
	}
	mysql_close($con);
}
?>
</body>
</html>
