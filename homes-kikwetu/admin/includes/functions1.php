<?php

function check_signin(){
    if(!isset($_SESSION['owner_id'])){
        header('Location: ../index.php');     
        die;
    }
}

?>
