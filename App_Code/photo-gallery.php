<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Photo Gallery Component';
	$section_title = 'Style Guide';
	$section_url = 'styleguide.php';
	$page_nav_secondary = false;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-styleguide.php';
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
						<p>The photo gallery uses an Isotope layout and the number of columns can be set for different screen sizes/ breakpoints.
							
						<div class="mt-4 border-top border-3 border-primary pt-1">
							<p class="preheading">Component Fields/ Options</p>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Option</th>
											<th>Value</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Columns Mobile</td>
											<td>
												<p>Select with options of 1 thru 2</p>
											</td>
										</tr>
										<tr>
											<td>Columns Small</td>
											<td>
												<p>Select with options of 1 thru 3</p>
											</td>
										</tr>
										<tr>
											<td>Columns Tablet</td>
											<td>
												<p>Select with options of 1 thru 3</p>
											</td>
										</tr>
										<tr>
											<td>Columns Desktop</td>
											<td>
												<p>Select with options of 1 thru 6</p>
											</td>
										</tr>
										<tr>
											<td>Images</td>
											<td>
												<p>Repeater of images</p>
												<p>Option for a caption textfield for each</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
				
				<section>
					<div class="component-photo-gallery"
						 data-columns-xs="1"
						 data-columns-sm="2"
						 data-columns-md="4"
						 data-columns-lg="4">
					  <div class="container">
						<div class="isotope-grid">
						  <?php
						  $images = [
							['src' => '/gcc/_resources/images/search-bg.jpg', 'caption' => 'Lorem ipsum dolor sit amet.'],
							['src' => '/gcc/_resources/images/garfield/homepage/portrait-4.jpg', 'caption' => 'Consectetur adipiscing elit.'],
							['src' => '/gcc/_resources/images/placeholder_profile.jpg', 'caption' => 'Sed do eiusmod tempor incididunt.'],
							['src' => '/gcc/_resources/images/news-4.jpg', 'caption' => 'Ut labore et dolore magna aliqua.'],
							['src' => '/gcc/_resources/images/placeholder_bus.jpg', 'caption' => 'Ut enim ad minim veniam.'],
							['src' => '/gcc/_resources/images/garfield/homepage/portrait-3.jpg', 'caption' => 'Quis nostrud exercitation ullamco.'],
							['src' => '/gcc/_resources/images/garfield/homepage/cube-2.jpg', 'caption' => 'Laboris nisi ut aliquip ex ea commodo.'],
							['src' => '/gcc/_resources/images/homepage/home-cta-bg.jpg', 'caption' => 'Duis aute irure dolor in reprehenderit.'],
							['src' => '/gcc/_resources/images/library-research.jpg', 'caption' => 'In voluptate velit esse cillum dolore.'],
							['src' => '/gcc/_resources/images/garfield/homepage/portrait-4.jpg', 'caption' => 'Excepteur sint occaecat cupidatat non proident.']
						  ];
						  foreach ($images as $i => $image): ?>
							<div class="gallery-item" data-index="<?= $i ?>">
							  <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-index="<?= $i ?>">
								<img src="<?= $image['src'] ?>" class="img-fluid" alt="Gallery image <?= $i ?>">
							  </a>
							  <?php if (!empty($image['caption'])): ?>
								<div class="gallery-caption"><?= htmlspecialchars($image['caption']) ?></div>
							  <?php endif; ?>
							</div>
						  <?php endforeach; ?>
						</div>
					  </div>
					</div>
					
					<!-- Modal -->
					<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
						<button class="btn btn-outline-light" data-bs-dismiss="modal"><span class="fa-sharp fa-regular fa-xmark"></span><span class="visually-hidden">Close</span></button>
						<div class="modal-dialog modal-xl modal-dialog-centered">
							<div class="modal-content bg-transparent border-0">
							<div class="modal-body p-0">
								<div class="swiper gallery-swiper">
								<div class="swiper-wrapper">
									<?php foreach ($images as $image): ?>
									<div class="swiper-slide text-center">
										<img src="<?= $image['src'] ?>" class="img-fluid" alt="Full view">
										<?php if (!empty($image['caption'])): ?>
										<div class="gallery-caption mt-2"><?= htmlspecialchars($image['caption']) ?></div>
										<?php endif; ?>
									</div>
									<?php endforeach; ?>
								</div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-pagination"></div>
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