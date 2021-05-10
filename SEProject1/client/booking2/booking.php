<?php

require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
	echo "<script>location.href = 'viewbooking.php'</script>";
}

	$username=$_SESSION['username'];
	$query="SELECT * from customer where username='$username'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Booking Form </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="css/covid.css">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>


<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/bookmain.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Consultation</a>
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
 <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="../../images/stethoscope.png" alt="profile"> </span>
</div>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book an appointment</h1>
						</div>
						<form method="POST" id="signup-form" class="signup-form" action= "bookingverify.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Patient</span>
											<select class="form-control"  name="patient" id="patient" required>
												<option>Select</option>

												<?php 
													$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'booking' AND COLUMN_NAME = 'Person' ";
													$result=mysqli_query($conn,$sql);
													while($row = mysqli_fetch_array($result)) {
													$type=$row['COLUMN_TYPE'];

													$output = str_replace("enum('", "", $type);

												// $output will now be: Equipment','Set','Show
													$output = str_replace("')", "", $output);

													// array $results contains the ENUM values
													$results = explode("','", $output);

													for($i = 0; $i < count($results); $i++) {
														echo "  <option name='person'value='$results[$i]'>$results[$i]</option><br>";
													} 
												}
												?>
											</select>
										</div>
									</div>

						<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Doctor</span>
								<select class="form-control" name="doctor" id="doctor" required>
									<option>Select</option>
										
									<!-- printing Doctor's values from the database -->

									<?php 
										$sql="SELECT * FROM Doctor ";
										$result=mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)) {
											$type = $row['DocFname'];
											$output = str_replace("enum('", "", $type);
											$output = str_replace("')", "", $output);
											$result = explode("','", $output);
												for($i = 0; $i < count($result); $i++) {
													$docname = $result[$i];
												echo "<option name='doctor'value='$result[$i]'>Dr.$result[$i]</option><br>";
												} 
											}

										?>
								</select>
							</div>
							</div>
						</div>

							<div class="form-group">
								<span class="form-label">Health Insurance</span>
								<select class="form-control" name="healthIn" id="healthIn" required>
					           
							   <?php 
                                     $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'booking' AND COLUMN_NAME = 'Insurance' ";
                                     $result=mysqli_query($conn,$sql);
                                      while($row = mysqli_fetch_array($result)) {
                                        $type=$row['COLUMN_TYPE'];

                                              $output = str_replace("enum('", "", $type);
                                              $output = str_replace("')", "", $output);
                                              $results = explode("','", $output);

						                for($i = 0; $i < count($results); $i++) {
											echo "  
											<option id='$results[$i]' name='healthinsurance' value='$results[$i]' </option>
											<label for='$results[$i]'>$results[$i]</label>
											<br>";
										} 
									}
 				                ?>	
								</select>
							</div>                                                                   
							<div class="form-group">
								<span class="form-label">Insurance Name</span>
								<input class="form-control" type="text" name="Insurname" id="Insurname" placeholder="Enter your Insurance Name" >
							</div>

							<div class="form-group">
								<span class="form-label">Insurance ID</span>
								<input class="form-control" type="number" name="InsurId" id="InsurId" placeholder="Enter your Insurance ID number" >
							</div>

							<div class="form-group">
								<span class="form-label">Reason for booking</span>
								<input class="form-control" type="textarea"  name="bookreason" id="bookreason" placeholder="Explain why you are booking e.g any health challenges faced" required>
							</div>

                              <div class="row">
								  <div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Appointment Time</span>
										<input class="form-control"  name="apptime" id="apptime"  type="time" required>
											<!-- Selecting the doctors'available time -->

										<?php
										
											$sql="SELECT Time_available FROM doctor_time WHERE";
											$result=mysqli_query($conn,$sql);
											while($row = mysqli_fetch_array($result)) {
												$type  = $row['DocFname'];
												$output = str_replace("enum('", "", $type);
												$output = str_replace("')", "", $output);
												$result = explode("','", $output);
												for($i = 0; $i < count($result); $i++) {
												echo "<option name='doctor'value='$result[$i]'>Dr.$result[$i]</option><br>";
											} 
										}
										
										?>
									</div>
								</div>                 

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="form-label">Appointment Date</span>
                                            <input class="form-control"  name="appDate" id="appDate"  type="date" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="row">
								  <div class="col-sm-5">
									<div class="form-group">
                                     <span class="form-label">Department</span>
										<select class="form-control" name="departm" id="departm" required>
											<option>select</option>
											<?php 
												$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'booking' AND COLUMN_NAME = 'Department' ";
												$result=mysqli_query($conn,$sql);
												while($row = mysqli_fetch_array($result)) {
												$type=$row['COLUMN_TYPE'];

												$output = str_replace("enum('", "", $type);

											// $output will now be: Equipment','Set','Show
												$output = str_replace("')", "", $output);

												// array $results contains the ENUM values
												$results = explode("','", $output);

												for($i = 0; $i < count($results); $i++) {
													echo "  <option name='dept'value='$results[$i]'>$results[$i]</option><br>";
												   } 
												}
											?>

										</select>
					<span class="select-arrow"></span>
					  </div>
						</div>
                        	</div>
					
							<div class="form-btn">
							<input type="submit" name="submit" id="submit" class="submit-btn" value="Book Now"/>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>

