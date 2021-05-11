<?php
session_start();
unset($_SESSION["AdminId"]);
unset($_SESSION["AdminFname"]);
unset($_SESSION["AdminLname"]);
unset($_SESSION["AdminNick"]);
header("Location: ../administrator/adminlogin.php");
?>