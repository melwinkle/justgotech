<?php 
    // $host = 'localhost';
    // $username = 'root';
    // $password = '';
    // $databasename = 'justgotech';

    $host='us-cdbr-east-03.cleardb.com';
    $username='b242d5083dc100';
    $password='bd14bf3f';
    $database='heroku_c9b858a1f702a48';

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("<script>alert('Connection To Database Failed')</script>");
    }

?>