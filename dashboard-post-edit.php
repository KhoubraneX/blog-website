<?php include_once "includes/footer2.php"; ?>
<?php
require_once "includes/database.php";
include_once "includes/querys/_Delete_post.php";
if (isset($_GET["post"])) {
  $post_id = htmlspecialchars($_GET["post"]);
  $query = "SELECT * FROM `posts` 
      INNER JOIN categorie using(categorie_id) 
      INNER JOIN users ON post_author_id = id
      INNER JOIN post_status 
      ON posts.post_status_id = post_status.status_id
    WHERE post_id = '$post_id'
  ORDER BY post_date DESC";
  $res = mysqli_query($connection, $query);

  if (isset($res) && mysqli_num_rows($res) > 0) {
    $post = mysqli_fetch_assoc($res);
    $post_image = $post["post_img"];
    $post_name = $post["post_name"];
    $post_short_desc = $post["short_desc"];
    $post_body = $post["post_body"];
    $post_categorie_id = $post["categorie_id"];
    $post_tags = $post["post_tags"];
    $post_type_id = $post["post_type_id"];
    $post_featured = $post["post_featured"];
  } else {
    header("Location: dashboard-post-list.php");
  }
} else {
  header("Location: dashboard-post-list.php");
}

include_once "includes/querys/_Update_post.php";

?>


<!-- **************** MAIN CONTENT START **************** -->
<main>

  <!-- =======================
Post edit START -->
  <section class="py-4">
    <div class="container">
      <div class="row pb-4">
        <div class="col-12">
          <!-- Title -->
          <h1 class="mb-0 h2">Edit post</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Chart START -->
          <div class="card border h-100">
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
                        value="<?php echo $post_name; ?>">
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
                      require_once "includes/querys/_All_type_post.php";
                      while ($type = mysqli_fetch_assoc($result_post_type)) {
                        $type_id = $type["type_id"];
                        $type_name = $type["type_name"];
                        $type_icon = $type["type_icon_h"];
                      ?>
                        <div class="flex-fill">
                          <input type="radio" value="<?php echo $type_id; ?>" class="btn-check" name="type_p" id="option_<?php echo $type_name; ?>" <?php $type_id == $post_type_id && print_r("checked") ?>>
                          <label class="btn btn-outline-light w-100" for="option_<?php echo $type_name; ?>">
                            <?php echo $type_icon; ?>
                            <span class="d-block">
                              <?php echo $type_name; ?>
                            </span>
                          </label>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <!-- Post type END -->

                  <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                      <label class="form-label">Short description </label>
                      <textarea class="form-control" name="description-s" rows="3"><?php echo $post_short_desc ?></textarea>
                    </div>
                  </div>

                  <!-- Main toolbar -->
                  <div class="col-md-12">
                    <!-- Subject -->
                    <div class="mb-3">
                      <label class="form-label">Post body</label>
                      <!-- Editor toolbar -->

                      <!-- Main toolbar -->
                      <textarea name="description-b" class="form-control h-300" rows="3"
                        spellcheck="false"><?php echo $post_body ?></textarea>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="mb-3">
                        <!-- Image -->
                        <div class="row align-items-center mb-2">
                          <div class="col-4 col-md-2">
                            <div class="position-relative">
                              <img class="rounded"
                                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post_image) ?>" alt="">
                              <div class="position-absolute top-0 end-0 mt-n2 me-n2">
                                <a class="btn btn-icon btn-xs btn-danger" href="#"><i class="bi bi-x"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-8 col-md-10 position-relative">
                            <h6 class="my-2">Edit blog image </h6>
                            <label class="w-100" style="cursor:pointer;">
                              <span>
                                <input class="form-control stretched-link" type="file" name="my-image" id="image"
                                  accept="image/gif, image/jpeg, image/png">
                              </span>
                            </label>
                          </div>
                        </div>
                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are
                          600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <!-- Tags -->
                      <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <textarea name="tags" class="form-control" rows="1"><?php echo $post_tags ?></textarea>
                        <small>Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g.
                          javascript, react, marketing.</small>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <!-- Message -->
                      <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category" aria-label="Default select example">
                          <?php
                    include_once "includes/querys/_All_categories.php";
                    while ($cat = mysqli_fetch_assoc($result_categories)) {
                      $id_c = $cat["categorie_id"];
                      $name_c = $cat["name_categorie"];
                    ?>
                          <option value="<?php echo $id_c ?>" <?php $id_c==$post_categorie_id && print_r("selected") ?>>
                            <?php echo $name_c; ?>
                          </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <!-- Checkbox -->
                    <div class="col-12">
                      <div class="form-check mb-3">
                        <input class="form-check-input" name="featured" type="checkbox" value="checkit" id="postCheck" <?php if ($post_featured == 1) echo("checked") ?>>
                        <label class="form-check-label" for="postCheck">
                          Make this post featured?
                        </label>
                      </div>
                    </div>
                    <!-- Crate post button -->
                    <div class="col-md-12 text-start">
                      <button class="btn btn-primary" name="submit_U" type="submit">Save change</button>
                      <button class="btn btn-danger" name="Delete" type="submit">
                        <input hidden type="text" name="post-d-v" value="<?php echo $post_id; ?>">Delete post</button>
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
Post edit END -->

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

<!-- Mirrored from blogzine.webestica.com/dashboard-post-edit.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 23:42:09 GMT -->

</html>