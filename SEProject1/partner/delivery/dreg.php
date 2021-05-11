<!-- page for registration -->

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
<body style="height:120%;background-image: linear-gradient(to bottom right, skyblue, pink);">

<div><img style="width:8%" src="../../images/justgotech.png" alt="justgo"></div>


<div style="margin-left:10%;;color:white;font-size: 48pt">
<img style="width:350px;margin-left:45px" src="../../images/justgo.png" alt="justgo">
<h1>DELIVERY SERVICE</h1>


</div>

<div style="margin-left:100px;width:500px;background:white;border:none;border-radius:10px;">
<!-- Default form login -->
<form method="post" class="text-center border border-light p-5"style="border:none" action="ddash.php">

    <p class="h4 mb-4">Register</p>

    <input type="text" name="firstname" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="First Name">
    <input type="text" name="lastname" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Last Name">

    <input type="date" name="dob" id="defaultLoginFormEmail" class="form-control mb-4" >
    <select name="gender" id="gender" class="form-control mb-4">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    <input type="text" name="username" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username">

<!-- Password -->
    <input type="password"  name="password "id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
    <input type="text" name="phonenumber"  maxlength=10 id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Phone Number">
    <!-- Email -->




    <!-- Sign in button -->
    <button name="register"class="btn btn-primary btn-block my-4" type="submit">Register</button>

 

   

</form>
<a href="../delivery/dindex.php">Sign in </a>
<!-- Default form login -->
</div>
<div>
<img style="width:40%;margin-left: 800px;margin-top: -620px"src="../../images/delivery-man.png" alt=""></div>
  
</body>
</html>