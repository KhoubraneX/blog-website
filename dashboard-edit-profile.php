<?php include_once "includes/footer2.php"; ?>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main contain START -->
<section class="py-4">
	<div class="container">
	 
    <div class="row g-4">
      <!-- Profile cover and info START -->
      <div class="col-12">
        <div class="card mb-4 position-relative z-index-9">
          <!-- Cover image -->
          <div class="py-5 h-200 rounded" style="background-image:url(assets/images/blog/16by9/big/07.jpg); background-position: center bottom; background-size: cover; background-repeat: no-repeat;">
          </div>
          <div class="card-body pt-3 pb-0">
            <div class="row d-flex justify-content-between">
              <!-- Avatar -->
              <div class="col-sm-12 col-md-auto text-center text-md-start">
                <div class="avatar avatar-xxl mt-n5">
                  <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/03.jpg" alt="">
                </div>
              </div>
              <!-- Profile info -->
              <div class="col-sm-12 col-md text-center text-md-start d-md-flex justify-content-between align-items-center">
                <div>
                  <h4 class="my-1">Louis Ferguson <i class="bi bi-patch-check-fill text-info small"></i></h4>
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class="bi bi-person-fill me-1"></i> An editor at Blogzine</li>
                    <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> New York</li>
                    <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> Joined on Jan 15, 2018</li>
                  </ul>
                  <p class="m-0"></p>
                </div>
                <!-- Links -->
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                  <a href="#" class="btn btn-primary-soft me-3">Follow</a>
                  <!-- Card action START -->
                  <div class="dropdown ms-3">
                    <a class="text-secondary" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                      <!-- Dropdown Icon -->
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="currentColor" cx="3" cy="12" r="2.5"></circle>
                        <circle fill="currentColor" opacity="0.5" cx="12" cy="12" r="2.5"></circle>
                        <circle fill="currentColor" opacity="0.3" cx="21" cy="12" r="2.5"></circle>
                      </svg>
                    </a>               
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2 fw-icon"></i>Share profile</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-volume-mute me-2 fw-icon"></i>Mute notification</a></li>
                      <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-slash-circle me-2 fw-icon"></i>Delete profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-flag me-2 fw-icon"></i>Report a bug</a></li>
                    </ul>
                  </div>
                  <!-- Card action END -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Profile info END -->
    </div>

    <div class="row g-4">
      <!-- Left sidebar START -->
      <div class="col-lg-7 col-xxl-8">
        <!-- Profile START -->
        <div class="card border mb-4">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0">Profile</h5>
          </div>
          <div class="card-body">
            <!-- Full name -->
            <div class="mb-3">
              <label class="form-label">Full name</label>
              <div class="input-group">
                <input type="text" class="form-control" value="Louis" placeholder="First name">
                <input type="text" class="form-control" value="Ferguson" placeholder="Last name">
              </div>
            </div>
            <!-- Username -->
            <div class="mb-3">
              <label class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text">webestica.com</span>
                <input type="text" class="form-control" value="louisferguson">
              </div>
            </div>
            <!-- Profile picture -->
            <div class="mb-3">
              <label class="form-label">Profile picture</label>
              <!-- Avatar upload START -->
              <div class="d-flex align-items-center">
                <div class="position-relative me-3">
                  <!-- Avatar edit -->
                  <div class="position-absolute top-0 end-0  z-index-9">
                    <a class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1" href="#"> <i class="bi bi-pencil"></i> </a>
                  </div>
                  <!-- Avatar preview -->
                  <div class="avatar avatar-xl">
                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/03.jpg" alt="">
                  </div>
                </div>
                <!-- Avatar remove button -->
                <div class="avatar-remove">
                  <button type="button" class="btn btn-light">Delete</button>
                </div>
              </div>
              <!-- Avatar upload END -->
            </div>
            <!-- Job title -->
            <div class="mb-3">
              <label class="form-label">Job title</label>
              <input class="form-control" type="text" value="An editor at Blogzine">
            </div>
            <!-- Location -->
            <div class="mb-3">
              <label class="form-label">Location</label>
              <input class="form-control" type="text" value="New Hampshire">
            </div>
            <!-- Bio -->
            <div class="mb-3">
              <label class="form-label">Bio</label>
              <textarea class="form-control" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
              <div class="form-text">Brief description for your profile.</div> 
            </div>
            <!-- Birthday -->
            <div>
              <label class="form-label">Birthday</label>
              <input type="text" class="form-control flatpickr-input" placeholder="DD/MM/YYYY" value="12/10/1990">
            </div>
            <!-- Save button -->
            <div class="d-flex justify-content-end mt-4">
              <a href="#" class="btn text-secondary border-0 me-2">Discard</a>
              <a href="#" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
        <!-- Profile END -->

        <!-- Personal information START -->
        <div class="card border mb-4">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0">Personal information</h5>
          </div>
          <div class="card-body">
            <!-- Skype -->
            <div class="mb-3">
              <label class="form-label">Skype</label>
              <input class="form-control" type="text" value="iamlouisferguson">
            </div>
            <!-- Email -->
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input class="form-control" type="email" value="loriferguson@wbs.com">
            </div>
            <!-- Address -->
            <div class="mb-3">
              <label class="form-label">Address</label>
              <input class="form-control" type="text" value="750 Sing Sing Rd, Horseheads, NY, 14845 ">
            </div>
            <!-- Save button -->
            <div class="d-flex justify-content-end mt-4">
              <a href="#" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
        <!-- Personal information END -->

        <!-- Social links START -->
        <div class="card border mb-4">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0"> Social links</h5>
          </div>
          <div class="card-body">
            <!-- Skype -->
            <div class="mb-3">
              <label class="form-label">Facebook</label>
              <input class="form-control" type="text" value="https://facebook.com/">
            </div>
            <!-- Email -->
            <div class="mb-3">
              <label class="form-label">linkedin</label>
              <input class="form-control" type="email" value="https://www.linkedin.com/">
            </div>
            <!-- Address -->
            <div class="mb-3">
              <label class="form-label">Twitter</label>
              <input class="form-control" type="text" value="https://twitter.com/ ">
            </div>
            <!-- Save button -->
            <div class="d-flex justify-content-end mt-4">
              <a href="#" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
        <!-- Social links END -->

        <!-- Update password START -->
        <div class="card border">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0">Update password</h5>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Current password</label>
              <input class="form-control" type="password" placeholder="Enter current password">
            </div>
            <!-- New password -->
            <div class="mb-3">
              <label class="form-label" id="psw-strength-message"></label>
              <div class="input-group">
                <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
                <span class="input-group-text p-0">
                  <i class="fakepasswordicon far fa-eye cursor-pointer p-2 w-40px"></i>
                </span>
              </div>
              <div class="rounded mt-1" id="psw-strength"></div>
            </div>
            <!-- New password -->
            <div>
              <label class="form-label">Confirm new password</label>
              <input class="form-control" type="password" placeholder="Enter new password">
            </div>
            <div class="d-flex justify-content-end mt-4">
              <a href="#" class="btn btn-primary">Change password</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Left sidebar END -->

      <!-- Right sidebar START -->
      <div class="col-lg-5 col-xxl-4">
        <!-- Profile Setting START -->
        <div class="card border mb-4">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0">Profile Setting</h5>
          </div>
          <div class="card-body">
            <div class="form-check form-switch form-check-md mb-3">
              <input class="form-check-input" type="checkbox" id="availabilityCheck" checked="">
              <label class="form-check-label" for="availabilityCheck">Visible profile to everyone</label>
            </div>
            <div class="form-check form-switch form-check-md mb-3">
              <input class="form-check-input" type="checkbox" id="proCheck" disabled="">
              <label class="form-check-label" for="proCheck">Disable ads <span class="badge bg-primary align-middle">Pro</span></label>
            </div>
          </div>
        </div>
        <!-- Profile Setting END -->

        <!-- Notifications START -->
        <div class="card border mb-4">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0">Notifications</h5>
          </div>
          <!-- Card body START -->
          <div class="card-body">
            <p>Choose type of notifications you want to receive</p>
            <div class="form-check form-switch form-check-md mb-3">
              <input class="form-check-input" type="checkbox" id="withdrawalCheck" checked="">
              <label class="form-check-label" for="withdrawalCheck">Withdrawal activity</label>
            </div>
            <div class="form-check form-switch form-check-md mb-3">
              <input class="form-check-input" type="checkbox" id="weeklyCheck">
              <label class="form-check-label" for="weeklyCheck">Weekly report</label>
            </div>
            <div class="form-check form-switch form-check-md mb-3">
              <input class="form-check-input" type="checkbox" id="passwordCheck" checked="">
              <label class="form-check-label" for="passwordCheck">Password change</label>
            </div>
            <div class="form-check form-switch form-check-md mb-3">
              <input class="form-check-input" type="checkbox" id="dataCheck">
              <label class="form-check-label" for="dataCheck">Data usage alert</label>
            </div>
          </div>
        <!-- Card body END -->
        </div>
        <!-- Notifications START -->

        <!-- Deactivate account START -->
        <div class="card border mb-4">
          <div class="card-header border-bottom p-3">
            <h5 class="card-header-title mb-0">Deactivate Account</h5>
          </div>
          <div class="card-body">
            <h6>Before you go...</h6>
            <ul>
              <li>Take backup of your data <a href="#">Here</a> </li>
              <li>Account deletion is final. There will be no way to restore your account</li>
            </ul>
            <div class="form-check form-check-md my-3">
              <input class="form-check-input" type="checkbox" value="" id="deleteaccountCheck">
              <label class="form-check-label" for="deleteaccountCheck">Yes, I'd really like to delete my account</label>
            </div>
            <a href="#" class="btn btn-success-soft my-1">Keep my account</a>
            <a href="#" class="btn btn-danger my-1">Delete my account</a>
          </div>
        </div>
        <!-- Deactivate account START -->
        <p><i class="bi bi-info-circle me-2"></i>This account was created on Jan 15, 2018</p>

        <div class="card bg-transparent border rounded-3 mt-4">
          <!-- Card header -->
          <div class="card-header bg-transparent border-bottom p-3">
            <h5 class="card-header-title mb-0">Linked account</h5>
          </div>
          <!-- Card body START -->
          <div class="card-body">
            <!-- Google -->
            <div class="position-relative mb-3 mt-3 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
              <!-- Title and content -->
              <h2 class="fs-1 mb-0 me-3"><i class="fab fa-google text-google-icon"></i></h2>
              <div>
                <div class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-20px">
                  <i class="bi bi-check-circle-fill text-success fs-5"></i>
                </div>
                  <h6 class="mb-1">Google</h6>
                  <p class="mb-1 small">You are successfully connected to your Google account</p>
                  <!-- Button -->
                  <button type="button" class="btn btn-sm btn-danger mb-0 me-2">Invoke</button>
                  <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
              </div>
            </div>

            <!-- Blogger -->
            <div class="mb-3 d-sm-flex border p-3 rounded">
              <!-- Title and content -->
              <h2 class="fs-1 mb-0 me-3"><i class="fab fa-blogger text-warning"></i></h2>
              <div>
                <h6 class="mb-1">Blogger</h6>
                <p class="mb-1 small">Connect with Blogger account for a personalized experience</p>
                <!-- Button -->
                <button type="button" class="btn btn-sm btn-primary mb-0 me-2">Connect Blogger </button>
                <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
              </div>
            </div>

            <!-- Facebook -->
            <div class="d-sm-flex border p-3 rounded mb-2">
              <!-- Title and content -->
              <h2 class="fs-1 mb-0 me-3"><i class="fab fa-facebook text-facebook"></i></h2>
              <div>
                <h6 class="mb-1">Facebook</h6>
                <p class="mb-1 small">Connect with Facebook account for a personalized experience</p>
                <!-- Button -->
                <button type="button" class="btn btn-sm btn-primary mb-0 me-2">Connect Facebook</button>
                <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
              </div>
            </div>
          </div>
          <!-- Card body END -->
        </div>
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
          <div class="text-center text-lg-start">©2022 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
          </div>
        </div>
        <div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
          <!-- Language switcher -->
          <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
            <a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
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

<!-- Mirrored from blogzine.webestica.com/dashboard-edit-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 23:42:09 GMT -->
</html>