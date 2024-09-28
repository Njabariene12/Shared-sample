<?php
session_start();


include("connections1.php");
include ("functions1.php");

    

if(isset($_POST["signup"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $datereg = $_POST["datereg"];
  
        $esql = "SELECT * from owner where email = '$email'";
        $resa = mysqli_query($conn, $esql);
        $check = mysqli_num_rows($resa);
    
        if($check > 0){          
            $_SESSION["error"] = "Email already exists";
            header("Location: ../aa_signup.php");           
            
            die();
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $_SESSION["error"] = "Invalid email";
            header("Location: ../aa_signup.php");           
            
            die();
        }
        if(strlen($password) < 4){
            $_SESSION["error"] = "password should be at leat 4 characters";
            header("Location: ../aa_signup.php");   
            
            die();
        }  
    
        /*INSERTING PROFILE */
        $datereg = date("Y-M-d");
        $queri = "INSERT into owner (first_name, last_name, email, password, date_registered) values ('$firstname', '$lastname', '$email', '$password', '$datereg')";
       
        $resi = mysqli_query($conn, $queri); 

        if($resi === TRUE){    
                       

            $_SESSION["owner_id"] = $conn->insert_id;
            $_SESSION["owner_name"] = $firstname." ".$lastname; 
            
            $_SESSION["success"] = "Welcome to Homes Kikwetu";
    
            header("Location: ../aa_newHomes.php");
            
            //echo ("<div class= 'alert'>Success</div>");
            

        }else{
            echo "Put some valid data";
        }
        $_SESSION["success"] = "Welcome to Homes Kikwetu";    
        header("Location: ../aa_newHomes.php");
}




if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)){
        $query = "SELECT * from owner where email = '$email'";
        $res = mysqli_query($conn, $query);
        if($res){
            if($res && mysqli_num_rows($res) > 0){
                $user_data = mysqli_fetch_assoc($res);

                if($user_data["password"] === $password && $user_data['email'] === $email){
                    $_SESSION["owner_id"] = $user_data['owner_id'];
                    $ownerid = $_SESSION["owner_id"];
                    $_SESSION["owner_name"] = $user_data['first_name']." ".$user_data['last_name'];
                    header("Location: ../aa_newHomes.php?id=$ownerid");
                    echo "Success";
                    die;
                }
            }
        }
        $_SESSION["error"] = "Wrong email or password";
        header("Location: ../index.php");        
    }else{
        $_SESSION["error"] = "Wrong email or password";
        header("Location: ../index.php");
    }
}
