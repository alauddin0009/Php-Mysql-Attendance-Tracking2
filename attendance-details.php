<html>
<head>
<title>Full Addendance Sheet</title>
</head>
<style type="text/css">
	
</style>
<?php
session_start();
if(!isset($_SESSION['t_id'])){
	header("location: index.php");
	}
else {
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

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
     foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysql_free_result($result);
?>
<body>
<p align="right"><a href="logout.php">Log Out</a></P>
</body>

<?php
}
?>
</html>