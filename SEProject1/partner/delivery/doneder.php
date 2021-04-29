<!-- page for completed deliveries -->
<!-- page for monitoring orders -->

<!-- page for delivery login -->


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
  <a href="../delivery/doneder.php"><img src="https://img.icons8.com/fluent-systems-filled/24/3498db/delivery-scooter.png"/>Deliveries</a>
  <hr>
  <a style="color:#cccccc"href="../delivery/dbalance.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Balance</a>
  <hr>

  <a style="color:#cccccc"href="../account/logout.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
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

<div class="main"style="margin-left:18%;margin-top:2%">
<div class="row">
    <div class="col-sm-4">    
      
            <div class='card  mb-4 shadow-sm '  style='background:#3498db;height:150px;width:78%;border-radius:5px;color:#ffffff'>
                 <h2 style="margin-top:10px;color:white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>5</h2>
                     <h6 style="text-align:center">INCOMING DELIVERIES</h6>
 
             

            </div>

    </div>




<div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='background:#3498db;height:150px;width:78%;border-radius:5px;color:#ffffff'>
            <h2 style="margin-top:10px;color:white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>5</h2>
                     <h6 style="text-align:center">COMPLETED DELIVERIES</h6>

            </div>
    </div>
    <div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='background:#3498db;height:150px;width:78%;border-radius:5px;color:white'>
    <h2 style="margin-top:10px;color:white;text-align:center"><img src="https://img.icons8.com/material-sharp/64/FFC509/star.png"/>4.5</h2>
                     <h6 style="text-align:center">AVERAGE RATING</h6>
            </div>
    </div>
</div>


<div>
</div>


<div class="row">
<div class="column"style="margin-left:-1%;margin-top:3%">
<h3>
Latest Requests
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">
<div class="column">
<div class='card  mb-4 shadow-sm '  style='background:white;height:135px;width:95%;border-radius:2px;color:#cccccc'>
<div style="width:90px;margin-left:20px;margin-top:2%;color:white;background:skyblue;">
<h1 style="margin-left:20px;margin-top:4px">29 
</h1>
<h4 style="margin-left: 22px">Apr</h4>
</div>

<div style="margin-left:170px;margin-top:-7.5%;color:black">
<img src="../../images/user.png" style="width:5%;margin-left:15px"alt="">
<h5>Meli Zay</h5>
</div>

<div  style="margin-left:300px;margin-top:-7.5%">
<ul style=" list-style-type: none">
<li ><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Pickup :</span> <span >Linux Pharmacy,Aiport</span></li>



<li><span style="color:black"><img style="width: 2%"src="../../images/place.png"/>DropOff: </span><span >Airport Mirage</span></li>
</ul>
</div>

<div style="margin-left:890px;margin-top:-10%">
<ul style=" list-style-type: none">
<li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/>Pending</li>
<li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>Mobile Money</li>
<li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc 2</li>

</ul>

</div>

<div style="margin-left:1050px;margin-top:-6%">
<button style="background:none;border:none"><img src="https://img.icons8.com/material-rounded/24/000000/menu-2.png"/></button>
</div>
        
  </div>
</div>
<!-- next -->
<div class='card  mb-4 shadow-sm '  style='background:white;height:135px;width:95%;border-radius:2px;color:#cccccc'>
<div style="width:90px;margin-left:20px;margin-top:2%;color:white;background:skyblue;">
<h1 style="margin-left:20px;margin-top:4px">29 
</h1>
<h4 style="margin-left: 22px">Apr</h4>
</div>

<div style="margin-left:170px;margin-top:-7.5%;color:black">
<img src="../../images/user.png" style="width:5%;margin-left:15px"alt="">
<h5>Meli Zay</h5>
</div>

<div  style="margin-left:300px;margin-top:-7.5%">
<ul style=" list-style-type: none">
<li ><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Pickup :</span> <span >Linux Pharmacy,Aiport</span></li>



<li><span style="color:black"><img style="width: 2%"src="../../images/place.png"/>DropOff: </span><span >Airport Mirage</span></li>
</ul>
</div>

<div style="margin-left:890px;margin-top:-10%">
<ul style=" list-style-type: none">
<li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/>Pending</li>
<li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>Mobile Money</li>
<li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc 2</li>

</ul>

</div>

<div style="margin-left:1050px;margin-top:-6%">
<button style="background:none;border:none"><img src="https://img.icons8.com/material-rounded/24/000000/menu-2.png"/></button>
</div>
        
  </div>
</div>

<!-- next -->

<!-- end -->
</div>

<!-- old deliveries -->
<div class="column" style="margin-left:-1%;margin-top:3%">
<h3>
Completed Requests
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">
<div class="column">
<div class='card  mb-4 shadow-sm '  style='background:white;height:135px;width:95%;border-radius:2px;color:#cccccc'>
<div style="width:90px;margin-left:20px;margin-top:2%;color:white;background:skyblue;">
<h1 style="margin-left:20px;margin-top:4px">29 
</h1>
<h4 style="margin-left: 22px">Apr</h4>
</div>

<div style="margin-left:170px;margin-top:-7.5%;color:black">
<img src="../../images/user.png" style="width:5%;margin-left:15px"alt="">
<h5>Meli Zay</h5>
</div>

<div  style="margin-left:300px;margin-top:-7.5%">
<ul style=" list-style-type: none">
<li ><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Pickup :</span> <span >Linux Pharmacy,Aiport</span></li>



<li><span style="color:black"><img style="width: 2%"src="../../images/place.png"/>DropOff: </span><span >Airport Mirage</span></li>
</ul>
</div>

<div style="margin-left:890px;margin-top:-10%">
<ul style=" list-style-type: none">
<li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/>Pending</li>
<li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>Mobile Money</li>
<li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc 2</li>

</ul>

</div>

<div style="margin-left:1050px;margin-top:-6%">
<button style="background:none;border:none"><img src="https://img.icons8.com/material-rounded/24/000000/menu-2.png"/></button>
</div>
        
  </div>
</div>
<!-- next -->
<div class='card  mb-4 shadow-sm '  style='background:white;height:135px;width:95%;border-radius:2px;color:#cccccc'>
<div style="width:90px;margin-left:20px;margin-top:2%;color:white;background:skyblue;">
<h1 style="margin-left:20px;margin-top:4px">29 
</h1>
<h4 style="margin-left: 22px">Apr</h4>
</div>

<div style="margin-left:170px;margin-top:-7.5%;color:black">
<img src="../../images/user.png" style="width:5%;margin-left:15px"alt="">
<h5>Meli Zay</h5>
</div>

<div  style="margin-left:300px;margin-top:-7.5%">
<ul style=" list-style-type: none">
<li ><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Pickup :</span> <span >Linux Pharmacy,Aiport</span></li>



<li><span style="color:black"><img style="width: 2%"src="../../images/place.png"/>DropOff: </span><span >Airport Mirage</span></li>
</ul>
</div>

<div style="margin-left:890px;margin-top:-10%">
<ul style=" list-style-type: none">
<li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/>Pending</li>
<li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>Mobile Money</li>
<li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc 2</li>

</ul>

</div>

<div style="margin-left:1050px;margin-top:-6%">
<button style="background:none;border:none"><img src="https://img.icons8.com/material-rounded/24/000000/menu-2.png"/></button>
</div>
        
  </div>
</div>

<!-- next -->
</div>
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
</script>
</body>

</html>