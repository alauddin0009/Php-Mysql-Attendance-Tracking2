<html>

<head>
  <style type="text/css">
      body{background:url(bb.jpg);
	   background-size:200% 200%;
	   -moz-background-size:100% 100%; /* Firefox 3.6 */
	   background-repeat:no-repeat;
	   word-wrap:break-word;}
  </style>
 <title>Attendance Sheet </title>
 <?php
session_start();
if(!isset($_SESSION['a_username'])){
	header("location: index.php");
	}
else {
?>
</head>

<body>
<p align="right"><a href="logout.php">Log Out</a></P>
<form name="form1" method="post">
<table class="black" width="650" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
	<tr>
		<td colspan="3" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Create Attendance Sheet</font></strong></td>
	</tr>
	<tr>
		<td width="450"><font color="black" size=4 >I Want To Create Attendance Sheet For (No. of Subject)</font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="200"><input name="no_of_sub" type="number" max="12" min="1" id="no_of_sub" placeholder="Enter no of subject" required></td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Go"></td>
	</tr>
</table>
</form> 
</body>
<?php
if(isset($_POST['Submit'])){
	$no_of_sub=$_POST['no_of_sub'];
	header("location:attendance-input.php?id=$no_of_sub");
	
}

}//closing of Isset
?>
</html>