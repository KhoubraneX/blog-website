<?php include_once "includes/footer2.php"; ?>
<?php
require_once "includes/database.php";
include_once "includes/querys/_Delete_categories.php";
include_once "includes/querys/_All_categories.php";
include_once "includes/querys/categories_num.php";
include_once "includes/functions/avatar.php";

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
					<div class="d-sm-flex justify-content-sm-between align-items-center">
						<h1 class="mb-2 mb-sm-0 h2">Categories <span
								class="badge bg-primary bg-opacity-10 text-primary">
								<?php echo mysqli_num_rows($result_categories); ?>
							</span></h1>
						<a href="dashboard-categories-create.php" class="btn btn-sm btn-primary mb-0"><i
								class="fas fa-plus me-2"></i>Add new category</a>
					</div>
				</div>
			</div>
			<div class="row g-4">
				<!-- start loop -->
				<?php
				while ($cat = mysqli_fetch_assoc($result_categories)) {
					$id_c = $cat["categorie_id"];
					$icon_c = $cat["icon"];
					$name_c = $cat["name_categorie"];
					$description_c = $cat["description_categorie"];
					?>
					<div class='col-md-6 col-xl-4'>
						<!-- Category item START -->
						<div class='card border h-100'>
							<!-- Card header -->
							<div class='card-header border-bottom p-3'>
								<div class='d-flex align-items-center'>
									<div class='icon-lg shadow bg-body rounded-circle'>
										<?php echo $icon_c; ?>
									</div>
									<h3 class='mb-0 ms-3'>
										<?php echo $name_c; ?>
									</h3>
									<div class='d-flex ms-auto gap-2'>
										<form method="post">
											<input hidden type="text" name="categorie-d-v" value="<?php echo $id_c ?>">
											<button class='btn btn-light btn-round mb-0' data-bs-toggle='tooltip'
												data-bs-placement='top' title='' data-bs-original-title='Delete'
												aria-label='Delete' name="Delete"><i class='bi bi-trash'></i></button>
										</form>
										<a href='dashboard-categories-edit.php?category=<?php echo $id_c; ?>'
											class='btn btn-light btn-round mb-0' data-bs-toggle='tooltip'
											data-bs-placement='top' title='' data-bs-original-title='Edit'
											aria-label='Edit'><i class='bi bi-pencil-square'></i></a>
									</div>
								</div>
							</div>
							<!-- Card body START -->
							<div class='card-body p-3'>
								<p>
									<?php echo $description_c; ?>
								</p>
								<!-- Followers and Post -->
								<div class='d-flex justify-content-between'>
									<!-- Total post -->
									<div>
										<h5 class='mb-0'><?php echo NumTypeCat($id_c); ?></h5>
										<h6 class='mb-0 fw-light'>Total posts</h6>
									</div>

									<!-- Avatar group -->
									<ul class='avatar-group mb-0'>
										<?php if (!empty(NumTypeCatAVtar($id_c))) { ?>
											<?php foreach (NumTypeCatAVtar($id_c) as $avatar) { ?>
												<li class='avatar avatar-xs'>
													<?php if ($avatar["avatar"]) { ?>
														<img class='avatar-img rounded-circle'
															src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($avatar["avatar"]) ?>"
															alt='avatar'>
														<?php } else { ?>
														<div class="avatar-img rounded-circle bg-warning">
															<span
																class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">
																<?php echo avatarGenerate($avatar["firstname"]) ?>
															</span>
														</div>
														<?php } ?>
												</li>
												<?php } ?>
											<?php } ?>
									</ul>
								</div>

							</div>
							<!-- Card body END -->

							<!-- Card footer -->
							<div class='card-footer border-top text-center p-3'>
								<a href='#' class='btn btn-primary-soft w-100 mb-0'>View posts</a>
							</div>
						</div>
						<!-- Category item END -->
					</div>
					<!-- end of loop -->
					<?php } ?>
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

<!-- Mirrored from blogzine.webestica.com/dashboard-post-categories.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 23:42:08 GMT -->

</html>