<?php
session_start();


include("connections1.php");
include ("functions1.php");


$opened = date("Y-M-d");


if(isset($_POST["create_house"])){
    $house = $_POST["hs_bu_id"];
    $hsnumber = $_POST["house_number"];
    $hstype = $_POST["house_type"];
    $hlevel = $_POST["floor_level"];
    $rentamount = $_POST["rentamount"];
    $status = $_POST["status"];


    /*Inserting House */
        $queri6 = "INSERT into houses (building_id, house_number, house_type, floor_level, date_added, rent_amount, status) values ('$house', '$hsnumber', '$hstype', '$hlevel', '$opened', $rentamount, '$status')";

        $resu4 = mysqli_query($conn, $queri6);

        if($resu4 === TRUE){

            $_SESSION["house_id"] = $conn->insert_id;
            header("Location: ../aa_buildingHouses.php?id=$house");
        }else{
            $_SESSION["failed"] = "Put some valid data";
            
            header("Location: ../houses_form.php?id=$house");
        }


        $_SESSION["success"] = "Your house has been added successfully";       
        header("Location: ../aa_buildingHouses.php?id=$house");
}

