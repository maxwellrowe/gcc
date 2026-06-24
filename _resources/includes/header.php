<a href="#main-content" class="skip-link visually-hidden">Skip to main content</a>
<div class="d-none d-lg-block">
	<div class="container-xxl utility-nav bg-gray-300">
		<div class="py-1 fs-8">
			<nav aria-label="Quick Links" class="d-flex align-items-center justify-content-between gap-3">
				<div class="d-flex align-items-center gap-3">
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
				</div>
				<div class="d-flex align-items-center gap-3">
					<div class="d-flex align-items-center gap-2 ps-3">
						<button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#google-translate-modal">
							<span class="fa-sharp fa-regular fa-language"></span>
							Translate
						</button>
						<a href="" class="btn btn-light btn-sm">MyGCC</a>
						<a href="" class="btn btn-light btn-sm">Canvas</a>
						<a href="" class="btn btn-light btn-sm">Student Email</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<header id="global-header" class="bg-white">
	<div id="main-nav">
		<div class="container-fluid px-xl-4">
			<nav class="d-flex justify-content-between align-items-center gap-1 gap-md-4 py-3" aria-label="Tertiary Navigation">
				<div class="d-flex justify-content-start align-items-center gap-sm-3">
					<a href="index.php" class="global-brand">
						<img src="/gcc/_resources/images/gcc-logo.png" alt="Glendale City College Logo" />
					</a>
					<a href="#" class="btn btn-primary header-apply-button">Apply Now</a>
				</div>
				<div class="d-flex justify-content-end gap-3">
					<ul class="nav gap-1 gap-md-2 flex-nowrap">
						<li class="nav-item dropdown d-none d-lg-block">
							<a id="info-for-dropdown" class="dropdown-toggle btn btn-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Info For...</a>
							<ul class="dropdown-menu" id="info-for-dropdown-menu">
								<?php include('nav-audiences.php'); ?>
							</ul>
						</li>
						<li class="nav-item">
							<button class="btn btn-dark btn-circle collapsed" aria-label="Search" data-bs-target="#global-search" data-bs-toggle="offcanvas" type="button" id="global-search-toggle">
								<span class="fa-sharp fa-regular fa-magnifying-glass"></span>
								<span class="fa-sharp fa-regular fa-xmark"></span>
								<span class="visually-hidden">Open Search</span>
							</button>
						</li>
						<li class="nav-item">
							<button class="btn btn-yellow d-flex align-items-center justify-content-between gap-1" id="primary-menu-toggle" data-bs-toggle="offcanvas" type="button" data-bs-target="#primary-menu" aria-label="Main Navigation">
								<span class="menu-bars">
									<span class="menu-bar"></span>
									<span class="menu-bar"></span>
									<span class="menu-bar"></span>
								</span>
								<span class="d-none d-lg-inline-block">Menu</span>
							</button>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
</header>

<?php include('nav-primary.php'); ?>
<?php include('search.php'); ?>