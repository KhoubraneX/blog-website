<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap based News, Magazine and Blog Theme">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
		<div class="offcanvas-header justify-content-end">
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body d-flex flex-column pt-0">
			<div>
				<img class="light-mode-item my-3" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item my-3" src="assets/images/logo-light.svg" alt="logo">
				<p>The next-generation blog, news, and magazine theme for you to start sharing your stories today! </p>
				<ul class="nav d-block flex-column my-4">
					<li class="nav-item">
						<a href="index.php" class="nav-link h5">Home</a>
					<li class="nav-item">
						<a class="nav-link h5" href="about-us.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link h5" href="contact-us.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto pb-3">
				<p class="text-body mb-2 fw-bold">New York, USA (HQ)</p>
				<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
				<p class="mb-2">Call: <a href="#" class="text-body"><u>469-537-2410</u> (Toll-free)</a> </p>
				<a href="#" class="text-body d-block"><span class="__cf_email__"
						data-cfemail="3058555c5c5f70525c5f574a595e551e535f5d">[email&#160;protected]</span></a>
			</div>
		</div>
		
	</div>
	<header class="navbar-light navbar-sticky header-static">
		<div class="navbar-top d-none d-lg-block small">
			<div class="container">
				<div class="d-md-flex justify-content-between align-items-center my-2">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link ps-0" href="about-us.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signin.php">Login / Join</a>
						</li>
					</ul>
					<?php include_once "includes/profileNav.php";?>
				</div>
			<div class="border-bottom border-2 border-primary opacity-1"></div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img class="navbar-brand-item light-mode-item" src="assets/images/logo.svg" alt="logo">
					<img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<li class="nav-item dropdown">
							<a class="nav-link active" href="index.php" id="homeMenu" aria-haspopup="true"
								aria-expanded="false">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Pages</a>
							<ul class="dropdown-menu" aria-labelledby="pagesMenu">
								<li> <a class="dropdown-item" href="about-us.php">About</a></li>
								<li> <a class="dropdown-item" href="contact-us.php">Contact</a></li>
								<li class="dropdown-submenu dropend">
									<a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
									<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
										<li> <a class="dropdown-item" href="author.php">Author Page</a> </li>
										<li> <a class="dropdown-item" href="categories.php">Category page 1</a> </li>
										<li> <a class="dropdown-item" href="categories-2.php">Category page 2</a> </li>
										<li> <a class="dropdown-item" href="tag.php"># tag</a> </li>
										<li> <a class="dropdown-item" href="search-result.php">Search result</a> </li>
									</ul>
								</li>
								<li> <a class="dropdown-item" href="404.php">Error 404</a></li>
								<li> <a class="dropdown-item" href="signin.php">signin</a></li>
								<li> <a class="dropdown-item" href="signup.php">signup</a></li>
								<li> <a class="dropdown-item" href="offline.php">offline</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Post</a>
							<ul class="dropdown-menu" aria-labelledby="postMenu">
								<li> <a class="dropdown-item" href="post-single.php">Post single magazine</a> </li>
								<li class="dropdown-divider"></li>
								<li> <a class="dropdown-item" href="pagination-styles.php">Pagination styles</a> </li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="dashboard.php" id="postMenu" aria-haspopup="true"
								aria-expanded="false">Dashboard</a>
					</ul>
					</li>
					</ul>
				</div>
				<div class="nav flex-nowrap align-items-center">
					<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
						<a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-search fs-4"> </i>
						</a>
						<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
							<form class="input-group" method="get" action="search-result.php">
								<input name="search" class="form-control border-success" type="search" placeholder="Search"
									aria-label="Search">
								<button class="btn btn-success m-0" type="submit">Search</button>
							</form>
						</div>
					</div>
					<div class="nav-item">
						<a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button"
							aria-controls="offcanvasMenu">
							<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
						</a>
					</div>
				</div>
			</div>
		</nav>
	</header>