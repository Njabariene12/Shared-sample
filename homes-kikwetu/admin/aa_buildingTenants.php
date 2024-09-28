<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");
 

    check_signin();
   

    
    $query12 = "SELECT * from tenant";
    $res12 = mysqli_query($conn, $query12);
    

?>




<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Building Tenants</title>
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

                    <!-- Start Content-->
                    <div class="container-fluid">
                        

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <h4 class="page-title">Building 1.1</h4>
                                <div class="page-title-box">
                                    <h4 class="page-title">Tenants
                                        <a href="tenant_form.php" data-bs-target="#add-new-task-modal" class="btn btn-success btn-sm ms-3">Add New</a></h4>
                                </div>
                            </div>
                        </div> 
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            
                                            <div class="col-xl-4">
                                                
                                            </div><!-- end col-->
                                        </div>
                                        
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        
                                                        <th>Tenant Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Hse.Number</th>
                                                  
                                                        <th>Date Moved In</th>
                                                        <th>Status</th>
                                                        <th style="width: 125px;">Action</th>
                                                    </tr>
                                                </thead>                                            

                                                <tbody>
                                                <?php while ($row12=$res12->fetch_assoc())
                                            
                                                {?>                                               
                                                
                                                    <tr>

                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2"><?php echo $row12["tenant_name"]; ?></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold"><?php echo $row12["phone_number"]; ?></a></td>
                                                        <td><?php echo $row12["house_number"]; ?></td>
                                                        
                                                        <td><?php echo $row12["date_moved"]; ?></td>
                                                        <td><h5 class="my-0"><span class="badge badge-info-lighten">Pending</span></h5></td>
                                                        <td>
                                                            <a href="aa_tenant_analysis.php?id=<?php echo $row12["tenant_id"];?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
                    </div> <!-- container -->
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
        <!-- END wrapper -->       

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:29 GMT -->
</html>
