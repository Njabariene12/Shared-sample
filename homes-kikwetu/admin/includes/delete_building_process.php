<?php
session_start();


include("connections1.php");
include ("functions1.php");

$opening = date("Y-M-d");
$owner = $_SESSION["owner_id"];

if(isset($_POST["delete_building"])){
    $del_building = $_POST["del_building"];

    $del_build_query = "DELETE from buildings where building_id = $del_building";

    $del_building_owner = $_POST["del_building_owner"];

    if($del_build_query === TRUE){
        $_SESSION["del_building_success"] = "Building deleted";
        header("Location: ../aa_newHomes.php?id=$del_building_owner");
    }
    header("Location: ../aa_newHomes.php?id=$del_building_owner");
        
     
}
