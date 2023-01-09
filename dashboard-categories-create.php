<?php include_once "includes/footer2.php"; ?>
<?php
require_once "includes/database.php";
include_once "includes/querys/_Add_categorie.php";
?>
<!-- **************** MAIN CONTENT START **************** -->
<main>
  <!-- =======================
Main contain START -->
  <section class="py-4">
    <div class="container">
      <div class="row pb-4">
        <div class="col-12">
          <!-- Title -->
          <h1 class="mb-0 h2">Create a categorie</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Chart START -->
          <div class="card border">
            <!-- Card body -->
            <div class="card-body">
              <!-- Form START -->
              <form method="post">
                <!-- Main form -->
                <div class="row">
                  <div class="col-12">
                    <!-- Post name -->
                    <div class="mb-3">
                      <label class="form-label">categorie name</label>
                      <input required id="con-name" name="name" type="text" class="form-control"
                        placeholder="Travel - Lifestyle - Business">
                      <small>Moving heaven divide two sea female great midst spirit</small>
                    </div>
                  </div>
                  <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                      <label class="form-label">Short description </label>
                      <textarea name="description" class="form-control" rows="3"
                        placeholder="Add description"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <!-- Image -->
                      <div class="position-relative">
                        <h6 class="my-2">post emoji here, or<a href="https://emojidictionary.emojifoundation.com/"
                            target="_blank" class="text-primary"> Browse</a></h6>
                        <label class="w-100" style="cursor:pointer;">
                          <span>
                            <input class="form-control stretched-link" type="text" name="icon" id="image"
                              placeholder="🤖 - 🩸 - 🤝">
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <!-- Create post button -->
                  <div class="col-md-12 text-start">
                    <button name="submit" class="btn btn-primary w-100" type="submit">Create categorie</button>
                  </div>
                </div>
              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Chart END -->
        </div>
      </div>
    </div>
  </section>
  <!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="mb-3">
  <div class="container">
    <div class="card card-body bg-light">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <!-- Copyright -->
          <div class="text-center text-lg-start">©2022 <a href="https://www.webestica.com/" class="text-reset btn-link"
              target="_blank">Webestica</a>. All rights reserved
          </div>
        </div>
        <div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
          <!-- Language switcher -->
          <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
            <a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown"
              aria-expanded="false">
              English Edition
            </a>
            <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
              <li><a class="dropdown-item" href="#">English</a></li>
              <li><a class="dropdown-item" href="#">German </a></li>
              <li><a class="dropdown-item" href="#">French</a></li>
            </ul>
          </div>
          <!-- Links -->
          <ul class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
            <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="assets/vendor/quill/js/quill.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard-post-create.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 23:42:08 GMT -->

</html>