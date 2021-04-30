<!-- dashboard -->
<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
         
                
             

            $query = "SELECT * from Delivery WHERE Deluser = '$username' and Delpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results ){
				$row=mysqli_fetch_assoc($sql);
				$del=$row['DelID'];
				$fn=$row['DelFName'];
				$ln=$row['DelLName'];
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['delid']=$del;
				$_SESSION['fname']=$fn;
				$_SESSION['lname']=$ln;
                header("Location: ../delivery/dorder.php?success=true&$del&$$fn&$rln");
            }
            
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
			
						
			$query = "INSERT INTO Delivery(DelFName,DelLName,Gender,DOB,DelNum,Deluser,Delpassword) VALUES ('$firstname', '$lastname', '$gender', '$dob', '$phonenumber', '$username','$password')";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/dindex.php?success");
			}
			else{
				header("Location: ../delivery/dreg.php?fail");
			}
			
		}



		if(isset($_POST['update'])){
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$num = $_POST['num'];
			$id = $_GET['id'];
			
						
			$query = "UPDATE Delivery SET DelFName='$firstname',DelLName='$lastname',DelNum='$num' where DelID=$id";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/dupdate.php?succes=true");
			}
			header("Location: ../delivery/dupdate.php?failure=true&id=$id&$firstname&$lastname&$num");
			
		}



		if(isset($_GET['accept'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Accepted' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/doneder.php?success=acc&$tc");
			}
			header("Location: ../delivery/doneder.php?failure=true&$tc");
			
		}
		if(isset($_GET['fin'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Picked' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/doneder.php?success=true&$tc");
			}
			header("Location: ../delivery/doneder.php?failure=true&$tc");
			
		}
		if(isset($_GET['str'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Route' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/doneder.php?success=true&$tc");
			}
			header("Location: ../delivery/doneder.php?failure=true&$tc");
			
		}
		if(isset($_GET['arr'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			$trip= $_GET['trip'];
			
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Delivered' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				$trips=$trip+1;
				$up="UPDATE Delivery SET Trips=$trips where DelID=$del";
				$sup=mysqli_query($conn,$up);
				header("Location: ../delivery/doneder.php?success=true&$tc");
			}
			header("Location: ../delivery/doneder.php?failure=true&$tc");
			
		}




	?>