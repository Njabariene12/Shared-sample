 <?php
 
 $navcatres = $conn->query("SELECT * FROM category WHERE cat_status=1");
 ?>
 <header id="header" class="navbar shadow navbar-expand-lg navbar-end <?php if(isset($pg2)){echo 'bg-white';}else{echo 'navbar-absolute-top';}?>  <?php if(isset($pg)){echo 'navbar-dark';}else{echo 'navbar-light';}?> navbar-show-hide" style="background-color: white;" data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <!-- Topbar -->
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center small  text-dark">
            <span class="navbar-toggler-text text-dark" style="font-weight: bold;">Get in Touch</span>

            <span class="navbar-toggler-default">
              <i class="bi-chevron-down ms-2"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-chevron-up ms-2"></i>
            </span>
          </span>
        </button>
        <!-- End Toggler -->

        <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
          <div class="navbar-toggler-wrapper">
            <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
              <span class="navbar-toggler-text small" style="font-weight: bold;">Our Contacts</span>

              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
              <!-- End Toggler -->
            </div>
          </div>

          <ul class="navbar-nav bg-white">
            <li class="nav-item d-block d-md-none">
                <a href="tel:+254702199086" class="nav-link link-dark"  style="font-weight: normal;"><i class="bi bi-telephone-fill"></i> +254-702-199-086</a>
               </li>
            <li class="nav-item d-block d-md-none">
                <a href="tel:+254734653103" class="nav-link link-dark"  style="font-weight: normal;"><i class="bi bi-telephone-fill"></i> +254-734-653-103</a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="tel:+254702199086" class="nav-link link-dark"  style="font-weight: normal;"><i class="bi bi-telephone-fill"></i> +254-702-199-086 | +254-734-653-103</a>
               </li>
            <li class="nav-item">
                <a href="mailto:info@boblegal.org" class="nav-link link-dark" style="font-weight: normal; font-size: 16px;"><i class="bi bi-envelope-fill "></i>   info@boblegal.org</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
                <a class="navbar-brand" href="index.php" aria-label="Front" style="background-color: white;">
                  <img class="navbar-brand-log" src="assets/img/boblegal-logo.png" alt="Logo" style="max-width:80px;">
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white; color: black;">
                  <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                  </span>
                  <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                  </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="background-color: white;">
                  <div class="navbar-absolute-top-scroller" style="background-color: white;">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class=" nav-link" href="index.php" style="font-weight: bold; color: black; font-size: 16px;" >Home</a>
                        </li>

                        <li class="nav-item">
                            <a class=" nav-link" href="about.php" style="font-weight: bold; color: black; font-size: 16px;" >About Us</a>
                          </li>

                      <!-- Services -->
       
        <!-- End Landings -->

                      <!-- Specialisms -->
        <li class="hs-has-sub-menu nav-item" style="background-color: white;">
            <a id="specialismsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="services.php" role="button" aria-expanded="false" style="font-weight: bold; color: black; font-size: 16px;" >Our Services & Expertise</a>

            <!-- Mega Menu -->
            <div class="hs-sub-menu dropdown-menu" aria-labelledby="specialismsMegaMenu" style="min-width: 14rem; background-color: white;">
                <!-- Empty container for categories -->
                <div style="background-color: white;">
                <?php while($navspecrow = $navcatres->fetch_assoc()){?>
                      <a class="dropdown-item " href="service-category.php?id=<?php echo $navspecrow['category_id'];?>&<?php echo $navspecrow['category_slag'];?>"><?php echo $navspecrow['category_name'];?></a>
                      <?php } ?>    
                </div>
            </div>
            <!-- End Mega Menu -->
        </li>
        <!-- End Specialisms -->

                      <!-- Home -->
                      <li class="nav-item">
                        <a class="nav-link" href="articles.php" style="font-weight: bold; color: black; font-size: 16px;" >Insights</a>
                      </li>
                      <!-- End Home -->

                      
                      <!-- Home -->
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="font-weight: bold; color: black; font-size: 16px;" >Contact Us</a>
                      </li>
                      <!-- End Home -->

                      <li class="nav-item ms-auto d-none" style="margin-left: 20px;">
                        <a href="contact.php" class="btn btn-dark" style="width: 250px;">
                          Get Free Consultancy Today
                        </a>
                      </li>
                      <!-- End CTA -->

                      
                    </ul>
                  </div>
                </div>
                <!-- End Collapse -->
              </nav>
            </div>
          </header>



