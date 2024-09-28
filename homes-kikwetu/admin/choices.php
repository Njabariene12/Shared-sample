<?php
include("includes/connections1.php");



$buld = $_POST["buld"];

$sql4 = "SELECT * from houses where building_id = '$buld' AND status = 2";

$res4 = mysqli_query($conn, $sql4);
$rows5 = mysqli_fetch_assoc($res4);

while($rows5 = mysqli_fetch_assoc($res4)){ 
    $home = "<option value='{$rows5["house_number"]}'>{$rows5["house_number"]}</option>";
}
    echo $home;

?>



















/*
if (!empty($_POST["tenantbuilding"])){
    $duma = $_POST["buildinghome"];
    $sql4 = "SELECT * from houses where building_name = $duma";
    $result = mysqli_query($conn, $sql4);
    if($result === TRUE){
        if(mysqli_num_rows($result > 0)){
          
            while ($row4 = $result -> fetch_assoc()) {
                echo  $row4["house_number"];
                header("Location: ../tenant_form.php");
            }
        }else{
            $_SESSION["error"] = "Wrong stuff";
            header("Location: ../tenant_form.php");
        }
}
header("Location: ../tenant_form.php");
}
/*
"<option value=".$row["building_name"].">".$row["building_name"]."</option>"*/