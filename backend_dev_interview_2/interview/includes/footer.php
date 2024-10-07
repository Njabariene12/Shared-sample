<script src="//code.tidio.co/6o7leirrk9j58tiq67ozmjmf9ubcgm0f.js" async></script>
   <!-- Subscribe -->
    <div class="container content-space-1 content-space-lg-1 d-none">
      <div class="w-md-75 w-lg-50 text-center mx-md-auto">
        <div class="row justify-content-lg-between">
          <!-- Heading -->
          <div class="mb-5">
            <span class="text-cap">Subscribe</span>
            <h2>Get the latest from Us</h2>
          </div>
          <!-- End Heading -->

          <form method="POST" action="processes.php">
            <!-- Input Card -->
            <div class="input-card input-card-sm border mb-3">
              <div class="input-card-form">
                <label for="subscribeForm" class="form-label visually-hidden">Enter email</label>
                <input type="text" name="email" class="form-control form-control-lg" id="subscribeForm" placeholder="Enter email" aria-label="Enter email">
              </div>
              <button type="submit" name="subscribe"  class="btn btn-dark btn-lg">Subscribe</button>
            </div>
            <!-- End Input Card -->
          </form>

          <p class="small">You can unsubscribe at any time. Read our <a href="terms.php">privacy policy</a></p>
        </div>
      </div>
    </div>
    <!-- End Subscribe -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container pb-1 pb-lg-5">
      <div class="row content-space-t-2">
        <div class="col-lg-4 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5 bg-white d-inline-block rounded  p-1">
            <a class="navbar-brand" href="index.php" aria-label="Space">
              <img class="navbar-brand-logo" src="assets/img/boblegal-logo.png" alt="logo" width="50">
            </a>
          </div>
          <!-- End Logo -->

          <!-- List -->
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-light" href="#"><i class="bi-geo-alt-fill me-1"></i>Ground Floor, Kerai Heights, Off Muthithi Rd, Westlands</a></li>
            <li><a class="link-sm link-light" href="tel:+254702199086"><i class="bi-telephone-inbound-fill me-1"></i> +254-702-199-086 <br><i class="bi-telephone-inbound-fill me-1"></i> +254-734-653-103</a></li>
          </ul>
          <!-- End List -->

        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Company</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="about.php">About</a></li>
            <li><a class="link-sm link-light" href="articles.php">Blog</a></li>
            <li><a class="link-sm link-light" href="contact.php">Hire us</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Our Services</h5>
          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0" >
            <?php 
            $footspecres = $conn->query("SELECT * FROM category  WHERE cat_status = 1");
            while($footspecrow = $footspecres->fetch_assoc()){
            ?>
              <li><a class="link-sm link-light" href="service-category.php?id=<?php echo $footspecrow['category_id'];?>&<?php echo $footspecrow['category_slag'];?>"><?php echo $footspecrow['category_name'];?></a></li>
              <?php } ?>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

       


        <div class="col-sm">
          <h5 class="text-white mb-3">Contact Us</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-5">
            <li><a class="btn btn-link link-sm link-light text-start" href="contact.php">Get Consultation Today <i class="bi-chevron-right small ms-1"></i></a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="border-top border-white-10 my-7"></div>

      <div class="row mb-7">
        <div class="col-sm mb-3 mb-sm-0">
          <!-- Socials -->
          <ul class="list-inline list-separator list-separator-light mb-0">
            <li class="list-inline-item">
              <a class="link-sm link-light" href="terms.php">Privacy &amp; Policy</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="terms.php">Terms</a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>

        <div class="col-sm-auto">
         
        </div>
      </div>

      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-white-50 small">&copy; Bob & Bob Advocates 2024. All rights reserved.</p>
        <p class="text-white-50 small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
      </div>
      <!-- End Copyright -->
    </div>
  </footer>





  
<!-- Cookie Alert -->
<div class="container position-fixed bottom-0 start-0 end-0 zi-3" id="cookie-consent">
  <div class="alert alert-white w-lg-75 shadow-sm mx-auto" role="alert">
    <h5 class="text-dark">Cookie Consent</h5>
    <p class="small">At Bob & Bob Advocates, we use cookies to enhance your browsing experience and provide personalized services. These cookies help us understand how our website is being used and allow us to improve its functionality.</p>
    <div class="row align-items-sm-center">
      <div class="col-sm-4 text-sm-end">
        <button type="button" class="btn btn-dark btn-transition" id="accept-btn" data-bs-dismiss="alert" aria-label="Close">Accept Cookies</button>
      </div>
    </div>
  </div>
</div>

  <!-- ========== END SECONDARY CONTENTS ========== -->
