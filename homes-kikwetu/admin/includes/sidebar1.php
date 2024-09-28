<div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </div>

                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="assets/images/users/sunsetstreetpic2.webp" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2"><?php echo $_SESSION["owner_name"];?> </span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">Navigation</li>
                       
                        <li class="side-nav-item">
                            <a href="aa_newHomes.php" class="side-nav-link">
                                <i class="ri-building-4-fill"></i>
                                <span> Buildings </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="aa_newTenants.php" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span>Tenants</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="aa_occupancy.php" class="side-nav-link">
                                <i class="uil-user-square"></i>
                                <span>Occupancy</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="aa_AllHousesOfAllProjects.php" class="side-nav-link">
                                <i class="ri-building-line"></i>
                                <span>All Houses</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-book-reader"></i>
                                <span>Rent_arrears</span>
                            </a>
                        </li>

                        



                       
                        <!-- Help Box -->
                        
                        <!-- end Help Box -->

                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

            