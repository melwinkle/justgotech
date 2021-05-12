<?php 
    session_start();

    if(isset($_SESSION['username'])){
        header("Location: ./book.php?success=true");
    }
?>

<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
			
            $query = "SELECT * from Doctor WHERE Docuser = '$username' and Dpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results ){
				$row=mysqli_fetch_assoc($sql);
				$del=$row['DocID'];
				$fn=$row['DocFname'];
                $ln=$row['DocLname'];
                $dept=$row['Department'];


				$_SESSION['username'] = $username;
				$_SESSION['docid']=$del;
				$_SESSION['fname']=$fn;
                $_SESSION['lname']=$ln;
                $_SESSION['dept']=$dept;
                
                header("Location: ./book.php?success=true");
            }
            
        }
    }




    if(isset($_POST['register'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['docuser'];
        $dept= $_POST['dept'];
        $phonenumber=$_POST['docnum'];
        $password = md5(sha1($_POST['password']));
        
                    
        $query = "INSERT INTO Doctor(DocFname,DocLname,Department,Dpassword,Docuser,Docnum) VALUES ('$firstname', '$lastname', '$dept', '$password', '$username','$phonenumber')";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ./doc_log.php?success");
        }
        else{
            header("Location: ./docreg.php?fail");
        }
        
    }

    if(isset($_POST['update'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $dept= $_POST['dept'];
        $phonenumber=$_POST['num'];
        $doc=$_GET['doc'];

        
                    
        $query = "UPDATE Doctor set DocFname='$firstname',DocLname='$lastname',Department='$dept',Docnum='$phonenumber' where DocID=$doc";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ./daccount.php?success&$doc");
        }
        else{
            header("Location: ./daccount.php?fail");
        }
        
    }


    if(isset($_POST['change'])){
        $firstname = $_POST['newp'];
        $lastname = $_POST['repass'];
        $doc=$_GET['doc'];
       
        if($lastname==$firstname){
            $password=md5(sha1($firstname));
        }

        
                    
        $query = "UPDATE Doctor set Dpassword='$password' where DocID=$doc";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ./daccount.php?success&$doc");
        }
        else{
            header("Location: ./daccount.php?fail");
        }
        
    }


    if(isset($_GET['accept'])){
        $doc=$_GET['tc'];
       
       
        
                    
        $query = "UPDATE Booking set STATUS='BOOKED' where BID=$doc";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ./book.php?success&$doc");
        }
        else{
            header("Location: ./book.php?fail");
        }
        
    }

    if(isset($_GET['complete'])){
        $doc=$_GET['tc'];
       
       
        
            
        $query = "UPDATE Booking set STATUS='COMPLETED' where BID=$doc";
        $sql = mysqli_query($conn,$query);

        if($sql){
            $bk="INSERT INTO book_pay(BID,PaymentFee) VALUES($doc,250)";
            $bkq=mysqli_query($conn,$bk);
            if($bkq){
            header("Location: ./book.php?success&$doc");
            }else{
                header("Location: ./book.php?nosuccess&$doc");
            }
        }
        else{
            header("Location: ./book.php?fail");
        }
        
    }


    if(isset($_POST['diag'])){
        $doc=$_GET['tc'];
        $bd=$_GET['bc'];
        $pre=$_POST['pre'];
        $dru=$_POST['drug'];
       
       
        
            
        $query = "INSERT INTO Prescriptions(PresDesc,BID,DocID,Drugdesc) VALUES('$pre',$bd,$doc,'$dru')";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ./diagnosis.php?success&$doc");
            
        }
        else{
            header("Location: ./book.php?fail");
        }
        
    }


    if(isset($_POST['updi'])){
        $doc=$_GET['bc'];
        $pre=$_POST['pre'];
        $dru=$_POST['drug'];
       
       
        
            
        $query = "UPDATE Prescriptions set PresDesc='$pre',Drugdesc='$dru' where PresID=$doc";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ./diagnosis.php?success&$doc");
            
        }
        else{
            header("Location: ./diagnosis.php?fail");
        }
        
    }


?>