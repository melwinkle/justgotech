<!-- Back end process to remove item from cart -->
<?php 
session_start();

session_start();
require_once("../../database/connection.php");

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$resul=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($resul);

$patient=$row['PatientID'];



if(isset($_GET['tc'])){
  $tc=$_GET['tc'];
  $mprev=$_GET['mprev'];
  $drug=$_GET['drug'];
  $location=$_GET['location'];

  $del="DELETE FROM temp_cart where TC=$tc";
  $del_s=mysqli_query($conn,$del);
  if ($del_s){
    header("Location: ../pharmacy/ph_cart.php?item=removed&mprev=$mprev&drug=$drug&location=$location" );
  }
  else{
    header("Location: ../pharmacy/ph_cart.php?items=removed" );
  }

  }


  if(isset($_GET['update'])){
    $tc=$_GET['tcc'];
    $mprev=$_GET['mprev'];
    $drug=$_GET['drug'];
    $location=$_GET['location'];
    $quant=$_GET['quant'];
  
    $upd="UPDATE temp_cart SET Item_quantity=$quant where PatientID=$patient and TC=$tc" ;
    $uds=mysqli_query($conn,$upd);
    if ($uds){
      header("Location: ../pharmacy/ph_cart.php?update=t&mprev=../pharmacy/ph_info.php&drug=$drug&location=$location" );
    }
    else{
      header("Location: ../pharmacy/ph_cart.php?updated=f" );
    }
  
    }




?>