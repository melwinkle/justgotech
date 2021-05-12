<?php

require_once("../../../database/connection.php");
session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../../account/logout.php'</script>";
}

$username=$_SESSION['username'];

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
   

    $score['age']=2;
  }else{
    $score['age']=1;
  }
  
  if( $test==('Tested but result was positive')){
    $score['test']=2;
  }
  else if( $test==('Tested but result was negative')||$test==('Tested and awaiting results')){
    $score['test']=1;
  }
  else{
    $score['test']=0;
  }

  if($sym=='None of the above'){
    $score['sym']=0;
  }else{
    $score['sym']=2;
  }


  if($pre=='None of the above'){
    $score['pre']=0;
  }else{
    $score['pre']=2;
  }


  if($con=='I have no exposure of Covid-19'){
    $score['con']=0;
  }else{
    $score['con']=2;
  }

$pro=array_sum($score);
  
  $probability=($pro/10)*100;


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



$query="INSERT INTO diseases(age_bracket,symptom,testing,disease_id,PatientID,Region,precon,ConID,Time,Status,Person) VALUES ('$age','$sym','$test', '$disease', $PatientID, '$reg', '$pre', '$con', '$time','$status','$person')";
$result=mysqli_query($conn,$query);
if($result){
  $rid=mysqli_insert_id($conn);
    header("Location: covidresult.php?rid=$rid&prob=$probability");
}
else{
    echo "Did not ho";
}

?>