<?php

require_once("../../../database/connection.php");
session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];
$score=0;
$probability=0.0;
  
$disease="SARS-COV2";
$quer="SELECT * from customer where username='$username'";
$resut=mysqli_query($conn,$quer);
$row=mysqli_fetch_assoc($resut);

if(isset($_POST['scan'])){
  $person=$_POST['person'];
  $age=$_POST['ageb'];
  $sym=$_POST['sym'];
  $test=$_POST['test'];
  $reg=$_POST['reg'];
  $pre=$_POST['pre'];
  $con=$_POST['con'];
  $time=date("Y-m-d h:i:s");

  if(($age=='Between 56-64')|| $age==('More than 64')){
    $score=$score+2;
  }else{
    $score=$score+1;
  }
  
  if( $test==('Tested but result was positive')){
    $score=$score+2;
  }
  else if( $test==('Tested but result was negative')||$test==('Tested and awaiting results')){
    $score=$score+1;
  }
  else{
    $score=$score+0;
  }

  if($sym=='None of the above'){
    $score=$score+0;
  }else{
    $score=$score+2;
  }


  if($pre=='None of the above'){
    $score=$score+0;
  }else{
    $score=$score+2;
  }


  if($con=='I have no exposure of Covid-19'){
    $score=$score+0;
  }else{
    $score=$score+2;
  }


  $probability=($score/10)*100;


  if($probability<11){
    $status='Not exposed';
  }else if($probability>=11 & $probability<40){
    $status='Not Likely Exposed';
  }else if($probability>=41 & $probability<50){
    $status='Likely Exposed';
  }else{
    $status='Exposed';
  }
}

$PatientID=$row['PatientID'];
$conquery="SELECT ConID from contact where Contact='$con'";
$conresult=mysqli_query($conn,$conquery);
$conrow=mysqli_fetch_assoc($conresult);
$conr=$conrow['ConID'];


$query="INSERT INTO diseases(age_bracket,symptom,testing,disease_id,PatientID,Region,precon,ConID,Time,Status,Person) VALUES ('$age','$sym','$test', '$disease', $PatientID, '$reg', '$pre', $conr, '$time','$status','$person')";
$result=mysqli_query($conn,$query);
if($result){
  $rid=mysqli_insert_id($conn);
    header("Location: covidresult.php?rid=$rid&prob=$probability");
}
else{
    echo "Did not ho";
}

?>