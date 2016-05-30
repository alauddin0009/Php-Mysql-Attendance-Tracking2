<html>

<head>
  <style type="text/css">
      body{background:url(bb.jpg);
	   background-size:200% 200%;
	   -moz-background-size:100% 100%; /* Firefox 3.6 */
	   background-repeat:no-repeat;
	   word-wrap:break-word;}
	   
	   p{
		   line-height: 60%;
	   }
  </style>
  <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=900,height=600');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
 <title>Attendance Input </title>
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
<?php
$no_of_sub=$_GET['id'];
?>
<form name="form1" method="post">
<table class="black" width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFCC">
	<tr>
		<td colspan="6" align="center" ><strong><font size=5 color="#C0C0C0">Enter Following Information To Assign A Class</font></strong></td>
	</tr>
	<?php for($i=1; $i<=$no_of_sub; $i++){?>
	<tr>
		<td width="78"><font color="black" size=4 >Teacher's ID <?php echo $i; ?></font></td>
		<td width="6"><font color="black">:&nbsp;</font></td>
		<td width="180">
			<!--<input name="T_Id<?php //echo $i; ?>" type="text" id="T_Id" placeholder="Enter Teacher Id" required>-->
			<select  style="width: 150px;" name="T_Id<?php echo $i; ?>" class="textfield05" id="T_Id" required>
				<?php 
					include("connect.php");
					$query= "SELECT `T_Id`, `T_Name` FROM `teachers` ORDER BY T_Id ASC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<option value='".$row['T_Id']."'>".$row['T_Id']." (".$row['T_Name'].")"."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
			
		</td>
	
		<td><font size=4 color="black">Subject Code <?php echo $i; ?></font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<!--<input name="Code<?php //echo $i; ?>" type="text" id="Code" placeholder="Enter Subject Code" required>-->
			<select style="width: 150px;" name="Code<?php echo $i; ?>" class="textfield05" id="Code" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Code` FROM `subjects` ORDER BY Code ASC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<option value='".$row['Code']."'>".$row['Code']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
		</font>
	</tr>
	<?php } ?>
	<tr>
		<td><font size=4 color="black">Class/Department</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Class" class="textfield05" id="Class" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Class` FROM `students` ORDER BY Class ASC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<option value='".$row['Class']."'>".$row['Class']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Batch</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Batch" class="textfield05" id="Batch" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Batch` FROM `students` ORDER BY Batch ASC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<option value='".$row['Batch']."'>".$row['Batch']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Current Year</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="CurrentYear" class="textfield05" id="CurrentYear">
				<option value="2016">2016</option><option value="2017">2017</option>
				<option value="2018">2018</option><option value="2019">2019</option>
				<option value="2020">2020</option><option value="2021">2021</option>
				<option value="2022">2022</option><option value="2023">2023</option>
				<option value="2024">2024</option><option value="2025">2025</option>
				<option value="2026">2026</option><option value="2027">2027</option>
				<option value="2028">2028</option><option value="2029">2029</option>
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Section</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Section" class="textfield05" id="Section" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Section` FROM `students` ORDER BY `Section` ASC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<option value='".$row['Section']."'>".$row['Section']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td><font size=4 color="black">Semester</font></td>
		<td><font color="black">:&nbsp;</font></td>
		<td>
			<select style="width: 150px;" name="Semester" class="textfield05" id="Semester" required>
				<?php 
					include("connect.php");
					$query= "SELECT DISTINCT `Semester` FROM `subjects` ORDER BY `Semester` ASC";
					$result = mysql_query($query);
					$count = mysql_num_rows($result);
					if ($count==0)
					{
						//echo "You have not been assigned any class.";
					}
					else
					{
						while($row = mysql_fetch_array($result)) 
						{
							echo "<option value='".$row['Semester']."'>".$row['Semester']."</option>";
						}
					}
					mysql_close($con);
				?>
				
			</select>
		</td>
		</font>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input align='right' type="submit" name="Submit" value="Go"></td>
	</tr>
</table>
</form>
<hr>


<?php
if(isset($_POST['Submit'])){
	
	
	$CurrentYear=$_POST['CurrentYear'];
	$Class=$_POST['Class'];
	$Batch=$_POST['Batch'];
	$Semester=$_POST['Semester'];
	$Section=$_POST['Section'];
	
	$Sub_code=array();
	$T_ids=array();
	$my_attendance=0;
	$class_held=0;
	$my_attendance_total=0;
	$class_held_total=0;
	$my_atten_per=0;
	
	for($i=1; $i<=$no_of_sub; $i++)
	{
		$Sub_code[]=$_POST['Code'.$i];
		$T_ids[]=$_POST['T_Id'.$i];
	}
	$str1="Y=$CurrentYear&C=$Class&B=$Batch&Se=$Semester&Sc=$Section&";
	$str2='';
	for($i=0; $i<=$no_of_sub-1; $i++)
	{
		$str2.="S".$i."=".$Sub_code[$i]."&";
		
		$str2.="T".$i."=".$T_ids[$i]."&";
	}
	$str3=$str1.$str2;//This variable for header address *** this is not working for more than 4 subjects
	
	//Initilizing Required Array
	$table_name=array();
	$student_Id=array();
	?>
	<!--Printing Page Start from Here-->
	<center><h2>For Printing This Page click This Print Button</h2>
            
             <input type="button" value="     Print Button     " onClick="PrintDiv();" />
			<div id="divToPrint" >   <div></br>
	
	<!--Institute Details go here or pad-->
	<h2 align="center" >Institute of science and technology</h2>
	<p align="center" >Established : 1994</p>
	<p align="center">Class/Department : <?php echo $Class; ?>(<?php echo $Section; ?>)  <?php echo $Semester; ?> Semester</p>
	<p align="center">Batch : <?php echo $Batch; ?>th  Year : <?php echo $CurrentYear; ?></p>
	<p>&nbsp;</p>
	
	<table border='1' align="center"> 
		<tr>
			<td><strong>Student Id</strong></td>
			<?php for($j=0; $j<$no_of_sub; $j++ ){?>
			<td><strong><?php echo $Sub_code[$j];?></strong></td>
			<?php 
			//collecting table name in table_name array
			$table_name[]=$T_ids[$j]."-".$CurrentYear."-".$Class."-".$Batch."-".$Semester."-".$Sub_code[$j]."-".$Section;
			}?>
			<td><strong>Total Percentage</strong></td>
		</tr>
	
	
	
	
	<?php
	//Collecting S_Id of this batch
	include("connect.php");
	$query5= "SHOW COLUMNS FROM `$table_name[0]`";
	$result5 = mysql_query($query5);
	$count5 = mysql_num_rows($result5);
		if ($count5==0)
		{
			echo "You have not been assigned any class.";
			echo $query5;
		}
		else
		{
			while($row5 = mysql_fetch_array($result5)) 
			{
				$student_Id[] = $row5['Field'];
			}
		}
		mysql_close($con);
		
		for($k=1; $k<sizeof($student_Id); $k++ ){
?>
		
		<tr>
			<td><?php echo $student_Id[$k];?></td>
			<?php for($l=0; $l<$no_of_sub; $l++ ){?>
			<td>
			<!--Student Attendance in this subjects-->
			<?php
			$percent_array=array();
			include("connect.php");
			$query1= "SELECT SUM(`$student_Id[$k]`) AS maxid FROM `$table_name[$l]`";
			$result1 = mysql_query($query1);
			$count1 = mysql_num_rows($result1);
			if ($count1==0)
			{
				echo "You have not been assigned any class.";
			}
			else
			{
				while($row1 = mysql_fetch_array($result1)) 
				{
					$my_attendance= $row1['maxid'];
					echo "<strong>".$my_attendance."</strong> out of ";
					
				}
				
			}
			
			mysql_close($con);
			//Finding Total Class Held
			include("connect.php");
			$query2= "SELECT COUNT(*) AS class FROM `$table_name[$l]`";
			$result2 = mysql_query($query2);
			$count2 = mysql_num_rows($result2);
			
			if ($count2==0)
			{
				echo "You have not been assigned any class.";
			}
			else
			{
				while($row2 = mysql_fetch_array($result2)) 
				{
					$class_held= $row2['class'];
					echo $class_held;
					$percent=($my_attendance/$class_held)*100;
					//echo "= ".$percent;
				}
							
			}
			
			mysql_close($con);
			//if($k-1<=sizeof($T_ids)*2+1)
			//{
			$my_attendance_total=$my_attendance_total+$my_attendance;
			$class_held_total=$class_held_total+$class_held;
			$attendance_percent_total=($my_attendance_total/$class_held_total)*100;
			//}
			?>
			</td>
			<?php } ///Closing of l for loop	?>
			<td> <?php echo $my_attendance_total. " out of ".$class_held_total. " = ".number_format((float)$attendance_percent_total, 2, '.', '')."%";
			$my_attendance_total=0;
			$class_held_total=0;
			?></td>

		</tr>
<?php	}	// Closing of K for loop?>
	</table>
	
<?php
	} //Closing of Isset Submit
	/**print_r($Sub_code);
	echo "</br>";
	print_r($T_ids);
	echo "</br>";
	print_r($table_name);
	echo "</br>";
	print_r($student_Id);**/

}// Closing of isset	?>
</body>
</html>