
<?php

include("includes/processes.php");

?>

<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper/modern/pages-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:52 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/users/windowroompic6.jpg">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link rel="stylesheet" href="assets/css/aa_signup.css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body >
    
    <div class="auth-fluid" >
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="index.html" class="logo-dark">
                        <span class="logo-lg">
                            <p class="title1">Homes Kikwetu</p>
                        </span>
                    </a>
                    <a href="index.html" class="logo-light">
                        <span class="logo-lg">
                            <p class="title1">Homes Kikwetu</p>
                        </span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-3">Free Sign Up</h4>
                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>

                    <?php if(isset($_SESSION["error"])){?>
                    <div class="text-danger py-2" style="margin-bottom: 20px; margin-top: -15px">
                        <?php  echo $_SESSION["error"];
                                    unset($_SESSION["error"]);?>
                    </div>
                    <?php }?>
                    <!-- form -->
                    <form action="includes/processes.php" method="post">
                        
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input class="form-control" type="text" name="firstname" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastname" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label> 
                            <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">date of registeration</label>                    
                            <input class="form-control" type="date" name="datereg" placeholder="dd/mm/yy">
                        </div>
                        
                        
                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary" type="submit" value="signup" name="signup"> <i class="mdi mdi-account-circle"></i> Sign Up</button>
                            <a href="aa_newHomes.php"></a>
                        </div>
                        <!-- social-->              
                    </form>
                    <!-- end form-->
                </div>
                <!-- Footer-->
                

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Enjoy a fulfilling and suitable living experience</h2>
                <p class="lead">Housing the people of the nation</p>
               
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    
       <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/modern/pages-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:52 GMT -->
</html>