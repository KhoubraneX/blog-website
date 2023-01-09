<?php require_once "includes/header.php"; ?>
<?php
require_once "includes/database.php";
include_once "includes/functions/formatDate.php";
include_once "includes/functions/avatar.php";
include_once "includes/querys/_singlePost.php";


?>

<main>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            something wrong!
      </div>
    </div>
  </div>
</div>
<button class="popUp" hidden data-bs-target="#exampleModalToggle" data-bs-toggle="modal"></button>
    <div class="border-bottom border-primary border-1 opacity-1"></div>
    <section class="pb-3 pb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
                        <?php echo $post_categorie; ?>
                    </a>
                    <h1><?php echo $post_name; ?></h1>
                </div>
                <p class="lead">
                    <?php echo $post_short_desc; ?>
                </p>
            </div>
        </div>
    </section>


    <section class="pt-0">
        <div class="container position-relative" data-sticky-container>
            <div class="row">

                <div class="col-lg-2">
                    <div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80" data-sticky-for="991">

                        <div class="position-relative">
                            <div class="avatar avatar-xl">
                                <?php if ($author_avatar) { ?>
                                    <img class="avatar-img rounded-circle" id="avatar"
                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($author_avatar) ?>"
                                        alt="avatar">
                                    <?php } else { ?>
                                    <div class="avatar-img rounded-circle bg-warning">
                                        <span
                                            class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">
                                            <?php echo (avatarGenerate($post_author_name)) ?>
                                        </span>
                                    </div>
                                    <?php } ?>
                            </div>
                            <a href="#" class="h5 stretched-link mt-2 mb-0 d-block">
                                <?php echo $post_author_name; ?>
                            </a>
                            <p><?php echo $post_author_jobtitle; ?></p>
                        </div>
                        <hr class="d-none d-lg-block">

                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item d-lg-block my-lg-2">
                                <?php echo $new_data_format; ?>
                            </li>
                            <li class="list-inline-item d-lg-block my-lg-2"><a href="#" class="text-body"><i
                                        class="far fa-heart me-1"></i></a> 266</li>
                            <li class="list-inline-item d-lg-block my-lg-2"><i class="far fa-eye me-1"></i> 2344 Views
                            </li>
                        </ul>

                        <ul class="list-inline text-primary-hover mt-0 mt-lg-3">
                            <li class="list-inline-item">
                                <a class="text-body" href="#">#agency</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-body" href="#">#business</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-body" href="#">#theme</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-body" href="#">#bootstrap</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-body" href="#">#marketing</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-7 mb-5">
                    <div class="">
                        <p class="lead">
                            <?php echo $post_body; ?>
                        </p>
                    </div>
                    <div class="row g-0">
                        <div class="col-sm-6 bg-primary-soft p-4 position-relative border-end border-1 rounded-start">
                            <span><i class="bi bi-arrow-left me-3 rtl-flip"></i>Previous post</span>
                            <h5 class="m-0"><a href="#" class="stretched-link btn-link text-reset">Dirty little secrets
                                    about the business industry</a></h5>
                        </div>
                        <div class="col-sm-6 bg-primary-soft p-4 position-relative text-sm-end rounded-end">
                            <span>Next post<i class="bi bi-arrow-right ms-3 rtl-flip"></i></span>
                            <h5 class="m-0"><a href="#" class="stretched-link btn-link text-reset">Bad habits that
                                    people in the industry need to quit</a></h5>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h2 class="my-3"><i class="bi bi-symmetry-vertical me-2"></i>Related post</h2>
                        <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round">
                            <div class="tns-outer" id="tns1-ow">
                                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">
                                    slide <span class="current">7 to 8</span> of 3</div>
                                <div id="tns1-mw" class="tns-ovh">
                                    <div class="tns-inner" id="tns1-iw">
                                        <div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                            data-autoplay="true" data-hoverpause="true" data-gutter="24"
                                            data-arrow="true" data-dots="false" data-items-xl="2" data-items-xs="1"
                                            id="tns1"
                                            style="transform: translate3d(-54.5455%, 0px, 0px); transition-duration: 0s;">
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/09.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-success mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">10
                                                            tell-tale signs you need to get a new business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/09.jpg"
                                                                            alt="avatar">
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
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/07.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

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
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">7 common
                                                            mistakes everyone makes while traveling</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/07.jpg"
                                                                            alt="avatar">
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
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/08.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-danger mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">Skills
                                                            that you can learn from business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/08.jpg"
                                                                            alt="avatar">
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
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/09.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-success mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">10
                                                            tell-tale signs you need to get a new business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/09.jpg"
                                                                            alt="avatar">
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

                                            <div class="card tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/07.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

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
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">7 common
                                                            mistakes everyone makes while traveling</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/07.jpg"
                                                                            alt="avatar">
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


                                            <div class="card tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/08.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-danger mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">Skills
                                                            that you can learn from business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/08.jpg"
                                                                            alt="avatar">
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


                                            <div class="card tns-item tns-slide-active" id="tns1-item2">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/09.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-success mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">10
                                                            tell-tale signs you need to get a new business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/09.jpg"
                                                                            alt="avatar">
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

                                            <div class="card tns-item tns-slide-cloned tns-slide-active">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/07.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

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
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">7 common
                                                            mistakes everyone makes while traveling</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/07.jpg"
                                                                            alt="avatar">
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
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/08.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-danger mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">Skills
                                                            that you can learn from business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/08.jpg"
                                                                            alt="avatar">
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
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/09.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge bg-success mb-2"><i
                                                                    class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">10
                                                            tell-tale signs you need to get a new business</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/09.jpg"
                                                                            alt="avatar">
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
                                            <div class="card tns-item tns-slide-cloned" aria-hidden="true"
                                                tabindex="-1">

                                                <div class="position-relative">
                                                    <img class="card-img" src="assets/images/blog/4by3/07.jpg"
                                                        alt="Card image">
                                                    <div
                                                        class="card-img-overlay d-flex align-items-start flex-column p-3">

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
                                                    <h5 class="card-title"><a href="post-single-2.php"
                                                            class="btn-link text-reset stretched-link fw-bold">7 common
                                                            mistakes everyone makes while traveling</a></h5>

                                                    <ul
                                                        class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div
                                                                    class="d-flex align-items-center position-relative">
                                                                    <div class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/07.jpg"
                                                                            alt="avatar">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button
                                        type="button" data-controls="prev" tabindex="-1" aria-controls="tns1"><i
                                            class="fas fa-chevron-left"></i></div>
                            </div>
                        </div>
                    </div>


                    <hr>
                    <div class="d-flex py-4">
                        <!-- Avatar -->
                        <a href="#">
                            <div class="avatar avatar-xxl me-4">
                                <?php if ($author_avatar) { ?>
                                    <img class="avatar-img rounded-circle"
                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($author_avatar); ?>"
                                        alt="avatar">
                                    <?php } else { ?>
                                    <div class="avatar-img rounded-circle bg-warning">
                                        <h2
                                            class="text-dark position-absolute top-50 start-50 translate-middle fw-bold">
                                            <?php echo $avatar_name ?>
                                        </h2>
                                    </div>
                                    <?php } ?>
                            </div>
                        </a>
                        <!-- Info -->
                        <div>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="m-0"><a href="#" class="text-reset">
                                            <?php echo $post_author_name; ?>
                                        </a></h4>
                                    <small><?php echo $post_author_jobtitle; ?></small>
                                </div>
                                <a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
                            </div>
                            <p class="my-2">
                                <?php echo $post_author_bio; ?>
                            </p>
                            <!-- Social icons -->
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link ps-0 pe-2 fs-5" href="#"><i
                                            class="fab fa-facebook-square"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>

                    <div class="comments-sec">
                        <?php include_once "includes/querys/post_comment.php"; ?>
                        <h3><span class="number">
                                <?php echo (mysqli_num_rows($result_post_comment)); ?>
                            </span> comments</h3>
                        <?php
                        while ($comment = mysqli_fetch_assoc($result_post_comment)) {
                            $comment_content = $comment["comment_content"];
                            $comment_auth_name = $comment["firstname"];
                            $comment_avatar_auth = $comment["avatar"];
                            $comment_date = $comment["comment_date"];
                            ?>
                            <div class="my-4 d-flex">
                                <?php
                                if ($result_post_comment) { ?>
                                <?php if (!empty($comment_avatar_auth)) { ?>
                                    <img class="avatar avatar-md rounded-circle float-start me-3"
                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($comment_avatar_auth) ?>"
                                        alt="avatar">
                                    <?php } else { ?>
                                    <div class="avatar avatar-md rounded-circle float-start me-3">
                                        <div class="avatar-img rounded-circle bg-warning">
                                            <span
                                                class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small"><?php echo avatarGenerate($comment_auth_name)?></span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                <div>
                                    <div class="mb-2">
                                        <h5 class="m-0"><?php echo ($comment_auth_name) ?></h5>
                                        <span class="me-3 small">
                                            <?php echo ($comment_date) ?>
                                        </span>
                                        <a href="#comment-area" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>
                                        <?php echo ($comment_content) ?>
                                    </p>
                                </div>
                            </div>
                            <?php }
                        }?>
                    </div>


                    <div>
                        <h3>Leave a reply</h3>
                        <form method="post" class="row g-3 mt-2" id="comment">
                            <div class="col-12">
                                <label class="form-label">Your Comment *</label>
                                <textarea id="comment-area" name="comment-area" class="form-control"
                                    rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Post comment</button>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-lg-3">
                    <div data-sticky data-margin-top="80" data-sticky-for="991">
                        <h4>Share this article</h4>
                        <ul class="nav text-white-force">
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
                                    <i class="fab fa-facebook-square align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
                                    <i class="fab fa-twitter-square align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
                                    <i class="fab fa-linkedin align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
                                    <i class="fab fa-pinterest align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
                                    <i class="far fa-envelope align-middle"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="mt-4">
                            <a href="#" class="d-block card-img-flash">
                                <img src="assets/images/adv.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="sticky-post bg-light border p-4 mb-5 text-sm-end rounded d-none d-xxl-block">
        <div class="d-flex align-items-center">

            <div class="me-3">
                <span>Next post<i class="bi bi-arrow-right ms-3 rtl-flip"></i></span>
                <h6 class="m-0"> <a href="javascript:void(0)" class="stretched-link btn-link text-reset">Bad habits that
                        people in the industry need to quit</a></h6>
            </div>

            <div class="col-4 d-none d-md-block">
                <img src="assets/images/blog/4by3/05.jpg" alt="Image">
            </div>
        </div>
    </div>

</main>
<script>
    var { log } = console
    var form = document.querySelector("#comment");
    var formData = form.querySelector("textarea")

    form.addEventListener("submit", (e) => {
        e.preventDefault()

        if (formData.value.trim().length == 0) {
            formData.style.borderColor = "red"
        } else {
            formData.style.borderColor = "#dfe0e5"

            var url = new URL(window.location.href);
            var postId = url.searchParams.get('post');

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost:8080/php/project/weblog.gatacamp.com/includes/querys/_add_comment.php');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    if (JSON.parse(this.responseText)["status"] == "success") {
                        var { avatar , typeofAvatar , time } = JSON.parse(this.response)
                        document.querySelector(".comments-sec h3 .number").textContent++
                        document.querySelector(".comments-sec").innerHTML += `<div class="my-4 d-flex">
                        ${typeofAvatar == "img" ? 
                                `<img class="avatar avatar-md rounded-circle float-start me-3" src=data:image/jpg;charset=utf8;base64,${avatar} alt=avatar>`
                                : `<div class="avatar avatar-md rounded-circle float-start me-3">
                                        <div class="avatar-img rounded-circle bg-warning">
                                            <span class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">${avatar}</span>
                                        </div>
                                    </div>`}
                            <div>
                            <div class="mb-2">
                            <h5 class="m-0"></h5>
                            <span class="me-3 small">${time}</span>
                                    <a href="#" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>${formData.value}</p>
                                    </div>
                                    </div>`
                        formData.value = "";
                    }else {
                        document.querySelector(".popUp").click()
                    }
                }
            }
            //get request with params
            var data = {
                comment: formData.value,
                postId: postId
            };
            xhr.send(JSON.stringify(data));
        }
    })
</script>

<?php include_once "includes/footer.php" ?>