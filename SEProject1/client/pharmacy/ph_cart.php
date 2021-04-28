
<!-- Home page for covid testing -->
<?php
error_reporting(0);
require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$patient=$row['PatientID'];

$num="SELECT *,count(*) as c from diseases where PatientID=$patient";
$resnum=mysqli_query($conn,$num);

$book="SELECT *,count(*) as b from booking where PatientID=$patient";
$resbook=mysqli_query($conn,$book);
$rowbook=mysqli_fetch_assoc($resbook);

$dise="SELECT * from diseases where PatientID=$patient";
$redise=mysqli_query($conn,$dise);
$rowdise=mysqli_fetch_assoc($redise);

?>

<?php  
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo ' function openulr(newurl) {';  
    echo '  if (confirm("Are you sure you want to remove this item from your cart?")) {';  
    echo '    document.location = newurl;';  
    echo '  }';  
    echo '}';  
    echo '</script>';  
} 


?>  
<html>
<head>
<title>COVID-19</title>
<?php  
createConfirmationmbox();  
?> 
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
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/booking.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Pharmacy</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  
  <div style="float:right">
 
 <span style="font-size:20px;cursor:pointer;margin-left:65% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="../../images/stethoscope.png" alt="profile"> </span>
 <button onclick="cartP()"style="background:none;border:none"><img   src="https://img.icons8.com/fluent/48/4a90e2/fast-cart.png"/></button>
 </div>
</div>


<div class="bcart" style="margin-left:400px;margin-top: 10px">
 <div style="background:blue;color:white; width:60%;border-radius:10px 10px 0 0; height: 50px">
  <h5 style="float:left;margin-left: 8px;margin-top: 15px;">JustGo Cart</h5>
 <button onclick="prevP()" style="margin-left: 300px;margin-top: 10px" type="button" class="btn btn-primary" style="margin-bottom: 15px">Continue Shopping</button>
 </div>


<div class="tcart" style="width: 60%; border: 2px solid blue;border-radius:0 0 10px 10px">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php

if(isset($_GET['phd'])){
  $phd=$_GET['phd'];
}
  $swl="SELECT * FROM temp_cart inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join drugs  on pharm_drugs.DID = drugs.DID where temp_cart.PatientID=$patient and status='Basket' ";
  $sw=mysqli_query($conn,$swl);

  if(mysqli_num_rows($sw)>0){
  while($sl=mysqli_fetch_assoc($sw)){
    $tc=$sl['TC'];

  echo "
    <tr>
      <th scope='row'>
      <div>
       <h5>".$sl['DName']."</h5>
    <h6>".$sl['Pharm_Name']."</h6>
    <p>".$sl['Description']."</p>
    <p>".$sl['Location']."</p>
</div>
</th>"; ?>

      <td style="width: 25%"> 

      
      <input style="width:50%" class="quantity" min="0" id="quantity"name="quantity" value="<?php echo $sl['Item_quantity'];?>" type="number"></td>
      <td>
        <div style="color:blue"><h5>Ghc <?php echo $sl['Price'];?></h5>
      </div>
        
      </td>
      <td>
   
     
      
    
      <button onclick="upq()" class="btn btn-success">UPDATE</button>
      <div class="confirm">
        <a href="javascript:openulr('../pharmacy/ph_shop.php?tc=<?php echo $tc;?>&mprev=<?php echo $_GET['mprev'];?>');" class="btn btn-danger" style="margin-top:5px">REMOVE</a></div>
      </td>
    </tr>
    <?php
 
}
}else{
  echo " <td colspan='4'>
  <div style='text-align:center'>
    <p> NO ITEM IN CART</p>




  </div>
 </td>";
}
    ?>
    
  </tbody>

  <tr>

  <td colspan="4">
    <div style="float:right">
      <p>SubTotal: Ghc <?php 
      $su="SELECT sum(Price*Item_quantity) as total FROM temp_cart inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join drugs  on pharm_drugs.DID = drugs.DID where temp_cart.PatientID=$patient and temp_cart.status='Basket'";
      $suml=mysqli_query($conn,$su);
      if($suml){
        $sums=mysqli_fetch_assoc($suml);
        $tot=$sums['total'];
        echo "$tot";
      } else{
        echo "0.00";
      }     ?> </p>
      <p>Tax: Ghc <?php $tax=$tot*0.1; echo $tax;?></p>
      <p>Delivery: Ghc <?php 
      if($location==$sl['Location']){
        $del=2.00;
        echo $del;
      }
      else{
        $del=5.00;
        echo $del;
      }
      ?> </p>
      <p>Total: Ghc <?php $bill=$tot+ $del + $tax;echo $bill;?> </p>




    </div>
   </td>
</tr>
</table>
</div>


<div class="ro" style="margin-left:-112px;width:60%;margin-top: 15px">
<div style="background:blue;color:white; width:97%;border-radius:10px 10px 0 0;height:50px;margin-left:119px">
      <h3 style="float:left;margin-left:8px;margin-top: 15px;">Billing Address</h3>
    </div>
    <div class="container">
    
      <form action="ph_suc.php?bill=<?php echo $bill;?>" method="post"class="needs-validation" style="margin-left:-5px;"novalidate>
      <div class="rw" style="border:2px solid blue;border-radius:0 0 10px 10px;">
  <div class="form-row" >
    <div style="margin-left:-150px;width: 250px;margin-top: 15px">
      <label for="validationTooltip01">Nickname</label>
      <input name="nick"  type="text" class="form-control" id="validationTooltip01" placeholder="First name"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div style="margin-left:20px;width: 250px;margin-top: 14px">
      <label for="validationTooltip02">Address</label>
      <input name="addr" type="text" class="form-control" id="validationTooltip02" placeholder="eg AnC Mall, East Legon"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>

 
    <div style="width:250px;margin-left:-150px;margin-top: 15px" >
      <label for="validationTooltip04">Pickup Mode</label><br>
      
      <select  name="pick" class="custom-select" required>
      <option value="Pickup">Pickup</option>
      <option value="Delivery">Delivery</option>
    </select>
  
      <div class="invalid-tooltip">
        Please select a pickup mode.
      </div>
    </div>
   
  </div>

  <div class="form-row">
   
  <div style="width:250px;margin-left:50px;margin-top: 5px">
      <label for="validationTooltip05">Mobile Money Network</label><br>
      <select  name="net" class="custom-select" required>
      <option value="MTN">MTN</option>
      <option value="Vodafone">Vodafone</option>
      <option value="AirtelTigo">AirtelTigo</option>
        </select>
      <div class="invalid-tooltip">
        Please select a provider.
      </div>
    </div>
  

  
    <div style="width:250px;margin-left:20px;margin-top: 5px">
      <label for="validationTooltip03">Mobile Money Number</label>
      <input name="momo"style="width:250px;" type="text" class="form-control" id="validationTooltip03" placeholder="024 000 0000 " >
    </div>
</div>


<div class="form-row">
    <div style="width:520px;margin-left:50px;margin-bottom:25px;margin-top: 5px">
      <label for="validationTooltip03">Special Note for rider/store</label>
      <textarea name="snotes" row="10" class="form-control" id="validationTooltip03" placeholder="eg Specific location details " ></textarea>
     
    </div>
    
   
  </div>
  
</div>
        <div style="float:right;margin-top:10px;">
        <button  style="width:350px;height:70px;font-size: 14pt" class="btn btn-primary" name="phshop" type="submit">Continue to Checkout</button>
        </div>
      
      </form>
 
     
</div>
  
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
function prevP(){
  window.location.href="<?php echo $_GET['mprev']; ?>?mprev=t&drug=<?php echo $_GET['drug']; ?>&location=<?php echo $_GET['location']; ?>"
}
function pays(){
  window.location.href="../pharmacy/ph_suc.php?success=true";
}
function upq(){
     let quant=document.getElementById("quantity").value;
      window.location.href = "../pharmacy/ph_shop.php?drug=<?php echo $_GET['drug']; ?>&location=<?php echo $_GET['location']; ?>&mprev=<?php echo $_GET['mprev']; ?>&update=true&tcc=<?php echo $tc; ?>&quant=" + quant; 
}
</script>
<script>



<?php
if(isset($_GET['item'])){
  echo '<script>swal("Item Removed")</script>';
  
}
if(isset($_GET['items'])){
  echo '<script>swal("Item Not Removed")</script>';
  
}
?>
</script>

</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>
