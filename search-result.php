<?php include_once "includes/header.php" ?>
<?php
require_once "includes/database.php";
include_once "includes/functions/formatDate.php";
include_once("includes/functions/avatar.php");

if (isset($_GET["search"])) {
    $search = htmlspecialchars($_GET["search"]);
    $query = "SELECT * FROM `posts` 
    INNER JOIN users on post_author_id = users.id
    INNER JOIN categorie on categorie.categorie_id = posts.categorie_id
            WHERE 
                post_name LIKE '%$search%' or 
                firstname LIKE '%$search%' or 
                lastname LIKE '%$search%' or 
                post_body LIKE '%$search%' or
                post_tags LIKE '%$search%'
            ";
    $result = mysqli_query($connection, $query);
}else {
    header("Location: index.php");
}
?>
<main>

    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center py-5">
                    <span>Search results for</span>
                    <h2 class="display-5">
                        <?php echo $search; ?>
                    </h2>
                    <span class="lead">
                        <?php echo mysqli_num_rows($result) . " result found"; ?>
                    </span>

                    <div class="row">
                        <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
                            <form method="get" class="input-group mt-4">
                                <input name="search" class="form-control form-control-lg border-success" type="search"
                                    placeholder="Covid-19" aria-label="Search">
                                <button class="btn btn-success btn-lg m-0" type="submit">
                                    <span class="d-none d-md-block">Search</span>
                                    <i class="d-block d-md-none fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="position-relative pt-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 mx-auto">
                    <!-- search post -->
                    <?php
                    if ($result) {

                        while ($post = mysqli_fetch_assoc($result)) {
                            $post_id = $post["post_id"];
                            $post_cat = $post["name_categorie"];
                            $post_name = $post["post_name"];
                            $post_date = formatDate($post["post_date"]);
                            $post_img = $post["post_img"];
                            $post_author_name = $post["firstname"];
                            $post_author_avatar = $post["avatar"];
                            ?>
                            <div class="card border rounded-3 up-hover p-4 mb-4">
                                <div class="row g-3">
                                    <div class="col-sm-9">

                                        <a href="#" class="badge bg-danger mb-2"><i
                                                class="fas fa-circle me-2 small fw-bold"></i><?php echo $post_cat; ?></a>

                                        <h3 class="card-title">
                                            <a href="post-single.php?post=<?php echo ($post_id) ?>"
                                                class="btn-link text-reset stretched-link">
                                                <?php echo $post_name; ?>
                                            </a>
                                        </h3>

                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <?php if ($post_author_avatar) { ?>
                                                                <img class="avatar-img rounded-circle"
                                                                    src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post_author_avatar) ?>"
                                                                    alt="avatar">
                                                                <?php } else { ?>
                                                                <div class="avatar-img rounded-circle bg-warning">
                                                                    <span
                                                                        class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">
                                                                        <?php echo  avatarGenerate($post_author_name) ?>
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
                                            <li class="nav-item"><?php echo $post_date; ?></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-3">
                                        <img class="rounded-3"
                                            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post_img) ?>"
                                            alt="Card image">
                                    </div>
                                </div>
                            </div>
                            <?php }
                    } ?>
                    <!-- search end -->
                    <button type="button" class="btn btn-primary-soft w-100">Load more post <i
                            class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                </div>

            </div>
        </div>
    </section>

</main>


<footer class="pb-0">
    <div class="container">
        <hr>

        <div class="row pt-5">

            <div class="col-md-6 col-lg-4 mb-4">
                <img class="light-mode-item" src="assets/images/logo.svg" alt="logo">
                <img class="dark-mode-item" src="assets/images/logo-light.svg" alt="logo">
                <p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your stories
                    today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
                <div class="mt-4">©2021 <a href="https://www.webestica.com/" class="text-reset btn-link"
                        target="_blank">Webestica</a>. All rights reserved
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <h5 class="mb-4">Navigation</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Career <span
                                        class="badge bg-danger ms-2">2 Job</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Startups</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 mb-4">
                <h5 class="mb-4">Browse by Tag</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Marketing</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-2 mb-4">
                <h5 class="mb-4">Our Social handles</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link pt-0" href="#"><i
                                class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fab fa-twitter-square fa-fw me-2 text-twitter"></i>Twitter</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fab fa-linkedin fa-fw me-2 text-linkedin"></i>Linkedin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fab fa-youtube-square fa-fw me-2 text-youtube"></i>YouTube</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>


<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>


<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/functions.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"76d8d1c3e81b0cfc","version":"2022.11.0","r":1,"token":"4a9cfe0f2b5946da86682f607f94fb97","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from weblog.gatacamp.com/search-result.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 22:43:35 GMT -->

</html>