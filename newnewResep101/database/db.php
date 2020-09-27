<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "resep";

$conn = new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die('Fail to connect');
}