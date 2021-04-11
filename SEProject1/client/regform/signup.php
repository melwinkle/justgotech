<!-- sign up page -->
<?php 
	session_start();
	if(isset($_SESSION['username'])){
	  echo "<script>location.href = '../tracker/tracker.php'</script>";
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
		<link rel="stylesheet" href="css/style.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="../booking/js/main.js"></script>

		<script defer src="./signup-verification.js"></script>
	</head>

	<body>
		
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<h3></h3>
					<img src="images/registration-form-1.jpg" alt="">
				</div>
			<div >
			<a href="../landingpage/index.html">HOME</a>
		</div>

		<form id="form" onsubmit="return validate()" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
			<h3>Registration Form</h3>
			<div class="form-group">
				<input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" required>
				<input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" required>
			</div>
			
			<div class="form-wrapper">
				<input id="username" minlength="5" maxlength="20"  name="username" type="text" placeholder="Username" class="form-control" required>
				<i class="zmdi zmdi-account"></i>
			</div>

			<div class="form-wrapper">
				<input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
				<i class="zmdi zmdi-email"></i>
			</div>

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
				<select name="nationality" id="Nationality" class="form-control" >
					<option disabled selected>Nationality</option>
					<?php 
						$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'customer' AND COLUMN_NAME = 'Nationality' ";
						$result=mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($result)) {
							$type=$row['COLUMN_TYPE'];

							$output = str_replace("enum('", "", $type);

						// $output will now be: Equipment','Set','Show
							$output = str_replace("')", "", $output);

							// array $results contains the ENUM values
							$results = explode("','", $output);

							for($i = 0; $i < count($results); $i++) {
								echo " <option value='$results[$i]'>$results[$i]</option>";
						}
							
						}
					?>
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

			<div class="form-wrapper">
				<input id='repassword' name="repassword" type="password" placeholder="Confirm Password" class="form-control">
				<i class="zmdi zmdi-lock"></i>
			</div>

			<button name="submit" type="submit">Register
				<i class="zmdi zmdi-arrow-right"></i>
			</button>

			<div class="sign_in">Already have an account? <a href="./login.php" class="in">Sign In!</a></div>
		</form>
				
			</div>
		</div>
	</body>

	
	<?php 
		require_once("../../database/connection.php");


		if(isset($_POST['submit'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$dob=$_POST['dob'];
			$nationality=$_POST['nationality'];
			$phonenumber=$_POST['phonenumber'];
			$password = md5(sha1($_POST['password']));
			$success = <<<html
				<script>
					alert('Account Created Successfully');
					location.href = './login.php';
				</script>
			html;
						
			$query = "INSERT INTO customer(firstname,lastname,username,email,gender,dob,nationality,phonenumber,userpassword) VALUES ('$firstname', '$lastname', '$username', '$email', '$gender', '$dob', '$nationality', '$phonenumber', '$password')";
			$sql = mysqli_query($conn,$query);

			if(!$sql){
				die('Error: Could not create user account');
			}
			echo $success; 
		}
	?>
</html>