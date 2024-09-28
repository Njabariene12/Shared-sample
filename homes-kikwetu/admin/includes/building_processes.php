<?php
session_start();


include("connections1.php");
include ("functions1.php");

$opening = date("Y-M-d");
$owner = $_SESSION["owner_id"];

if(isset($_POST["create_building"])){
    
    $buildingname = $_POST["building_name"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $description = $_POST["description"];

    
        if (strlen($buildingname) < 3) {
            $_SESSION["error"] = "This is not a building";
            header("Location: ../aa_newHomes.php");
            die();
        }

        /*INSERTING PROFILE */
        
        $queri2 = "INSERT into buildings (owner_id, building_name, building_address, location, description, Date_made) values ('$owner','$buildingname', '$address', '$location','$description', '$opening')";
       

        $resi2 = mysqli_query($conn, $queri2); 
        if($resi2 === TRUE){   
                 
            
           $_SESSION["building_id"] = $conn->insert_id;
           header("Location: ../aa_newHomes.php");
                      

        }else{
            $_SESSION["failed"] = "Put some valid data";
            
            header("Location: ../building_form.php");
        }
        $_SESSION["building_success"] = "Building successfully inserted";    
        header("Location: ../aa_newHomes.php");    
        
}



   

