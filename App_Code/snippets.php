<!DOCTYPE html>
<html lang="en">
<?php
	// Page Variables Setup
	$page_title = 'Snippets';
	$section_title = 'Templates & Resources';
	$section_url = 'index.php';
	$page_nav_secondary = true;
	$page_nav_tertiary = true;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-styleguide.php';
	$page_nav_tertiary_inlcude = 'navs/tertiary-nav-snippets.php';
	
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
				
				<?php include('includes/snippets/section.php'); ?>
				
				<section class="mb-5" id="columns">
					<div class="container">
						<h2>Columns</h2>
						<?php include('includes/snippets/columns.php'); ?>
					</div>
				</section>
				
				<section class="mb-5" id="equal-columns">
					<div class="container">
						<h2>Equal Columns</h2>
						<?php include('includes/snippets/columns-equal.php'); ?>
					</div>
				</section>
				
				<section class="mb-5" id="full-width-bg">
					<div class="container">
						<h2>Full Width Background</h2>
					</div>
					<?php include('includes/snippets/full-width-bg.php'); ?>
				</section>
				
				<section class="mb-5" id="accordion">
					<div class="container">
						<h2>Accordion</h2>
						<?php include('includes/snippets/accordion.php'); ?>
					</div>
				</section>
				
				<section class="mb-5" id="card">
					<div class="container">
						<h2>Card</h2>
						<?php include('includes/snippets/card.php'); ?>
					</div>
				</section>
				
				<section class="mb-5" id="card-slide">
					<div class="container">
						<h2>Slide Card</h2>
						<?php include('includes/snippets/card-slide.php'); ?>
					</div>
				</section>
				
				<section class="mb-5" id="carousel-anything">
					<div class="container">
						<h2>Carousel Anything</h2>
						<?php include('includes/snippets/carousel-anything.php'); ?>
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