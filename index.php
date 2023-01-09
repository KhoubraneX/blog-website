<?php
require_once "includes/database.php";
require_once "includes/header.php";
include_once "includes/functions/formatDate.php";
require_once "includes/querys/_All_posts_n.php";
require_once "includes/functions/avatar.php";
?>
<main>
	<section class="pt-4 pb-0 card-grid">
		<div class="container">
			<div class="row g-4">
				<div class="col-lg-6">
					<?php
                    require_once("includes/querys/_random_post_faatured.php");
                    if ($post) {
	                    $post_id = $post["post_id"];
	                    $post_image = $post["post_img"];
	                    $author_avatar = $post["avatar"];
	                    $post_name = $post["post_name"];
	                    $post_short_desc = $post["short_desc"];
	                    $post_date = $post["post_date"];
	                    $post_author_name = $post["firstname"];
	                    // date format
                    	$new_data_format = formatDate($post_date);
	                    $avatar_name = avatarGenerate($post_author_name);
                    ?>
					<div class="card card-overlay-bottom card-grid-lg card-bg-scale"
						style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post_image) ?>); background-position: center left; background-size: cover;">
						<span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
						<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
							<div class="w-100 mt-auto">
								<h2 class="text-white h1"><a href="post-single.php?post=<?php echo ($post_id); ?>"
										class="btn-link stretched-link text-reset">
										<?php echo ($post_name) ?>
									</a></h2>
								<p class="text-white">
									<?php echo ($post_short_desc); ?>
								</p>
								<ul
									class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center text-white position-relative">
		
											<div class="avatar avatar-xs">
														<?php if ($author_avatar) { ?>
														<img class="avatar-img rounded-circle"
															src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($author_avatar); ?>"
															alt="avatar">
														<?php } else { ?>
														<div class="avatar-img rounded-circle bg-warning">
															<span
																class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">
																<?php echo $avatar_name ?>
															</span>
														</div>
														<?php } ?>
													</div>
												<span class="ms-3">by <a href="#"
														class="stretched-link text-reset btn-link">
														<?php echo ($post_author_name); ?>
													</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">
										<?php echo ($new_data_format) ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

				<div class="col-lg-6">
					<div class="row g-4">
						<?php
                        $fetch = mysqli_fetch_all($result_posts_normal, MYSQLI_BOTH);
                        for ($i = 0; $i < 3; $i++) {
	                        if (isset($fetch[$i])) {
		                        if ($i < 1) { ?>
						<div class="col-12">
							<div class="card card-overlay-bottom card-grid-sm card-bg-scale"
								style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($fetch[$i]["post_img"]) ?>); background-position: center left; background-size: cover;">
								<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-warning mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>
											<?php echo ($fetch[$i]["name_categorie"]) ?>
										</a>
										<h4 class="text-white"><a
												href="post-single.php?post=<?php echo $fetch[$i]["post_id"]; ?>"
												class="btn-link stretched-link text-reset">
												<?php echo ($fetch[$i]["post_name"]) ?>
											</a></h4>
										<ul
											class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
											<li class="nav-item position-relative">
												<div class="nav-link">by <a href="#"
														class="stretched-link text-reset btn-link">
														<?php echo ($fetch[$i]["firstname"]) ?>
													</a>
												</div>
											</li>
											<li class="nav-item">
												<?php echo (formatDate($fetch[$i]["post_date"])) ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<?php } else { ?>
						<div class="col-md-6">
							<div class="card card-overlay-bottom card-grid-sm card-bg-scale"
								style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($fetch[$i]["post_img"]) ?>); background-position: center left; background-size: cover;">
								<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
									<div class="w-100 mt-auto">
										<a href="#" class="badge bg-success mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>
											<?php echo ($fetch[$i]["name_categorie"]) ?>
										</a>
										<h4 class="text-white"><a
												href="post-single.php?post=<?php echo $fetch[$i]["post_id"]; ?>"
												class="btn-link stretched-link text-reset">
												<?php echo ($fetch[$i]["post_name"]) ?>
											</a></h4>
										<ul
											class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
											<li class="nav-item position-relative">
												<div class="nav-link">by <a href="#"
														class="stretched-link text-reset btn-link">
														<?php echo ($fetch[$i]["firstname"]) ?>
													</a>
												</div>
											</li>
											<li class="nav-item">
												<?php echo (formatDate($fetch[$i]["post_date"])) ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php }}}?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="position-relative">
		<div class="container" data-sticky-container>
			<div class="row">

				<div class="col-lg-9">

					<div class="mb-4">
						<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
						<p>Latest breaking news, pictures, videos, and special reports</p>
					</div>
					<div class="row gy-4">
						<!-- posts -->
						<?php
                        require_once "includes/querys/_All_posts.php";
                        while ($post = mysqli_fetch_assoc($result_posts)) {
	                        $post_id = $post["post_id"];
	                        $post_image = $post["post_img"];
	                        $author_avatar = $post["avatar"];
	                        $post_name = $post["post_name"];
	                        $post_short_desc = $post["short_desc"];
	                        $post_body = $post["post_body"];
	                        $post_date = $post["post_date"];
	                        $post_author_name = $post["firstname"];
	                        $post_categorie = $post["name_categorie"];
	                        // date format
                        	$new_data_format = formatDate($post_date);
	                        $avatar_name = avatarGenerate($post_author_name);

                        ?>

						<div class="col-sm-6">
							<div class="card">

								<div class="position-relative">
									<img class="card-img"
										src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post_image) ?>"
										alt="Card image">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">

										<div class="w-100 mt-auto">

											<a href="#" class="badge bg-info mb-2"><i
													class="fas fa-circle me-2 small fw-bold"></i>
												<?php echo $post_categorie; ?>
											</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h4 class="card-title"><a href="post-single.php?post=<?php echo $post_id; ?>"
											class="btn-link text-reset fw-bold">
											<?php echo $post_name; ?>
										</a></h4>
									<p class="card-text">
										<?php echo $post_short_desc; ?>
									</p>

									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<?php if ($author_avatar) { ?>
														<img class="avatar-img rounded-circle"
															src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($author_avatar); ?>"
															alt="avatar">
														<?php } else { ?>
														<div class="avatar-img rounded-circle bg-warning">
															<span
																class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">
																<?php echo $avatar_name ?>
															</span>
														</div>
														<?php } ?>
													</div>
													<span class="ms-3">by <a href="#"
															class="stretched-link text-reset btn-link">
															<?php echo $post_author_name; ?>
														</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">
											<?php echo $new_data_format; ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end posts -->
						<?php } ?>

						<div class="col-12 text-center mt-5">
							<button type="button" class="btn btn-primary-soft">Load more post <i
									class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
						</div>

					</div>
				</div>


				<div class="col-lg-3 mt-5 mt-lg-0">
					<div data-sticky data-margin-top="80" data-sticky-for="767">




						<div>
							<h4 class="mb-2">Trending topics</h4>

							<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 "
								style="background-image:url(assets/images/blog/4by3/01.jpg); background-position: center left; background-size: cover;">
								<div class="p-3">
									<a href="categories.php?categorie=8" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
								</div>
							</div>

							<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
								style="background-image:url(assets/images/blog/4by3/02.jpg); background-position: center left; background-size: cover;">
								<div class="bg-dark-overlay-4 p-3">
									<a href="categories.php?categorie=9" class="stretched-link btn-link fw-bold text-white h5">Business</a>
								</div>
							</div>

							<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
								style="background-image:url(assets/images/blog/4by3/03.jpg); background-position: center left; background-size: cover;">
								<div class="bg-dark-overlay-4 p-3">
									<a href="categories.php?categorie=11" class="stretched-link btn-link fw-bold text-white h5">Marketing</a>
								</div>
							</div>

							<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
								style="background-image:url(assets/images/blog/4by3/04.jpg); background-position: center left; background-size: cover;">
								<div class="bg-dark-overlay-4 p-3">
									<a href="categories.php?categorie=12" class="stretched-link btn-link fw-bold text-white h5">Photography</a>
								</div>
							</div>

							<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
								style="background-image:url(assets/images/blog/4by3/05.jpg); background-position: center left; background-size: cover;">
								<div class="bg-dark-overlay-4 p-3">
									<a href="categories.php?categorie=20" class="stretched-link btn-link fw-bold text-white h5">Lifestyle</a>
								</div>
							</div>

							<div class="text-center mt-3">
								<a href="categories.php?categorie=20" class="fw-bold text-body text-primary-hover"><u>View all
										categories</u></a>
							</div>
						</div>

						<div class="row">

							<div class="col-12 col-sm-6 col-lg-12">
								<h4 class="mt-4 mb-3">Recent post</h4>
								<?php 
                                for ($i = 0; $i < 3; $i++) {
	                                if (isset($fetch[$i])) {
		                               ?>
								
									<div class="card mb-3">
										<div class="row g-3">
											<div class="col-4">
												<img class="rounded"
													src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($fetch[$i]["post_img"]) ?>"
													alt="">
											</div>
											<div class="col-8">
												<h6><a href="post-single.php?post=<?php echo $fetch[$i]["post_id"]; ?>"
														class="btn-link stretched-link text-reset fw-bold">
														<?php echo ($fetch[$i]["post_name"]) ?>
													</a></h6>
												<div class="small mt-1">
													<?php echo (formatDate($fetch[$i]["post_date"])) ?>
												</div>
											</div>
										</div>
									</div>
								<?php }
                                } ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<div class="container">
		<div class="border-bottom border-primary border-2 opacity-1"></div>
	</div>

	<section class="pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="mb-4 d-md-flex justify-content-between align-items-center">
						<h2 class="m-0"><i class="bi bi-megaphone"></i> Sponsored news</h2>
					</div>
					<div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
						<div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="24"
							data-arrow="true" data-dots="false" data-items-xl="4" data-items-md="3" data-items-sm="2"
							data-items-xs="1">

							<div class="card">

								<div class="position-relative">
									<img class="card-img" src="assets/images/blog/4by3/07.jpg" alt="Card image">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">

										<div class="w-100 mb-auto d-flex justify-content-end">
											<div class="text-end ms-auto">

												<div class="icon-md bg-white-soft bg-blur text-white fw-bold rounded-circle"
													title="8.5 rating">8.5</div>
											</div>
										</div>

										<div class="w-100 mt-auto">
											<a href="#" class="badge bg-info mb-2"><i
													class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h5 class="card-title"><a href="post-single-3.php"
											class="btn-link text-reset fw-bold">8 common mistakes everyone makes
											while traveling</a></h5>

									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"
															src="assets/images/avatar/07.jpg" alt="avatar">
													</div>
													<span class="ms-3">by <a href="#"
															class="stretched-link text-reset btn-link">Lori</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">Mar 07, 2021</li>
									</ul>
								</div>
							</div>


							<div class="card">

								<div class="position-relative">
									<img class="card-img" src="assets/images/blog/4by3/08.jpg" alt="Card image">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">

										<div class="w-100 mt-auto">
											<a href="#" class="badge bg-danger mb-2"><i
													class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h5 class="card-title"><a href="post-single-3.php"
											class="btn-link text-reset fw-bold">Skills that you can learn from
											business</a></h5>

									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<div class="avatar-img rounded-circle bg-warning">
															<span
																class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">MK</span>
														</div>
													</div>
													<span class="ms-3">by <a href="#"
															class="stretched-link text-reset btn-link">Joan</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">Aug 15, 2022</li>
									</ul>
								</div>
							</div>


							<div class="card">

								<div class="position-relative">
									<img class="card-img" src="assets/images/blog/4by3/09.jpg" alt="Card image">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">

										<div class="w-100 mt-auto">
											<a href="#" class="badge bg-success mb-2"><i
													class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h5 class="card-title"><a href="post-single-3.php"
											class="btn-link text-reset fw-bold">10 tell-tale signs you need to get a
											new business</a></h5>

									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"
															src="assets/images/avatar/09.jpg" alt="avatar">
													</div>
													<span class="ms-3">by <a href="#"
															class="stretched-link text-reset btn-link">Bryan</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">Jun 01, 2021</li>
									</ul>
								</div>
							</div>


							<div class="card">

								<div class="position-relative">
									<img class="card-img" src="assets/images/blog/4by3/10.jpg" alt="Card image">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">

										<div class="w-100 mb-auto d-flex justify-content-end">
											<div class="text-end ms-auto">

												<div class="icon-md bg-white-soft bg-blur text-white rounded-circle"
													title="This post has images"><i class="fas fa-image"></i></div>
											</div>
										</div>

										<div class="w-100 mt-auto">
											<a href="#" class="badge bg-primary mb-2"><i
													class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h5 class="card-title"><a href="post-single-3.php"
											class="btn-link text-reset fw-bold">This is why this year will be the
											year of startups</a></h5>

									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"
															src="assets/images/avatar/10.jpg" alt="avatar">
													</div>
													<span class="ms-3">by <a href="#"
															class="stretched-link text-reset btn-link">Samuel</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">Dec 07, 2022</li>
									</ul>
								</div>
							</div>


							<div class="card">

								<div class="position-relative">
									<img class="card-img" src="assets/images/blog/4by3/11.jpg" alt="Card image">
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">

										<div class="w-100 mt-auto">
											<a href="#" class="badge bg-warning mb-2"><i
													class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h5 class="card-title"><a href="post-single-3.php"
											class="btn-link text-reset fw-bold">Best Pinterest Boards for learning
											about business</a></h5>

									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"
															src="assets/images/avatar/12.jpg" alt="avatar">
													</div>
													<span class="ms-3">by <a href="#"
															class="stretched-link text-reset btn-link">Dennis</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">Sep 07, 2021</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include_once "includes/footer.php" ?>