<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","mydata");
	if($conn) echo"connected";
	
	if(isset($_POST['login'])){
		$admin_name=$_SESSION['admin_name']=$_POST['admin_name'];
		$admin_pass=$_POST['admin_pass'];
		
		$query="select * from S_login where S_username='$admin_name'
		AND S_password='$admin_pass'";
		
		$run=mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0){
			echo"<script>window.open('student_view.php?slogged=$admin_name','_self')</script>";
		}
		else{
			echo"<script>alert('Password or username is incorrect!!!')</script>";
		}
	}
?>

<html>
	<head>
		<title>Student Login</title>
	</head>

<body>
<form action='student_login.php' method='post'>
<table width='400' border='2' align='center' bgcolor='orange'>
	<tr>
	<td align='center' bgcolor='pink' colspan='6'><h2>Sign Up</h2></td>
	</tr>
	
	<tr>
	<td align='center'>User Name</td>
	<td><input type='text' name='admin_name'></td>
	</tr>
	
	<tr>
	<td align='center'>User Password</td>
	<td><input type='password' name='admin_pass'></td>
	</tr>
	
	<tr>
	<td colspan='4' align='center'> <input type='submit' name='login' value='Login'></td>
	</tr>
	
</table>
</form>
</body>
</html>