<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Directory Thumbnail';
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
						<ul>
							<li>This should pull from the Directory. Optionally, allow for an editor to overwrite the title.</li>
							<li>Number of columns should be an option, eg 1, 2, 3 ... 5 for mobile, tablet and desktop breakpoints.</li>
							<li>Allow for the ability to pull by individual or meta data if possible.</li>
							<li>This should be able to be placed on any page and location.</li>
						</ul>
						<h2>Full-Time Faculty</h2>
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2">
							<div class="col">
								<div class="card component-card-contact component-card-contact-vertical border-primary match-height-row">
									<img src="/gcc/_resources/images/directory-1.jpg" alt="Jane Doe" class="card-img-top" />
									<div class="p-2">
										<h2 class="fs-5 mb-1">Byron Delto</h2>
										<p class="fs-8 text-gray-600">Music Technology, Live Sound, Electronic Music, Applied Music, Jazz Guitar, Music Appreciation, Department Chair</p>
										<a href="#" class="arrow-link fs-8">View</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card component-card-contact component-card-contact-vertical border-primary match-height-row">
									<img src="/gcc/_resources/images/directory-2.jpg" alt="Jane Doe" class="card-img-top" />
									<div class="p-2">
										<h2 class="fs-5 mb-1">Peter Green</h2>
										<p class="fs-8 text-gray-600">Concert Singers, Piano, Music Fundamentals, Division Chair</p>
										<a href="#" class="arrow-link fs-8">View</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card component-card-contact component-card-contact-vertical border-primary match-height-row">
									<img src="/gcc/_resources/images/directory-3.jpg" alt="Jane Doe" class="card-img-top" />
									<div class="p-2">
										<h2 class="fs-5 mb-1">Jayson Helgeson</h2>
										<p class="fs-8 text-gray-600">Music Technology, Recording, Songwriting, Music Business, Guitar</p>
										<a href="#" class="arrow-link fs-8">View</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card component-card-contact component-card-contact-vertical border-primary match-height-row">
									<img src="/gcc/_resources/images/directory-4.jpg" alt="Jane Doe" class="card-img-top" />
									<div class="p-2">
										<h2 class="fs-5 mb-1">Paul Sherman</h2>
										<p class="fs-8 text-gray-600">Oboe, Music History, Applied Music, Chamber Music, Music Appreciation, Orchestra</p>
										<a href="#" class="arrow-link fs-8">View</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card component-card-contact component-card-contact-vertical border-primary match-height-row">
									<img src="/gcc/_resources/images/directory-5.jpg" alt="Jane Doe" class="card-img-top" />
									<div class="p-2">
										<h2 class="fs-5 mb-1">Tobin C. Sparfeld</h2>
										<p class="fs-8 text-gray-600">Choral Music, Vocal Music, Music Theory, Musicianship, Music Fundamentals, Music Appreciation</p>
										<a href="#" class="arrow-link fs-8">View</a>
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