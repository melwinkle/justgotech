<!-- Page for inventory-->




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
  <a style="color:#cccccc" href="../pharmacist/dash.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a style="color:#cccccc" href="../pharmacist/info.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Account</a>
  <hr>
  <a  style="color:#cccccc" href="../pharmacist/dashor.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Orders</a>
  <hr>
  <a href="../pharmacist/inventory.php"><img src="https://img.icons8.com/wired/24/3498db/get-cash.png"/>Inventory</a>
  <hr>

  <a style="color:#cccccc"href="../pharmacist/pharm_log.php?logout"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
        <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         </div>
<!-- orders and balance -->
<div class="main"style="margin-left:18%;margin-top:2%">
    <!-- next row -->
    <div class="row">
                <div class="col-sm-4">    
                         <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 70);height:150px;width:78%;border-radius:5px;color: white'>
                                 <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>100</h2>
                                 <h6 style="text-align:center">TOTAL STOCK</h6>
                            
                            </div>

                     </div>
<!-- next card -->
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 120);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/>2</h2>
                                <h6 style="text-align:center">EXPIRED STOCK</h6>

                            </div>
                
                    </div>
                    <!-- next card -->
                
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 90);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/wired/64/ffffff/get-cash.png"/>5</h2>
                                <h6 style="text-align:center">LOW STOCK</h6>
                            </div>
                    
                    </div>
            </div>
<!-- end of columns -->
    <div>

<!-- new row -->

<!-- table of inventory -->

<div style="margin-left:-1%;margin-top:3%">
        <h3>STOCK</h3>
        <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
         </div>

         
</div>
<div style="margin-left:1000px;margin-top:-2.5%;">
         <a style="color:#26e07f;font-size:14pt" href="../pharmacist/add_in.php">  New Stock<img src="https://img.icons8.com/android/24/26e07f/plus.png"/></a>
       
         </div>

            <div id="table" class="table-editable" style="margin-top:2%;background:white">
            <table class="table table-bordered table-responsive-md w-auto">
            <thead>
                <tr>
                <th scope="col">Drug Name</th>
                <th scope="col">Drug Type</th>
                <th scope="col">Description</th>
                <th scope="col">Expiry Date</th>
                <th scope="col">Manufacturing Date</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Queries</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-danger">
               
                <td scope="row"contenteditable="true">Panadol Plus</td>
                <td contenteditable="true">Antibiotics</td>
                <td contenteditable="true">10 tablets per strip</td>
                <td contenteditable="true">2025-04-21</td>
                <td contenteditable="true">2020-03-31</td>
                <td contenteditable="true">5</td>
                <td contenteditable="true">Ghc 20</td>
                <td contenteditable="true">Panadol|Paracetamol|Panadol Plus|panadol|paracetamol</td>
                <td><button class="btn btn-warning btn-rounded btn-sm my-0">UPDATE</button></td>
                </tr>
               
                <tr class="table-warning">
                
                <td scope="row"contenteditable="true">Panadol Plus</td>
                <td contenteditable="true">Antibiotics</td>
                <td contenteditable="true">10 tablets per strip</td>
                <td contenteditable="true">2025-04-21</td>
                <td contenteditable="true">2020-03-31</td>
                <td contenteditable="true">105</td>
                <td contenteditable="true">Ghc 20</td>
                <td contenteditable="true">Panadol|Paracetamol|Panadol Plus|panadol|paracetamol</td>
                <td><button class="btn btn-warning btn-rounded btn-sm my-0">UPDATE</button></td>
                </tr>
                <tr>
                
                <td scope="row"contenteditable="true">Panadol Plus</td>
                <td contenteditable="true">Antibiotics</td>
                <td contenteditable="true">10 tablets per strip</td>
                <td contenteditable="true">2025-04-21</td>
                <td contenteditable="true">2020-03-31</td>
                <td contenteditable="true">200</td>
                <td contenteditable="true">Ghc 20</td>
                <td contenteditable="true">Panadol|Paracetamol|Panadol Plus|panadol|paracetamol</td>
                <td><button class="btn btn-warning btn-rounded btn-sm my-0">UPDATE</button></td>
                </tr>
            </tbody>
            </table>

                </div>

        
                <!-- end of table -->
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