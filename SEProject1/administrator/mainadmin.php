<?php require_once("../database/connection.php");
session_start();
if(!isset($_SESSION['AdminNick'])){
  header("Location: ../administrator/adminlogin.php" );
}


$username=$_SESSION['AdminNick'];
$id=$_SESSION['AdminID'];
$fn=$_SESSION['AdminFName'];
$ln=$_SESSION['AdminLName'];


$today=date('Y-m-d');
$sql="SELECT AdminNick from admin_one where AdminID=$id";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query);
$number=$result['AdminNick'];



$bk="SELECT * from Doctor";
$bkq=mysqli_query($conn,$bk);
$number=mysqli_num_rows($bkq);



$bkd="SELECT * from Pharmacists";
$bkdq=mysqli_query($conn,$bkd);
$db=mysqli_num_rows($bkdq);

$bkd="SELECT * from Customer";
$bkdq=mysqli_query($conn,$bkd);
$ab=mysqli_num_rows($bkdq);





?>


<!DOCTYPE html>
<head>
<title>JustGo Admin</title>
 
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="admin.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:white">JustGo Admin</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center"><?php echo $fn;echo $ln;?></h4></a>
  <hr>
  <a style="color:#cccccc"href="../administrator/logout.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>

   

<!-- account -->

<div class="main"style="margin-left:18%;margin-top:2%">

    <div class="row">
        <div class="col-sm-4">    
                         <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 70);height:150px;width:78%;border-radius:5px;color: white'>
                                 <h2 style="margin-top:10px;color: white;text-align:center"><?php echo $number;?></h2>
                                 <h6 style="text-align:center">Number of Doctors</h6>
                            
                            </div>

                     </div>
<!-- next card -->
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 120);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><?php echo $ab;?></h2>
                                <h6 style="text-align:center">Number of Customers</h6>

                            </div>
                
                    </div>
                    <!-- next card -->
                    <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 90);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><?php echo $db;?></h2>
                                <h6 style="text-align:center">Number of Pharmacies</h6>
                            </div>
                    
                    </div>
                
                
                    </div>
            </div>
    </div>

    
</div>
<!-- next -->
<div style="margin-left:18%;margin-top:3%">
             <h3>Table of Doctors</h3>
             <?php  

$final="SELECT DocFname, DocLname, Department, Docnum from Doctor";
$finale=mysqli_query($conn,$final);

if(mysqli_num_rows($finale)>0){
  
  $arr_users = $finale->fetch_all(MYSQLI_ASSOC);


  ?>
 <table id="doctorTable">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Department</th>
        <th>Number</th>
    </thead>
    <tbody>
        <?php if(!empty($arr_users)) { ?>
            <?php foreach($arr_users as $doctor) { ?>
                <tr>
                    <td><?php echo $doctor['DocFname']; ?></td>
                    <td><?php echo $doctor['DocLname'] ?></td>
                    <td><?php echo $doctor['Department']; ?></td>
                    <td><?php echo $doctor['Docnum']; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
            
<script>
$(document).ready(function() {
    $('#doctorTable').DataTable();
});
</script>
<?php
}
     
      ?>      

        
<div>
             <h3>Table of Users</h3>
            
       


       

<?php  

$final="SELECT firstname, lastname, dob, gender from Customer";
$finale=mysqli_query($conn,$final);

if(mysqli_num_rows($finale)>0){
  
  $arr_users = $finale->fetch_all(MYSQLI_ASSOC);


  ?>
 <table id="userTable">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Gender</th>
    </thead>
    <tbody>
        <?php if(!empty($arr_users)) { ?>
            <?php foreach($arr_users as $customer) { ?>
                <tr>
                    <td><?php echo $customer['firstname']; ?></td>
                    <td><?php echo $customer['lastname'] ?></td>
                    <td><?php echo $customer['dob']; ?></td>
                    <td><?php echo $customer['gender']; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>

        
      <?php
}
     
      ?>
<div>
             <h3>Table of Pharmacies</h3>
             <?php  

$final="SELECT Pharm_Name, `location`, Phnumber from pharmacists";
$finale=mysqli_query($conn,$final);

if(mysqli_num_rows($finale)>0){
  
  $arr_users = $finale->fetch_all(MYSQLI_ASSOC);


  ?>
 <table id="pharmTable">
    <thead>
        <th>Pharmacy name</th>
        <th>Pharmacy Location</th>
        <th>Pharmacy Number</th>
    </thead>
    <tbody>
        <?php if(!empty($arr_users)) { ?>
            <?php foreach($arr_users as $doctor) { ?>
                <tr>
                    <td><?php echo $doctor['Pharm_Name']; ?></td>
                    <td><?php echo $doctor['location'] ?></td>
                    <td><?php echo $doctor['Phnumber']; ?></td>
                   
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
            
<script>
$(document).ready(function() {
    $('#pharmTable').DataTable();
});
</script>
<?php
}
     
      ?> 
<div >
             <h3>Table of Delivery Riders</h3>
             <?php  

$final="SELECT DelFName, DelLName, DelNum, Gender from Delivery";
$finale=mysqli_query($conn,$final);

if(mysqli_num_rows($finale)>0){
  
  $arr_users = $finale->fetch_all(MYSQLI_ASSOC);


  ?>
 <table id="delTable">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Number </th>
        <th>Gender</th>
    </thead>
    <tbody>
        <?php if(!empty($arr_users)) { ?>
            <?php foreach($arr_users as $doctor) { ?>
                <tr>
                    <td><?php echo $doctor['DelFName']; ?></td>
                    <td><?php echo $doctor['DelLName'] ?></td>
                    <td><?php echo $doctor['DelNum']; ?></td>
                    <td><?php echo $doctor['Gender']; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
            
<script>
$(document).ready(function() {
    $('#delTable').DataTable();
});
</script>
<?php
}
     
      ?> 
<!-- next -->
<!-- end -->
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

</html>

