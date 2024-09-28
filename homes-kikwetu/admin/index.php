<?php
session_start();

    include("includes/connections1.php");
    include("includes/functions1.php");
    
    
?>

<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper/modern/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:52 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Log In</title>
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

<body class="authentication-bg pb-0">

    <div class="auth-fluid">
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
                    <h4 class="mt-0">Sign In</h4>
                    <p class="text-muted mb-4">Enter your email address and password to access account.</p>
                    
                    <?php if(isset($_SESSION["error"])){?>
                    <div class="text-danger py-2" style="margin-bottom: 20px; margin-top: -15px" >
                        <?php echo $_SESSION["error"];
                            unset($_SESSION["error"]);?>
                    </div>
                    <?php }?>

                    <!-- form -->
                    <form method="post" action="includes/processes.php">

                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" name="email" id="email" required="" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>
                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit" name="login"><i class="mdi mdi-login"></i> Log In </button>
                        </div>
                        <!-- social-->
                        
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account? <a href="pages-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Welcome to Homes Kikwetu</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i>Home is where the heart is <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - A homeowner once said
                </p>
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


<!-- Mirrored from coderthemes.com/hyper/modern/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 17:24:52 GMT -->
</html>