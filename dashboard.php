<?php
include_once "includes/footer2.php";
require_once "includes/database.php";
require_once "includes/functions/formatDate.php";
require_once "includes/functions/avatar.php";
include_once "includes/querys/_Delete_post.php";
include_once "includes/querys/_All_posts.php";
include_once "includes/querys/_comments.php";
?>
<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- =======================
Main contain START -->
	<section class="py-4">
		<div class="container">
			<div class="row g-4">

				<div class="col-12">
					<!-- Counter START -->
					<div class="row g-4">

						<!-- Counter item -->
						<div class="col-sm-6 col-lg-3">
							<div class="card card-body border p-3">
								<div class="d-flex align-items-center">
									<!-- Icon -->
									<div class="icon-xl fs-1 bg-success bg-opacity-10 rounded-3 text-success">
										<i class="bi bi-people-fill"></i>
									</div>
									<!-- Content -->
									<div class="ms-3">
										<h3>134K</h3>
										<h6 class="mb-0">Pageviews</h6>
									</div>
								</div>
							</div>
						</div>

						<!-- Counter item -->
						<div class="col-sm-6 col-lg-3">
							<div class="card card-body border p-3">
								<div class="d-flex align-items-center">
									<!-- Icon -->
									<div class="icon-xl fs-1 bg-primary bg-opacity-10 rounded-3 text-primary">
										<i class="bi bi-file-earmark-text-fill"></i>
									</div>
									<!-- Content -->
									<div class="ms-3">
										<h3>
											<?php echo (mysqli_num_rows($result_posts)) ?>
										</h3>
										<h6 class="mb-0">Posts</h6>
									</div>
								</div>
							</div>
						</div>

						<!-- Counter item -->
						<div class="col-sm-6 col-lg-3">
							<div class="card card-body border p-3">
								<div class="d-flex align-items-center">
									<!-- Icon -->
									<div class="icon-xl fs-1 bg-danger bg-opacity-10 rounded-3 text-danger">
										<i class="bi bi-suit-heart-fill"></i>
									</div>
									<!-- Content -->
									<div class="ms-3">
										<h3>2150</h3>
										<h6 class="mb-0">Likes</h6>
									</div>
								</div>
							</div>
						</div>

						<!-- Counter item -->
						<div class="col-sm-6 col-lg-3">
							<div class="card card-body border p-3">
								<div class="d-flex align-items-center">
									<!-- Icon -->
									<div class="icon-xl fs-1 bg-info bg-opacity-10 rounded-3 text-info">
										<i class="bi bi-bar-chart-line-fill"></i>
									</div>
									<!-- Content -->
									<div class="ms-3">
										<h3>84K</h3>
										<h6 class="mb-0">Visitors</h6>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Counter END -->
				</div>

				<div class="col-md-6 col-xxl-4">
					<!-- Recent comment START -->
					<div class="card border h-100">
						<!-- Card header -->
						<div class="card-header border-bottom p-3">
							<h5 class="card-header-title mb-0">Recent comments</h5>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">

							<div class="row">
								<!-- Comment item -->
								<?php
								$res = getComments(true , 5);
								$limit = mysqli_num_rows($res);
								$countPosts = 0;
								while ($comment = mysqli_fetch_assoc($res)) {
									$countPosts += 1;
									$comment_post_id = $comment["post_id"];
									$comment_content = $comment["comment_content"];
									$comment_avatar_auth = $comment["avatar"];
									$comment_name_auth = $comment["firstname"]
										?>
									<!-- Comment item -->
									<div class="col-12">
										<div class="d-flex align-items-center position-relative">
											<!-- Avatar -->
											<div class="avatar avatar-lg flex-shrink-0">
												<?php if ($comment_avatar_auth) { ?>
													<img class="avatar-img rounded-2"
														src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($comment_avatar_auth) ?>"
														alt="avatar">
												<?php } else { ?>
													<div class="icon-lg bg-warning bg-opacity-15 text-warning rounded-2 flex-shrink-0">
													<span class="text-dark translate-middle fw-bold small">
															<?php echo (avatarGenerate($comment_name_auth)) ?>
														</span>
													</div>
												<?php } ?>
											</div>
											<!-- Info -->
											<div class="ms-3">
												<p class="mb-1"> <a class="h6 fw-normal stretched-link"
														href="post-single.php?post=<?php echo ($comment_post_id) ?>">
														<?php echo ($comment_content) ?>
													</a></p>
												<div class="d-flex justify-content-between">
													<p class="small mb-0">by <?php echo ($comment_name_auth) ?></p>
												</div>
											</div>
										</div>
									</div>
									<?php if ($limit != $countPosts) { ?>
										<hr class="my-3">
									<?php }
									; ?>
								<?php } ?>
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Recent comment END -->
				</div>


				<div class="col-md-6 col-xxl-4">
					<!-- Notice board START -->
					<div class="card border h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center  p-3">
							<h5 class="card-header-title mb-0">Notice board</h5>
							<!-- Dropdown button -->
							<div class="dropdown text-end">
								<a href="#" class="btn border-0 p-0 mb-0" role="button" id="dropdownShare3"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots fa-fw"></i>
								</a>
								<!-- dropdown button -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
									aria-labelledby="dropdownShare3">
									<li><a class="dropdown-item" href="#"><i
												class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
									<li><a class="dropdown-item" href="#"><i
												class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
								</ul>
							</div>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">
							<div class="custom-scrollbar h-350">
								<div class="row">
									<!-- Notice board item -->
									<div class="col-12">
										<div class="d-flex justify-content-between position-relative">
											<div class="d-sm-flex">
												<div
													class="icon-lg bg-warning bg-opacity-15 text-warning rounded-2 flex-shrink-0">
													<i class="fas fa-user-tie fs-5"></i>
												</div>
												<!-- Info -->
												<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
													<h6 class="mb-0"><a href="#" class="stretched-link">Join New
															Author</a></h6>
													<p class="mb-0">Amongst moments do in arrived Fat weddings believed
														prospect</p>
													<span class="small">5 min ago</span>
												</div>
											</div>
										</div>
									</div>

									<!-- Divider -->
									<hr class="my-3">

									<!-- Notice board item -->
									<div class="col-12">
										<div class="d-flex justify-content-between position-relative">
											<div class="d-sm-flex">
												<div
													class="icon-lg bg-success bg-opacity-10 text-success rounded-2 flex-shrink-0">
													<i class="bi bi-chat-left-quote-fill fs-5"></i>
												</div>
												<!-- Info -->
												<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
													<h6 class="mb-0"><a href="#" class="stretched-link">Add 5 New
															Blogs</a></h6>
													<p class="mb-0">Arrived Fat weddings believed prospect</p>
													<span class="small">4 hour ago</span>
												</div>
											</div>
										</div>
									</div>

									<!-- Divider -->
									<hr class="my-3">

									<!-- Notice board item -->
									<div class="col-12">
										<div class="d-flex justify-content-between position-relative">
											<div class="d-sm-flex">
												<div
													class="icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0">
													<i class="bi bi-bell-fill fs-5"></i>
												</div>
												<!-- Info -->
												<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
													<h6 class="mb-0"><a href="#" class="stretched-link">5 New
															Subscribers</a></h6>
													<p class="mb-0">Weddings believed prospect Arrived</p>
													<span class="small">4 hour ago</span>
												</div>
											</div>
										</div>
									</div>

									<!-- Divider -->
									<hr class="my-3">

									<!-- Notice board item -->
									<div class="col-12">
										<div class="d-flex justify-content-between position-relative">
											<div class="d-sm-flex">
												<div
													class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2 flex-shrink-0">
													<i class="fas fa-globe fs-5"></i>
												</div>
												<!-- Info -->
												<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
													<h6 class="mb-0"><a href="#" class="stretched-link">Update New
															Feature</a></h6>
													<span class="small">3 days ago</span>
												</div>
											</div>
										</div>
									</div>
								</div><!-- Row END -->
							</div>
						</div>
						<!-- Card body END -->

						<!-- Card footer -->
						<div class="card-footer border-top text-center p-3">
							<a href="#">View all Notice List</a>
						</div>

					</div>
					<!-- Notice board END -->
				</div>


				<div class="col-12">
					<!-- Blog list table START -->
					<div class="card border bg-transparent rounded-3">
						<!-- Card header START -->
						<div class="card-header bg-transparent border-bottom p-3">
							<div class="d-sm-flex justify-content-between align-items-center">
								<h5 class="mb-2 mb-sm-0">Blog list <span
										class="badge bg-primary bg-opacity-10 text-primary">
										<?php echo mysqli_num_rows($result_posts); ?>
									</span></h5>
								<a href="dashboard-post-create.php" class="btn btn-sm btn-primary mb-0">Add New</a>
							</div>
						</div>
						<!-- Card header END -->

						<!-- Card body START -->
						<div class="card-body">

							<!-- Search and select START -->
							<div class="row g-3 align-items-center justify-content-between mb-3">
								<!-- Search -->
								<div class="col-md-8">
									<form class="rounded position-relative">
										<input class="form-control pe-5 bg-transparent" type="search"
											placeholder="Search" aria-label="Search">
										<button
											class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
											type="submit"><i class="fas fa-search fs-6 "></i></button>
									</form>
								</div>

								<!-- Select option -->
								<div class="col-md-3">
									<!-- Short by filter -->
									<form>
										<select class="form-select z-index-9 bg-transparent"
											aria-label=".form-select-sm">
											<option value="">Sort by</option>
											<option>Free</option>
											<option>Newest</option>
											<option>Oldest</option>
										</select>
									</form>
								</div>
							</div>
							<!-- Search and select END -->

							<!-- Blog list table START -->
							<div class="table-responsive border-0">
								<table class="table align-middle p-4 mb-0 table-hover table-shrink">
									<!-- Table head -->
									<thead class="table-dark">
										<tr>
											<th scope="col" class="border-0 rounded-start">Blog Name</th>
											<th scope="col" class="border-0">Author Name</th>
											<th scope="col" class="border-0">Published Date</th>
											<th scope="col" class="border-0">Categories</th>
											<th scope="col" class="border-0">Status</th>
											<th scope="col" class="border-0 rounded-end">Action</th>
										</tr>
									</thead>

									<!-- Table body START -->
									<tbody class="border-top-0">
										<?php include_once("includes/views/posts.php") ?>
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
					<div class="text-center text-lg-start">©2022 <a href="https://www.webestica.com/"
							class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
					</div>
				</div>
				<div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
					<!-- Language switcher -->
					<div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
						<a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher"
							data-bs-toggle="dropdown" aria-expanded="false">
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
<script src="assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 23:41:38 GMT -->

</html>