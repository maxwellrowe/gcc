<a href="#main-content" class="skip-link visually-hidden">Skip to main content</a>
<div class="d-none d-lg-block">
	<div class="container-xxl utility-nav bg-gray-300">
		<div class="py-1 fs-8">
			<nav aria-label="Quick Links" class="d-flex justify-content-between align-items-center">
				<div>
					<a href="index.php" class="d-flex align-items-center justify-content-start gap-1">
						<span class="fa-sharp fa-regular fa-arrow-left"></span>
						<span>Verdugo Campus</span>
					</a>
				</div>
				<div class="d-flex align-items-center justify-content-end gap-2 gap-lg-3">
					<a href="#" class="d-flex align-items-center justify-content-start gap-1" data-bs-toggle="modal" data-bs-target="#google-translate-modal">
						<span class="fa-sharp fa-regular fa-language"></span>
						<span>Translate</span>
					</a>
					<a href="#" class="d-flex align-items-center justify-content-start gap-1">
						<span class="fa-sharp fa-regular fa-users"></span>
						<span>Directory</span>
					</a>
					<a href="#" class="d-flex align-items-center justify-content-start gap-1">
						<span class="fa-sharp fa-regular fa-books"></span>
						<span>Library</span>
					</a>
					<a href="#" class="d-flex align-items-center justify-content-start gap-1">
						<span class="fa-sharp fa-regular fa-calendar-days"></span>
						<span>Calendar</span>
					</a>
					<div class="d-flex align-items-center justify-content-end gap-2">
						<a href="#" class="btn btn-dark btn-sm">Canvas</a>
						<a href="#" class="btn btn-primary btn-sm">MyGCC</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<header id="global-header" class="bg-white">
	<div id="main-nav">
		<a href="" class="btn btn-primary d-block btn-sm rounded-0 mobile-top-apply-button d-sm-none">Apply to Noncredit</a>
		<div class="container-xxl">
			<nav class="d-flex justify-content-between align-items-center gap-1 gap-md-4 py-3 py-lg-0 position-relative">
				<div class="d-flex justify-content-start align-items-center gap-3">
					<a href="index.php" class="global-brand">
						<img src="/gcc/_resources/images/garfield/logo.png" alt="Glendale City College Logo" />
					</a>
					<a href="#" class="btn btn-primary d-none d-sm-block">Apply to Noncredit</a>
					
					<!-- Garfield Desktop Nav-->
					<nav id="garfield-nav-primary-desktop" class="navbar navbar-expand-lg d-none d-lg-block py-0">
						<ul class="navbar-nav gap-2 gap-xl-3 gap-xxl-4">
							<li class="nav-item dropdown dropdown-fullwidth-wrapper">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Services
								</a>
								<div class="dropdown-menu dropdown-fullwidth">
									<?php include('garfield-nav-primary-services.php'); ?>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Class Schedule
								</a>
								<div class="dropdown-menu">
									<?php include('garfield-nav-primary-schedule.php'); ?>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-fullwidth-wrapper">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Programs
								</a>
								<div class="dropdown-menu dropdown-fullwidth">
									<?php include('garfield-nav-primary-programs.php'); ?>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-fullwidth-wrapper">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Help
								</a>
								<div class="dropdown-menu dropdown-fullwidth">
									<?php include('garfield-nav-primary-help.php'); ?>
								</div>
							</li>
						</ul>
					</nav>
				</div>
				<div class="d-flex justify-content-end gap-3">
					<ul class="nav gap-1 gap-md-2 flex-nowrap">
						<li class="nav-item">
							<button class="btn btn-dark btn-circle collapsed" aria-label="Search" data-bs-target="#global-search" data-bs-toggle="offcanvas" type="button" id="global-search-toggle">
								<span class="fa-sharp fa-regular fa-magnifying-glass"></span>
								<span class="fa-sharp fa-regular fa-xmark"></span>
								<span class="visually-hidden">Open Search</span>
							</button>
						</li>
						<li class="nav-item d-block d-lg-none">
							<button class="btn btn-primary d-flex align-items-center justify-content-between gap-1" id="primary-menu-toggle" data-bs-toggle="offcanvas" type="button" data-bs-target="#primary-menu" aria-label="Main Navigation">
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

<?php include('garfield-nav-primary.php'); ?>
<?php include('garfield-search.php'); ?>