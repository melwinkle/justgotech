<!-- page for registration -->

<!-- page for delivery login -->
<?php
if (isset($_SESSION['username'])) {
    header("Location: ./dash.php?success=true");
}
?>

<!DOCTYPE html>

<head>
    <title>JustGo Delivery</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
<link rel="stylesheet" href="pharm.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="sweetalert2.all.min.js"></script>

<body style="background-image: linear-gradient(to bottom right, rgb(204, 102, 0), brown);">

    <div><a href="../../../index.php"><img style="width:8%" src="../../images/justgotech.png" alt="justgo"></a></div>

    <div style="margin-left:10%;;color:white;font-size: 48pt">
        <img style="width:350px;margin-left:45px" src="../../images/justgo.png" alt="justgo">
        <h1 style="margin-left: 130px;">Pharmacy</h1>
    </div>

    <div style="margin-left:100px;width:500px;background:white;border:none;border-radius:10px;">
        <!-- Default form login -->
        <form method="post" class="text-center border border-light p-5" style="border:none" action="ddash.php">

            <p class="h4 mb-4">Register</p>

            <input type="text" name="phid" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username">
            <input type="text" name="phname" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Company Name">

            <input type="text" name="location" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Location eg Airport Wesrr">
            <input type="text" name="locq" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Location queries eg Airport | airport | airport west ">
            <input type="text" name="phnumber" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Phone number ">

            <!-- Password -->
            <input type="password" name="password " id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
            <input type="text" name="phonenumber" maxlength=10 id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Phone Number">
            <!-- Email -->

            <!-- Sign in button -->
            <button name="register" style="background-color: brown;" class="btn btn-primary btn-block my-4" type="submit">Register</button>

        </form>
        <div style="text-align: center; padding-bottom:10px">
            <a href="../delivery/dindex.php">Sign in </a>
        </div>

        <!-- Default form login -->
    </div>
    <div>
        <img style="width:40%;margin-left: 750px;margin-top: -1000px" src="../../images/pharm.png" alt="">
    </div>
</body>

</html>