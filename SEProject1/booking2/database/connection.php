<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'justgotech';

    $conn = mysqli_connect($host, $username, $password, $databasename);

    if(!$conn){
        die("<script>alert('Connection To Database Failed')</script>");
    }

?>