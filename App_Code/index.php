<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Templates & Resources';
	$section_title = 'Templates & Resources';
	$section_url = 'index.php';
	$page_nav_secondary = true;
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
						<p><strong>Note:</strong> The page templates below for the most part utilize the components and snippets available for use.</p>
						<p><strong>Structure:</strong> There are couple of snippets that provide structure — Section and Columns. By default, the #main-content does not have a container, the container is provided by Section snippet, which contains a "container." To me this could be problematic for the average editor. One potential solution:</p>
						<ul>
							<li>Create a page parameter to set the main content as contained vs full width. If full width, then the editor would need to use the Section snippets to provide basic structure.</li>
						</ul>
						<?php block_link (
							$style = 'red-border',
							$links = [
								["url" => "homepage.php", "text" => "Home Page"],
								["url" => "news.php", "text" => "News"],
								["url" => "news-archive.php", "text" => "News Archive"],
								["url" => "news-single.php", "text" => "News Single Article"],
								["url" => "academic-programs.php", "text" => "Academic Program Listing"],
								["url" => "academic-program-accounting.php", "text" => "Academic Program - Accounting"],
								["url" => "academic-program-nursing.php", "text" => "Academic Program - Nursing"],
								["url" => "academic-division.php", "text" => "Academic Division"],
								["url" => "eops.php", "text" => "EOPS/ CARE/ Foster Youth"],
								["url" => "financial-aid.php", "text" => "Financial Aid"],
								["url" => "current-students.php", "text" => "Current Students"],
								["url" => "library.php", "text" => "Library"],
								["url" => "apply.php", "text" => "Apply"],
								["url" => "directory.php", "text" => "Directory"],
								["url" => "directory-detail.php", "text" => "Directory Detail"],
								["url" => "temp-basic-page.php", "text" => "Basic Page"],
								["url" => "temp-hero-split.php", "text" => "Hero - Split"],
								["url" => "temp-hero-split-slider.php", "text" => "Hero - Split Slider"],
								["url" => "temp-hero-split-video.php", "text" => "Hero - Split with Video"],
								["url" => "temp-hero-full.php", "text" => "Hero - Full Width"],
								["url" => "temp-hero-full-video.php", "text" => "Hero - Full Width with Video"],
								["url" => "alerts.php", "text" => "Alerts"],
								["url" => "404.php", "text" => "404 Error"],
							]
						); ?>
						
						<h2>Garfield</h2>
						<?php block_link (
							$style = 'red-border',
							$links = [
								["url" => "garfield.php", "text" => "Garfield Header and Footer"],
								["url" => "garfield-homepage.php", "text" => "Garfield Homepage"]
							]
						); ?>
						
						<h2>Resources</h2>
						<?php block_link (
							$style = 'red-border',
							$links = [
								["url" => "components.php", "text" => "Components"],
								["url" => "snippets.php", "text" => "Snippets"],
								["url" => "styleguide.php", "text" => "Style Guide"]
							]
						); ?>
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