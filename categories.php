<?php
require_once('./includes/database.php');
include_once('./includes/querys/_get_cat_posts.php');
include_once "includes/functions/formatDate.php";
require_once "includes/functions/avatar.php";
?>

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

    <?php require_once "includes/header.php"; ?>

    <main>

        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-300 text-center"
                            style="background-image:url(assets/images/blog/16by9/08.jpg); background-position: center left; background-size: cover;">

                            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                <div class="w-100 my-auto">
                                    <div class="text-white mb-3">Browsing category:</div>
                                    <h1 class="text-white h2">
                                        <span class="badge bg-warning mb-2">
                                            <i class="fas fa-circle me-2 small fw-bold"></i><?php echo ($categorie_name); ?></span>
                                    </h1>
                                    <div class="text-center position-relative">
                                        <span class="badge bg-info fs-6">
                                            <?php echo ($categorie_posts_num) ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="position-relative pt-0">
            <div class="container" data-sticky-container>
                <div class="row">

                    <div class="col-lg-9">
                        <div class="row gy-4">
                            <!-- get all posts -->
                            <?php while ($post = mysqli_fetch_assoc($req_posts)) {
                                $post_id = $post["post_id"];
                                $post_image = base64_encode($post["post_img"]);
                                $author_avatar = base64_encode($post["avatar"]);
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
                                                src="data:image/jpg;charset=utf8;base64,<?php echo $post_image ?>"
                                                alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                <div class="w-100 mt-auto">

                                                    <a href="#" class="badge bg-danger mb-2"><i
                                                            class="fas fa-circle me-2 small fw-bold"></i>
                                                        <?php echo $post_categorie ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pt-3">
                                            <h4 class="card-title"><a href="post-single.php?post=<?php echo ($post_id); ?>"
                                                    class="btn-link text-reset fw-bold"><?php echo $post_name ?></a></h4>
                                            <p class="card-text">
                                                <?php echo $post_short_desc ?>
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
                                                                    class="stretched-link text-reset btn-link"><?php echo ($post_author_name); ?></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><?php echo $new_data_format ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ; ?>


                            <div class="col-12 text-center mt-5">
                                <nav class="mb-5 d-flex justify-content-center" aria-label="navigation">
                                    <ul class="pagination pagination-bordered ">
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

                        </div>
                    </div>


                    <div class="col-lg-3 mt-5 mt-lg-0">
                        <div data-sticky data-margin-top="80" data-sticky-for="767">

                            <div class="row g-2">
                                <h5>Other Categories</h5>
                                <?php include_once("./includes/querys/_categories_w_num.php"); ?>
                                <?php

                                $colors = ["warning", "info", "danger", "success", "primary"];
                                $color_index = 0;

                                while ($row = mysqli_fetch_assoc($res_cat)) {
                                    $id_cat = $row["categorie_id"];
                                    $name_cat = $row["name_categorie"];
                                    $cat_num_post = $row["num_posts"];
                                    ?>
                                    <div style="--bs-bg-opacity: .1;"
                                        class="d-flex justify-content-between align-items-center bg-<?php echo ($colors[$color_index]); ?> bg-opacity-15 rounded p-2 position-relative">
                                        <h6 class="m-0 text-<?php echo ($colors[$color_index]); ?>">
                                            <?php echo ($name_cat) ?>
                                        </h6>
                                        <a href="categories.php?categorie=<?php echo ($id_cat) ?>"
                                            class="badge bg-<?php echo ($colors[$color_index]); ?> stretched-link">
                                            <?php echo ($cat_num_post) ?>
                                        </a>
                                    </div>
                                    <?php count($colors) - 1 != $color_index ? $color_index++ : $color_index = 0;
                                }
                                ; ?>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-12 my-4">
                                <a href="#" class="d-block card-img-flash">
                                    <img src="assets/images/adv.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php include_once "includes/footer.php" ?>