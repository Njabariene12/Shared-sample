<?php
session_start();

    include ("includes/connections1.php");
    include ("includes/functions1.php");
 

    check_signin();

    $thistenant = $_GET["id"];

    $query25 = "SELECT * from tenant where tenant_id = $thistenant";
    $res25 = mysqli_query($conn, $query25);
    $row11 = mysqli_fetch_assoc($res25);

    
    /*invoicing*/

    $query30 = "SELECT payments.payment, payments.transaction_id, payments.tenant_id, houses.rent_amount from payments INNER JOIN houses on payments.house_number = houses.house_number where payments.tenant_id = $thistenant";

    $res30 = mysqli_query($conn, $query30);
    $row29 = $res30->fetch_assoc();
    
    
    
   



?>


<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/crm-orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:28 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Tenant Analysis</title>
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Tenant Profile Page
                                      
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="NewTaskModalLabel">Profile and Details</h4>
                            
                           
                            </div>
                            <div class="modal-body">
                                <form class="p-2">
                                    <div class="mb-3">
                                        <label class="form-label">Name of Tenant</label>
                                        <p><?php echo $row11["tenant_name"];?></p>
                                    </div>
        
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <p><?php echo $row11["phone_number"];?> </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Id Number</label>
                                        <p><?php echo $row11["id_number"];?></p>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Building</label>
                                        <p>#AAA111</p>
                                    </div>
      
                                    <div class="mb-3">
                                        <label class="form-label">House Number</label>
                                        <p><?php echo $row11["house_number"];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date moved in</label>
                                        <p><?php echo $row11["date_moved"];?></p>
                                    </div>
                               
  
                                    <div class="text-end">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Edit</button>
                                        <button type="button" class="btn btn-primary">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- start table content -->
                         
                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">                    
                                    </div>
                                    <div class="text-end" id="end-buttons">

                                        <form action="includes/invoice_process.php" method="post">
                                            <input type="hidden" name="intenantid" value="<?php echo $row11["tenant_id"];?>">

                                            
                                            <?php while($row31=$res30->fetch_assoc()) {?>
                                                <input type="hidden" name="payamount" value="<?php echo $row31["payment"]; ?>">
                                                <input type="hidden" name="rentcost" value="<?php echo $row31["rent_amount"]; ?>">
                                                <input type="hidden" name="transid" value="<?php echo $row31["transaction_id"]; ?>">
                                                <input type="hidden" name="invid" value="<?php echo rand(); ?>">

                                                                                
                                            <?php  }?>

                                            <button type="submit" value="invoice" name="invoicing" class="btn btn-primary">Invoice</button>
                                            <a href="aa_tenantpayment_history.php?id=<?php echo $row11["tenant_id"];?>"><button type="button" class="btn btn-primary">payment history</button></a>
                                            <a href="aa_house_tenant_payments_form.php?id=<?php echo $row11["tenant_id"];?>"><button type="button" class="btn btn-primary">Make Payment</button></a>   
                                            <a href="aa_invoicetenant.php?id=<?php echo $row11["tenant_id"];?>""><button type="button" class="btn btn-primary">Evacuate</button></a>
                                        </form>
                                         
                                        
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
