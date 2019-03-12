<?php
	session_start();
?>

<?php
	$conn=mysqli_connect("localhost","root","","mydata");
	if($conn) echo"connected";
	
	if(isset($_POST['login'])){
		$admin_name=$_SESSION['admin_name']=$_POST['admin_name'];
		$admin_pass=$_POST['admin_pass'];
		
		$query="select * from login where user_name='$admin_name'
		AND user_password='$admin_pass'";
		
		
		$run=mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0 and $admin_pass=="hp"){
			echo"<script>window.open('admin1_view.php?logged=Login successfully.','_self')</script>";
		}
		else if(mysqli_num_rows($run)>0 and $admin_pass=="dc"){
			echo"<script>window.open('admin2_view.php?logged=Login successfully.','_self')</script>";
		}
		else if(mysqli_num_rows($run)>0 and $admin_pass=="cc"){
			echo"<script>window.open('admin3_view.php?logged=Login successfully.','_self')</script>";
		}
		else if(mysqli_num_rows($run)>0 and $admin_pass=="ec"){
			echo"<script>window.open('admin4_view.php?logged=Login successfully.','_self')</script>";
		}
		else{
			echo"<script>alert('Password or username is incorrect!!!')</script>";
		}
	}
?>

<html>
	<head>
		<title>Admin Login</title>
	</head>

<body>
<form action='admin_login.php' method='post'>
<table width='400' border='2' align='center' bgcolor='orange'>
	<tr>
	<td align='center' bgcolor='pink' colspan='6'><h2>Admin Login</h2></td>
	</tr>
	
	<tr>
	<td align='center'>Admin Name</td>
	<td><input type='text' name='admin_name'></td>
	</tr>
	
	<tr>
	<td align='center'>Admin Password</td>
	<td><input type='password' name='admin_pass'></td>
	</tr>
	
	<tr>
	<td colspan='4' align='center'> <input type='submit' name='login' value='Login'></td>
	</tr>
	
</table>
</form>
<center><?php echo @$_GET['errors']; ?></center>
</body>
</html>