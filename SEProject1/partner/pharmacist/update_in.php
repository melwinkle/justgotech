<!-- page to update inventory and login and signup-->
<?php 


require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
           
         
                
             

            $query = "SELECT * from pharmacists WHERE PhID = '$username' and Phpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results ){
				$row=mysqli_fetch_assoc($sql);
				$del=$row['PharmID'];
				$fn=$row['Pharm_Name'];
				$ln=$row['Location'];
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['phid']=$del;
				$_SESSION['phname']=$fn;
				$_SESSION['location']=$ln;
                header("Location: ../pharmacist/dash.php?success=true");
            }
            
        }
    
    }


    if(isset($_POST['register'])){
        $firstname=$_POST['phid'];
        $lastname = $_POST['phname'];
        $dob=$_POST['location'];
        $phonenumber=$_POST['phnumber'];
        $lq=$_POST['locq'];
        $password = md5(sha1($_POST['password']));
        
                    
        $query = "INSERT INTO pharmacists(Phid,Phpassword,Pharm_Name,Location,Location_queries,Phnumber) VALUES ('$firstname','$password', '$lastname',  '$dob', '$lq','$phonenumber')";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ../pharmacist/pharm_log.php?success");
        }
        else{
            header("Location: ../pharmacist/pharm_reg.php?fail");
        }
        
    }


    if(isset($_POST['change'])){
        $newpass=$_POST['newpass'];
        $pass = $_POST['repass'];
        $id=$_GET['id'];
        
        if($pass==$newpass){
        $password = md5(sha1($newpass));
        }else{
            header("Location: ../pharmacist/update_pass.php?incorrect");
            }
                    
        $query = "UPDATE pharmacists set Phpassword='$password' where PharmID=$id";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ../pharmacist/info.php?changed");
        }
        else{
            header("Location: ../pharmacist/update_pass.php?nochange");
        }
        
    }


    if(isset($_POST['update'])){
      
        $ph = $_POST['ph'];
        $loc=$_POST['loc'];
        $num=$_POST['num'];
        $pid=$_GET['pid'];
        
        
                    
        $query = "UPDATE pharmacists set Pharm_Name='$ph',Location='$loc',Phnumber='$num' where PharmID=$pid";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ../pharmacist/info.php?updated");
        }
        else{
            header("Location: ../pharmacist/info.php?notupdated");
        }
        
    }

   
    if(isset($_POST['edit'])){
        $did = $_GET['did'];
        $md=$_POST['md'];
        $ed=$_POST['ed'];
        $pri=$_POST['price'];
        $quan=$_POST['quan'];
        $pid=$_GET['pid'];

        // M_date='$md',E_date='$ed',Price='$pri',
        
     
        $query = "UPDATE pharm_drugs SET Quantity=$quan,E_date='$ed',M_date='$md',Price=$pri WHERE DID=$did and PharmID=$pid";
        $res=mysqli_query($conn,$query);
     

        if($res){
            header("Location: ../pharmacist/inventory.php?updated&did=$did&quan=$quan");
        }else{
            header("Location: ../pharmacist/add_in.php?notupdated&did=$did&pid=$pid&quan=$quan");
        }
     
     }

     if(isset($_GET['accept'])){
        $tid = $_GET['tc'];
        

        // M_date='$md',E_date='$ed',Price='$pri',
        
     
        $query = "UPDATE track_order SET Progress='Processed' WHERE TID=$tid";
        $res=mysqli_query($conn,$query);
     

        if($res){
            header("Location: ../pharmacist/dash.php?updated");
        }else{
            header("Location: ../pharmacist/dash.php?notupdated");
        }
     
     }


     if(isset($_POST['add'])){
        $dn=$_POST['dn'];
        $dt = $_POST['dt'];
        $desc=$_POST['desc'];
        $que=$_POST['quer'];
        $md=$_POST['md'];
        $ed=$_POST['ed'];
        $pri=$_POST['price'];
        $quan=$_POST['quan'];
        $pid=$_GET['pid'];

        
       
        
                    
        $dru = "INSERT INTO drugs(DName,Drug_type,Queries,Description) VALUES ('$dn','$dt', '$que','$desc')";
        $sqd = mysqli_query($conn,$dru);

        if($sqd){
            $did=mysqli_insert_id($conn);
            $quer= "INSERT INTO pharm_drugs(PharmID,DID,Quantity,Price,M_date,E_date) VALUES ($pid,$did,$quan,$pri,'$md','$ed')";
        $sl = mysqli_query($conn,$quer);

        if($sl){
            header("Location: ../pharmacist/inventory.php?success");
        }else{
            header("Location: ../pharmacist/inventory.php?fail");
        }
            
        }else{
            echo "no";
        }
        
        
    }
    





?>