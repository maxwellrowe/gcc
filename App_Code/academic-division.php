<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Business Division';
	$section_title = 'Business Division';
	$section_url = 'academic-division.php';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = true;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-division.php';
	$page_nav_tertiary_inlcude = '';
	
	//  Body Classes Based on Navigation
	$body_classes = [];
	if($page_nav_secondary) {
		$body_classes[] = 'secondary-nav-active';	
	}
	if($page_nav_tertiary) {
		$body_classes[] = 'tertiary-nav-active';	
	}
	if($custom_hero) {
		$body_classes[] = 'custom-hero-active';	
	}
	
	// Head
	require_once('../_resources/includes/head.php');
	// Set title and meta description via head($title, $description) function
	head($page_title, '');
?>

	<body class="<?php echo implode(' ', $body_classes); ?>">
		
		<?php 
			// check which "header" to include
			if($page_garfield) {
				include('../_resources/includes/header-garfield.php');
			} else {
				include('../_resources/includes/header.php');
			} 
		?> 
		
		<?php 
			// If nav is set include
			if($page_nav_secondary) {
				require_once('../_resources/includes/nav-secondary.php');
				page_nav_secondary($page_title, $section_title, $section_url, $page_nav_secondary_include, $page_nav_tertiary);
			} 
		?>
		
		<div class="main-wrapper d-flex justify-content-center align-items-stretch">
			<main id="main-content" class="flex-grow-1">
				<div class="container-xxl">
					<header id="page-header" class="page-hero border-0 bg-red-gradient rounded overflow-hidden p-0">
						<div class="row gap-0 row-cols-1 row-cols-lg-2 align-items-start align-items-lg-center">
							<div class="col order-2 order-lg-1 match-height-row">
								<nav class="breadcrumbs" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#">Section</a></li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
									</ol>
								</nav>
								<div class="page-hero-content">
									<div class="page-title-wrapper">
										<h1 id="page-title" class="text-white"><?php echo $page_title; ?></h1>
										<div class="page-hero-ctas mt-3 pt-3 d-flex gap-2 flex-wrap align-items-lg-center" data-aos="fade">
											<a class="arrow-link" href="#programs">Programs</a>
											<a class="arrow-link" href="#">Contact Us</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col order-1 order-lg-2">
								<div class="swiper page-hero-slider" data-mobile-items="1" data-tablet-items="2" data-desktop-items="3" data-autoplay="true">
									<div class="swiper-wrapper">
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/placeholder_bus.jpg');"></div>
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/placeholder_bus-2.jpg');"></div>
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/placeholder_bus-1.jpg');"></div>
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/placeholder_bus-3.jpg');"></div>
									</div>
									<div class="swiper-button-prev"><span class="visually-hidden">Previous Slide</span></div>
									<div class="swiper-button-next"><span class="visually-hidden">Next Slide</span></div>
									<button id="swiper-toggle">
										<span class="fa-sharp fa-solid fa-pause" aria-hidden="true"></span>
										<span class="visually-hidden">Pause autoplay</span>
									</button>
								</div>
								
							</div>
						</div>
					</header>
				</div>
				
				<section class="mt-4">
					<div class="container">
						<p class="lead mb-4">GCC’s Business Division offers real-world training in accounting, entrepreneurship, marketing, and management—preparing you for careers in today’s competitive business world.</p>
						
						<div class="bg-sunset rounded-1 p-4" id="programs">
							<h2>Programs</h2>
							<?php
								$programs = [
									[
										"title" => "Accounting",
										"url" => "#",
										"awards" => [
											"aa",
											"coa"	
										]
									],
									[
										"title" => "Business Administration",
										"url" => "#",
										"awards" => [
											"aa",
											"sc"	
										]
									],	
									[
										"title" => "Computer Applications and Business Office Technology",
										"url" => "#",
										"awards" => [
											"aa",
											"sc"	
										]
									],	
									[
										"title" => "Computer Science - Information Systems",
										"url" => "#",
										"awards" => [
											"aa",
											"sc"	
										]
									],	
									[
										"title" => "Healthcare Administration (Medical Office Administration, Billing & Coding)",
										"url" => "#",
										"awards" => [
											"aa",
											"sc"	
										]
									],	
									[
										"title" => "Real Estate",
										"url" => "#",
										"awards" => [
											"aa",
											"sc"	
										]
									],	
								];
								academic_programs($programs, 'bg-white');
							?>
						</div>
						<div class="component-spacer cs3"></div>
						<hr />
						<h2 class="preheading preheading-arrow pt-0">Contact Us</h2>
						
						<h3>Division Contacts</h3>
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Michael Scott</h2>
								<p class="small mb-0">Division Chair</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5746</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
									  </button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:mscott@glendale.edu" class="fw-medium flex-grow-1 text-break">mscott@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemail@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>B Building</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Seda Melikyan</h2>
								<p class="small mb-0">Administrative Assistant</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5484</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:seda@glendale.edu" class="fw-medium flex-grow-1 text-break">seda@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="seda@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SR311</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Jason Bender</h2>
								<p class="small mb-0">Assistant Division Chair</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5475</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:jbender@glendale.edu" class="fw-medium flex-grow-1 text-break">jbender@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="jbender@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SG 158</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
						<h3>Department Coordinators</h3>
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Erik (Araik) Margaryan</h2>
								<p class="small mb-0">Accounting Department Coordinator</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 3528</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:amargaryan@glendale.edu" class="fw-medium flex-grow-1 text-break">amargaryan@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="amargaryan@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SR 335</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Marisa Zakaria</h2>
								<p class="small mb-0">Business Administration Department Coordinator</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5479</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:marisaz@glendale.edu" class="fw-medium flex-grow-1 text-break">marisaz@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="marisaz@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SR 333</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Tony Biehl</h2>
								<p class="small mb-0">Computer Science/Information Systems Department Coordinator</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5478</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:tbiehl@glendale.edu" class="fw-medium flex-grow-1 text-break">tbiehl@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="tbiehl@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SR 334</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Sonali Perera</h2>
								<p class="small mb-0">HIT & MOA Department Coordinator</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5753</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:sperera@glendale.edu" class="fw-medium flex-grow-1 text-break">sperera@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="sperera@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SG 155</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Walter Huber</h2>
								<p class="small mb-0">Real Estate Department Coordinator</p>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">Ext. 5477</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-envelope"></span>
										<a href="mailto:whuber@glendale.edu" class="fw-medium flex-grow-1 text-break">whuber@glendale.edu</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="whuber@glendale.edu">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
										</button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>SR 340</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</section>
				
			</main>
			<?php if($page_nav_tertiary) { ?>
				<div class="d-none d-lg-block bg-light-red border-start border-1 border-primary nav-tertiary-lg">
					<button class="toggle-tertiary">
						<span class="fa-sharp fa-regular fa-angle-right"></span>
						<span class="visually-hidden">Open / Close Menu</span>
					</button>
					<div class="border-start border-5 border-secondary position-sticky">
						<?php include('../_resources/includes/nav-tertiary.php'); ?>
					</div>
				</div>
			<?php } ?>
		</div>
		
		<?php include('../_resources/includes/footer.php'); ?>
		
		<?php include('../_resources/includes/footer-scripts.php'); ?>
		
	</body>

</html>