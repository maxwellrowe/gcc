<footer class="bg-gray-300 pt-1" id="global-footer">
	<div class="py-4">
		<div class="container-xxl">
			<div class="row gy-3">
				<div class="col-12 col-md-6 col-lg-3 text-center text-md-start">
					<div id="footer-brand" class="mb-2">
						<a href="/">
							<img src="/gcc/_resources/images/gcc-logo.png" class="img-fluid" alt="Glendale Community College Logo" />
						</a>
					</div>
					<p class="small">
						1500 North Verdugo Road<br />
						Glendale, CA 91208
					</p>
					<p class="small">
						<a href="tel:8182401000" target="_blank">818-240-1000</a>
					</p>
					<p class="small">
						<a href="/maps"><span class="fa-sharp fa-regular fa-location-dot"></span> Maps &amp; Parking</a>
					</p>
					<div class="d-flex align-items-center justify-content-center justify-content-md-start flex-wrap gap-2 mb-2 mt-1">
						<a href="https://www.linkedin.com/company/glendale-community-college-ca-91208" class="btn btn-yellow btn-circle btn-sm" target="_blank">
							<span class="fa-brands fa-instagram"></span>
							<span class="visually-hidden">Instagram</span>
						</a>
						<a href="https://twitter.com/gccpio" class="btn btn-yellow btn-circle btn-sm" target="_blank">
							<span class="fa-brands fa-x-twitter"></span>
							<span class="visually-hidden">X</span>
						</a>
						<a href="https://www.linkedin.com/company/glendale-community-college-ca-91208" class="btn btn-yellow btn-circle btn-sm" target="_blank">
							<span class="fa-brands fa-linkedin"></span>
							<span class="visually-hidden">LinkedIn</span>
						</a>
						<a href="https://www.facebook.com/GlendaleCollege" class="btn btn-yellow btn-circle btn-sm" target="_blank">
							<span class="fa-brands fa-facebook"></span>
							<span class="visually-hidden">Facebook</span>
						</a>
					</div>
				</div>
				<div class="col-12 text-center text-md-start col-md-6 col-lg-4">
					<h2 class="preheading small">Locations</h2>
					<div class="d-flex flex-column align-items-center align-items-md-start gap-2">
						<a href="" class="d-flex align-items-center flex-column flex-md-row justify-content-start gap-2">
							<img src="/gcc/_resources/images/footer-gcc.jpg" style="width: 3rem;" class="rounded-circle flex-shrink-0" alt="GCC" />
							<span class="small">GCC Verdugo Campus</span>
						</a>
						<a href="" class="d-flex align-items-center flex-column flex-md-row justify-content-start gap-2">
							<img src="/gcc/_resources/images/footer-garfield.jpg" style="width: 3rem;" class="rounded-circle flex-shrink-0" alt="GCC" />
							<span class="small">Garfield Campus Continuing Education</span>
						</a>
						<a href="" class="d-flex align-items-center flex-column flex-md-row justify-content-start gap-2">
							<img src="/gcc/_resources/images/footer-pdc.jpg" style="width: 3rem;" class="rounded-circle flex-shrink-0" alt="GCC" />
							<span class="small">Professional Development Center</span>
						</a>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-5 text-center text-md-start">
					<div class="row gy-3">
						<div class="col-12 col-md-6 col-lg-4">
							<h2 class="preheading small">Info For</h2>
							<div class="d-flex gap-2 flex-column small">
								<a href="#">Prospective Students</a>
								<a href="#">Current Students</a>
								<a href="#">International Students</a>
								<a href="#">High School Students</a>
								<a href="#">Employees</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<h2 class="preheading small">The College</h2>
							<div class="d-flex gap-2 flex-column small">
								<a href="">Board Agendas</a>
								<a href="">Accreditation</a>
								<a href="">Donate to GCC</a>
								<a href="">Employment</a>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<h2 class="preheading small">Safety</h2>
							<div class="d-flex gap-2 flex-column small">
								<a href="">College Police</a>
								<a href="">Sign Up for Alerts</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-credits bg-white py-3">
		<div class="container-xxl">
			<div class="d-flex justify-content-start align-items-center flex-column flex-md-row gap-2">
				<span class="fs-8">&copy; <?php echo date('Y'); ?> Glendale Community College</span>
				<a href="" class="small">Acceptable Use</a>
				<a href="" class="small">Accessibility</a>
				<a href="" class="small">Site Map</a>
				<button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#google-translate-modal">Translate</button>
			</div>
		</div>
	</div>
</footer>

<!-- Google Translate -->
<div class="modal fade" id="google-translate-modal" tabindex="-1" aria-label="Translate Website">
	<button class="btn btn-outline-light" data-bs-dismiss="modal"><span class="fa-sharp fa-regular fa-xmark"></span><span class="visually-hidden">Close</span></button>
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content rounded-0">
			<div class="modal-body p-3">
				<?php include('google-translate.php'); ?>
			</div>
		</div>
	</div>
</div>