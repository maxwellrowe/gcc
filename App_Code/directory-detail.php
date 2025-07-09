<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Dr. John Doe';
	$section_title = 'Dr. John Doe';
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
						<div class="row">
							<div class="col-12 col-md-6">
								<nav class="breadcrumbs" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="directory.php">Directory</a></li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
									</ol>
								</nav>
							</div>
							<div class="col-12 col-md-6 text-lg-end">
								<a href="directory.php" class="arrow-link fs-7 justify-content-lg-end">View Directory</a>
							</div>
						</div>
						<div class="page-title-wrapper d-flex justify-content-start justify-content-lg-between align-items-start flex-column gap-1">
							<h1 id="page-title"><?php echo $page_title; ?></h1>
							<span class="lora fst-italic fs-5 text-gray-600">Dean of Business Division</span>
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<div class="row gx-5 gy-3">
							<div class="col-12 col-md-5 col-lg-4 order-md-2">
								<img src="/gcc/_resources/images/directory-profile.jpg" alt="Dr. John Doe" class="rounded gcc-anim-fade-up" />
							</div>
							<div class="col-12 col-md-7 col-lg-8 order-md-1">
								<div class="card component-contact-card rounded-0 border-0">
									<div class="card-body p-0">
										<ul class="list-group list-group-flush border-gray-500 border-top border-bottom">
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-envelope"></span>
													<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">myemail@glendale.edu</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemail@glendale.edu">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
													</button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-phone"></span>
													<a href="tel:8181234567" class="fw-medium flex-grow-1 text-break">818-123-4567</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
												  </button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-location-dot"></span>
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>Verdugo</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-building"></span>
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>X Building, Room 2</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-sitemap"></span>
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>
															<span class="fw-bold">Department:</span> Department Name
														</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-sitemap"></span>
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>
															<span class="fw-bold">Division:</span> Division Name
														</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
								<div class="pt-3 pb-4">
									<a href="" class="btn btn-primary">Download Resume</a>
								</div>
								
								<h2 class="h4">Office Hours</h2>
								<ul>
									<li>Monday: 10 AM to 12PM</li>
									<li>Thursday: 11 AM to 1 PM</li>
								</ul>
								<h2 class="h4">Biography</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis. Cras tincidunt neque lorem, malesuada tincidunt tellus fermentum at. Proin hendrerit velit in felis mattis dictum. Integer eget eleifend risus. Suspendisse potenti. In eget tortor interdum, egestas felis eu, pharetra neque. Sed at arcu est. Phasellus elementum dolor ut purus pretium bibendum. Sed non arcu at quam sodales dictum.</p>
									
								<p>Sed vel nibh luctus, pellentesque nibh id, dignissim nisi. Nullam eget erat non enim feugiat vestibulum. Ut luctus purus quam, ac volutpat felis convallis vitae. Suspendisse potenti. Sed rhoncus ultricies ex imperdiet suscipit. Morbi scelerisque convallis mi ac vehicula. Duis sed orci quis turpis feugiat varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed condimentum cursus nulla.</p>
									
								<p>Mauris aliquam diam ut congue vulputate. Nulla mollis enim ut ligula faucibus rutrum. Nunc volutpat vel dui eu condimentum. Proin lectus diam, facilisis in vulputate et, finibus ut eros. Fusce tristique lectus sed hendrerit congue. Nulla eros elit, vulputate non elit eget, pulvinar pellentesque velit. Donec accumsan eros et tellus aliquet condimentum. Sed elementum efficitur magna sit amet finibus. Mauris mattis libero sit amet dolor consequat rutrum. Mauris consectetur sodales nibh, ut pharetra erat interdum et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Nullam vel metus imperdiet, vulputate massa quis, efficitur turpis. Integer feugiat sodales sem id aliquam. Cras a turpis pretium, bibendum felis vitae, pellentesque ante.</p>
							</div>
						</div>
						
						<hr />
						<div class="d-flex justify-content-center flex-column align-items-center">
							<a href="directory.php" class="arrow-link">View Full Directory</a>
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