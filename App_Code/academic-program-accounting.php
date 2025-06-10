<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Accounting';
	$section_title = 'Accounting';
	$section_url = '';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-accounting.php';
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
				<div class="container">
					<header id="page-header">
						<nav class="breadcrumbs" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Section</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
							</ol>
						</nav>
						<div class="page-title-wrapper d-flex justify-content-start justify-content-lg-between align-items-start align-items-lg-end flex-column flex-lg-row gap-3">
							<h1 id="page-title"><?php echo $page_title; ?></h1>
							<div class="on-this-page bg-gray-300 rounded p-2 d-flex gap-1 align-items-center fw-bold lh-1 flex-wrap">
								<span class="text-uppercase text-nowrap">On this page</span>
								<span class="fa-sharp fa-regular fa-arrow-right"></span>
								<a href="#">Optional</a>
								<a href="#">Optional</a>
							</div>
						</div>
						
						<div class="academic-program-header border-top border-bottom border-gray-400 py-2">
							<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row gy-2">
								<div class="academic-program-header-lpp">
									<span class="d-block fs-8 text-gray-600 mb-1">Learning &amp; Professional Pathway</span>
									<div class="d-flex align-items-center justify-content-start gap-1">
										<img src="/gcc/_resources/images/lpp/bem.png" alt="LPP Name" />
										<a href="#" class="fs-7 text-uppercase fw-bold">Business, Entrepreneurship &amp; Management <span class="fa-sharp fa-regular fa-arrow-right"></span></a>
									</div>
								</div>
								<div class="mt-2 mt-lg-0">
									<span class="d-block fs-8 text-gray-600 mb-1">Division</span>
									<div class="d-flex align-items-center justify-content-start">
										<a href="#" class="fs-7 text-uppercase fw-bold">Business <span class="fa-sharp fa-regular fa-arrow-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<p class="lead mb-3">Our accounting courses and programs provide comprehensive training in computerized accounting systems, financial accounting, and managerial accounting, preparing students for careers in finance and accounting.</p>
						<?php button (
							$type = 'default', 
							$style = 'btn-primary', 
							$size = 'default', 
							$link = '#', 
							$text = 'Explore Courses', 
							$icon = ''
						); ?>
						<div class="component-spacer cs3"></div>
						<div class="rounded bg-sunset p-4">
							<h2>Certificate & Degree Options</h2>
							<?php
								$awards = [
									[
										"title" => "Accounting",
										"url" => "#",
										"type" => "Associate of Science"
									],
									[
										"title" => "Accounting",
										"url" => "#",
										"type" => "Certificate of Achievement"
									],	
									[
										"title" => "Bookkeeping",
										"url" => "#",
										"type" => "Associate of Science"
									],
									[
										"title" => "Bookkeeping",
										"url" => "#",
										"type" => "Certificate of Achievement"
									]
								];
								academic_awards($awards, 'bg-white');
							?>
						</div>
						<div class="component-spacer cs2"></div>
						<h2 class="preheading preheading-arrow">Connect with Us</h2>
						<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0 mb-2">
							<div class="px-3 py-2">
								<h2 class="h5 mb-0">Business Division</h2>
							</div>
							<ul class="list-group list-group-flush border-gray-500">
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-phone"></span>
										<a href="tel:0123456789" class="fw-medium flex-grow-1 text-break">(818) 240-1000 ext. 5484</a>
										<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
											<span class="fa-sharp fa-regular fa-copy"></span>
											<span class="visually-hidden">Copy</span>
									  </button>
									</div>
								</li>
								<li class="list-group-item border-gray-500">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<span class="fa-sharp fa-regular fa-location-dot"></span>
										<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
											<span>San Rafael 311</span>
											<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
						
						<div class="component-spacer cs3"></div>
						
						<div class="academic-program-lpp-cta card bg-gray-300 border-0">
							<div class="card-body p-3 p-lg-4">
								<div class="row gx-4">
									<div class="col-3 col-lg-2">
										<img src="/gcc/_resources/images/lpp/bem.png" alt="LPP Name" class="gcc-anim-fade" />
									</div>
									<div class="col-9 col-lg-10">
										<h2>A Future in Business, Entrepreneurship &amp; Management</h2>
										<p class="lead mb-3">The Accounting programs are part of the Business, Entrepreneurship &amp; Management Learning &amp; Professional Pathway (LPP). Discover career opportunities, related programs, and a supportive community to help you succeed.</p>
										<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row align-items-lg-center gap-3">
											<a href="#" class="arrow-link">Business, Entrepreneurship &amp; Management</a>
											<a href="#" class="arrow-link">View All Learning &amp; Professional Pathways</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
			</main>
			<?php if($page_nav_tertiary) { ?>
				<div class="d-none d-lg-block bg-light-red border-start border-1 border-primary nav-tertiary-lg">
					<div class="border-start border-5 border-secondary position-sticky">
						<button class="toggle-tertiary">
							<span class="fa-sharp fa-regular fa-angle-right"></span>
							<span class="visually-hidden">Open / Close Menu</span>
						</button>
						<?php include('../_resources/includes/nav-tertiary.php'); ?>
					</div>
				</div>
			<?php } ?>
		</div>
		
		<?php include('../_resources/includes/footer.php'); ?>
		
		<?php include('../_resources/includes/footer-scripts.php'); ?>
		
	</body>

</html>