<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Full Width Hero with Video';
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
					<header id="page-header" class="page-hero page-hero-full page-hero-full-video border-0 rounded overflow-hidden p-0" style="background-image: url('/gcc/_resources/images/placeholder_students_2.jpg');">
						<video autoplay="true" muted="true" loop="true" playsinline="true">
							<source src="/gcc/_resources/video/placeholder.mp4" type="video/mp4" />
						</video>
						<button id="page-hero-full-video-play-pause" class="btn btn-outline-light">
							<span class="fa-sharp fa-solid fa-pause"></span>
							<span class="visually-hidden">Play/ Pause Video</span>
						</button>
						<div class="container">
							<div class="page-title-wrapper d-flex justify-content-end flex-column pt-5">
								<h1 id="page-title" class="text-white"><?php echo $page_title; ?></h1>
								<div class="on-this-page bg-gray-300 rounded p-2 d-flex gap-1 align-items-center fw-bold lh-1 flex-wrap w-max-content mt-2">
									<span class="text-uppercase text-nowrap">On this page</span>
									<span class="fa-sharp fa-regular fa-arrow-right"></span>
									<a href="#">Optional</a>
									<a href="#">Optional</a>
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
					<div class="border-start border-5 border-secondary position-sticky">
						<?php include('../_resources/includes/nav-tertiary.php'); ?>
						<button class="toggle-tertiary">
							<span class="fa-sharp fa-regular fa-angle-right"></span>
							<span class="visually-hidden">Open / Close Menu</span>
						</button>
					</div>
				</div>
			<?php } ?>
		</div>
		
		<?php include('../_resources/includes/footer.php'); ?>
		
		<?php include('../_resources/includes/footer-scripts.php'); ?>
		
	</body>

</html>