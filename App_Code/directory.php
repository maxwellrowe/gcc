<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Staff & Faculty Directory';
	$section_title = 'Staff & Faculty Directory';
	$section_url = 'styleguide.php';
	$page_nav_secondary = false;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = '';
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
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at placerat neque, tristique suscipit lacus. Fusce dictum lectus vel venenatis dapibus. Cras fringilla dignissim dui vitae pulvinar. Quisque sed rutrum tortor. Sed eget tempus neque. Etiam molestie pharetra dictum. Curabitur fringilla ante venenatis augue malesuada, da</p>
					</div>
				</section>
				
				<section class="mb-4">
					<div class="container">
						
						<div id="alpha-filter" class="mb-3 text-start text-md-center">
						  <strong class="me-2 d-block d-md-inline">Filter by Last Name:</strong>
						  <a href="#" class="alpha-letter active" data-letter="all">All</a>
						  <?php foreach (range('A', 'Z') as $letter): ?>
							<a href="#" class="alpha-letter" data-letter="<?php echo $letter; ?>"><?php echo $letter; ?></a>
						  <?php endforeach; ?>
						</div>
						
						<table class="table table-striped directory-datatable nowrap">
							<thead>
								<tr>
									<th data-priority="1">Name</th>
									<th data-priority="4">Email</th>
									<th data-priority="5">Extension/ Phone</th>
									<th data-priority="6">Location</th>
									<th data-priority="3">Division/ Department</th>
									<th data-priority="2"></th>
								</tr>
							</thead>
							<tbody>
								<?php include('directory-data.php'); ?>
							</tbody>
						</table>
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