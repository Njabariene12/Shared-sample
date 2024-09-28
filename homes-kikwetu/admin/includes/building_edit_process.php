<?php

session_start();

include('connections1.php');
include('functions1.php');

$opening = date("Y-M-d");


if(isset($_POST["edit_building"])){
    $edid = $_POST["bu_id"];
    $edname = $_POST["bu_name"];
    $edaddress = $_POST["bu_address"];
    $edlocation = $_POST["bu_location"];
    $eddescription = $_POST["bu_description"];

    $query8 = "UPDATE buildings SET building_name = '$edname', building_address = '$edaddress', location = '$edlocation', description = '$eddescription' WHERE building_id = $edid";

/* id session needs checking------id=28 is sample*/

    $resi8 = mysqli_query($conn, $query8);

    if($resi8 === TRUE){
        header("Location: ../aa_buildingdetails.php");
        $building_house = "SELECT building_id from buildings where building_id = '$edid'";
        $resu8 = mysqli_query($conn, $building_house);
        if($resu8 === TRUE){
            $_SESSION["hs_building_id"] = $edid;
            $_SESSION["success"] = "Nice building";
            header("Location: ../aa_buildingdetails.php?id=$edid");
            
        }
    }else{
        $_SESSION["entry_failed"] = "Put some valid data";
        header("Location: ../aa_buildingdetails.php?id=$edid");
    }
    $_SESSION["success"] = "Nice building";
    header("Location: ../aa_buildingdetails.php?id=$edid");
}
