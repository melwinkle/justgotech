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
			
						
			$query = "UPDATE Delivery SET DelFName='$firstname',DelLName='$lastname',DelNum='$num' WHERE DelID=$id";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/dupdate.php?success=true");
			}
			header("Location: ../delivery/dupdate.php?failure=true&id=$id&$firstname&$lastname&$num");
			
		}


		if(isset($_POST['pass'])){
			$first = $_POST['newp'];
			$last = $_POST['renewp'];
			if($first==$last){
				$newpass = md5(sha1($first));
			
			}else{
				header("Location: ../delivery/dpass.php?failure=true");
			}
			$id = $_GET['id'];
			
						
			$query = "UPDATE Delivery SET Delpassword='$newpass' WHERE DelID=$id";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/dpass.php?success=true");
			}
			else{
			header("Location: ../delivery/dpass.php?failure=true&id=$id");
			}
		}


		if(isset($_GET['accept'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Accepted' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				header("Location: ../delivery/doneder.php?success=acc&$tc");
			}
			else{
			header("Location: ../delivery/doneder.php?tfailure=true&$tc");
			}
		}
		if(isset($_GET['fin'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			$od=$_GET['pd'];
			$n=$_GET['nm'];
			$pat=$_GET['pt'];
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Picked' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				$dat=date('Y-m-d h:i:s');
				$mes="Rider $n has picked your order #$od";
				$notif="INSERT INTO notification(NMessage,PatientID,NTime) values('$mes',$pat,'$dat')";
				$not=mysqli_query($conn,$notif);
				if($not){
				header("Location: ../delivery/doneder.php?nsuccess=true&$tc");
				}else{
					header("Location: ../delivery/doneder.php?failure=true&$tc&nm=$n&pat=$pat");
				}
			}
			else{
			header("Location: ../delivery/doneder.php?nfailure=true&$tc");
			}
		}
		if(isset($_GET['str'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			$od=$_GET['pd'];
			$n=$_GET['nm'];
			$pat=$_GET['pt'];
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Route' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				$dat=date('Y-m-d h:i:s');
				$mes="Rider $n is on his way with order #$od";
				$notif="INSERT INTO notification(NMessage,PatientID,NTime) values('$mes',$pat,'$dat')";
				$not=mysqli_query($conn,$notif);
				if($not){
				header("Location: ../delivery/dmap.php?nsuccess=true&tid=$tc");
				}else{
					header("Location: ../delivery/doneder.php?fnailure=true&$tc");
				}
			}else{
			header("Location: ../delivery/doneder.php?failure=true&$tc");
			}
		}
		if(isset($_GET['arr'])){
			$tc = $_GET['tc'];
			$del = $_GET['del'];
			$trip= $_GET['trip'];
			$od=$_GET['pd'];
			$n=$_GET['nm'];
			$pat=$_GET['pt'];
			
			
						
			$query = "UPDATE track_order SET DelID=$del,Progress='Delivered' where TID=$tc";
			$sql = mysqli_query($conn,$query);

			if($sql){
				$trips=$trip+1;
				$up="UPDATE Delivery SET Trips=$trips where DelID=$del";
				$sup=mysqli_query($conn,$up);
				$dat=date('Y-m-d h:i:s');
				$mes="Rider $n has arrived with order #$od";
				$notif="INSERT INTO notification(NMessage,PatientID,NTime) values('$mes',$pat,'$dat')";
				$not=mysqli_query($conn,$notif);
				if($not){

				header("Location: ../delivery/doneder.php?nsuccess=true&$tc");
				}else{
					header("Location: ../delivery/doneder.php?failure=true&$tc");
				}
				
				header("Location: ../delivery/doneder.php?success=true&$tc");
			}
			header("Location: ../delivery/doneder.php?nfailure=true&$tc");
			
		}




	?>