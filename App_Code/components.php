<!DOCTYPE html>
<html lang="en">
<?php
	// Page Variables Setup
	$page_title = 'Components';
	$section_title = 'Templates & Resources';
	$section_url = 'index.php';
	$page_nav_secondary = true;
	$page_nav_tertiary = true;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-styleguide.php';
	$page_nav_tertiary_inlcude = 'navs/tertiary-nav-components.php';
	
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
						</div>
					</header>
				</div>
				
				<section>
					<div class="container">
						<h2 id="utilities">Utilities (AKA Component Advanced Options)</h2>
						<?php include('includes/components/utilities.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="spacer">Spacer</h2>
						<?php include('includes/components/spacer.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="contact-card">Card - Contact</h2>
						<span class="badge bg-secondary mb-2">Advanced Component</span>
						<?php include('includes/advanced-components/card-contact.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="alert">Alert/ Notification</h2>
						<?php include('includes/components/notification.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="video-modal">Video Modal</h2>
						<?php include('includes/components/video-modal.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="datatable">Data Table</h2>
						<?php include('includes/components/datatable.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="events">Featured Events</h2>
						<?php include('includes/advanced-components/events.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="card">Card</h2>
						<?php include('includes/components/card.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="button">Button</h2>
						<?php include('includes/components/button.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="quicklinks">Quicklinks</h2>
						<?php include('includes/components/quicklinks.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="list-group">List Group</h2>
						<?php include('includes/components/list-group.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="block-link">Block Link</h2>
						<?php include('includes/components/block-link.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="programs">Academic Programs</h2>
						<?php include('includes/components/programs.php'); ?>
					</div>
				</section>
				
				<section>
					<div class="container">
						<h2 id="awards">Academic Awards</h2>
						<?php include('includes/components/awards.php'); ?>
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