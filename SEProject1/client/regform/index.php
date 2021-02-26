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
		
	</head>

	<body>
		
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			
			<div class="inner">
				<div class="image-holder">
					<h3>       </h3>
					<img src="images/registration-form-1.jpg" alt="">
					
				</div>
				
				<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input name="firstname" type="text" placeholder="First Name" class="form-control">
						<input name="lastname" type="text" placeholder="Last Name" class="form-control">
					</div>
					
					<div class="form-wrapper">
						<input name="username" type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input name="email" type="text" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control">
							<option disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input name="password" type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input name="password" type="password" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button name="submit" type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<div class="sign_in">Already have an account? <a href="index_0.php" class="in">Sign In!</a></div>
				</form>
				
			</div>
		</div>
		
	</body>

	<?php require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");

		if(isset($_POST['submit'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$password = md5(sha1($_POST['password']));
			$success = <<<html
				<script>
					alert('Account Created Successfully');
					location.href = './index_0.php';
				</script>
			html;
								
			$query = "INSERT INTO customer(firstname,lastname,username,email,gender, userpassword) VALUES ('$firstname', '$lastname', '$username', '$email', '$gender', '$password')";
			$sql = mysqli_query($conn,$query);

			if(!$sql){
				die('Error: Could not create user account');
			}
			echo $success; 
		}
	?>
</html>