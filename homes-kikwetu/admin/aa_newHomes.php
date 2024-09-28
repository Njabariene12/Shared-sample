<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");

    check_signin();

    $owner = $_SESSION["owner_id"];

    $query5 = "SELECT * from buildings where owner_id = $owner";

    $res5 = mysqli_query($conn, $query5);

?>



<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/apps-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:49 GMT -->
<head>
        <meta charset="utf-8" />
        <title>aa_newHomes</title>
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

            
            <?php include "includes/navbar.php"; ?>
           
            <!-- ========== Left Sidebar Start ========== -->
            <?php include "includes/sidebar1.php";?>
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Buildings
                                        <a href="building_form.php" class="btn btn-success btn-sm ms-3">Add New</a></h4>
                                </div>
                            </div>
                        </div>     

                        <div class="row">
                            <div class="col-12">
                                <div class="board">
                                    <div class="tasks" data-plugin="dragula" data-containers='["task-list-one", "task-list-two", "task-list-three", "task-list-four"]'>                   
                                        <div id="task-list-one" class="task-list-items">






                                        <?php   
                                        while($row=$res5->fetch_assoc()){
                                            
                                        
                                        
                                        
                                        
                                        ?>
                                            <!-- Task Item -->
   
                                            <div class="card mb-0">
                                                <div class="card-body p-3">
                                                    <div class="dropdown float-end">
                                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <!-- item-->
                                                            <a href="aa_buildingVacancy.php" class="dropdown-item"><i class="ri-home-3-line"></i>vacancy</a>
                                                            <!-- item-->
                                                            <a href="aa_buildingTenants.php?id=<?php echo $row["building_id"];?>" class="dropdown-item" name="building_tenants"><i class="uil-users-alt"></i>Tenants</a>
                                                            <!-- item-->
                                                            <a href="aa_buildingHouses.php?id=<?php echo $row["building_id"];?>" class="dropdown-item"><i class="ri-home-2-line"></i>Houses</a>
                                                            <!-- item-->
                                                            <a href="aa_buildingdetails.php?id=<?php echo $row["building_id"];?>" class="dropdown-item"><i class="ri-file-list-2-line"></i>Details</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ri-pencil-fill"></i>Edit</a>
                                                            <!-- item-->
                                                                                                               
                                                        </div>
                                                    </div>

                                                    <span class="badge bg-danger">Fully Occupied</span>

                                                    <h5 class="mt-2 mb-2">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Building 1.1</a>
                                                    </h5>                                                 
                                                    <p class="mb-0">
                                                        
                                                        <span class="addressa" class="align-middle" ><a href="aa_buildingdetails.php" id="builda"><?php echo $row["building_name"];?></a></span>
                                                    </p>
                                                </div> <!-- end card-body -->
                                            </div>
                                            <!-- Task Item End -->
                                        <?php  }?>






                                            <!-- Task Item -->
                                           <!-- end card-body -->
                                           
                                            <!-- Task Item End -->
                                            <!-- Task Item -->
                                            
                                            <!-- Task Item End -->
                                            
                                        </div> <!-- end company-list-4-->
                                    </div>

                                </div> <!-- end .board-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Homes Kikwetu.com
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
       
        <!--/.modal -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- dragula js-->
        <script src="assets/vendor/dragula/dragula.min.js"></script>

        <!-- demo js -->
        <script src="assets/js/ui/component.dragula.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <script src="alertss.js"></script>


    </body>

<!-- Mirrored from coderthemes.com/hyper/modern/apps-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:50 GMT -->
</html>
