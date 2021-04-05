<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book an appointment</h1>
						</div>
						<form method="POST" id="signup-form" class="signup-form" action="<?=$_SERVER['PHP_SELF'];?>">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Patient</span>
											<select class="form-control"  name="patient" id="patient" required>
												<option>Select</option>
												<option>Self</option>
												<option>Other</option>
											</select>
									</div>
								</div>
						<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Doctor</span>
								<select class="form-control" name="doctor" id="doctor" required>
									<option>Select</option>
									<option>Dr.Rita</option>
									<option>Dr.Luka</option>
								</select>
							</div>
							</div>
						</div>

							<div class="form-group">
								<span class="form-label">Health Insurance</span>
								<select class="form-control" name="healthIn" id="healthIn" required>
									<option>Select</option>
									<option>Yes</option>
									<option>No</option>
								</select>
							</div>

                            <div class="form-group">
                                <span class="form-label">Image of insurance</span>
                                <input type="file" id="myfile" name="myfile" required><br><br>
                            </div>
							                                           
							<div class="form-group">
								<span class="form-label">Insurance Name</span>
								<input class="form-control" type="text" name="Insurname" id="Insurname" placeholder="Enter your Insurance Name" required>
							</div>

							<div class="form-group">
								<span class="form-label">Insurance ID</span>
								<input class="form-control" type="tel" name="InsurId" id="InsurId" placeholder="Enter your Insurance ID number" required>
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
											<option>Covid-19</option>
											<option>Gyneacology</option>
											<option>Optics</option>
											<option>Dentistry</option>
											<option>Pediatrics</option>
											<option>Emergency</option>
											<option>Blood</option>
											<option>Nutrition/Diet</option>
											<option>Counselling</option>
											<option>Dermatology</option>
											<option>Wound dressing</option>
										</select>
									<span class="select-arrow"></span>
								  </div>
						    	</div>
                        	</div>
							

							<div class="form-btn">
							<input type="submit" name="submit" id="submit" class="submit-btn" value="Book Now"/>
								<!-- <button class="submit-btn"  name="submit" id="submit">Book Now</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<?php
//KINDLY IGNORE THIS PART 

// require_once('connection.php');

// if(isset($_POST['submit'])){
//         echo "fixing the buygs 3333333333";
//         $patient = $_POST['patient'];
//         $doctor = $_POST['doctor'];
//         $healthInsu = $_POST['healthIn'];
//         $InName = $_POST['Insurname'];
//         $InID = $_POST['InsurId'];
//         $BookingR = $_POST['bookreason'];
//         $Appdate = $_POST['appDate'];
//         $Apptime = $_POST['apptime'];
//         $Departm = $_POST['departm'];
//         echo "fixing the buygs 4444444444";
 
//         //the sql inserts into the database columns
//         $sql = "INSERT INTO booking (Appointment,Department,Reason,Insurance,Insurance_Name,Insurance_ID,Doctor,ApTime, Person, PatientID) 
//          VALUES('{$Appdate}', '{$Departm}', '{$BookingR}', '{$healthInsu}', '{$InName}', '{$InID}', '{$doctor}', '{$Apptime}', '{$patient}', '1')";
//             echo "fixing the buygs 4.555555555555555";
//             //$db = openConnection();
//             echo "fixing the buygs 55555";
//             $results = mysqli_query($conn, $sql); 
//             if ($results) {
//                 header("Location: ../client/tracker/tracker.php");
//                 echo "record inserted";
//             }
            
//             else {
//                echo "fixing the buygs 777777";
//                echo "connection failed";
               
//             }
//         }
//         mysqli_close($conn);
    ?>
