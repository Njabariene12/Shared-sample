<?php

$dbhost = "localhost";
$dbname = "homes_kikwetu";
$dbpassword = "";
$dbuser = "root";


if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("Connection failed");
}

/*
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbpassword, $dbuser);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Connection failed: " .$e -> getMessage()."\n");  
}*/
