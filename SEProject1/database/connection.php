<?php 
    $host = 'us-cdbr-east-03.cleardb.com';
    $username = 'b242d5083dc100';
    $password = 'bd14bf3f';
    $databasename = 'heroku_c9b858a1f702a48';

    $conn = mysqli_connect($host, $username, $password, $databasename);

    if(!$conn){
        die("<script>alert('Connection To Database Failed')</script>");
    }

?>