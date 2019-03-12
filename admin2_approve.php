<?php

	$conn=mysqli_connect("localhost","root","","mydata");
	if($conn) echo"connected";
	
	if(isset($_GET['approve2'])){
	$approve2=$_GET['approve2'];	
	$sql = "UPDATE student_information SET SB_2=1 where S_ID='$approve2'";
	if(mysqli_query($conn,$sql)){
		echo"<script>window.open('admin2_view.php?approved=Approved By Dept. Chairman Successfully','_self')</script>";
		}
	}
	
	if(isset($_GET['reject2'])){
	$reject2=$_GET['reject2'];	
	$sql = "UPDATE student_information SET SB_2=0 where S_ID='$reject2'";
	if(mysqli_query($conn,$sql)){
		echo"<script>window.open('admin2_view.php?rejected=Rejected By Dept. Chairman Successfully','_self')</script>";
		}
	}
?>