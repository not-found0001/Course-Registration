<?php
	
	session_start();
	$con=mysqli_connect("localhost","root","","mydata");
	
	if($con){
		echo"connected";
	}
	
	if(isset($_GET['edit'])){
		$edit=$_GET['edit'];
		$sql="select * from student_information where S_ID='$edit'";
		$run=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($run)){
			$edit_id=$row['S_ID'];
			$s_name=$row[0];
			$s_roll=$row[1];
			$s_fname=$row[2];
			$s_mname=$row[3];
			$s_session=$row[4];
			$s_department=$row[5];
			$s_year=$row[6];
			$s_semester=$row[7];
			$s_registration=$row[13];
		}	
	}	
?>

<?php

	$nameError ="";
	$rollError ="";
	$fnameError ="";
	$mnameError ="";
	$sessionError="";
	$departmentError="";
	$yearError="";
	$semesterError="";
	$RegError="";
	$AlreadyRegistered="";

	$flag=1;
	$status=1;
	
	echo $s_roll;
	
	if(isset($_POST['update'])){
		$edit_record1=$_GET['edit_form'];
		$student_name=$_POST['name1'];
		$student_roll=$_POST['roll1'];
		$student_fname=$_POST['fname1'];
		$student_mname=$_POST['mname1'];
		$student_session=$_POST['session1'];;
		$student_department=$_POST['department1'];
		$student_year=$_POST['year1'];
		$student_semester=$_POST['semester1'];
		$student_registration=$_POST['registration1'];
		
		
		if (empty($student_name)){
			$flag=0;
			
			if($status){
			   $nameError = "Name is required";
			   $status=0;
			}
		} 
		else if(!empty($student_name)){
			$student_name = test_input($student_name);
			if (!preg_match("/^[a-zA-Z .]*$/",$student_name)) {
			$flag=0;
				if($status){
					$nameError = "In name only letters white space and .(dot) are allowed";
					$status=0;
				}
			}
		}
		
		if($flag){
			$sql="UPDATE student_information SET name='$student_name',
			fname='$student_fname',
			mname='$student_mname',session='$student_session',
			department='$student_department',year='$student_year',
			semester='$student_semester',registration='$student_registration' where 
			S_ID='$edit_record1'";
			
			
			if(mysqli_query($con,$sql)){
					echo"<script>window.open('student_view.php?slogged=$student_roll','_self')</script>";
				}
		}
		else echo"<script>window.open('student_view.php?slogged=$student_roll,updated=Data Not Updated.Fill The Data According To Registration Form.','_self')</script>";
	}
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<!doctype html>
<html>

<head> 
	<title>Updating Student Registration Form </title> 
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="maincontent templete clear">
	
	<div class="Rforom templete clear"> 
	<ul>
		<li> <p>Updating Registration Form </p> </li>
	    
	</ul>
	</div>
	
	<form action="edit.php?edit_form=<?php echo $edit_id;?>" method="post">
	
	<center> 
	
	<div class="tableborder">
		<table border="1" width="900" height="300">
	</div>
	
	<tr>
		<td colspan="5" align="center" bgcolor="green"> <font size="5" color="yellow">Update Student's Information </font> </td>
	</tr>
	
	
	<tr>
		<td bgcolor="grey" align="center">Name:</td> <td align="center" bgcolor="pink"> <input type="text" name="name1" value='<?php echo $s_name;?>'> </td>
		<span class="error"> <?php echo $nameError;?></span>
	</tr>
	
	<tr style="display:none">
		<td bgcolor="pink" align="center">Roll:</td> <td align="center" bgcolor="grey"> <input type="text" name="roll1" value='<?php echo $s_roll;?>' readonly=""> </td>
		<span class="error"> <?php echo $rollError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Father Name:</td> <td align="center" bgcolor="pink"> <input type="text" name="fname1" value='<?php echo $s_fname;?>'> </td>
		<span class="error"> <?php echo $fnameError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="pink" align="center">Mother Name:</td> <td align="center" bgcolor="grey"> <input type="text" name="mname1" value='<?php echo $s_mname;?>'> </td>
		<span class="error"> <?php echo $mnameError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Session:</td> <td align="center" bgcolor="pink"> <input type="text" name="session1" value='<?php echo $s_session;?>'> </td>
		<span class="error"> <?php echo $sessionError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="pink" align="center">Department:</td> <td align="center" bgcolor="grey"> <input type="text" name="department1" value='<?php echo $s_department;?>'> </td>
		<span class="error"> <?php echo $departmentError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Year:</td> <td align="center" bgcolor="pink"> <input type="text" name="year1" value='<?php echo $s_year;?>'> </td>
		<span class="error"> <?php echo $yearError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="pink" align="center">Semester:</td> <td align="center" bgcolor="grey"> <input type="text" name="semester1" value='<?php echo $s_semester;?>'> </td>
		<span class="error"> <?php echo $semesterError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Registration No:</td> <td align="center" bgcolor="pink"> <input type="text" name="registration1" value='<?php echo $s_registration;?>'> </td>
		<span class="error"> <?php echo $RegError;?></span>
	</tr>
	
	</tr>
		<span class="error"> <?php echo $AlreadyRegistered;?></span>
	</tr>
	
	<tr>
		<td colspan="5" align="center" bgcolor="blue" >  <input type="submit" name="update" value="update"> </td>
	</tr>
	
	</table>
	
	</center>
	
	</form>
	
	</div>
	
</body>
	
</html>
