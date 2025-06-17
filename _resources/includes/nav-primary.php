<div class="offcanvas offcanvas-top border-0" data-bs-backdrop="false" tabindex="-1" id="primary-menu">
	<div class="offcanvas-body p-0 position-relative h-100">
		<div class="container-fluid p-0 h-100">
			<div class="row g-0 h-100">
				<div class="primary-menu-navigation col-12 col-lg-3 col-xxl-2 bg-primary h-100 pt-lg-3 pb-lg-0 ps-lg-3 pe-lg-0 overflow-auto">
					
					<div class="bg-gray-400 d-block d-lg-none p-2 pb-3">
						<div id="mobile-primary-menu-quicklinks" class="mb-2">
							<?php
								quicklinks(
									$style = 'white', 
									$columns_desktop = '3',
									$columns_tablet = '3', 
									$columns_mobile = '3', 
									$icon_size = '4', 
									$links = [
										["url" => "https://glendale.edu", "text" => "Calendar", "icon" => "fa-sharp fa-regular fa-calendar-days"],
										["url" => "https://glendale.edu", "text" => "Directory", "icon" => "fa-sharp fa-regular fa-unicorn"],
										
										["url" => "https://glendale.edu", "text" => "Maps", "icon" => "fa-sharp fa-regular fa-location-dot"],
										
										["url" => "https://glendale.edu", "text" => "MyGCC", "icon" => "fa-sharp fa-regular fa-arrow-right-to-bracket"],
										
										["url" => "https://glendale.edu", "text" => "Canvas", "icon" => "fa-sharp fa-regular fa-laptop"],
										
										["url" => "https://glendale.edu", "text" => "Student Email", "icon" => "fa-sharp fa-regular fa-envelope"],
										
										["url" => "https://glendale.edu", "text" => "Library", "icon" => "fa-sharp fa-regular fa-books"],
										
										["url" => "https://glendale.edu", "text" => "Translate", "icon" => "fa-sharp fa-regular fa-language"],
										
										["url" => "https://glendale.edu", "text" => "A-Z Index", "icon" => "fa-sharp fa-regular fa-arrow-up-a-z"],
										
									]
								);
							?>
						</div>
						<div class="rounded" id="mobile-primary-info-for">
							<button class="btn btn-warning d-block w-100 rounded" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-info-for-dropdown-menu" aria-expanded="false" aria-controls="mobile-info-for-dropdown-menu">
								<span class="fw-bolder text-primary">Info for...</span> <span class="fa-sharp fa-regular fa-angle-down"></span>
							</button>
							<div class="collapse" id="mobile-info-for-dropdown-menu">
								<ul>
									<?php include('nav-audiences.php'); ?>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- Tabs -->
					<div class="nav flex-column nav-pills primary-menu-tabs p-2 p-lg-0" role="tablist" aria-orientation="vertical">
						
						<button id="pmt-start-at-gcc-tab" data-bs-toggle="pill" data-bs-target="#pmt-start-at-gcc" type="button" role="tab" aria-controls="pmt-start-at-gcc" aria-selected="false">Start at GCC</button>
						
						<button id="pmt-academics-tab" data-bs-toggle="pill" data-bs-target="#pmt-academics" type="button" role="tab" aria-controls="pmt-academics" aria-selected="false">Academics</button>
						
						<a href="">Noncredit</a>
						
						<button id="pmt-support-tab" data-bs-toggle="pill" data-bs-target="#pmt-support" type="button" role="tab" aria-controls="pmt-support" aria-selected="false">Support</button>
						
						<button id="pmt-campus-life-tab" data-bs-toggle="pill" data-bs-target="#pmt-campus-life" type="button" role="tab" aria-controls="pmt-campus-life" aria-selected="false">Campus Life</button>
						
						<button id="pmt-beyond-gcc-tab" data-bs-toggle="pill" data-bs-target="#pmt-beyond-gcc" type="button" role="tab" aria-controls="pmt-beyond-gcc" aria-selected="false">Beyond GCC</button>
						
						<button id="pmt-about-tab" data-bs-toggle="pill" data-bs-target="#pmt-about" type="button" role="tab" aria-controls="pmt-about" aria-selected="false">About</button>
						
					</div>
					
					<!-- Locations -->
					<div class="primary-menu-locations mt-3">
						<div class="d-flex align-items-center justify-content-start gap-1 mb-2">
							<span class="preheading mb-0">Locations</span>
							<a href="" class="primary-menu-view-locations">View All</a>
						</div>
						<a href="">
							<span class="fa-sharp fa-regular fa-location-dot"></span>
							<span>Glendale Community College Verdugo Campus</span>
						</a>
						<a href="">
							<span class="fa-sharp fa-regular fa-location-dot"></span>
							<span>Garfield Campus Continuing Education</span>
						</a>
						<a href="">
							<span class="fa-sharp fa-regular fa-location-dot"></span>
							<span>Professional Development Center</span>
						</a>
					</div>
					
				</div>
				<div class="primary-menu-content col-12 col-lg-9 col-xxl-10 bg-white overflow-auto">
					<button class="d-block d-lg-none" id="primary-menu-back">
						<span class="fa-sharp fa-regular fa-arrow-left"></span> Main Menu
					</button>
					
					
					<div class="tab-content">
						
						<div class="tab-pane fade show active pt-3 px-3" id="pmt-default" role="tabpanel" aria-labelledby="pmt-default-tab">
							<?php include('nav-primary-default.php'); ?>
						</div>
						
						<div class="tab-pane fade pt-3 px-3" id="pmt-start-at-gcc" role="tabpanel" aria-labelledby="pmt-start-at-gcc-tab">
							<?php include('nav-primary-start-at-gcc.php'); ?>
						</div>
						
						<div class="tab-pane fade pt-3 px-3" id="pmt-academics" role="tabpanel" aria-labelledby="pmt-academics-tab">
							<?php include('nav-primary-academics.php'); ?>
						</div>
						
						<div class="tab-pane fade pt-3 px-3" id="pmt-support" role="tabpanel" aria-labelledby="pmt-support-tab">
							<?php include('nav-primary-support.php'); ?>
						</div>
						
						<div class="tab-pane fade pt-3 px-3" id="pmt-campus-life" role="tabpanel" aria-labelledby="pmt-campus-life-tab">
							<?php include('nav-primary-campus-life.php'); ?>
						</div>
						
						<div class="tab-pane fade pt-3 px-3" id="pmt-beyond-gcc" role="tabpanel" aria-labelledby="pmt-beyond-gcc-tab">
							<?php include('nav-primary-beyond-gcc.php'); ?>
						</div>
						
						<div class="tab-pane fade pt-3 px-3" id="pmt-about" role="tabpanel" aria-labelledby="pmt-about">
							<?php include('nav-primary-about.php'); ?>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id="primary-menu-desktop-quicklinks" class="bg-yellow position-fixed bottom-0 w-100 py-3 d-none d-lg-block">
			<nav aria-label="Quick Links" class="d-flex align-items-center justify-content-center gap-3">
				<a href="" class="d-flex align-items-center flex-nowrap gap-1">
					<span class="fa-sharp fa-regular fa-calendar-days"></span>
					<span class="fw-bold">Calendar</span>
				</a>
				<a href="" class="d-flex align-items-center flex-nowrap gap-1">
					<span class="fa-sharp fa-regular fa-user-magnifying-glass"></span>
					<span class="fw-bold">Directory</span>
				</a>
				<a href="" class="d-flex align-items-center flex-nowrap gap-1">
					<span class="fa-sharp fa-regular fa-location-dot"></span>
					<span class="fw-bold">Maps</span>
				</a>
				<a href="" class="d-flex align-items-center flex-nowrap gap-1">
					<span class="fa-sharp fa-regular fa-books"></span>
					<span class="fw-bold">Library</span>
				</a>
				
				<div class="border-start border-end border-1 border-dark d-flex align-items-center gap-2 px-3">
					<a href="" class="btn btn-light btn-sm">MyGCC</a>
					<a href="" class="btn btn-light btn-sm">Canvas</a>
					<a href="" class="btn btn-light btn-sm">Student Email</a>
				</div>
				<button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#google-translate-modal">
					<span class="fa-sharp fa-regular fa-language"></span>
					Translate
				</button>
			</nav>
		</div>
	</div>
</div>