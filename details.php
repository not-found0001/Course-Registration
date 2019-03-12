<?php

	$con=mysqli_connect("localhost","root","","mydata");
	
	if(isset($_GET['details'])){
		$details=$_GET['details'];
		$sql="select * from student_information where S_ID='$details'";
		$run=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($run)){
			$details_id=$row['S_ID'];
			$s_name=$row[0];
			$s_roll=(string)$row[1];
			$s_fname=$row[2];
			$s_mname=$row[3];
			$s_session=$row[4];
			$s_department=$row[5];
			$s_year=$row[6];
			$s_semester=$row[7];
			$s_registration=(string)$row[13];
		}	
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Just</title>
	<!-- Library Css-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!-- Custom Css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="container-fluid">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2">
							<div class="logo">
								<img src="img/just2.png" alt="">
							</div>
						</div>
						<div class="col-md-10">
							<div class="heading-text">
								<div class="heading">
									<h2>Jashore University of Science & Technology, Jashore</h2>
								</div>
								<div class="roll-reg">
									<div class="roll">
										<div class="left">
											<p>Roll No:</p>
										</div>
										<div class="right">
											<table class="ct">
												<tbody>
													<tr>
														<td contenteditable="true">
														<?php echo $s_roll[0]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_roll[1]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_roll[2]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_roll[3]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_roll[4]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_roll[5]; ?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="roll">
										<div class="left">
											<p>Reg No:</p>
										</div>
										<div class="right">
											<table class="" border="1">
												<tbody>
													<tr>
														<td contenteditable="true">
														<?php echo $s_registration[0]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_registration[1]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_registration[2]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_registration[3]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_registration[4]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_registration[5]; ?>
														</td>
														<td contenteditable="true">
														<?php echo $s_registration[6]; ?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="info">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="sinfo">
							<div class="heading">
								<h2>Application for course registration and examination</h2>
							</div>
							<div class="text">
								<p>To</p>
								<p>The Exam Controller,</p>
								<p>Jashore university of science & technology, jashore</p>
								<p>Sir,</p>
								<p>I am <b> <?php echo "   "; echo $s_name; ?> </b> department of <b> <?php echo "   "; echo $s_department; ?> </b> session <b> <?php echo "   "; echo $s_session; ?> </b> year <b> <?php echo "   "; echo $s_year; ?> </b> semester <b> <?php echo "   "; echo $s_semester; ?> </b> applying  to you for participating honours/others examination. If the provided informations prove to be incorrect or I have done any works that are illegal, it will be
								 rejected. I am also committed that infuture if any doubt against my registration from about it's validity I will abide by the final decision of regent board.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="course">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h2>Course no and credit:</h2>
						</div>
						<div class="course-table">
							<div class="tbl">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>Course No</th>
										<th>Course Title</th>
										<th>Course credit</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td colspan="2">Total credit  =</td>
										<td></td>

									</tr>

									</tbody>
								</table>
							</div>
							<div class="tbl">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>Course No</th>
										<th>Course Title</th>
										<th>Course credit</th>
									</tr>
									</thead>
									<tbody>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>

									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
										<td contenteditable="true"></td>
									</tr>
									<tr>
										<td colspan="2">Total credit  =</td>
										<td></td>

									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="para">
							<p>(With fees this application must be reached to the exam controller office intime. If the application is not fully-fill correctly, missing the signature issue of the departmental chairman and is not recommended by the hall provost, it will be rejected.)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="final-course">
			<div class="container-fluid">
				<div class="row">
					<div class="tbl-text">
						<h2>Course numbers and credits for all the cases that will be registered in the examination:</h2>
					</div>
					<div class="fnl-tbl">
						<div class="col-md-6">
							<div class="tbl">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th colspan="2">Original Course</th>
									</tr>
										<tr>
											<th>Course No</th>
											<th>Credit</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>

									<tr>
										<td></td>
										<td>3.00</td>
									</tr>

									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td>Total Credit =</td>
										<td>3.00</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-md-6">
							<div class="tbl">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th colspan="2">Drop/Advance Course</th>
									</tr>
									<tr>
										<th>Course No</th>
										<th>Credit</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>

									<tr>
										<td></td>
										<td>3.00</td>
									</tr>

									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td></td>
										<td>3.00</td>
									</tr>
									<tr>
										<td>Total Credit =</td>
										<td>3.00</td>
									</tr>
									<tr>
										<td>Total Credit =</td>
										<td>3.00</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="assure">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="text">
							<p>I assure that,the following student dept of <input type="text"> is respectful to the rules of residential/non residential hall.There is no liability to her/him and recommended for course registration.</p>
						</div>
						<div class="text">
							<p>I assure that, the following student have complited <input type="text"> year <input type="text"> semester and promoted.His/Her behaviour and character is good and I recommended for course registration of <input type="text"> year <input type="text"> semester.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>

		</style>
	</div>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>