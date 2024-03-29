<?php include_once "includes/footer2.php"; ?>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Settings START -->
<section class="py-4">
	<div class="container">
		<div class="row pb-4">
			<div class="col-12">
				<!-- Title -->
				<h1 class="mb-0 h2">Settings</h1>			
			</div>
		</div>
		<div class="row g-4">
			<!-- Profile settings START -->
			<div class="col-lg-6">
				<div class="card border">

					<!-- Card body START -->
					<div class="card-body">

						<!-- Profile START -->
						<h5 class="mb-3">Profile Settings</h5>
						<div class="form-check form-switch form-check-md">
							<input class="form-check-input" type="checkbox" role="switch" id="profilePublic" checked="">
							<label class="form-check-label" for="profilePublic">Your profile's public visibility</label>
						</div>
						<!-- Profile START -->

						<hr><!-- Divider -->

						<!-- Notification START -->
						<h5 class="card-header-title">Notifications Settings</h5>
						<p class="mb-2 mt-3">Choose type of notifications you want to receive</p>
						<div class="form-check form-switch form-check-md mb-3">
							<input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
							<label class="form-check-label" for="checkPrivacy1">Notify me via email when logging in</label>
						</div>
						<div class="form-check form-switch form-check-md mb-3">
							<input class="form-check-input" type="checkbox" id="checkPrivacy2">
							<label class="form-check-label" for="checkPrivacy2">Send SMS confirmation for all online payments</label>
						</div>
						<div class="form-check form-switch form-check-md mb-3">
							<input class="form-check-input" type="checkbox" id="checkPrivacy3" checked="">
							<label class="form-check-label" for="checkPrivacy3">Check which device(s) access your account</label>
						</div>
						<div class="form-check form-switch form-check-md mb-3">
							<input class="form-check-input" type="checkbox" id="checkPrivacy4">
							<label class="form-check-label" for="checkPrivacy4">Show your profile publicly</label>
						</div>
						<!-- Notification START -->

						<!-- Buttons -->
						<div class="d-sm-flex justify-content-end">
							<button type="button" class="btn btn-sm btn-primary me-2 mb-0">Save changes</button>
							<a href="#" class="btn btn-sm btn-outline-secondary mb-0">Cancel</a>
						</div>

					</div>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Profile settings END -->
			
			<!-- Credit card START -->
			<div class="col-lg-6">
				<div class="card border-0 mb-4">
					<div class="bg-primary p-4 rounded-3">
						<div class="d-flex justify-content-between align-items-start text-white">
							<img class="w-60" src="assets/images/visa.svg" alt="">
							<!-- Card action START -->
							<div class="dropdown">
								<a class="text-white" href="#" id="creditcardDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
									<!-- Dropdown Icon -->
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle fill="currentColor" cx="12.5" cy="3.5" r="2.5"></circle>
										<circle fill="currentColor" opacity="0.5" cx="12.5" cy="11.5" r="2.5"></circle>
										<circle fill="currentColor" opacity="0.3" cx="12.5" cy="19.5" r="2.5"></circle>
									</svg>
								</a>               
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="creditcardDropdown">
									<li><a class="dropdown-item" href="#"><i class="bi bi-credit-card-2-front-fill me-2 fw-icon"></i>Edit card</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-credit-card me-2 fw-icon"></i>Add new card</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-arrow-bar-down me-2 fw-icon"></i>Withdrawal money</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-calculator me-2 fw-icon"></i>Currency converter</a></li>
								</ul>
							</div>
							<!-- Card action END -->
						</div>
						<div class="mt-4 text-white">
							<span>Balance</span>
							<h2 class="text-white mb-0">$22,000</h2>
						</div>
						<h4 class="text-white mt-4">**** **** **** 1569</h4>
						<div class="d-flex justify-content-between text-white">
							<span>Valid thru: 12/26</span>
							<span>CVV: ***</span>
						</div>
					</div>
				</div>
				<div class="mt-2">
					<a class="text-secondary" href="#"> <i class="bi bi-plus-square pe-1"></i> Add new payment method</a>
				</div>
			</div>
			<!-- Credit card END -->

			<!-- Website and Darkmode settings START -->
			<div class="col-lg-6">
				
				<!-- Darkmode setting START -->
				<div class="card border mb-4">

					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Dark - Light Mode Settings</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Mode with radio -->
						<div class="hstack gap-2 flex-wrap">
							<!-- Mode light -->
							<div class="form-check form-check-inline align-items-center">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
								<label class="form-check-label" for="inlineRadio1">
									<img src="assets/images/icon/d-light.svg" class="rounded shadow w-80" alt="">
								</label>
								<div class="text-center mt-1 small">Light</div>
							</div>
							<!-- Mode dark -->
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">
									<img src="assets/images/icon/d-dark.svg" class="rounded shadow w-80" alt="">
								</label>
								<div class="text-center mt-1 small">Dark</div>
							</div>
							<!-- Mode system -->
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
								<label class="form-check-label" for="inlineRadio3">
									<img src="assets/images/icon/d-default.svg" class="rounded shadow w-80" alt="">
								</label>
								<div class="text-center mt-1 small">System Setting</div>
							</div>
						</div>

						<!-- Content -->
						<p class="mb-0 mt-3 small"><b>Note:</b> This is just UI of Theme mode setting. This is not working functionality.</p>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Darkmode setting END -->
				
				<!-- Website Settings START -->
				<div class="card border">

					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Website Settings</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<form class="row g-4">
							<!-- Input item -->
							<div class="col-lg-6">
								<label class="form-label">Site Name</label>
								<input type="text" class="form-control" placeholder="Site Name" value="Blogzine">
								<div class="form-text">Enter Website Name. It Display in Website and Email.</div>
							</div>
							<!-- Input item -->
							<div class="col-lg-6">
								<label class="form-label">Site Copyrights</label>
								<input type="text" class="form-control" placeholder="Site Copyrights" value="Webestica">
								<div class="form-text">Using for Contact and Send Email</div>
							</div>
							<!-- Textarea item -->
							<div class="col-12">
								<label class="form-label">Site Description</label>
								<textarea class="form-control" rows="3">Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed. </textarea>
								<div class="form-text">For write brief description of your organization, or a Website.</div> 
							</div>
							<!-- Input item -->
							<div class="col-lg-6">
								<label class="form-label">Contact Phone</label>
								<input type="text" class="form-control" placeholder="Contact Phone" value="(217) 847-3266">
								<div class="form-text">Using for Contact and Support</div>
							</div>
							<!-- Input item -->
							<div class="col-lg-6">
								<label class="form-label">Support Email</label>
								<input type="email" class="form-control" placeholder="Support Email" value="hello@webestica.com">
								<div class="form-text">For Support Email</div>
							</div>
							<!-- Radio items -->
							<div class="col-12">
								<label class="form-label">Allow Registration</label>
								<div class="d-sm-flex">
									<!-- Radio -->
									<div class="form-check radio-bg-light me-4">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
										<label class="form-check-label" for="flexRadioDefault1">
											Enable
										</label>
									</div>
									<!-- Radio -->
									<div class="form-check radio-bg-light me-4">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
										<label class="form-check-label" for="flexRadioDefault2">
											Disable
										</label>
									</div>
									<!-- Radio -->
									<div class="form-check radio-bg-light">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
										<label class="form-check-label" for="flexRadioDefault3">
											On Request
										</label>
									</div>
								</div>
							</div>
							<!-- Textarea item -->
							<div class="col-12">
								<label class="form-label">Contact Address</label>
								<textarea class="form-control" rows="3"></textarea>
								<div class="form-text">Enter support Address</div> 
							</div>
							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="button" class="btn btn-primary mb-0">Update</button>
							</div>
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Website Settings END -->
			</div>
			<!-- Website and Darkmode settings START -->

			<!-- Activity logs -->
			<div class="col-lg-6">
				<div class="bg-light rounded-3 p-4 mb-3">
					<div class="d-md-flex justify-content-between align-items-center">
						<!-- Content -->
						<div>
							<h6 class="h5">Activity Logs</h6>
							<p class="mb-1 mb-md-0">You can save your all activity logs including unusual activity detected.</p>
						</div>
						<!-- Switch -->
						<div class="form-check form-switch form-check-md mb-0">
							<input class="form-check-input" type="checkbox" id="checkPrivacy6" checked="">
						</div>
					</div>
				</div>

				<!-- Change password -->
				<div class="bg-light rounded-3 p-4 mb-3">
					<!-- Content -->
						<h6 class="h5">Change Password</h6>
						<p class="mb-1 mb-md-0">Set a unique password to protect your account.</p>
					<!-- Button -->
					<div class="d-sm-flex gap-3 align-items-center mt-3">
						<a href="#" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</a>
						<p class="mb-0 small h6">Last change 10 Aug 2020</p>
					</div>
				</div>

				<!-- 2 Step Verification -->
				<div class="bg-light rounded-3 p-4">
					<div class="d-md-flex justify-content-between align-items-center">
						<!-- Content -->
						<div>
							<h6 class="h5">2 Step Verification</h6>
							<p class="mb-1 mb-md-0">Secure your account with 2 Step security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</p>
						</div>
						<!-- Switch -->
						<div class="form-check form-switch form-check-md mb-0">
							<input class="form-check-input" type="checkbox" id="checkPrivacy13" checked="">
						</div>
					</div>
				</div>

				<!-- Activity log START -->
				<div class="card border mt-4">

					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Activity Log</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Table START -->
						<div class="table-responsive border-0">
							<table class="table align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead class="table-dark">
									<tr>
										<th scope="col" class="border-0 rounded-start">Browser</th>
										<th scope="col" class="border-0">IP</th>
										<th scope="col" class="border-0">Time</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>
								<!-- Table body START -->
								<tbody class="border-top-0">
									<!-- Table row -->
									<tr>
										<td>Chrome On Window</td>
										<td>173.238.198.108</td>
										<td>12 Nov 2021</td>
										<td><button class="btn btn-sm btn-danger-soft me-1 mb-0">Sign out</button></td>
									</tr>
									<!-- Table row -->
									<tr>
										<td>Mozilla On Window</td>
										<td>107.222.146.90</td>
										<td>08 Nov 2021</td>
										<td><button class="btn btn-sm btn-danger-soft me-1 mb-0">Sign out</button></td>
									</tr>
									<!-- Table row -->
									<tr>
										<td>Chrome On iMac</td>
										<td>231.213.125.55</td>
										<td>06 Nov 2021</td>
										<td><button class="btn btn-sm btn-danger-soft me-1 mb-0">Sign out</button></td>
									</tr>
									<!-- Table row -->
									<tr>
										<td>Mozilla On Window</td>
										<td>37.242.105.138</td>
										<td>02 Nov 2021</td>
										<td><button class="btn btn-sm btn-danger-soft me-1 mb-0">Sign out</button></td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Table END -->
					</div>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Activity log END -->
		</div>
 	</div>
</section>
<!-- =======================
Settings END -->

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

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 23:42:10 GMT -->
</html>