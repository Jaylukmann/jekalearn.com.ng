<?php
$servername = "wgh21.whogohost.com";
$username = "jekalear";
$password = "Adeyemi1!";
$dbName   = "jekalear_learnersdata";

$conn = mysqli_connect($servername,$username,$password,$dbName);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

