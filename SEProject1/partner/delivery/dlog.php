<?php
session_start();
unset($_SESSION["delid"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["username"]);
header("Location:../delivery/dindex.php");
?>