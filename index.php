<?php
	
	$nameError ="";
	$rollError ="";
	$fnameError ="";
	$mnameError ="";
	$sessionError="";
	$departmentError="";
	$yearError="";
	$semesterError="";
	$PassError="";
	$AlreadyRegistered="";
	$RegError="";
	
	
	$con=mysqli_connect("localhost","root","","mydata");
	
	if($con){
		echo"connected";
	}
	echo"<br>";
	
	$flag=1;
	$status=1;
	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$roll=$_POST['roll'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$session=$_POST['session'];
		$department=$_POST['department'];
		$year=$_POST['year'];
		$semester=$_POST['semester'];
		$registration=$_POST['registration'];
		$password=$_POST['password'];
		
		
		$query="select * from student_information where roll='$roll' AND semester='$semester'
		AND year='$year'";
		
		$run=mysqli_query($con,$query);
		if(mysqli_num_rows($run)>0){
			$flag=0;
			$AlreadyRegistered="You Are Already Registered";
		}
		
		$query="select * from S_login where S_username='$roll'
		AND S_password='$password'";
		$run=mysqli_query($con,$query);
		if(mysqli_num_rows($run)>0);
		else{
			$flag=0;
			$PassError="Your Password Is Invalid";
		}
		
		if (empty($name)){
			$flag=0;
			
			if($status){
			   $nameError = "Name is required";
			   $status=0;
			}
		} 
		else if(!empty($name)){
			$name = test_input($name);
			if (!preg_match("/^[a-zA-Z .]*$/",$name)) {
			$flag=0;
				if($status){
					$nameError = "In name only letters white space and .(dot) are allowed";
					$status=0;
				}
			}
		}
		
		if(empty($roll)) {
			$flag=0;
			if($status){			
				$rollError = "roll is required";
				$status=0;
			}
		} 
		else if(!empty($roll)){
			$roll = test_input($roll);
			if (!preg_match("/^[0-9]{6}+$/",$roll)) {
				$flag=0;
				if($status){
					$rollError = "In roll only digit allowed";
					$status=0;
				}
			}
		}
		
		if(empty($fname)) {
			$flag=0;
			if($status){
				$fnameError = "father name is required";
				$status=0;
			}
		} 
		else if(!empty($fname)){
			$fname = test_input($fname);
			if (!preg_match("/^[a-zA-Z .]*$/",$fname)) {
			$flag=0;
				if($status){
					$fnameError = "In father name only letters white space and .(dot) are allowed";
					$status=0;
				}
			}
		}
		
		if(empty($mname)) {
			$flag=0;
			if($status){
				$mnameError = "Mother name is required";
				$status=0;
			}
		} 
		else if(!empty($mname)){
			$mname = test_input($mname);
			if (!preg_match("/^[a-zA-Z .]*$/",$mname)) {
			$flag=0;
				if($status){
					$mnameError = "In mother name only letters white space and .(dot) are allowed";
					$status=0;
				}
			}
		}
		
		if(empty($session)) {
			$flag=0;
			if($status){
				$sessionError = "session is required";
				$status=0;
			}
		} 
		else if(!empty($session)){
			$session = test_input($session);
			if (!preg_match("/^[0-9-]{9}+$/",$session)) {
			$flag=0;
				if($status){
					$sessionError = "In session only digit and - are allowed";
					$status=0;
				}
			}
		}
		
		
		if(empty($department)) {
			$flag=0;
			if($status){
				$departmentError = "Department name is required (short form)";
				$status=0;
			}
		} 
		
		else if(!empty($department)){
			$department = test_input($department);
			if (!preg_match("/^[a-zA-Z]*$/",$department)) {
			$flag=0;
				if($status){
					$departmentError = "In department name only letters are allowed";
					$status=0;
				}
			}
		}
		
		if(empty($year)) {
			$flag=0;
			if($status){
				$yearError = "Year is required";
				$status=0;
			}
		}
		else if(!empty($year)){
			$year = test_input($year);
			if (!preg_match("/^[a-zA-Z]*$/",$year)) {
			$flag=0;
				if($status){
					$yearError = "In year only letters are allowed";
					$status=0;
				}
			}
		}
		
		if(empty($semester)) {
			$flag=0;
			if($status){
				$semesterError = "Semester is required";
				$status=0;
			}
		}
		else if(!empty($semester)){
			$semester = test_input($semester);
			if (!preg_match("/^[a-zA-Z]*$/",$semester)) {
			$flag=0;
				if($status){
					$semesterError = "In semester only letters are allowed";
					$status=0;
				}
			}
		}
		
		if(empty($registration)) {
			$flag=0;
			if($status){			
				$RegError = "Registration Number is required";
				$status=0;
			}
		} 
		else if(!empty($registration)){
			$registration = test_input($registration);
			if (!preg_match("/^[0-9]{7}+$/",$registration)) {
				$flag=0;
				if($status){
					$RegError = "In registration number only digit allowed";
					$status=0;
				}
			}
		}
		
		if($flag){
			$sql="INSERT INTO student_information(name,roll,fname,mname,session,department,year,semester,registration) 
			VALUES('$name','$roll','$fname','$mname','$session','$department','$year','$semester','$registration')";
				
			if(mysqli_query($con,$sql)){
				echo"Data Inserted";
			}
		}
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>


<!doctype html>
<html>

<head> 
	<title> Student Registration Form </title> 
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="maincontent templete clear">
	
	<div class="Rforom templete clear"> 
	<ul>
		<li> <p> Registration Form </p> </li>
	    
	</ul>
	</div>
	
	<form action="index.php" method="post">
	
	<center> 
	
	<div class="tableborder">
		<table border="1" width="900" height="300">
	</div>
	
	<tr>
		<td colspan="5" align="center" bgcolor="green"> <font size="5" color="yellow"> Student's Information </font> </td>
	</tr>
	
	
	<tr>
		<td bgcolor="grey" align="center">Name:</td> <td align="center" bgcolor="pink"> <input type="text" name="name"> </td>
		<span class="error"> <?php echo $nameError;?></span>
	</tr>
	
	
	<tr>
		<td bgcolor="pink" align="center">Roll:</td> <td align="center" bgcolor="grey"> <input type="text" name="roll"> </td>
		<span class="error"> <?php echo $rollError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Father Name:</td> <td align="center" bgcolor="pink"> <input type="text" name="fname"> </td>
		<span class="error"> <?php echo $fnameError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="pink" align="center">Mother Name:</td> <td align="center" bgcolor="grey"> <input type="text" name="mname"> </td>
		<span class="error"> <?php echo $mnameError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Session:</td> <td align="center" bgcolor="pink"> <input type="text" name="session"> </td>
		<span class="error"> <?php echo $sessionError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="pink" align="center">Department:</td> <td align="center" bgcolor="grey"> <input type="text" name="department"> </td>
		<span class="error"> <?php echo $departmentError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="grey" align="center">Year:</td> <td align="center" bgcolor="pink"> <input type="text" name="year"> </td>
		<span class="error"> <?php echo $yearError;?></span>
	</tr>
	
	<tr>
		<td bgcolor="pink" align="center">Semester:</td> <td align="center" bgcolor="grey"> <input type="text" name="semester"> </td>
		<span class="error"> <?php echo $semesterError;?></span>
	</tr>
	<tr>
		<td bgcolor="grey" align="center">Registration No:</td> <td align="center" bgcolor="pink"> <input type="text" name="registration"> </td>
		<span class="error"> <?php echo $RegError;?></span>
	</tr>
	<tr>
		<td bgcolor="grey" align="center">Password:</td> <td align="center" bgcolor="pink"> <input type="text" name="password"> </td>
		<span class="error"> <?php echo $PassError;?></span>
	</tr>
	</tr>
		<span class="error"> <?php echo $AlreadyRegistered;?></span>
	</tr>
	
	<tr>
		<td colspan="5" align="center" bgcolor="blue" >  <input type="submit" name="submit"> </td>
	</tr>
	
	</table>
	
	</center>
	
	</form>
	
	</div>
	
	
</body>
	
</html>
