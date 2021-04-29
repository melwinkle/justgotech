<!-- dashboard -->
<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
            function success($username){
                session_start();
                $_SESSION['username'] = $username;
                echo "<script>location.href = '../partner/delivery/ddash.php';</script>";
            }

            $query = "SELECT * from Delivery WHERE Deluser = '$username' and  and Delpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results == 0){
                die("<script>alert('Login failed'); location.href = './dindex.php';</script>");
            }
            success($username);
        }
    }



?>



<?php 
	


		if(isset($_POST['register'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$gender = $_POST['gender'];
			$dob=$_POST['dob'];
			$phonenumber=$_POST['phonenumber'];
			$password = md5(sha1($_POST['password']));
			$success = <<<html
				<script>
					alert('Account Created Successfully');
					location.href = './dindex.php';
				</script>
			html;
						
			$query = "INSERT INTO Delivery(DelFName,DelLName,Gender,DOB,DelNum,Deluser,Delpassword) VALUES ('$firstname', '$lastname', '$gender', '$dob', '$phonenumber', '$username','$password')";
			$sql = mysqli_query($conn,$query);

			if(!$sql){
				die('Error: Could not create user account');
			}
			echo $success; 
		}



		if(isset($_GET['update'])){
			$firstname = $GET['fname'];
			$lastname = $_GET['lname'];
			$num = $_GET['num'];
			$id = $_GET['id'];
			
						
			$query = "UPDATE Delivery SET DelFName='$firstname', DelLName='$lastname',DelNum='$num'";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/dupdate.php?succes=true");
			}
			header("Location: ../delivery/dupdate.php?failure=true");
			
		}
	?>