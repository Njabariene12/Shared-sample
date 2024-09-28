<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");

    check_signin();

?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>building_form</title>
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
    <form class="p-2" action="includes/building_processes.php" method="post">
        
        <div class="mb-3">
            <label class="form-label">Name of Building</label>
            <input type="text" class="form-control form-control-light" id="task-title" name="building_name" placeholder="Enter Building Name...">
            
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">Building address</label>
                    <input type="text" class="form-control form-control-light" id="task-title" name="address" placeholder="Enter Building Address...">
        </div>
        <div class="mb-3">
                    <label for="task-title" class="form-label">Location of Building</label>
                    <input type="text" class="form-control form-control-light" id="task-title" name="location" placeholder="Enter Building Location...">
        </div>
        <div class="mb-3">
            <label for="task-description" class="form-label">Description</label>
            <textarea class="form-control form-control-light" id="task-description" rows="3" name="description"></textarea>
        </div>
        
        <div class="text-end">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit" value="create" name="create_building"> <i class="mdi mdi-account-circle"></i>create building</button>
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
        