<?php 
session_start();
require "../includes/connect.php";
//include "../includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("Y_m_d_H_i_s");

if(isset($_POST["login"])){
    $_SESSION['chid'] = "1";
    $_SESSION['chname'] = "Admin Panel";
    header("location:  dashboard.php");
}
elseif(isset($_POST["new-service"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
			

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $insert = "INSERT INTO service (name, slag, short_desc, long_desc, category_id, image, date_created) VALUES ('$name',  '$slag', '$sdesc', '$ldesc', '$cat', '$new', '$date')";
    
    if ($conn->query($insert)===TRUE){
        $pk = $conn->insert_id;
          
          $_SESSION["success"] = "New Service Added Sucessfully.";
          header("location: edit-service.php?id=$pk");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location:  add-service.php");
      }
    }

    
elseif(isset($_POST["edit-service"])){
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    


    $insert = "UPDATE `service` SET `name`='$name',`slag`='$slag',`short_desc`='$sdesc' ,`long_desc`='$ldesc', `category_id`='$cat',`status`='$status' WHERE service_id='$id'";
    
    if ($conn->query($insert)===TRUE){
        
          
          $_SESSION["success"] = "Service Updated Sucessfully.";
          header("location: edit-service.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-service.php?id=$id");
      }
    }
    
elseif(isset($_POST["edit-srv-img"])){
        $id = mysqli_real_escape_string($conn, $_POST["edit-srv-img"]);

        $image = $_FILES['photos']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
                

        $file_name = $_FILES["photos"]["name"];
        $_FILES["photos"]["type"];
        $tmp_file = $_FILES["photos"]["tmp_name"];
        
        $destination = "../uploads/" . $file_name;
        
        move_uploaded_file($tmp_file, $destination);
        $new = $filedate.$file_name;
        $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


        $insert = "UPDATE `service` SET `image`='$new' WHERE service_id='$id'";
        
        if ($conn->query($insert)===TRUE){
              
              $_SESSION["success"] = "Service Updated Sucessfully.";
              header("location: edit-service.php?id=$id");
              
          }else{
              $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
              header("location: edit-service.php?id=$id");
          }
}

// Add new Blog
if(isset($_POST["add-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $tags = mysqli_real_escape_string($conn, $_POST["tags"]);
    
    $slag = str_replace(' ', '-', $tit);
    $tit = ucwords($tit);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);
		
    
    $cat_insert = "INSERT INTO blog(blog_title, blog_slag, blog_description, blog_content, blog_image, category_id, tags, date_created) VALUES ('$tit',  '$slag', '$desc', '$content', '$new', '$cat', '$tags', '$date')";
    
    if ($conn->query($cat_insert)===TRUE){
          
          $last_id = $conn->insert_id;
          $_SESSION["success"] = "New Blog Created Sucessfully.";
          header('location: edit-blog.php?id='.$last_id);
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: new-insight.php');
      }
    
}
elseif(isset($_POST["edit-blog-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-blog-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);
    
    $updqry = "UPDATE blog SET blog_image ='$new'  WHERE blog_id  = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Image Updated Sucessfully.";
          header("location: edit-blog.php?id=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$cat_id");
      }


}

elseif(isset($_POST["seo-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE blog SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE blog_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: edit-blog.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$id");
      }
    
}


elseif(isset($_GET['logout'])){
    session_destroy();

    session_start();
    $_SESSION['success'] = "Logged Out Successfully!";
    header('location: index.php');
}

elseif(isset($_POST["new-cat"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
			

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $cat_qry = "INSERT INTO `category`(`category_name`, `category_slag`, `cat_short_desc`, `cat_desc`, `cat_image`, `date_created`) VALUES ('$name','$slag','$sdesc','$ldesc','$new','$date')";
    $cat_insert = $conn->query($cat_qry);

    if ($cat_insert===TRUE){

          
        $_SESSION["success"] = "Category added Sucessfully.";
        header("location: categories.php");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: categories.php");
    }
  
}
elseif(isset($_POST["edit-cat"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
   


    $insert = "UPDATE `category` SET `category_name`='$name', `category_slag`='$slag',`cat_short_desc`='$sdesc',`cat_desc`='$ldesc',`cat_status`='$status' WHERE category_id='$id'";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Category Updated Sucessfully.";
        header("location: edit-category.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-category.php?id=$id");
    }
}
elseif(isset($_POST["edit-cat-img"])){
    $id = mysqli_real_escape_string($conn, $_POST["edit-cat-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
            

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $insert = "UPDATE `category` SET `cat_image`='$new' WHERE category_id='$id'";
    
    if ($conn->query($insert)===TRUE){
          
          $_SESSION["success"] = "Category Image Updated Sucessfully.";
          header("location: edit-category.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-category.php?id=$id");
      }
}

  ?>