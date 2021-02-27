<?php 

require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");
session_start(); 

$username=$_SESSION['username'];

$quer="SELECT * from customer where username='$username'";
$resut=mysqli_query($conn,$quer);
$row=mysqli_fetch_assoc($resut);

$PatientID=$row['PatientID'];

if($_POST['submit']){
    $person=$_POST['person'];
    $apdate=$_POST['appointmentdate'];
    $dept=$_POST['dept'];
    $reason=$_POST['visit'];
    $insure=$_POST['healthinsurance'];
    $inname=$_POST['insurance_name'];
    $inid=$_POST['insurance_id'];
    $doctor=$_POST['doctor'];
    $time=$_POST['time'];
}

$query="INSERT INTO `booking`(`Appointment`, `Department`, `Reason`, `Insurance`, `Insurance_Name`, `Insurance_ID`, `Doctor`, `ApTime`, `Person`, `PatientID`) VALUES ('$apdate','$dept','$reason','$insure','$inname','$inid','$doctor','$time','$person','$PatientID')";
$result=mysqli_query($conn,$query);


if($result){
    header("Location: viewbooking.php?success");
}
else{
    header("Location: Userbooking.php?nosuccess");
}

?>