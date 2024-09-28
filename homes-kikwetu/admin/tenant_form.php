<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");

   

    check_signin();

    $sql = "SELECT * from buildings INNER JOIN houses on buildings.building_id = houses.building_id where houses.status = 2";
    $querri24 = mysqli_query($conn, $sql);

   

    
    $buildingchoice = "";
    $housechoice = "";
   


?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>tenant_form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        
        
        <link rel="shortcut icon" href="assets/images/users/windowroompic6.jpg">

        <!-- Theme Config Js -->


        <!-- App css -->
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
        <link href="assets/css/a_buildings.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tenant_analysis.css">

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />


        <script src="assets/js/jquery2.js"></script>
        <script src="assets/js/house.choice.js"></script>

        <script src="assets/js/hyper-config.js"></script>
        
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <?php include "includes/navbar.php"; ?>
            <!-- ========== Topbar End ========== -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include "includes/sidebar_buildings.php";?>
            <!-- ========== Left Sidebar End ========== -->
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
    <form class="p-2" action="includes/tenant_processes.php" method="post">
        <div class="mb-3">
            <label class="form-label">Name of Tenant</label>
            <input type="text" class="form-control form-control-light" id="task-title" name="tenant_name" placeholder="Enter Tenant Name...">           
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">Phone number</label>
                    <input type="text" class="form-control form-control-light" id="task-title" name="phone_number" placeholder="Enter phone number...">
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">Id number</label>
                    <input type="text" class="form-control form-control-light" id="task-title" name="id_number" placeholder="Enter id number...">
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">email</label>
                    <input type="email" class="form-control form-control-light" id="task-title" name="email" placeholder="Enter email...">
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">Date moved in</label>
                    <input type="text" class="form-control form-control-light" id="task-title" name="regin" placeholder="Enter date...">
        </div>
        <div class="mb-3">
                 
        </div>
        <div class="mb-3">
                    
                    
                        
        </div>

        <div class="row">
            <div class="col-md-8">
                
            <select class="form-select" id="buildingchoice" name="buildingchoice" onchange="gethouse(this.value)">
                <?php while($rows = $querri24->fetch_assoc()){ ?>
                        <option value="<?php echo $rows["building_id"];?>"><?php echo $rows["building_id"];?></option>
                        

                <?php  }?>
                
            </select>
            </div>
              
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php 
                    $sql3 = "SELECT house_number from houses where building_id = '$buildingchoice'";
                    $res3 = mysqli_query($conn,$sql3);
                ?>                

            <select class="form-select" id="housechoice" name="housechoice">
               
                

      
            
            </select>
            </div>
              
        </div>

        <div class="mb-3">
            <label for="task-description" class="form-label">Description</label>
            <textarea class="form-control form-control-light" id="task-description" rows="3" name="description"></textarea>
        </div>
        
        <div class="text-end">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit" value="create" name="create_tenant"> <i class="mdi mdi-account-circle"></i>Create tenant</button>
        </div>
    </form>

                    <!-- Start Content-->
                    <!-- container -->
                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        

 <!-- content -->

                <!-- Footer Start -->
        