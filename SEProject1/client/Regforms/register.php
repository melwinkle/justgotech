<?php 
	require_once("../../database/connection.php");
	if(isset($_POST['submit'])){
		$firstname = $_POST['q4_name[first]'];
		$lastname = $_POST['q4_name[last]'];
		$username = $_POST['q24_username'];
		$email = $_POST['q8_email8'];
		$gender = $_POST['q9_gender'];
		$dob=$_POST['dob'];
		$nationality=$_POST['q11_nationality'];
		$phonenumber=$_POST['q13_phoneNumber[full]'];
		$pre=$_POST['q17_healthStatus[]'];
		$password = md5(sha1($_POST['password']));
		$success = <<<html
			<script>
				alert('Account Created Successfully');
				location.href = './SEProject1/client/Regforms/Login.html';
			</script>
		html;
	
		$query = "INSERT INTO customer(firstname,lastname,username,email,gender,dob,nationality,phonenumber,userpassword,precustomer) VALUES ('$firstname', '$lastname', '$username', '$email', '$gender', '$dob', '$nationality', '$phonenumber', '$password','$pre')";
		$sql = mysqli_query($conn,$query);

		if(!$sql){
			die('Error: Could not create user account');
		}
		echo $success; 
	}

		//echo($_POST['q4_name[first]']);
?>