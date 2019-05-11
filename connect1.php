<?php
$servername = "198.23.159.66";
$username = "jekalear";
$password = "Adeyemi1!";
$dbName   = "jekalear_tutorsdata";

$conn = mysqli_connect($servername,$username,$password,$dbName);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

