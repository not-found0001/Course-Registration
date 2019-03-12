<?php
	
	$conn=mysqli_connect("localhost","root","","mydata");
	if($conn) echo"connected";
	
	if(isset($_GET['del'])){
	$del=$_GET['del'];	
	$sql = "delete from student_information where S_ID='$del'";
	if(mysqli_query($conn,$sql)){
		echo"<script>window.open('view.php?deleted=Data Deleted Successfully','_self')</script>";
		}
	}
	
	<td><a href='view.php?del=<?php echo $u_id; ?>'> <input type="button" name="Delete" value="Delete"> </a> </td>
?>   