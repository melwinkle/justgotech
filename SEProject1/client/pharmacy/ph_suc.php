
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



if(isset($_POST['phshop'])){
  $bill=$_GET['bill'];
  $odate=date('Y-m-d');
  $pick=$_POST['pick'];
  $net=$_POST['net'];
  $location=$_POST['addr'];
  $notes=$_POST['snotes'];
  $nick=$_POST['nick'];
  $num=$_POST['momo'];


  $forder="INSERT INTO temp_bill(Nick,Address,Pickup,Network,Momo_num,Snotes,Bill,Order_date,PatientID) VALUES('$nick','$location','$pick','$net','$num','$notes',$bill,'$odate',$patient)";
  $ford=mysqli_query($conn,$forder);

  if($ford){
    $forde="INSERT INTO pharm_orders(P_Bill,Order_Date,Pickup_Mode,Network,Momo_num,Location,Special_notes,Nickname,PatientID) VALUES($bill,'$odate','$pick','$net','$num','$location','$notes','$nick',$patient)";
    $fod=mysqli_query($conn,$forde);

  
    if($fod){
      $last_id = mysqli_insert_id($conn);
      $swl="SELECT * FROM temp_cart where PatientID=$patient and status='Basket' ";
      $sw=mysqli_query($conn,$swl);

      while($sl=mysqli_fetch_assoc($sw)){
        $tc=$sl['TC'];
        $porder="INSERT INTO perm_cart(POID,TC) VALUES($last_id,$tc)";
        $pord=mysqli_query($conn,$porder);
        
        if($pord){
          $update="UPDATE temp_cart SET status='Purchased'";
          $up=mysqli_query($conn,$update);
          $tl="INSERT INTO track_order(POID) VALUES($last_id)";
          $tw=mysqli_query($conn,$tl);
          }
          header("Location: ../pharmacy/ph_pay.php?success=added&id=$last_id&bill=$bill" );
         
      }
    
 
      
   
  }else{
    header("Location: ../pharmacy/ph_cart.php?failure=notaddedtc " );
  }
}
  else{
    header("Location: ../pharmacy/ph_cart.php?failure=notaddedpo " );
  }

}





if(isset($_POST['ratings'])){
 
  $id=$_GET['id'];
  $st=$_POST['rate'];


  $upd="UPDATE track_order set Ratings=$st where POID=$id";
  $up=mysqli_query($conn,$upd);
  if($up){
      header("Location: ../pharmacy/ph_pay.php?rate=$st&id=$id");
  }else{
    header("Location: ../pharmacy/ph_pay.php?norate=$st&id=$id");
  }
}