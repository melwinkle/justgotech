<!-- dashboard for doctor -->

<!-- page for updating account  -->


<!-- page for account info -->

<?php 

session_start();
require_once("../../database/connection.php");

if(!isset($_SESSION['username'])){
  header("Location: ./doc_log.php" );
}


$username=$_SESSION['username'];
$id=$_SESSION['docid'];
$fn=$_SESSION['fname'];
$ln=$_SESSION['lname'];
$dn=$_SESSION['dept'];

$today=date('Y-m-d');
$month=date('m');
$sql="SELECT Docnum from Doctor where DocID=$id";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query);
$number=$result['Docnum'];



$bk="SELECT sum(PaymentFee) as msum from book_pay inner join booking on book_pay.BID=booking.BID where Doctor=$id and Appointment=$today";
$bkq=mysqli_query($conn,$bk);
$num=mysqli_fetch_assoc($bkq);
$number=$num['msum'];



$bkd="SELECT sum(PaymentFee) as tsum from book_pay inner join booking on book_pay.BID=booking.BID where Doctor=$id and MONTH(Appointment)=$month";
$bkdq=mysqli_query($conn,$bkd);
$bq=mysqli_fetch_assoc($bkdq);
$db=$bq['tsum'];



$bkb="SELECT sum(PaymentFee) as sum from book_pay inner join booking on book_pay.BID=booking.BID where Doctor=$id ";
$bkbq=mysqli_query($conn,$bkb);
$eg=mysqli_fetch_assoc($bkbq);
$expg=$eg['sum'];

?>

<!DOCTYPE html>
<head>
<title>JustGo Doctor</title>
 
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="pharm.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--  -->
    <script src="sweetalert2.all.min.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:white">JustGo Doctor</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center"><?php echo $fn;echo $ln;?></h4></a>
  <hr>
  <a style="color:#cccccc" href="../doctor/daccount.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Account</a>
  <hr>
  <a  style="color:#cccccc" href="../doctor/book.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Bookings</a>
  <hr>
  <a style="color:#cccccc"href="../doctor/diagnosis.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Diagnosis</a>
  <hr>
  <a href="../doctor/balance.php"><img src="https://img.icons8.com/wired/24/3498db/get-cash.png"/>Balance</a>
  <hr>

  <a style="color:#cccccc"href="../doctor/prescription.php?logout"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
 
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
    <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
        <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div>
    </div>

   

<!-- account -->

<div class="main"style="margin-left:18%;margin-top:2%">

    <div class="row">
        <div class="col-sm-4">    
                         <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 70);height:150px;width:78%;border-radius:5px;color: white'>
                                 <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>GHC <?php if($number){ echo $number;}else{echo 0.0;}?></h2>
                                 <h6 style="text-align:center">DAILY BALANCE</h6>
                            
                            </div>

                     </div>
<!-- next card -->
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 120);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>GHC <?php if($db){echo $db;}else{echo 0.0;}?></h2>
                                <h6 style="text-align:center">MONTHLY BALANCE</h6>

                            </div>
                
                    </div>
                    <!-- next card -->
                
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 90);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/wired/64/ffffff/get-cash.png"/>GHC <?php if($expg>0){ echo $expg;}else{echo 0.0;}?></h2>
                                <h6 style="text-align:center">TOTAL BALANCE</h6>
                            </div>
                    
                    </div>
            </div>
    </div>

    
</div>
<!-- next -->
<div style="margin-left:18%;margin-top:3%">
             <h3>Statistics</h3>
            <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
                </div>
       




        <div class="row" style="margin-top: 2%">

        <?php
  
        $dp="SELECT Appointment, sum(PaymentFee) as TotalSum from booking inner join book_pay on booking.BID=book_pay.BID where Doctor=$id group by Appointment; ";
        $dpq=mysqli_query($conn,$dp);
        
   
        
        while($dr=mysqli_fetch_array($dpq)) { 
        
          $mon[] = date_format(date_create($dr['Appointment']),"M d, Y") ;

            $sales[] = $dr['TotalSum'];
          
        }
 

  
 ?>


<div style="width:50%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Sales Report </h2>
            <div>
            <canvas  id="chartjs_line"></canvas> 
        </div>    

  
   


    </div>
<!-- next -->

<!-- end -->
</div>




<?php
if(isset($_GET['updated'])){
  echo '<script>swal({
    title: "Good job!",
    text: "Item Updated Succesfully!",
    icon: "success",
    button: "Okay",
  });</script> ';
}
if(isset($_GET['changed'])){
  echo '<script>swal({
    title: "Good job!",
    text: "Password Updated!",
    icon: "success",
    button: "Okay",
  });</script> ';
}
?>



  
<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function nec(){
  window.location.href="../delivery/doneder.php";
}


</script>
</body>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_line").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($mon); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>

</html>