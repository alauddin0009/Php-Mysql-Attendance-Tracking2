<html>
<head>
<meta charset="utf-8">
<title>Details Attendance</title>
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
		margin-left:100px;
		margin-top:30px;
	}
	* {
		font-family: Raleway;
	}
</style>
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
<p align="right"><a href="logout.php">Log Out</a></P>
	<?php
	$table_name=$_GET['tn'];
	include("connect.php");
// sending query
$result = mysql_query("SELECT * FROM `$table_name`");
if (!$result) 
{
    die("Query to show fields from table failed");
} 

$fields_num = mysql_num_fields($result);
echo "<table  align='center' border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";
    foreach($row as $cell)
        echo "<td>$cell</td>";
		echo "</tr>\n";
}
mysql_free_result($result);
?>
</table>
</div>
<?php
include("footer.php");
?>
<?php
}
?>
