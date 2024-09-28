<?php

session_start();

include('connections1.php');
include('functions1.php');

$payday = date("Y-M-d");

if(isset($_POST["pay_house"])){
    $teid = $_POST["tenantid"];
    $amt = $_POST["paying_amount"];
    $home = $_POST["house_number"];
    $build = $_POST["building_name"];
    
    $sql26 = "INSERT into payments (payment, tenant_id, house_number, date_paid) values ('$amt', '$teid', '$home', '$payday')";
    $res26 = mysqli_query($conn, $sql26);

    if($res26 === TRUE){
        header("Location: ../aa_tenantpayment_history.php?id=$teid");
        $_SESSION["done"] = "Tenant id_no ".$teid." just paid";
        
    }else{
        header("Location: ../aa_house_tenant_payments.php?id=$teid");
        $_SESSION["failed"] = "Invalid payment"; 
    }    
    $_SESSION["success"] = "Payment of amount ". $amt ." received";
    header("Location: ../aa_tenantpayment_history.php?id=$teid");
}
