<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Archive: Category';
	$section_title = 'Archive for Category';
	$section_url = '';
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
				
				<section class="mt-4">
					<div class="container">
						<div class="row gx-lg-5 gy-3">
							<div class="col-12 col-md-8">
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-4.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-2.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-1.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-3.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-4.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-1.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-3.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								<a href="" class="card news-card news-card-horizontal border-0 border-bottom border-gray-500 py-3 rounded-0 mb-2">
									<div class="card-body p-0">
										<div class="row">
											<div class="col-12 col-md-4 order-lg-2">
												<img src="/gcc/_resources/images/news-2.jpg" class="rounded" alt="Image Title" data-aos="fade" />
											</div>
											<div class="col-12 col-md-8 order-lg-1">
												<h3 class="h4 mt-3 mt-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="fs-8">February 2, 2025</p>
											</div>
										</div>
									</div>
								</a>
								
								<nav class="my-3 aria-label="News Pagination">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link">Previous</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="col-12 col-md-4 pt-3">
								<div class="card bg-gray-200 border-0">
									<div class="card-body">
										<h2 class="lora h5 mb-2 fw-medium">Categories</h2>
										<ul class="list-unstyled fs-7">
											<li>
												<a href="#">Category Name</a>
											</li>
											<li>
												<a href="#">Category Name</a>
											</li>
											<li>
												<a href="#">Category Name</a>
											</li>
											<li>
												<a href="#">Category Name</a>
											</li>
											<li>
												<a href="#">Category Name</a>
											</li>
										</ul>
									</div>
								</div>
								
								<div class="card bg-gray-200 border-0 mt-3">
									<div class="card-body">
										<h2 class="lora h5 mb-2 fw-medium">Archives</h2>
										<ul class="list-unstyled fs-7">
											<li>
												<a href="#">2018</a>
											</li>
											<li>
												<a href="#">2019</a>
											</li>
											<li>
												<a href="#">2020</a>
											</li>
											<li>
												<a href="#">2021</a>
											</li>
											<li>
												<a href="#">2022</a>
											</li>
											<li>
												<a href="#">2023</a>
											</li>
											<li>
												<a href="#">2024</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="bg-sunset py-4">
					<div class="container">
						<div class="d-flex flex-column align-items-start justify-content-center flex-lg-row justify-content-lg-start align-items-center gap-2 gap-lg-3">
							<h2 class="text-uppercase h3 fw-medium m-lg-0">Connect with GCC</h2>
							<?php button (
								$type = 'default', 
								$style = 'btn-primary', 
								$size = 'default', 
								$link = '#', 
								$text = 'Events', 
								$icon = ''
							); ?>
							<?php button (
								$type = 'default', 
								$style = 'btn-primary', 
								$size = 'default', 
								$link = '#', 
								$text = 'Athletics', 
								$icon = ''
							); ?>
							<div class="d-flex align-items-center justify-content-center justify-content-lg-start mt-2 mt-lg-0 gap-2">
								<?php button (
									$type = 'btn-circle', 
									$style = 'btn-yellow', 
									$size = 'default', 
									$link = '#', 
									$text = 'Instagram', 
									$icon = 'fa-brands fa-instagram'
								); ?>
								<?php button (
									$type = 'btn-circle', 
									$style = 'btn-yellow', 
									$size = 'default', 
									$link = '#', 
									$text = 'Twitter X', 
									$icon = 'fa-brands fa-x-twitter'
								); ?>
								<?php button (
									$type = 'btn-circle', 
									$style = 'btn-yellow', 
									$size = 'default', 
									$link = '#', 
									$text = 'LinkedIn', 
									$icon = 'fa-brands fa-linkedin'
								); ?>
								<?php button (
									$type = 'btn-circle', 
									$style = 'btn-yellow', 
									$size = 'default', 
									$link = '#', 
									$text = 'Facebook', 
									$icon = 'fa-brands fa-facebook'
								); ?>
							</div>
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