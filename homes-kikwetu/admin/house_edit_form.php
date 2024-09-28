<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");

    check_signin();

    $house_id = $_GET["id"];
    $query17 = "SELECT * from houses where house_id = $house_id";
    $res17 = mysqli_query($conn, $query17);
    $row17 = $res17->fetch_assoc();
    

?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>house_edit_form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/users/windowroompic6.jpg">

        <!-- Theme Config Js -->
        <script src="assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
        <link href="assets/css/a_buildings.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tenant_analysis.css">

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
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
    <form class="p-2" action="includes/house_edit_processes.php" method="post">
        <input type="hidden" name="edhouse_id" value="<?php echo $row17["house_id"];?>">
        <div class="mb-3">
            <label class="form-label">House number</label>
            <input type="text" class="form-control form-control-light" id="task-title" name="edhse_number" value="<?php echo $row17["house_number"] ?>" placeholder="Enter House number...">
            
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">Floor</label>                    
                    <input type="text" class="form-control form-control-light" id="task-title" name="edfloor_level" value="<?php echo $row17["floor_level"] ?>" placeholder="Enter floor level of house...">
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">rent_amount</label>
                    
                    <input type="text" class="form-control form-control-light" id="task-title" name="rentamount" placeholder="Enter rent amunt...">
        </div>

        <div class="mb-3">
                    <label for="task-title" class="form-label">House Type</label>
                    <select class="form-select" id="status-select" name="edhouse_type" value="<?php echo $row17["house_type"] ?>">
                        <option selected>Choose...</option>
                        <option value="1">2-Bedroom</option>
                        <option value="2">1-Bedroom</option>
                        <option value="3">Studio</option>
                        <option value="4">Stall</option>
                    </select>
        </div>


        <div class="mb-3">                    
                    <label for="task-title" class="form-label">Status</label>
                    <select class="form-select" id="status-select" name="ed_status">                        
                        <option value="1" selected>Occupied</option>
                        <option value="2">Vacant</option>
                    </select>                    
        </div>

       
        <div class="text-end">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit" value="edithouse" name="edit_house"><i class="mdi mdi-account-circle"></i>Edit house</button>
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
        