<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");
 

    check_signin();

   
   $reinvid = $_GET["id"];
   $sql = "SELECT * from invoice where tenant_id = $reinvid";
   $res = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($res);



?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Invoice for Tenant</title>
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

                    <!-- Start Content-->
                    

                        <!-- start table content -->
                         
                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Tenantid</th>
                                                        <th>Transactionid</th>
                                                        <th>Balance</th>
                                                        <th>Invoice number</th>
                                                        <th>Date</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($row=$res->fetch_assoc()) 
                                                    
                                                {?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold"><?php echo $row["tenant_id"];?></a> </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                    <div class="flex-grow-1 ms-2"><h5 class="my-0"><?php echo $row["transaction_id"];?></h5></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $row["balance"];?></td>
                                                        <td>
                                                            <h5 class="my-0"><?php echo $row["invoice_number"];?></h5>
                                                           
                                                        </td>
                                                        <td><?php echo $row["date_made"];?></td>
                                                <?php  }?>
                                                                                                                                                                                                                                           
                                                </tbody>
                                            </table>                    
                                        </div>                    
                                    </div>
                                    <div class="text-end" id="end-buttons">                                    
                 
                                        <button type="button" class="btn btn-primary">Print</button>
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
        <!-- Theme Settings -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:29 GMT -->
</html>
