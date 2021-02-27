<!-- sign up page -->

<?php 
require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");

		if(isset($_POST['submit'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$dob=$_POST['dob'];
			$nat=$_POST['nation'];
			$phone=$_POST['number'];
			$password = md5(sha1($_POST['password']));
			$success = <<<html
				<script>
					alert('Account Created Successfully');
					location.href = 'index_0.php';
				</script>
			html;
								
			$query = "INSERT INTO customer(firstname,lastname,username,email,gender,userpassword,DOB,Nationality,PhoneNumber) VALUES ('$firstname', '$lastname', '$username', '$email', '$gender', '$password','$dob','$nat','$phone')";
			$sql = mysqli_query($conn,$query);

			if(!$sql){
				echo $firstname;
				echo " ";
				echo $lastname;
				echo " ";
				echo $username;
				echo " ";
				echo $email;
				echo " ";
				echo $gender;
				echo " ";
				echo $password;
				echo " ";
				echo $dob;
				echo " ";
				echo $nat;
				echo " ";
				echo $phone;
				echo " ";
				die('Error: Could not create user account');
				
			}
			echo $success; 
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
		
	</head>

	<body>
		
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
		
			<div class="inner">
				<div class="image-holder">
					<h3>       </h3>
					<img src="images/registration-form-1.jpg" alt="">
					
				</div>
				<div >
			<a href="/justgotech/SEProject1/client/landingpage/index.html">HOME</a>
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
							<?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'customer' AND COLUMN_NAME = 'gender' ";
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
						<input name="dob" type="date" placeholder="Date of Birth" class="form-control">
						<i class="zmdi zmdi-date"></i>
					</div>
					
					<div class="form-wrapper">
						<select name="nation" id="" class="form-control">
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
						<input name="number" type="text" placeholder="Phone Number" class="form-control" maxlength=10>
						<i class="zmdi zmdi-phone"></i>
					</div>

					<div class="form-wrapper">
						<input name="password" type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input name="repassword" type="password" placeholder="Confirm Password" class="form-control">
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

	
</html>