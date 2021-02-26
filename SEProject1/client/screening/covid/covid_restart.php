<?php
require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");
session_start(); 


if(isset($_GET["person"])){
  $person=$_GET["person"];
}
if(isset($_GET["ageb"])){
  $age=$_GET["ageb"];
}
  if(isset($_GET["test"])){
    $test=$_GET["test"];
}
if(isset($_GET["sym"])){
  $sym=$_GET["sym"];
}
if(isset($_GET["pre"])){
  $pre=$_GET["pre"];
}
if(isset($_GET["con"])){
  $con=$_GET["con"];

}
if(isset($_GET["reg"])){
  $reg=$_GET["reg"];
}

if(isset($_GET["date"])){
    $time=$_GET["date"];
  }
  
$disease="SARS-COV2";
$PatientID=1;
$conquery="SELECT ConID from contact where Contact='$con'";
$conresult=mysqli_query($conn,$conquery);
$conrow=mysqli_fetch_assoc($conresult);
$conr=$conrow['ConID'];
$query="INSERT INTO diseases(age_bracket,symptom,testing,disease_id,PatientID,Region,precon,ConID,Time) VALUES ('$age','$sym','$test', '$disease', $PatientID, '$reg', '$pre', $conr, '$time')";
$result=mysqli_query($conn,$query);
if($result){
    header("Location: covid.php");
}
else{
    
    echo "Did not ho";
}


?>