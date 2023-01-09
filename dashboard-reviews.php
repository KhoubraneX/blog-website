<?php
include_once "includes/footer2.php";
require_once "includes/database.php";
include_once "includes/querys/_comments.php"; ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

  <!-- =======================
Reviews START -->
  <section class="py-4">
    <div class="container">
      <div class="row pb-4">
        <div class="col-12">
          <!-- Title -->
          <div class="d-sm-flex justify-content-sm-between align-items-center">
            <h1 class="mb-2 mb-sm-0 h2">Reviews <span class="badge bg-primary bg-opacity-10 text-primary">
                <?php $res = getComments(false, 0);
                echo mysqli_num_rows($res); ?>
              </span></h1>
          </div>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-12">
          <!-- Blog list table START -->
          <div class="card border bg-transparent rounded-3">
            <!-- Card body START -->
            <div class="card-body py-3">
              <!-- Blog list table START -->
              <div class="table-responsive border-0">
                <table class="table p-4 mb-0 table-shrink">
                  <!-- Table head -->
                  <thead class="table-dark">
                    <tr>
                      <th scope="col" class="border-0 rounded-start">Blog Name</th>
                      <th scope="col" class="border-0">Reviewer</th>
                      <th scope="col" class="border-0">Rating</th>
                      <th scope="col" class="border-0">Hide/Show</th>
                      <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                  </thead>
                  <!-- Table body START -->
                  <tbody class="border-top-0">
                    <?php while ($comment = mysqli_fetch_assoc($res)) {
                      $Blogid = $comment["post_id"];
                      $comment_id = $comment["comment_id"];
                      $BlogName = $comment["post_name"];
                      $Reviewer = $comment["firstname"];
                      $Rating = $comment["comment_content"];
                      $visibility = $comment["visibility"];
                      ?>
                      <tr>
                        <!-- Table data -->
                        <td>
                          <h6 class="course-title mb-0"><a href="#"><?php echo $BlogName ?></a></h6>
                        </td>
                        <!-- Table data -->
                        <td>
                          <?php echo $Reviewer ?>
                        </td>
                        <!-- Table data -->
                        <td>
                          <p class="course-title small viewReview">
                            <?php echo $Rating ?><a href="post-single.php?post=<?php echo $Blogid ?>"> Read more</a>
                          </p>
                        </td>
                        <!-- Table data -->
                        <td>
                          <div class="form-check form-switch form-check-md">
                            <input <?php if ($visibility == 'true') echo "checked" ?>
                              onclick="showHideComment(<?php echo $comment_id; ?> , event)"
                              value="<?php echo $visibility; ?>" class="form-check-input" type="checkbox"
                              id="checkReview5">
                          </div>
                        </td>
                        <!-- Table data -->
                        <td>
                          <div class="dropdown">
                            <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview5"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-three-dots fa-fw"></i>
                            </a>
                            <!-- dropdown button -->
                            <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                              aria-labelledby="dropdownReview5">
                              <li><a class="dropdown-item" href="comment.php?comment=<?php echo $comment_id ?>"><i
                                    class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                              </li>
                              <li>
                                <form method="post">
                                  <input type="hidden" name="id_comment" value="<?php echo $comment_id ?>">
                                  <button name="delete" class="dropdown-item"><i
                                      class="bi bi-trash fa-fw me-2"></i>Delete</button>
                              </li>
                              </form>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                  <!-- Table body END -->
                </table>
              </div>
              <!-- Blog list table END -->

              <!-- Pagination START -->
              <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                <!-- Content -->
                <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                  <ul class="pagination pagination-sm pagination-bordered mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- Pagination END -->
            </div>
          </div>
          <!-- Blog list table END -->
        </div>
        <div class="col-lg-6">
          <!-- Top rated post START -->
          <div class="card border bg-transparent rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom py-3">
              <h5 class="mb-2 mb-sm-0">Top rated post</h5>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body py-3">

              <!-- Blog list table START -->
              <div class="table-responsive border-0">
                <table class="table align-middle p-4 mb-0 table-shrink">
                  <!-- Table head -->
                  <thead class="table-dark">
                    <tr>
                      <th scope="col" class="border-0 rounded-start">Blog Name</th>
                      <th scope="col" class="border-0">Rating</th>
                      <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                  </thead>

                  <!-- Table body START -->
                  <tbody class="border-top-0">

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <h6 class="course-title mb-0"><a href="#">Five intermediate guide to business</a></h6>
                      </td>
                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                        </ul>
                      </td>
                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview6"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview6">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <h6 class="course-title mb-0"><a href="#">15 reasons to choose startup</a></h6>
                      </td>
                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                        </ul>
                      </td>
                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview7"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview7">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <h6 class="course-title mb-0"><a href="#">The pros and cons of business agency</a></h6>
                      </td>
                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                        </ul>
                      </td>
                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview8"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview8">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <h6 class="course-title mb-0"><a href="#">5 reasons why you shouldn't startup</a></h6>
                      </td>
                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-muted"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-muted"></i></li>
                        </ul>
                      </td>
                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview9"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview9">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <h6 class="course-title mb-0"><a href="#">Skills that you can learn from business</a></h6>
                      </td>
                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-muted"></i></li>
                        </ul>
                      </td>
                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview10"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview10">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                  <!-- Table body END -->
                </table>
              </div>
              <!-- Top rated post END -->

              <!-- Pagination START -->
              <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                <!-- Content -->
                <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                  <ul class="pagination pagination-sm pagination-bordered mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- Pagination END -->
            </div>
          </div>
          <!-- Blog list table END -->
        </div>
        <div class="col-lg-6">
          <!-- Blog list table START -->
          <div class="card border bg-transparent rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom py-3">
              <h5 class="mb-2 mb-sm-0">Top rated author </h5>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body py-3">
              <div class="table-responsive">
                <table class="table p-4 mb-0 align-middle table-shrink">
                  <!-- Table head -->
                  <thead class="table-dark">
                    <tr>
                      <th scope="col" class="border-0 rounded-start">Author Name</th>
                      <th scope="col" class="border-0">Rating</th>
                      <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                  </thead>

                  <!-- Table body START -->
                  <tbody class="border-top-0">

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                          </div>
                          <div>
                            <h6 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Lori Ferguson</a>
                            </h6>
                          </div>
                        </div>
                      </td>

                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                        </ul>
                      </td>

                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview11"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview11">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                          </div>
                          <div>
                            <h6 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Judy Nguyen</a></h6>
                          </div>
                        </div>
                      </td>

                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                        </ul>
                      </td>

                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview12"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview12">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                          </div>
                          <div>
                            <h6 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Billy Vasquez</a>
                            </h6>
                          </div>
                        </div>
                      </td>

                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                        </ul>
                      </td>

                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview13"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview13">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                          </div>
                          <div>
                            <h6 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Dennis Barrett</a>
                            </h6>
                          </div>
                        </div>
                      </td>

                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-muted"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-muted"></i></li>
                        </ul>
                      </td>

                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview14"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview14">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <!-- Table item -->
                    <tr>
                      <!-- Table data -->
                      <td>
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                          </div>
                          <div>
                            <h6 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Amanda Reed</a></h6>
                          </div>
                        </div>
                      </td>

                      <!-- Table data -->
                      <td>
                        <ul class="list-inline d-flex mb-0">
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item me-1 small"><i class="fas fa-star text-muted"></i></li>
                        </ul>
                      </td>

                      <!-- Table data -->
                      <td>
                        <div class="dropdown">
                          <a href="#" class="btn btn-light btn-round mb-0" role="button" id="dropdownReview115"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots fa-fw"></i>
                          </a>
                          <!-- dropdown button -->
                          <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                            aria-labelledby="dropdownReview115">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                  <!-- Table body END -->
                </table>
              </div>

              <!-- Pagination START -->
              <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                <!-- Content -->
                <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                  <ul class="pagination pagination-sm pagination-bordered mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- Pagination END -->
            </div>
          </div>
          <!-- Blog list table END -->
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

<!-- Popup modal for reviwe START -->
<div class="modal fade" id="viewReview" tabindex="-1" aria-labelledby="viewReviewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="viewReviewLabel">Review</h5>
        <button type="button" class="btn btn-sm btn-light text-dark mb-0" data-bs-dismiss="modal" aria-label="Close"><i
            class="bi bi-x fs-5"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="d-md-flex">
          <!-- Avatar -->
          <div class="avatar avatar-md me-4 flex-shrink-0">
            <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
          </div>
          <!-- Text -->
          <div>
            <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
              <h5 class="me-3 mb-0">by Lori Stevens</h5>
              <!-- Review star -->
            </div>
            <!-- Info -->
            <p class="small mb-2">2 days ago</p>
            <p class="mb-2 comment">Our side fail find like now Discovered travelling for insensible partiality
              unpleasing
              impossible she Sudden up my excuse to suffer ladies though or Bachelor possible marianne directly confined
              relation as on he. </p>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Popup modal for reviwe END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<script>
  function showHideComment(id, event) {
    const FetchData = async () => {
      let visibility = event.target.value
      let request = await fetch("http://localhost:8080/php/project/weblog.gatacamp.com/includes/querys/_showHideCom.php", {
        method: "POST",
        Headers: {
          Accept: 'application.json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          id_comment: id,
          visibility: visibility
        })
      });

      let response = await request.json()
      
      if (response["status"] == "success") {
        event.target.value = visibility == "true" ? "false" : "true"
      }
    }
    FetchData()
  }
</script>

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

</html>