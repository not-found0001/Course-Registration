<?php

	$conn=mysqli_connect("localhost","root","","mydata");
	if($conn) echo"connected";
	
	if(isset($_GET['approve'])){
	$approve=$_GET['approve'];	
	$sql = "UPDATE student_information SET SB_3=1 where S_ID='$approve'";
	if(mysqli_query($conn,$sql)){
		echo"<script>window.open('admin3_view.php?approved=Approved By Course Coordinator Successfully','_self')</script>";
		}
	}
	
	if(isset($_GET['reject'])){
	$reject=$_GET['reject'];	
	$sql = "UPDATE student_information SET SB_3=0 where S_ID='$reject'";
	if(mysqli_query($conn,$sql)){
		echo"<script>window.open('admin3_view.php?rejected=Rejected By Course Coordinator Successfully','_self')</script>";
		}
	}
?>