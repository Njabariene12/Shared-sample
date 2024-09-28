<?php
session_start();

include ("connections1.php");
include ("functions1.php");


if (isset($_POST["delete_house"])) {
    $del_hse = $_POST["del_hse"];

    $h_delete = "DELETE from houses where house_id = $del_hse";
    $h_delquery = mysqli_query($conn, $h_delete);

    $del_build_hse = $_POST["del_build_hse"];

    if($h_delquery === TRUE){
        $_SESSION["success"] = "House deleted successfully";
        header("Location: ../aa_buildingHouses.php?id=$del_hse");
    }
    header("Location: ../aa_buildingHouses.php?id=$del_build_hse");
}


