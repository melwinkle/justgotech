<!-- Replica bank account  -->
<!-- page for monitoring orders -->

<!-- page for delivery login -->
<?php 
  session_start();
  require_once("../../database/connection.php");
  if(!isset($_SESSION['username'])){
    header("Location: ./dindex.php");
  }
  $username=$_SESSION['username'];
  $del=$_SESSION['delid'];
  $fn=$_SESSION['fname'];
  $ln=$_SESSION['lname'];



  $sql="SELECT sum(Fee) as balance from track_order where DelID=$del and Progress='Delivered' ";
  $result=mysqli_query($conn,$sql);
  $ri=mysqli_fetch_assoc($result);
  $balance=$ri['balance'];

  $date=date('Y-m-d');
  $month=date('m');

  $sqls="SELECT sum(Fee) as balance from track_order inner join pharm_orders on track_order.POID=pharm_orders.POID where DelID=$del and Progress='Delivered' and Order_Date=$date  ";
  $results=mysqli_query($conn,$sqls);
  $rc=mysqli_fetch_assoc($results);
  $balanc=$rc['balance'];


  $sqs="SELECT sum(Fee) as balance from track_order inner join pharm_orders on track_order.POID=pharm_orders.POID where DelID=$del and Progress='Delivered' and MONTH(Order_Date)=$month  ";
  $resuls=mysqli_query($conn,$sqs);
  $yr=mysqli_fetch_assoc($resuls);
  $balan=$yr['balance'];
?>

<!DOCTYPE html>
<head>
<title>JustGo Delivery</title>
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
    <script src="sweetalert2.all.min.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:#2464ad">JustGo Delivery</h4>
<hr>
  <img style="width:50%;margin-left: 20%;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h5 style="text-align:center">Frank Rose</h5></a>
  <hr>
  <a style="color:#cccccc" href="../delivery/dorder.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a style="color:#cccccc" href="../delivery/dupdate.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Account</a>
  <hr>
  <a style="color:#cccccc" href="../delivery/doneder.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Deliveries</a>
  <hr>
  <a href="../delivery/dbalance.php"><img src="https://img.icons8.com/wired/24/3498db/get-cash.png"/>Balance</a>
  <hr>

  <a style="color:#cccccc"href="../delivery/dlog.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
<h3>
<?php
echo date('d-M');

?>
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="main"style="margin-left:20%;margin-top:2%">

<div class="row">
    <div class="col-sm-4">    
      <div class='card  mb-4 shadow-sm '  style='background-image: linear-gradient(to bottom right,#3498db, #3488db);height:320px;width:600px;border-radius:8px;color:white'>
      <h4 style="float:left;margin-top:50px;"><img src="https://img.icons8.com/ios/50/ffffff/us-dollar--v1.png"/>Total Balance</h4>
      <h1 style="margin-top:40px;color:white;text-align:center">GHC <?php echo $balance;?></h1>
    </div>
    </div>
<div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='margin-left:70%;background-image: linear-gradient(to bottom right,#3488db, #3490db);height:150px;width:78%;border-radius:8px;color:white'>
    <h4 style="margin-top:5%;;text-align:center"><img src="https://img.icons8.com/ios/40/ffffff/us-dollar--v1.png"/>Daily Total</h4>
            <h2 style="margin-top:10px;color:white;text-align:center">GHC <?php echo $balanc;?></h2>
                    

            </div>
    </div>
    
    
    <div class="col-sm-4">    
        <div class='card  mb-4 shadow-sm '  style='margin-left:-36%;background-image: linear-gradient(to bottom right,#3488db, #3478db);height:150px;width:78%;border-radius:8px;color:white;margin-top:45%'>
        <h4 style="margin-top:5%;;text-align:center"><img src="https://img.icons8.com/ios/40/ffffff/us-dollar--v1.png"/>Monthly Total</h4>
        <h2 style="margin-top:10px;color:white;text-align:center">GHC <?php echo $balan;?></h2>     
      </div>
    </div>
    
</div>


<div>
</div>

<div style="margin-left:-1%;margin-top:3%">
<h3>
Analytics
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">

<?php
$rec="SELECT Order_date,sum(Fee) as fee from track_order inner join pharm_orders on track_order.POID=pharm_orders.POID where DelID=$del and Progress='Delivered' group by Order_date";
$finale=mysqli_query($conn,$rec);

while($dr=mysqli_fetch_array($finale)){
  $mon[] = date_format(date_create($dr['Order_date']),"M d, Y") ;

  $sales[] = $dr['fee'];
}
  ?>

<div style="width:70%;height:50%;text-align:center">
            <h2 class="page-header" >Analytics Sales Report </h2>
            <div>
            <canvas  id="chartjs_line"></canvas> 
        </div>    
</div>






  
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