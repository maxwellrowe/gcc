<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Alerts';
	$section_title = 'Alerts';
	$section_url = '';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = false;
	
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
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-styleguide.php';
	$page_nav_tertiary_inlcude = '';
	
	// Head
	require_once('../_resources/includes/head.php');
	// Set title and meta description via head($title, $description) function
	head($page_title, '');
?>

	<body class="<?php echo implode(' ', $body_classes); ?>">
		
		<!-- Alert -->
		<div class="component-ou-alerts bg-gray-300" role="alert">
			<div class="container-xxl">
				<div class="component-notification d-flex flex-column flex-lg-row align-items-lg-center justify-content-start justify-content-lg-between p-3 gap-2">
					<div class="d-flex d-flex flex-column flex-lg-row align-items-lg-center justify-content-start gap-2">
						<div class="fs-2 text-secondary">
							<span class="fa-sharp fa-light fa-circle-exclamation"></span>
						</div>
						<div>
							<span class="fs-8 text-uppercase d-block mb-1">December 9, 2025</span>
							<h2 class="h4 my-0">Notification Title</h2>
							<h3 class="fs-6 mb-1 fw-bold">Notification Subtitle</h3>
							<p class="mb-0 fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis.</p>
						</div>
					</div>
					<a href="#" class="btn btn-primary btn-sm align-self-start align-self-lg-center text-nowrap">Call to Action</a>
				</div>
			</div>
		</div>
		
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
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<h2>Above Header Alerts</h2>
						<h3>Info</h3>
						<div class="component-ou-alerts bg-gray-300" role="alert">
							<div class="container-xxl">
								<div class="component-notification d-flex flex-column flex-lg-row align-items-lg-center justify-content-start justify-content-lg-between p-3 gap-2">
									<div class="d-flex d-flex flex-column flex-lg-row align-items-lg-center justify-content-start gap-2">
										<div class="fs-2 text-secondary">
											<span class="fa-sharp fa-light fa-circle-exclamation"></span>
										</div>
										<div>
											<span class="fs-8 text-uppercase d-block mb-1">December 9, 2025</span>
											<h2 class="h4 my-0">Notification Title</h2>
											<h3 class="fs-6 mb-1 fw-bold">Notification Subtitle</h3>
											<p class="mb-0 fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis.</p>
										</div>
									</div>
									<a href="#" class="btn btn-primary btn-sm align-self-start align-self-lg-center text-nowrap">Call to Action</a>
								</div>
							</div>
						</div>
						<h3 class="mt-3">Warning</h3>
						<div class="component-ou-alerts bg-light-yellow" role="alert">
							<div class="container-xxl">
								<div class="component-notification d-flex flex-column flex-lg-row align-items-lg-center justify-content-start justify-content-lg-between p-3 gap-2">
									<div class="d-flex d-flex flex-column flex-lg-row align-items-lg-center justify-content-start gap-2">
										<div class="fs-2 text-secondary">
											<span class="fa-sharp fa-light fa-circle-exclamation"></span>
										</div>
										<div>
											<span class="fs-8 text-uppercase d-block mb-1">December 9, 2025</span>
											<h2 class="h4 my-0">Notification Title</h2>
											<h3 class="fs-6 mb-1 fw-bold">Notification Subtitle</h3>
											<p class="mb-0 fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis.</p>
										</div>
									</div>
									<a href="#" class="btn btn-primary btn-sm align-self-start align-self-lg-center text-nowrap">Call to Action</a>
								</div>
							</div>
						</div>
						<h3 class="mt-3">Emergency</h3>
						<div class="component-ou-alerts bg-bright-red" role="alert">
							<div class="container-xxl">
								<div class="component-notification d-flex flex-column flex-lg-row align-items-lg-center justify-content-start justify-content-lg-between p-3 gap-2">
									<div class="d-flex d-flex flex-column flex-lg-row align-items-lg-center justify-content-start gap-2">
										<div class="fs-2 text-white">
											<span class="fa-sharp fa-light fa-circle-exclamation"></span>
										</div>
										<div>
											<span class="fs-8 text-uppercase d-block mb-1 text-white">December 9, 2025</span>
											<h2 class="h4 my-0 text-white">Notification Title</h2>
											<h3 class="fs-6 mb-1 fw-bold text-white">Notification Subtitle</h3>
											<p class="mb-0 fs-6 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis.</p>
										</div>
									</div>
									<a href="#" class="btn btn-outline-light btn-sm align-self-start align-self-lg-center text-nowrap">Call to Action</a>
								</div>
							</div>
						</div>
						<h2>Inline Alert</h2>
						<?php include('includes/components/notification.php'); ?>
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