<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");

    check_signin();

    $hs_buildingid = $_GET["id"];

    $query14 = "SELECT * from buildings where building_id = $hs_buildingid";
    $res14 = mysqli_query($conn, $query14);
    $row14 = mysqli_fetch_assoc($res14);
    


    /*house_edit */

    $query15 = "SELECT * from houses where building_id = $hs_buildingid";
    $res15 = mysqli_query($conn, $query15);




    
?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>houses in this Building</title>
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

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <?php include ("includes/navbar.php"); ?>
            <!-- ========== Topbar End ========== -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php include "includes/sidebar_buildings.php";?>
            <!-- ========== Left Sidebar End ========== -->
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                   
                    


                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <h4 class="page-title">All houses in this Building</h4>
                                <div class="page-title-box">
                                    <h4 class="page-title">Houses
                                        <a href="houses_form.php?id=<?php echo $row14["building_id"];?>" class="btn btn-success btn-sm ms-3">Add New</a>
                                        <a href="house_edit_form.php" class="btn btn-success btn-sm ms-3">Edit House</a>                                        
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-xl-8">
                                                <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                                    <div class="col-auto">
                                                        <label for="inputPassword2" class="visually-hidden">Search</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex align-items-center">
                                                            <label for="status-select" class="me-2">Status</label>
                                                            <select class="form-select" id="status-select">
                                                                <option selected>Choose...</option>
                                                                <option value="1">2-Bedroom</option>
                                                                <option value="2">1-Bedroom</option>
                                                                <option value="3">Studio</option>
                                                                <option value="4">Stall</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>                          
                                            </div>
                                            <div class="col-xl-4">
                                                
                                            </div><!-- end col-->
                                        </div>
                
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
                    </div> <!-- container -->
                </div> <!-- content --><div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        
                                                        <th>Hse Number</th>
                                                        <th>Floor</th>
                                                        <th>Type</th>                        
                                                        <th>Status</th>
                                                        <th style="width: 125px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <!--

                                                ///*fist preserve**//
                                                    


                                                   ///** End here */

                                                -->

                                                   
                                
                                                   
                                                    
                                                   <tr>
                                                    <?php while ($row15 = $res15->fetch_assoc()){
                            
                                                    ?>
                                                       
                                                        
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                    <div class="flex-grow-1 ms-2"><h5 class="my-0"><?php echo $row15["house_number"];?> </h5></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $row15["floor_level"];?> </td>
                                                        <td>
                                                            <h5 class="my-0"><?php echo $row15["house_type"];?> </h5>
                                                           
                                                        </td>   
                                                        <td><h5 class="my-0"><span class="badge badge-info-lighten"><?php echo $row15["status"];?></span></h5></td>  
                                                        <td>
                                                            <a href="aa_housedetails.php?id=<?php echo $row15["house_id"];?>" class="action-icon"><i class="uil-edit"></i></a>                                                            
                                                        </td>                  
                                                    </tr>
                                                    
                                                   <?php }?>
                                    
                                                </tbody>
                                            </table>
                                        </div>

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
        <!-- END wrapper -->

        <!-- Theme Settings -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:29 GMT -->
</html>
