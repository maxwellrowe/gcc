<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Garfield Campus';
	$section_title = '';
	$section_url = '';
	$page_nav_secondary = false;
	$page_nav_tertiary = false;
	$page_garfield = true;
	$custom_hero = true;
	
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
	
	$body_classes[] = 'garfield-page';
	$body_classes[] = 'garfield-homepage';
	
	// Head
	require_once('../_resources/includes/head.php');
	// Set title and meta description via head($title, $description) function
	head($page_title, '', $page_garfield);
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
					<header id="page-header" class="page-hero page-hero-garfield-home">
						<div class="row gy-2 gy-md-3 gx-2">
							<div class="col-4 col-lg-3 d-block d-md-none d-lg-block order-lg-1">
								<div class="garfield-hero-portrait">
									<div id="garfield-hero-swiper-1" class="swiper">
										<div class="swiper-wrapper">
											<div class="swiper-slide garfield-hero-match-height" style="background-image: url('/gcc/_resources/images/garfield/homepage/portrait.jpg');"></div>
											<div class="swiper-slide garfield-hero-match-height" style="background-image: url('/gcc/_resources/images/garfield/homepage/portrait-2.jpg');"></div>
											<div class="swiper-slide garfield-hero-match-height" style="background-image: url('/gcc/_resources/images/garfield/homepage/portrait-3.jpg');"></div>
											<div class="swiper-slide garfield-hero-match-height" style="background-image: url('/gcc/_resources/images/garfield/homepage/portrait-4.jpg');"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-8 col-md-4 col-lg-3 order-md-3 order-lg-3">
								<div class="garfield-hero-cubes garfield-hero-match-height">
									<div class="garfield-hero-cube-1">
										<div id="garfield-hero-swiper-2" class="swiper">
											<div class="swiper-wrapper">
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube.jpg');"></div>
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-2.jpg');"></div>
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-3.jpg');"></div>
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-4.jpg');"></div>
											</div>
										</div>
									</div>
									<div class="garfield-hero-cube-2 d-none d-lg-block">
										<div id="garfield-hero-swiper-3" class="swiper">
											<div class="swiper-wrapper">
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-5.jpg');"></div>
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-6.jpg');"></div>
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-7.jpg');"></div>
												<div class="swiper-slide" style="background-image: url('/gcc/_resources/images/garfield/homepage/cube-8.jpg');"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-8 col-lg-6 order-md-2 order-lg-2">
								<div class="garfield-hero-content">
									<div class="garfield-hero-swiper swiper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="swiper-slide-content">
													<h2>Free Continuing Education Classes for Everyone</h2>
													<p>Improve your English, train for a job, finish high school, or take classes for fun. Our free noncredit classes are open to all and designed to help you reach your goals.</p>
													<div class="component-spacer cs1"></div>
													<a href="" class="btn btn-primary">Get Started</a>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="swiper-slide-content">
													<h2>Summer 2025!</h2>
													<p>June 16 to August 19</p>
													<div class="component-spacer cs1"></div>
													<a href="" class="btn btn-primary">Register Now</a>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="swiper-slide-content">
													<h2>Get Your High School Diploma</h2>
													<p>Whatever your goal is, we are here to help. You can begin at any time. Register today!</p>
													<div class="component-spacer cs1"></div>
													<a href="" class="btn btn-primary">Learn More</a>
												</div>
											</div>
										</div>
										<div class="swiper-button-prev"><span class="visually-hidden">Previous Slide</span></div>
										<div class="swiper-button-next"><span class="visually-hidden">Next Slide</span></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-5">
					<div class="container">
						<h2 class="preheading preheading-arrow">Quick Links</h2>
						<?php quicklinks(
							$style = 'white-red-border', 
							$columns_desktop = '6',
							$columns_tablet = '3', 
							$columns_mobile = '2', 
							$icon_size = '3', 
							$links = [
								["url" => "https://glendale.edu", "text" => "Live Help", "icon" => "fa-sharp fa-regular fa-comments"],
								["url" => "https://glendale.edu", "text" => "Online Counseling", "icon" => "fa-sharp fa-regular fa-comment-dots"],
								["url" => "https://glendale.edu", "text" => "Child Care", "icon" => "fa-sharp fa-regular fa-teddy-bear"],
								["url" => "https://glendale.edu", "text" => "Apply", "icon" => "fa-sharp fa-regular fa-clipboard-list-check"],
								["url" => "https://glendale.edu", "text" => "Schedule", "icon" => "fa-sharp fa-regular fa-calendar-clock"],
								["url" => "https://glendale.edu", "text" => "Noncredit Certificates", "icon" => "fa-sharp fa-regular fa-file-certificate"],
							]
						); ?>
					</div>
				</section>
				
				<section class="position-relative z-2">
					<div class="container-xxl">
						<div class="homepage-cta homepage-cta-garfield rounded bg-primary position-relative py-lg-3">
							<div class="container py-5 gcc-anim-fade-up">
								<div class="text-center mb-5">
									<h2 class="text-white">Choose Your Program</h2>
									<a href="#" class="btn btn-light">View All Programs</a>
								</div>
								
								<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gx-3">
									<div class="col">
										<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
											<img src="/gcc/_resources/images/garfield/homepage/learn-english.jpg" alt="" class="card-img-top">
											<div class="card-body p-0">
												<a href="#" class="slide-card-toggle">
													<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
														<span>Learn English</span>
														<span class="fa-sharp fa-regular fa-plus"></span>
													</h2>
												</a>
												<div class="component-slide-card-content">
													<div class="px-2 pb-2">
														<!-- CONTENT GOES HERE-->
														<?php list_group (
															$items = [
																["url" => "https://glendale.edu", "text" => "ESL Noncredit", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Class Schedule", "description" => "", "icon" => ""],
															]
														); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
											<img src="/gcc/_resources/images/garfield/homepage/job-skills.jpg" alt="" class="card-img-top">
											<div class="card-body p-0">
												<a href="#" class="slide-card-toggle">
													<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
														<span>Job Skills Classes</span>
														<span class="fa-sharp fa-regular fa-plus"></span>
													</h2>
												</a>
												<div class="component-slide-card-content">
													<div class="px-2 pb-2">
														<!-- CONTENT GOES HERE-->
														<?php list_group (
															$items = [
																["url" => "https://glendale.edu", "text" => "Short Term Vocational", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Healthcare", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Computer, Office, Accounting", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Class Schedule", "description" => "", "icon" => ""]
															]
														); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
											<img src="/gcc/_resources/images/garfield/homepage/ged.jpg" alt="" class="card-img-top">
											<div class="card-body p-0">
												<a href="#" class="slide-card-toggle">
													<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
														<span>High School, GED, & More</span>
														<span class="fa-sharp fa-regular fa-plus"></span>
													</h2>
												</a>
												<div class="component-slide-card-content">
													<div class="px-2 pb-2">
														<!-- CONTENT GOES HERE-->
														<?php list_group (
															$items = [
																["url" => "https://glendale.edu", "text" => "Student Success Center", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "High School Diploma", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "GED/ HiSET", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Support for College Success", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Basic Skills", "description" => "", "icon" => ""],
															]
														); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
											<img src="/gcc/_resources/images/garfield/homepage/older-adults.jpg" alt="" class="card-img-top">
											<div class="card-body p-0">
												<a href="#" class="slide-card-toggle">
													<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
														<span>Classes for Older Adults</span>
														<span class="fa-sharp fa-regular fa-plus"></span>
													</h2>
												</a>
												<div class="component-slide-card-content">
													<div class="px-2 pb-2">
														<!-- CONTENT GOES HERE-->
														<?php list_group (
															$items = [
																["url" => "https://glendale.edu", "text" => "Lifelong Learning", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Class Schedule", "description" => "", "icon" => ""],
															]
														); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
											<img src="/gcc/_resources/images/garfield/homepage/parenting-classes.jpg" alt="" class="card-img-top">
											<div class="card-body p-0">
												<a href="#" class="slide-card-toggle">
													<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
														<span>Parenting Classes</span>
														<span class="fa-sharp fa-regular fa-plus"></span>
													</h2>
												</a>
												<div class="component-slide-card-content">
													<div class="px-2 pb-2">
														<!-- CONTENT GOES HERE-->
														<?php list_group (
															$items = [
																["url" => "https://glendale.edu", "text" => "Parent Education", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Class Schedule", "description" => "", "icon" => ""],
															]
														); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
											<img src="/gcc/_resources/images/garfield/homepage/noncred-certs.jpg" alt="" class="card-img-top">
											<div class="card-body p-0">
												<a href="#" class="slide-card-toggle">
													<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
														<span>Noncredit Certificates</span>
														<span class="fa-sharp fa-regular fa-plus"></span>
													</h2>
												</a>
												<div class="component-slide-card-content">
													<div class="px-2 pb-2">
														<!-- CONTENT GOES HERE-->
														<?php list_group (
															$items = [
																["url" => "https://glendale.edu", "text" => "Adult Basic Secondary Education", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "ESL", "description" => "", "icon" => ""],
																["url" => "https://glendale.edu", "text" => "Short Term Vocational", "description" => "", "icon" => ""],
															]
														); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="mt-3">
					<div class="container">
						<h2>News &amp; Announcements</h2>
						<a href="#" class="arrow-link fs-7 mb-2">View all News &amp Announcements</a>
						
						<div class="swiper component-carousel-anything" data-mobile-items="1" data-tablet-items="2" data-desktop-items="3" data-autoplay="false">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="swiper-slide-content">
										<?php card(
											'Summer 2025',
											'Take a class at Garfield this summer! See classes offered in Summer 2025!',
											'light-gray',
											[
												["link" => "https://glendale.edu", "link_text" => "View Classes"]
											],
											'/gcc/_resources/images/garfield/homepage/news-1.gif',
											'vertical',
											true,
											'arrow-link'
										); ?>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-content">
										<?php card(
											'Noncredit Certificates',
											'All of the following Glendale Community College’s noncredit certificates are state approved and meet the criteria and standards prescribed by the California Community Colleges Chancellor’s Office.',
											'light-gray',
											[
												["link" => "https://glendale.edu", "link_text" => "View Certificates"]
											],
											'/gcc/_resources/images/garfield/homepage/news-2.jpg',
											'vertical',
											true,
											'arrow-link'
										); ?>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-content">
										<?php card(
											'Garfield Campus - Healthcare',
											'Explore the Short-Term Vocational Allied Health certificate programs and courses! Earn a certificate in Admin. Medical Assistant, Dental Front Office, or Medical Assistant.',
											'light-gray',
											[
												["link" => "https://glendale.edu", "link_text" => "Learn More"]
											],
											'/gcc/_resources/images/garfield/homepage/news-3.jpg',
											'vertical',
											true,
											'arrow-link'
										); ?>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-content">
										<?php card(
											'Adult High School Diploma',
											'Whatever your goal is, we are here to help. You can begin at any time. Register today!',
											'light-gray',
											[
												["link" => "https://glendale.edu", "link_text" => "Get Started"]
											],
											'/gcc/_resources/images/garfield/homepage/news-4.jpg',
											'vertical',
											true,
											'arrow-link'
										); ?>
									</div>
								</div>
							</div>
							<div class="swiper-button-prev"><span class="visually-hidden">Previous Slide</span></div>
							<div class="swiper-button-next"><span class="visually-hidden">Next Slide</span></div>
							<div class="swiper-scrollbar"></div>
						</div>
					</div>
				</section>
				
				<section class="mt-5 mb-5">
					<div class="container">
						<div class="row gy-3 gx-3 gx-lg-5 align-items-center">
							<div class="col-12 col-md-4 col-lg-6">
								<img src="/gcc/_resources/images/garfield/homepage/cube-5.jpg" class="gcc-anim-fade rounded"  alt="Noncredit Students Graduating" />
							</div>
							<div class="col-12 col-md-8 col-lg-6">
								<h2>Join the Garfield Campus Achievers</h2>
								<p>Everyone’s story is different. So, what is the same? The stories all start at the Garfield Campus!</p>
								<a href="#" class="btn btn-primary">Get Started</a>
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
		
		<?php include('../_resources/includes/garfield-footer.php'); ?>
		
		<?php include('../_resources/includes/footer-scripts.php'); ?>
		
	</body>

</html>