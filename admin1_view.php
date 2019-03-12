<?php
	session_start();
	if(!$_SESSION['admin_name']){
		header('location:admin_login.php?errors=You are not an Administrator.');
	}
?>

<!doctype html>
<html>
<head> 
	<title> Viewing The Records </title> 
</head>

<body>
<td align='right'><font color='red' size='6'>
<?php echo "Welcome Hall Provost"; ?>
</font></td>
<center><font color='red' size='6'>
<?php echo @$_GET['approved']; ?>
<?php echo @$_GET['rejected']; ?>
</font></center>
<td><a href='admin_login.php'> <input type="button" name="logout" value="Logout"> </a> </td>
<table align='center' width='1200' border='4'> 
	<tr>
		<td colspan='20' align='center' bgcolor='pink'> 
		 <h1>viewing all the records </h1> </td>
	</tr> 
	
	<tr align='center'>
	<th>Student's Name</th>
	<th>Roll No</th>
	<th>Details</th>
	<th>Provost Status</th>
	<th>Dept. Chairman Status</th>
	<th>Course Coordinator Status</th>
	<th>Exam Controller Status</th>
	<th>Approved</th>
	<th>Reject</th>
	</tr>
	
	<tr align='center'>
<?php
	
	$conn=mysqli_connect("localhost","root","","mydata");
	//if($conn) echo"connected";
	
	$sql = "SELECT * from student_information";
	$records=mysqli_query($conn,$sql);
	
	while($rows=mysqli_fetch_array($records)){
	
	$u_id=$rows['S_ID'];
	$s_name=$rows[0];
	$f_name=$rows[2];
	$roll=$rows[1];
	$SB_1=$rows[9];
	$SB_2=$rows[10];
	$SB_3=$rows[11];
	$SB_4=$rows[12];
?>	
<tr align='center'>
	<td> <?php echo $s_name; ?> </td>
	<td> <?php echo $roll; ?> </td> 
	<td><a href='details.php?details=<?php echo $u_id?>'> <input type="button" name="Details" value="Details"> </a></td> 
	<td> <?php if($SB_1==0) echo"Pending"; else echo"Accepted"; ?></td>
	<td> <?php if($SB_2==0) echo"Pending"; else echo"Accepted"; ?></td>
	<td> <?php if($SB_3==0) echo"Pending"; else echo"Accepted"; ?></td>
	<td> <?php if($SB_4==0) echo"Pending"; else echo"Accepted"; ?></td>
	<td><a href='admin1_approve.php?approve=<?php echo $u_id?>'> <input type="button" name="approve" value="Approve"> </a></td>
	<td><a href='admin1_approve.php?reject=<?php echo $u_id?>'> <input type="button" name="reject" value="Reject"> </a></td>
	</tr>
<?php } ?>

</table>
</body>
</html>