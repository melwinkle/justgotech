<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'justgotech';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        die("Error connecting to database");
    } 
?>