<?php
    //connection
    session_start();
    require_once("../../database/connection.php");
 
    $username=$_SESSION['username'];
  
    $query="SELECT * from customer where username='$username'";
    $resul=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($resul);
    
    $patient=$row['PatientID'];
 
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
 
	
 
	if($action == 'add'){
        $id = $_GET['phd'];
        $dr=$_GET['drug'];
        $loc=$_GET['location'];
        $quant=$_GET['quant'];
	//	$sql = "SELECT * FROM pharm_drugs inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join drugs  on pharm_drugs.DID = drugs.DID where PHD=$id";
      //  $result=mysqli_query($conn,$sql);

        $date=date("Y/m/d");
            $ins="INSERT INTO temp_cart(PHD,PatientID,Date,Item_quantity) VALUES($id,$patient,'$date',$quant)";
            $ins_c=mysqli_query($conn,$ins);
            if($ins_c){
            header("Location: ../pharmacy/ph_info.php?success=added&phd=$id&drug=$dr&location=$loc&user=$patient" );
            }else{
                header("Location: ../pharmacy/ph_info.php?failure=notaddeds&phd=$id&drug=$dr&location=$loc&user=$patient&date=$date" );
            }
		
		
		}
 

 
	
 