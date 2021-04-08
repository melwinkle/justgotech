<?php
/*
 * Description: This file Connects to the databse. 
 * Author: Hephzibah Emereole
 * Date: 3rd April 2021 */

// define('DB_SERVER', 'localhost:3306');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', "");
// define('DB_DATABASE', 'justgotech');

// // Check connection
// function openConnection(){
//     $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//     return $db;
// }


$host = 'localhost';
$username = 'root';
$password = '';
$databasename = 'justgotech';

$conn = mysqli_connect($host, $username, $password, $databasename);

if(!$conn){
    die("<script>alert('Connection To Database Failed')</script>");
}


?>