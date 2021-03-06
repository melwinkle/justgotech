<!-- sign up page -->

<?php
session_start();

if (isset($_SESSION['username'])) {
	header("Location: ../tracker/tracker.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css_/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script src="../booking/js/main.js"></script> -->

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script defer src="./js/location.js"></script>
	<script defer src="./signup-verification.js"></script>

	<style>
		input {
			font-size: medium !important;
			padding: 4px 0 !important;
		}
		input::placeholder {
			font-size: medium !important;
		}	

		select {
			font-size: medium !important;
		}

		.sign_in {
			font-size: larger !important;
		}
	</style>
</head>

<body>
<!-- style="box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2), 0px 0px 50px rgba(0, 0, 0, 0.2);" -->

	<div  class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg'); display: grid; place-content: center;">

		<div class="inner" style="margin: 40px; box-shadow: 0 40px 40px rgba(0, 0, 0, 0.2), 0px 0px 60px rgba(0, 0, 0, 0.2);">
			<div class="image-holder" style="display: grid; place-content: center;">
				<!-- <h3><a href="../../../index.html" style="text-decoration: none;"> &#x2190; GO BACK TO HOME</a></h3> -->
				<h3><a href="../../../index.php" style="text-decoration: none;">Back Home <i class="zmdi zmdi-home"></i></a></h3>
				<img src="./images/registration-form-1.jpg" width="100%">
			</div>
			<div>
			</div>

			<form id="form" onsubmit="return validate()" method="post" action="<?= $_SERVER['PHP_SELF']; ?>" style="padding: 20px;">
				<h3>Registration Form</h3>
				<div class="form-group">
					<input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" required>
					<input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" required>
				</div>

				<div class="form-wrapper">
					<input id="username" minlength="5" maxlength="20" name="username" type="text" placeholder="Username" class="form-control" required>
					<i class="zmdi zmdi-account"></i>
				</div>

				<div class="form-wrapper">
					<input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
					<i class="zmdi zmdi-email"></i>
				</div>
				<div id="email-error-msg" style="margin-bottom: 10px; color: red"></div>


				<div class="form-wrapper">
					<select name="gender" id="" class="form-control" required>
						<option disabled selected>Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
				</div>

				<div class="form-wrapper">
					<input name="dob" type="date" placeholder="Date of Birth" class="form-control" required>
					<i class="zmdi zmdi-date"></i>
				</div>

				<div class="form-wrapper">
					<select name="nationality" id="Nationality" class="form-control">
						<option>Nationality</option>

					</select>
				</div>

				<div class="form-wrapper">
					<input name="phonenumber" type="text" placeholder="Phone Number" class="form-control" maxlength=10 required>
					<i class="zmdi zmdi-phone"></i>
				</div>

				<div class="form-wrapper">
					<input id='password' name="password" minlength="6" maxlength="15" type="password" placeholder="Password" class="form-control" required>
					<i class="zmdi zmdi-lock"></i>
				</div>

				<div id="password-error-msg" style="margin-bottom: 10px; color: red"></div>


				<div class="form-wrapper">
					<input id='repassword' name="repassword" type="password" placeholder="Confirm Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>
				<div id="repassword-error-msg" style="margin-bottom: 10px; color: red; "></div>


				<button name="submit" type="submit">Register
					<i class="zmdi zmdi-arrow-right"></i>
				</button>

				<div style="padding-top: 20px;" class="sign_in">Already have an account? <a href="./Login.php" class="in">Sign In!</a></div>
			</form>

		</div>
	</div>
</body>

</html>


<?php
require('../../database/connection.php');

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$nationality = $_POST['nationality'];
	$telephone = $_POST['phonenumber'];
	$userpassword = md5(sha1($_POST['password']));
	$precustomer = $_POST['submit'];

	$sql = "INSERT INTO heroku_c9b858a1f702a48.customer(`firstname`, `lastname`, `username`, `email`, `gender`, `dob`, `nationality`, `phonenumber`, `userpassword`, `precustomer`) VALUES('$firstname', '$lastname', '$username', '$email','$gender', '$dob', '$nationality', '$telephone', '$userpassword', 'None')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "
			<script>
				alert('Account Successfully Created');
				location.href = './Login.php';
			</script>";
	} else {
		echo "<script>alert('Problem Registering Account'); console.log('$result');</script>";
	}
}
?>