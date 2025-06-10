<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Example of Split Hero with Image';
	$section_title = 'Style Guide';
	$section_url = 'styleguide.php';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = true;
	
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
										<a href="#" class="btn btn-outline-light btn-sm mt-2" data-aos="fade">Optional CTA</a>
										<div class="page-hero-ctas mt-3 pt-3 d-flex gap-2 flex-wrap align-items-lg-center" data-aos="fade">
											<a class="arrow-link" href="#">Optional</a>
											<a class="arrow-link" href="#">Optional</a>
											<a class="arrow-link" href="#">Optional</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col order-1 order-lg-2">
								<div class="match-height-row page-hero-image" data-aos="fade" style="background-image: url('/gcc/_resources/images/placeholder_students.jpg');">
									
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<h2>Heading 2</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet nunc ac orci scelerisque vulputate. Aliquam erat volutpat. In sit amet magna eu sapien dapibus feugiat. Sed lacinia malesuada felis, id tincidunt nisl facilisis ut.</p>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor. Duis non risus a lorem porta accumsan. Vivamus ac pulvinar leo. Sed tincidunt, lorem sed laoreet tristique, ligula libero condimentum justo, vitae luctus diam lacus non leo.</p>
						<h3>Heading 3</h3>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor. Duis non risus a lorem porta accumsan. Vivamus ac pulvinar leo. Sed tincidunt, lorem sed laoreet tristique, ligula libero condimentum justo, vitae luctus diam lacus non leo.</p>
						<blockquote>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor.</blockquote>
						<h3>Heading 3</h3>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor. Duis non risus a lorem porta accumsan. Vivamus ac pulvinar leo. Sed tincidunt, lorem sed laoreet tristique, ligula libero condimentum justo, vitae luctus diam lacus non leo.</p>
						<h4>Heading 4</h4>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor. Duis non risus a lorem porta accumsan. Vivamus ac pulvinar leo. Sed tincidunt, lorem sed laoreet tristique, ligula libero condimentum justo, vitae luctus diam lacus non leo.</p>
						<ul>
							<li>Duis non risus a lorem porta accumsan.</li>
							<li>Duis non risus a lorem porta accumsan.</li>
							<li>Duis non risus a lorem porta accumsan.</li>
						</ul>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor. Duis non risus a lorem porta accumsan. Vivamus ac pulvinar leo. Sed tincidunt, lorem sed laoreet tristique, ligula libero condimentum justo, vitae luctus diam lacus non leo.</p>
						<h2>Heading 2</h2>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu risus nec urna tristique porttitor. Duis non risus a lorem porta accumsan. Vivamus ac pulvinar leo. Sed tincidunt, lorem sed laoreet tristique, ligula libero condimentum justo, vitae luctus diam lacus non leo.</p>
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