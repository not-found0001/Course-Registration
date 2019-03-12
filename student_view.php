<?php
	session_start();
?>

<!doctype html>
<html>

<head> 
	<title> Viewing The Records </title> 
</head>

<body>
<td><a href='student_login.php'> <input type="button" name="logout" value="Logout"> </a> </td>
<center><font color='red' size='6'>
<?php echo @$_GET['deleted']; ?>
<?php echo @$_GET['updated']; ?>
</font></center>
<table align='center' width='1000' border='4'> 
	<tr>
		<td colspan='20' align='center' bgcolor='pink'> 
		 <h1>Records of <?php echo @$_GET['slogged']; ?></h1> </td>
	</tr> 
	
	<tr align='center'>
	<th>Student's Name</th>
	<th>Roll No</th>
	<th>Edit</th>
	<th>Details</th>
	<th>Status</th>
	</tr>
	
	<tr align='center'>
<?php
	
	$conn=mysqli_connect("localhost","root","","mydata");
	if($conn) echo"connected";
	$roLL=@$_GET['slogged'];
	echo $roLL;
	$sql = "SELECT * from student_information where roll='$roLL'";
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
	<td><a href='edit.php?edit=<?php echo $u_id; ?>'> <input type="button" name="Edit" value="Edit"> </a></td>
	<td><a href='details.php?details=<?php echo $u_id?>'> <input type="button" name="Details" value="Details"> </a></td> 
	<td> <?php if($SB_1==1 and $SB_2==1 and $SB_3==1 and $SB_4==1) echo"Accepted"; else echo"Pending"; ?> </td>
	</tr>
<?php } ?>

</table>
</body>
</html>