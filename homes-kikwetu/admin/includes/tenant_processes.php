<?php

session_start();

include('connections1.php');
include('functions1.php');


$tdate = date("Y-M-d");
$owner = $_SESSION["owner_id"];

if(isset($_POST["create_tenant"])){
    $tname = $_POST["tenant_name"];
    $tnumber = $_POST["phone_number"];
    $tenantid = $_POST["id_number"];
    $temail = $_POST["email"];
    $thouse_number = $_POST["housechoice"];
    $buildingchosen = $_POST["buildingchoice"];



    
        $queri23 = "INSERT into tenant (tenant_name, phone_number, id_number, email, house_number, date_moved) values ('$tname', '$tnumber', '$tenantid', '$temail', '$thouse_number' , '$tdate')";

        $res23 = mysqli_query($conn, $queri23);
        if($res23 === TRUE){

            header("Location: ../aa_buildingTenants.php?id=$buildingchosen");

        }else {
            $_SESSION["failed"] = "Enter some valid data";
        }
        
        $_SESSION["success"] = "Tenant added successfully to ". $thouse_number;
        header("Location: ../aa_buildingTenants.php?id=$buildingchosen");

}
  
