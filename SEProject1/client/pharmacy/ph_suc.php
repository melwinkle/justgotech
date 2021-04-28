
<!-- Track Order after payment-->
<?php
error_reporting(0);
require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$patient=$row['PatientID'];

if(isset($_POST['shop'])){
  $bill=$_GET['bill'];
  $odate=date('Y-m-d');
  $pick=$_POST['pick'];
  $net=$_POST['net'];
  $location=$_POST['address'];
  $notes=$_POST['snotes'];
  $nick=$_POST['nick'];
  $num=$_POST['momo'];


  $forder="INSERT INTO pharm_orders(Price,Order_Date,Pickup_Mode,Network,Momo_num,Location,Special_notes,Nickname) VALUES($bill,'$odate','$pick','$net','$num','$location','$notes','$nick')";
  $ford=mysqli_query($conn,$forder);

  if($ford){
    $swl="SELECT * FROM temp_cart where PatientID=$patient and DATE='2021-04-27' ";
  $sw=mysqli_query($conn,$swl);

  
  while($sl=mysqli_fetch_assoc($sw)){
    $tc=$sl['TC'];
    $porder="INSERT INTO perm_cart(POID,TC) VALUES($poid,$tc)";
    $pord=mysqli_query($conn,$forder);

  }

  if($pord){
    header("Location: ../pharmacy/ph_pay.php?success=added" );
  }
  }else{
    header("Location: ../pharmacy/ph_cart.php?failure=notadded " );
  }
}
