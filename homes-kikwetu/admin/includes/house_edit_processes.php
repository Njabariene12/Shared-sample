<?php

session_start();

include('connections1.php');
include('functions1.php');

if(isset($_POST["edit_house"])){
    $edhouseid = $_POST["edhouse_id"];
    $edhsenumber = $_POST["edhse_number"];
    $edflevel = $_POST["edfloor_level"];
    $edhstype = $_POST["edhouse_type"];
    $edstatus = $_POST["ed_status"];

    

    if(strlen($edhsenumber) > 4){
        
        $_SESSION["error"] = "Not a house";
        header("Location: ../aa_buildingHouses.php?id=$edhouseid");
        die();
    }



    $queri21 = "UPDATE houses SET house_number = '$edhsenumber', floor_level = '$edflevel', house_type = '$edhstype', status = '$edstatus' where house_id = $edhouseid";

    $res21 = mysqli_query($conn, $queri21);

    if($res21 === TRUE){
        header("Location: ../aa_housedetails.php");
        $edithouse = "SELECT house_id from houses where house_id = '$edhouseid'";
        $ed_hse = mysqli_query($conn, $edithouse);
        if($ed_hse){
            $_SESSION["success"] = "house edited";
            header("Location: ../aa_housedetails.php?id=$edhouseid");
        }else{
            $_SESSION["failed"] = "house details missing";
        }
    }

    header("Location: ../aa_housedetails.php?id=$edhouseid");
}
