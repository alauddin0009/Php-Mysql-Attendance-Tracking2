<?php
session_start();
if(!isset($_SESSION['t_id'])){
	header("location: index.php");
	}
else {
	$te_id=$_GET['t_id'];
?>
<p align="right"><a href="logout.php">Log Out</a></P>
<table align="center">
	<tr>
		<td colspan="3" align="center" text-align="center">
			<!--Admin ------------------------------------------------------------------------------------->
			<form name="form1" method="post">
			<table class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
			<tr>
			<td colspan="3" align="center" ><strong><font size=6 color="#C0C0C0">Edit Information</font></strong></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_password" pattern=".{0}|.{5,10}" type="password" id="t_password" placeholder="Password at least 5 word" required></td>
			</font>
			</tr>
			<tr>
			<td><font size=4 color="black">Name</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_name" type="text" id="t_name" placeholder="Name" required></td>
			</font>
			</tr><tr>
			<td><font size=4 color="black">Phone</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_phone" type="text" id="t_phone" placeholder="Phone" required></td>
			</font>
			</tr>
			<tr>
			<td><font size=4 color="black">E-mail</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="t_email" type="email" id="t_email" placeholder="E-mail" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input align='right' type="submit" name="a_Submit" value="Change"></td>
			</tr>
			</table>
			</form> 
		</td>
	</tr>
</table>

<?php
include("connect.php");
if(isset($_POST['a_Submit'])){
	// username and password sent from form
	$t_password=$_POST['t_password'];
	$t_name=$_POST['t_name'];
	$t_phone=$_POST['t_phone'];
	$t_email=$_POST['t_email'];
	$sql="UPDATE `teachers` SET `T_Name`='$t_name',`T_Password`='$t_password',`T_Phone`='$t_phone',`T_Email`='$t_email' WHERE `T_Id`='$te_id'";
	$result=mysql_query($sql);


	if($result){
		echo  "<script>alert('Your information have been modified.')</script>";
	}
	else {
		echo  "<script>alert('Something wrong')</script>";
	}
	mysql_close($con);
}
}//session closedir
?>