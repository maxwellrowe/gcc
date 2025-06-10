<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Nursing';
	$section_title = 'Nursing';
	$section_url = '';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-accounting.php';
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
										<div class="page-hero-ctas mt-3 pt-3 d-flex gap-2 flex-wrap align-items-lg-center" data-aos="fade">
											<a class="arrow-link" href="#programs">Programs</a>
											<a class="arrow-link" href="#">Contact Us</a>
										</div>
									</div>
								</div>
								<div class="academic-program-header border-top border-gray-400 py-2">
									<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row gy-2">
										<div class="academic-program-header-lpp">
											<span class="d-block fs-8 text-white mb-1">Learning &amp; Professional Pathway</span>
											<div class="d-flex align-items-center justify-content-start gap-1">
												<img src="/gcc/_resources/images/lpp/hwps.png" alt="LPP Name" />
												<a href="#" class="fs-7 text-uppercase fw-bold">Health, Wellness &amp; Public Safety <span class="fa-sharp fa-regular fa-arrow-right"></span></a>
											</div>
										</div>
										<div class="mt-2 mt-lg-0">
											<span class="d-block fs-8 text-white mb-1">Division</span>
											<div class="d-flex align-items-center justify-content-start">
												<a href="#" class="fs-7 text-uppercase fw-bold">Health Sciences <span class="fa-sharp fa-regular fa-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col order-1 order-lg-2">
								<div class="swiper page-hero-slider" data-mobile-items="1" data-tablet-items="2" data-desktop-items="3" data-autoplay="true">
									<div class="swiper-wrapper">
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/placeholder_nursing.jpg');"></div>
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/placeholder_bus-1.jpg');"></div>
									</div>
									<div class="swiper-button-prev"><span class="visually-hidden">Previous Slide</span></div>
									<div class="swiper-button-next"><span class="visually-hidden">Next Slide</span></div>
									<button id="swiper-toggle">
										<span class="fa-sharp fa-solid fa-pause" aria-hidden="true"></span>
										<span class="visually-hidden">Pause autoplay</span>
									</button>
								</div>
								
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-8">
								<p class="lead mb-3">GCC’s Nursing program equips students with the knowledge, skills, and clinical experience needed to become entry-level Registered Nurses (RNs). With expert faculty and hands-on training in real healthcare settings, students are prepared for licensure and careers in a fast-growing field. Whether you’re starting your nursing journey or advancing your skills, GCC provides the support and resources to help you succeed.</p>
								<?php button (
									$type = 'default', 
									$style = 'btn-primary', 
									$size = 'default', 
									$link = '#', 
									$text = 'Explore Courses', 
									$icon = ''
								); ?>
							</div>
							<div class="col-12 col-md-4">
								<?php card_snippet(
									$content = <<<HTML
										<h2 class="h5">Applications for Summer/ Fall 2025 will be available from March 1 - March 15, 2025.</h2>
										<a href="#" class="arrow-link fs-7">View All Announcements</a>
									HTML, 
									$style = 'gray',
									$image = '', 
									$orientation = 'vertical',
									$match_height = true, 
									$padding = ''
								) ?>
							</div>
						</div>
						<div class="component-spacer cs3"></div>
						<div class="rounded bg-sunset p-4">
							<h2>Program Options</h2>
							<?php
								$awards = [
									[
										"title" => "Register Nursing (RN) Program",
										"url" => "#",
										"type" => "Associate of Science"
									],
									[
										"title" => "LVN - RN Career Ladder Program",
										"url" => "#",
										"type" => "Associate of Science"
									],	
									[
										"title" => "LVN-RN 30-Unit Option",
										"url" => "#",
										"type" => "RN licensure for current LVNs"
									]
								];
								academic_awards($awards, 'bg-white');
							?>
						</div>
						<div class="component-spacer cs4"></div>
						<div class="row align-items-center gx-4 gy-2">
							<div class="col-12 col-md-6">
								<img src="/gcc/_resources/images/placeholder_nursing-2.jpg" alt="Nursing Students" class="rounded-1" />
							</div>
							<div class="col-12 col-md-6">
								<h2>Apply to the Nursing Program</h2>
								<p>The Nursing program requires special admission. Learn more about how to prepare for and apply to the Nursing Program.</p>
								<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row align-items-lg-center gap-2">
									<?php button (
										$type = 'default', 
										$style = 'btn-outline-primary', 
										$size = 'default', 
										$link = '#', 
										$text = 'How to Apply', 
										$icon = ''
									); ?>
									<?php button (
										$type = 'default', 
										$style = 'btn-outline-primary', 
										$size = 'default', 
										$link = '#', 
										$text = 'Join an Intro Session', 
										$icon = ''
									); ?>
								</div>
							</div>
						</div>
						<div class="component-spacer cs2"></div>
						<h2 class="preheading preheading-arrow">Connect with Us</h2>
						<?php card_snippet(
							$content = <<<HTML
								<div class="row row-cols-1 row-cols-lg-3">
									<div class="col">
										<h3 class="preheading">Office Hours</h3>
										<ul class="list-group list-group-flush">
											<li class="list-group-item bg-transparent px-0">
												Monday - Friday | 8:00 a.m.- 4:30 p.m.
											</li>
										</ul>
									</div>
									<div class="col">
										<h3 class="preheading">Contact Us</h3>
										<ul class="list-group list-group-flush">
											<li class="list-group-item px-0 bg-transparent">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-envelope"></span>
													<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">nursing@glendale.edu</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemailsuperlongemail@glendale.edu">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
												  </button>
												</div>
											</li>
											<li class="list-group-item px-0 bg-transparent">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-phone"></span>
													<a href="tel:8181234567" class="fw-medium flex-grow-1 text-break">818-123-4567</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
												  </button>
												</div>
											</li>
										</ul>
									</div>
									<div class="col">
										<h3 class="preheading">Location</h3>
										<ul class="list-group list-group-flush">
											<li class="list-group-item border-gray-500 bg-transparent px-0">
												<div class="d-flex align-items-start justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-location-dot"></span>
													<span>1500 N Verdugo Rd, Glendale CA 91208<br />Bhupesh Parikh Health Sciences & Technology | 3rd Floor</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							HTML, 
							$style = 'light-gray',
							$image = '', 
							$orientation = 'vertical',
							$match_height = false, 
							$padding = '2rem'
						) ?>
						
						<h2>Accreditation</h2>
						<div class="row gx-4 gy-2">
							<div class="col-12 col-md-8">
								<p>The Glendale Community College Registered Nursing Program is approved by the California State Board of Registered Nursing (BRN). More information is available through the BRN Website as well as our Reapproval Letter. To see our pass rates, please click on the link below: <a href="http://rn.ca.gov/education/passrates.shtml" target="_blank">http://rn.ca.gov/education/passrates.shtml</a></p>
								<p>Effective May 24, 2021, the Glendale Community College Associate Nursing Program was awarded accreditation by the Accreditation Commission for Education in Nursing (ACEN). This accreditation is available until Spring 2028.</p>
								<p>Accreditation Commission for Education in Nursing (ACEN)<br /><a href="">3343 Peachtree Road NE, Suite 850 Atlanta, GA 30326 (404) 975-5000</a></p>
							</div>
							<div class="col-12 col-md-4">
								<div class="row">
									<div class="col-6">
										<img src="/gcc/_resources/images/placeholder_nursing-accred.png" alt="Image" />
									</div>
									<div class="col-6">
										<img src="/gcc/_resources/images/placeholder_nursing-accred-2.png" alt="Image" />
									</div>
								</div>
							</div>
						</div>
						
						<div class="component-spacer cs3"></div>
						
						<div class="academic-program-lpp-cta card bg-gray-300 border-0">
							<div class="card-body p-3 p-lg-4">
								<div class="row gx-4">
									<div class="col-3 col-lg-2">
										<img src="/gcc/_resources/images/lpp/hwps.png" alt="LPP Name" class="gcc-anim-fade" />
									</div>
									<div class="col-9 col-lg-10">
										<h2>A Future in Health, Wellness &amp; Public Safety</h2>
										<p class="lead mb-3">The Nursing programs are part of the Health, Wellness &amp; Public Safety (LPP). Discover career opportunities, related programs, and a supportive community to help you succeed.</p>
										<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row align-items-lg-center gap-3">
											<a href="#" class="arrow-link">Health, Wellness &amp; Public Safety </a>
											<a href="#" class="arrow-link">View All Learning &amp; Professional Pathways</a>
										</div>
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