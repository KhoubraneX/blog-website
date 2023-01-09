<?php include_once "includes/footer2.php"; ?>
<?php
require_once "includes/database.php";
include_once "includes/querys/_All_categories.php";
include_once "includes/querys/_Add_post.php";
include_once "includes/querys/_All_type_post.php";


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
          <h1 class="mb-0 h2">Create a post</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Chart START -->
          <div class="card border">
            <!-- Card body -->
            <div class="card-body">
              <!-- Form START -->
              <form method="post" enctype="multipart/form-data">
                <!-- Main form -->
                <div class="row">
                  <div class="col-12">
                    <!-- Post name -->
                    <div class="mb-3">
                      <label class="form-label">Post name</label>
                      <input required id="con-name" name="name_p" type="text" class="form-control"
                        placeholder="Post name">
                      <small>Moving heaven divide two sea female great midst spirit</small>
                    </div>
                  </div>
                  <!-- Post type START -->
                  <div class="col-12">
                    <div class="mb-3">
                      <label class="form-label">Post type</label>
                      <div class="d-flex flex-wrap gap-3">
                        <!-- Post type item -->
                        <?php 
                          while ($row = mysqli_fetch_assoc($result_post_type)) {
                          $type_id = $row["type_id"];
                          $type_name = $row["type_name"];
                          $type_icon_h = $row["type_icon_h"];
                          ?>
                          <!-- Post type item -->
                            <div class="flex-fill">
                              <input type="radio" value="<?php  echo($type_id)?>" class="btn-check" name="type_p" id="option_<?php echo($type_name)?>" <?php if($type_id == 1) echo "checked" ?>>
                              <label class="btn btn-outline-light w-100" for="option_<?php echo($type_name)?>">
                                <?php echo($type_icon_h) ?>
                                <span class="d-block"> <?php echo($type_name) ?> </span>
                              </label>
                            </div>
                        <!-- Post type item -->
                          <?php }?>
                      </div>
                    </div>
                  </div>
                  <!-- Post type END -->

                  <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                      <label class="form-label">Short description </label>
                      <textarea name="description-s" class="form-control" rows="3"
                        placeholder="Add description"></textarea>
                    </div>
                  </div>

                  <!-- Main toolbar -->
                  <div class="col-md-12">
                    <!-- Subject -->
                    <div class="mb-3">
                      <label class="form-label">Post body</label>
                      <!-- Editor toolbar -->
                      <!-- Main toolbar -->
                      <div class="mb-3 h-300">
                        <textarea name="description-b" class="form-control h-300" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <!-- Image -->
                      <div class="position-relative">
                        <h6 class="my-2">Upload post image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                        <label class="w-100" style="cursor:pointer;">
                          <span>
                            <input class="form-control stretched-link" type="file" name="my-image" id="image"
                              accept="image/gif, image/jpeg, image/png">
                          </span>
                        </label>
                      </div>
                      <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px
                        * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <!-- Tags -->
                    <div class="mb-3">
                      <label class="form-label">Tags</label>
                      <textarea name="tags" class="form-control" rows="1" placeholder="business, sports ..."></textarea>
                      <small>Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g.
                        javascript, react, marketing.</small>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <!-- Message -->
                    <div class="mb-3">
                      <label class="form-label">Category</label>
                      <select name="category" class="form-select" aria-label="Default select example">
                        <?php
                        while ($cat = mysqli_fetch_assoc($result_categories)) {
                          echo "<option value=$cat[categorie_id] >$cat[name_categorie]</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check mb-3">
                      <input name="featured" class="form-check-input" type="checkbox" value="checkit" id="postCheck">
                      <label class="form-check-label" for="postCheck">
                        Make this post featured?
                      </label>
                    </div>
                  </div>
                  <!-- Create post button -->
                  <div class="col-md-12 text-start">
                    <button name="submit-b" class="btn btn-primary w-100" type="submit">Create post</button>
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