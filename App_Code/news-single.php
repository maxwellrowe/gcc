<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
	$section_title = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
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
						<div class="row">
							<div class="col-12 col-md-6">
								<nav class="breadcrumbs" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#">Section</a></li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
									</ol>
								</nav>
							</div>
							<div class="col-12 col-md-6 text-lg-end">
								<a href="" class="arrow-link fs-7 justify-content-lg-end">View All News</a>
							</div>
						</div>
						<div class="page-title-wrapper mt-5">
							<div class="row gx-lg-4">
								<div class="col-12">
									<p class="fs-7">February 25, 2024</p>
									<h1 id="page-title"><?php echo $page_title; ?></h1>
									
									<div class="news-share w-max-content p-2 rounded-1 mt-3 bg-gray-300 d-flex justify-content-start align-items-start align-items-lg-center flex-column flex-lg-row flex-wrap gap-2">
										<div class="d-flex align-items-center justify-content-start gap-1">
											<span class="preheading m-0">Share This</span>
											<span class="fa-sharp fa-regular fa-arrow-right"></span>
										</div>
										<div class="d-flex align-items-center justify-content-start flex-wrap gap-2">
											<a href="https://www.facebook.com/sharer/sharer.php?u=[URL_VAR]" target="_blank">
												<span class="fa-brands fa-facebook"></span>
												<span class="visually-hidden">Facebook</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=TEXT&url=URL" target="_blank">
												<span class="fa-brands fa-x-twitter"></span>
												<span class="visually-hidden">Twitter X</span>
											</a>
											<a href="https://www.linkedin.com/shareArticle?url=URL&title=TITLE" target="_blank">
												<span class="fa-brands fa-linkedin"></span>
												<span class="visually-hidden">LinkedIn</span>
											</a>
											<a href="https://www.reddit.com/submit?url=YOUR_URL&title=YOUR_TITLE" target="_blank">
												<span class="fa-brands fa-reddit"></span>
												<span class="visually-hidden">Reddit</span>
											</a>
											<a href="mailto:?subject=TITLE&body=URL" target="_blank">
												<span class="fa-sharp fa-regular fa-envelope"></span>
												<span class="visually-hidden">Email</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="my-5">
					<div class="container">
						<div class="row gx-lg-5 gy-3">
							<div class="col-12">
								<p>For the share icons, a URL variable needs to be added to each.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur?</p>
								
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
								
								<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
								
								<p>Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
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