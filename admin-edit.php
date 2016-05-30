<?php
session_start();
if(!isset($_SESSION['a_username'])){
	header("location: index.php");
	}
else {
?>
<p align="right"><a href="logout.php">Log Out</a></p>
<table align="center">
	<tr>
		<td colspan="3" align="center" text-align="center">
			<!--Admin ------------------------------------------------------------------------------------->
			<form name="form1" method="post">
			<table class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
			<tr>
			<td colspan="3" align="center" ><strong><font size=6 color="#C0C0C0">Type Your Login Again</font></strong></td>
			</tr>
			<tr>
			<td width="180"><font color="black" size=4 >Username</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="ad_username" type="text" id="ad_username" placeholder="Admin Username" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="ad_password" type="password" id="ad_password" placeholder="Admin Password" required></td>
			</font>
			</tr>
			<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			
			<tr>
			<td width="180"><font color="black" size=4 > New Username</font></td>
			<td width="6"><font color="black">:&nbsp;</font></td>
			<td width="200"><input name="n_username" type="text" id="n_username" placeholder="New Username" required></td>
			</tr>
			<tr>
			<td><font size=4 color="black">New Password</font></td>
			<td><font color="black">:&nbsp;</font></td>
			<td><input name="n_password" type="password" id="n_password" placeholder="New Password" required></td>
			</font>
			</tr>
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
$flag = false;
include("connect.php");
if(isset($_POST['a_Submit'])){
	// username and password sent from form
	$username=$_POST['ad_username'];
	$password=$_POST['ad_password'];
	$n_username=$_POST['n_username'];
	$n_password=$_POST['n_password'];
	$sql="SELECT * FROM `admin` WHERE `A_UserName`='$username' AND `A_Password`='$password'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	if($count>=1){
		$flag = True;
	}
	else {
		echo  "<script>alert('You are not the Admin')</script>";
	}
	mysql_close($con);
	
	$username1=$_POST['ad_username'];
	include("connect.php");
	if($flag){
	$sql1="UPDATE `admin` SET `A_UserName`='$n_username',`A_Password`='$n_password' WHERE `A_UserName`='$username1'";
	if(mysql_query($sql1)){
		echo  "<script>alert('You Information have been changed.')</script>";
	}
	else {
		echo  "<script>alert('You are not the Admin')</script>";
	}
	mysql_close($con);
	}
}
}//Session close
?>