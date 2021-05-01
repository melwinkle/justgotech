<!-- dashboard for pharmacy -->


<!DOCTYPE html>
<head>
<title>JustGo Pharmacy</title>
 
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
<h4 style="text-align:center;color:white">JustGo Pharmacy</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center">Linux Pharmacy</h4></a>
  <hr>
  <a href="../pharmacist/dash.php"><img src="https://img.icons8.com/fluent/24/000000/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a style="color:#cccccc"href="../pharmacist/info.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Account</a>
  <hr>
  <a style="color:#cccccc" href="../pharmacist/dashor.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Orders</a>
  <hr>
  <a style="color:#cccccc"href="../pharmacist/inventory.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Inventory</a>
  <hr>

  <a style="color:#cccccc"href="../pharmacist/pharm_log.php?logout"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
    <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
        <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div>
    </div>

    <div class="main"style="margin-left:18%;margin-top:2%">
    <!-- next row -->
    <div class="row">
                <div class="col-sm-4">    
                         <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 70);height:150px;width:78%;border-radius:5px;color: white'>
                                 <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>100</h2>
                                 <h6 style="text-align:center">TODAY'S ORDERS</h6>
                            
                            </div>

                     </div>
<!-- next card -->
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 120);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>100</h2>
                                <h6 style="text-align:center">TODAY'S BALANCE</h6>

                            </div>
                
                    </div>
                    <!-- next card -->
                
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 90);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/wired/64/ffffff/get-cash.png"/>0</h2>
                                <h6 style="text-align:center">STOCK</h6>
                            </div>
                    
                    </div>
            </div>
<!-- end of columns -->
    <div>
</div>
<!-- latest orders -->
<div style="margin-left:-1%;margin-top:3%">
<h3>
Latest Orders
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">


<div class="column">
        <div class='card  mb-4 shadow-sm '  style='background:white;height:180px;width:1150px;border-radius:2px;color: rgb(4, 23, 75)'>
            <span style="width:100px;margin-left:20px;margin-top:40px;color:white;background: rgb(4, 23, 75);">
            
              <h1 style="margin-left:25px;margin-top:4px">29</h1>
              <h4 style="margin-left: 22px">Apr</h4>
            </span>

          <span style="margin-left:150px;margin-top:-99px;color:black">
              <img src="../../images/user.png" style="width:5%;margin-left:13px"alt="">
              <h6 style="margin-left:15px;font-size:10px">#Order JP2</h6>
              <h5>Mela Zay</h5>
              <h6>0240000000</h6>
              
              
            </span>

          <span style="margin-left:290px;margin-top:-130px">
                <ul style=" list-style-type: none">
                    <li ><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Panadol</span> <span ><?php echo "x4"; ?></span></li>
                    <li><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Paracetamol </span><span ><?php echo "x1"; ?></span></li>
                  </ul>
              </span>
           
            <span style="margin-left:650px;margin-top:-75px">
                <ul style=" list-style-type: none">
               
              <li><img src="https://img.icons8.com/material-sharp/15/e74c3c/filled-circle.png"/><?php echo "Pending"; ?></li>
              <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo "Mobile Money"; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo "46.2"; ?></li>
                  </ul>

              </span>


            <span style="margin-left:1020px;margin-top:-110px">
            <h4>Quantity: 4</h4>
            </span>
              
            <span style="margin-left:980px;margin-top:20px">
                <a href="../pharmacists/update_in.php?accept=true&pid=1&tc=1&poid=3" class="btn btn-warning">PROCESSED</a>
              </span>
            
          
                    
                    
          </div>
      </div>
     
<!-- next -->

<!-- next -->

<!-- end -->
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

function nec(){
  window.location.href="../delivery/doneder.php";
}


</script>
</body>

</html>