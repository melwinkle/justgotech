<!-- page for delivery login -->
<?php 
    if(isset($_SESSION['username'])){
        header("Location: ./dash.php?success=true");
    }
?>

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
<body style="background-image: linear-gradient(to bottom right, rgb(204, 102, 0), brown);">

<div><a href="../../../index.php"><img style="width:8%" src="../../images/justgotech.png" alt="justgo"></a></div>


<div style="margin-left:120px;margin-top:15px;color:white;font-size: 50pt">
<img style="width:350px;margin-left:45px" src="../../images/justgo.png" alt="justgo">
<h1 style="margin-left: 150px;">PHARMACY</h1>


</div>

<div style="margin-left:100px;width:550px;background:white;border:none;border-radius:10px;">
<!-- Default form login -->
<form class="text-center border border-light p-5"style="border:none" method="post" action="update_in.php">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="text" name="username" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Pharmacy ID">

    <!-- Password -->
    <input type="password"  name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="../partner/delivery/dreset.php">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button name="submit"class="btn btn-primary btn-block my-4"  style="background:brown"type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="../pharmacist/pharm_reg.php">Register</a>
    </p>

    

</form>
<!-- Default form login -->
</div>
<div>
<img style="width:40%;margin-left: 750px;margin-top: -600px"src="../../images/pharm.png" alt=""></div>
  
</body>
</html>