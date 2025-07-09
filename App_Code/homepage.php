<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Glendale Community College';
	$section_title = '';
	$section_url = '';
	$page_nav_secondary = false;
	$page_nav_tertiary = false;
	$page_garfield = false;
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
	
	$body_classes[] = 'homepage';
	
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
					<header id="page-header" class="page-hero page-hero-home">
						<div class="swiper page-hero-home-swiper">
							<div class="swiper-wrapper"><div class="swiper-slide swiper-slide-active">
									<div class="swiper-slide-content rounded" style="background-image: url('/gcc/_resources/images/homepage/hero-1.jpg');">
										<div class="swiper-slide-content-inner match-height-row">
											<div class="container">
												<div class="swiper-slide-content-text text-white">
													<span class="fs-lg fw-bolder lh-1 d-block text-shadow-sm">
														GCC is the bridge to your future.
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-content rounded" style="background-image: url('/gcc/_resources/images/homepage/hero-2.jpg');">
										<div class="swiper-slide-content-inner match-height-row">
											<div class="container">
												<div class="swiper-slide-content-text text-white">
													<span class="fs-lg fw-bolder lh-1 d-block text-shadow-sm">
														Affordable, supportive &amp; built for your success.
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-content rounded" style="background-image: url('/gcc/_resources/images/homepage/hero-6.jpg');">
										<div class="swiper-slide-content-inner match-height-row">
											<div class="container">
												<div class="swiper-slide-content-text text-white">
													<span class="fs-lg fw-bolder lh-1 d-block text-shadow-sm">
														What does your tomorrow look like?
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-content rounded" style="background-image: url('/gcc/_resources/images/homepage/hero-5.jpg');">
										<div class="swiper-slide-content-inner match-height-row">
											<div class="container">
												<div class="swiper-slide-content-text text-white">
													<span class="fs-lg fw-bolder lh-1 d-block text-shadow-sm">
														Connect to Tomorrow
													</span>
													<span class="fw-bolder text-shadow-sm lh-1 fs-2 d-block mt-2">
														Your Future Begins at Glendale Community College
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="home-toast home-toast-top-right">
							<div class="home-toast-swiper swiper">
								<div class="swiper-wrapper">
									<a href="" class="swiper-slide d-flex align-items-center justify-content-start">
										<div class="home-toast-image" style="background-image: url('/gcc/_resources/images/placeholder_students.jpg');"></div>
										<span class="fw-bold fs-7 p-3 p-lg-2 pe-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
									</a>
									<a href="" class="swiper-slide d-flex align-items-center justify-content-start">
										<div class="home-toast-image" style="background-image: url('/gcc/_resources/images/placeholder_students_2.jpg');"></div>
										<span class="fw-bold fs-7 p-3 p-lg-2 pe-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
									</a>
									<a href="" class="swiper-slide d-flex align-items-center justify-content-start">
										<div class="home-toast-image" style="background-image: url('/gcc/_resources/images/placeholder_students_3.jpg');"></div>
										<span class="fw-bold fs-7 p-3 p-lg-2 pe-4">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
									</a>
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
						
						<div class="d-none d-lg-block home-header-dots">
							<div class="container">
								<div class="vert-dots"></div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="py-lg-4 py-4">
					<div class="container">
						<span class="preheading preheading-arrow">What's happening at &amp; around GCC</span>
						<div class="row gx-4 gy-3">
							<div class="col-12 col-md-8 col-lg-8">
								<h2 class="pt-2">Your GCC Connection</h2>
								<div class="swiper component-carousel-anything" data-mobile-items="1" data-tablet-items="2" data-desktop-items="3" data-autoplay="false">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="swiper-slide-content">
												<?php card(
													'Lorem ipsum dolor sit amet',
													'',
													'light-gray',
													[
														["link" => "https://glendale.edu", "link_text" => "Learn More"]
													],
													'/gcc/_resources/images/placeholder_students.jpg',
													'vertical',
													false,
													'arrow-link'
												); ?>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="swiper-slide-content">
												<?php card(
													'Lorem ipsum dolor sit amet',
													'',
													'light-gray',
													[
														["link" => "https://glendale.edu", "link_text" => "Learn More"]
													],
													'/gcc/_resources/images/placeholder_students_3.jpg',
													'vertical',
													false,
													'arrow-link'
												); ?>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="swiper-slide-content">
												<?php card(
													'Lorem ipsum dolor sit amet',
													'',
													'light-gray',
													[
														["link" => "https://glendale.edu", "link_text" => "Learn More"]
													],
													'/gcc/_resources/images/placeholder_students.jpg',
													'vertical',
													false,
													'arrow-link'
												); ?>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="swiper-slide-content">
												<?php card(
													'Lorem ipsum dolor sit amet',
													'',
													'light-gray',
													[
														["link" => "https://glendale.edu", "link_text" => "Learn More"]
													],
													'/gcc/_resources/images/placeholder_students_3.jpg',
													'vertical',
													false,
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
							<div class="col-12 col-md-4 col-lg-4">
								<h3 class="preheading mt-3">Events</h3>
								<div class="card component-card-event-list">
									<div class="list-group list-group-flush">
										<a href="" class="list-group-item">
											<div class="d-flex justify-content-start gap-2 align-items-start">
												<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
												<div>
													<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
													<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
														<span class="fa-sharp fa-regular fa-clock text-primary"></span>
														<span>11:00 AM - 12:30 PM</span>
													</div>
												</div>
											</div>
										</a>
										<a href="" class="list-group-item">
											<div class="d-flex justify-content-start gap-2 align-items-start">
												<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
												<div>
													<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
													<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
														<span class="fa-sharp fa-regular fa-clock text-primary"></span>
														<span>11:00 AM - 12:30 PM</span>
													</div>
												</div>
											</div>
										</a>
										<a href="" class="list-group-item">
											<div class="d-flex justify-content-start gap-2 align-items-start">
												<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
												<div>
													<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
													<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
														<span class="fa-sharp fa-regular fa-clock text-primary"></span>
														<span>11:00 AM - 12:30 PM</span>
													</div>
												</div>
											</div>
										</a>
										<a href="" class="list-group-item">
											<div class="d-flex justify-content-start gap-2 align-items-start">
												<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
												<div>
													<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
													<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
														<span class="fa-sharp fa-regular fa-clock text-primary"></span>
														<span>11:00 AM - 12:30 PM</span>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="d-flex justify-content-center justify-content-lg-end mt-2">
									<a href="#" class="arrow-link fs-7">View All Events</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="d-none d-lg-block position-relative z-3">
					<div class="vert-dots-three">
						<div class="container">
							<div class="vert-dots"></div>
						</div>
					</div>
				</section>
				
				<section class="pt-4 pt-lg-5 z-2 position-relative">
					<div class="container">
						<div class="row gx-5 gy-3">
							<div class="col-12 col-md-8 col-lg-7">
								<h2 class="preheading preheading-arrow">Ways to Learn at GCC</h2>
								<h3 class="h2">Learning experiences that are right for you.</h3>
								<p>Discover flexible and accessible ways to learn at Glendale Community College, whether you’re pursuing a degree, advancing your career, exploring new skills, or studying abroad. Explore our diverse programs designed to fit your goals and future.</p>
								<a href="" class="btn btn-outline-primary mt-2">Academics at GCC</a>
							</div>
							<div class="col-12 col-md-4 col-lg-5">
								<img src="/gcc/_resources/images/homepage/home-1.jpg" class="rounded gcc-anim-fade" alt="Students on stairs at GCC" />
							</div>
						</div>
					</div>
				</section>
				
				<section class="mt-md-n4 mt-lg-n5 z-1 position-relative">
					<div class="container-xxl bg-sunset rounded pt-4 pb-4 pb-md-5">
						<div class="container mb-0 mb-md-5">
							<div class="row gx-5 gy-3">
								<div class="col-12 col-md-8 col-lg-7">
									<h2 class="h3 gcc-anim-fade">Start Your Future</h2>
									<?php block_link (
										$style = 'red',
										$links = [
											["url" => "https://glendale.edu", "text" => "Earn a Degree, Certificate or Transfer", "description" => "With a wide range of academic programs that lead to degrees, certificates, and transfer, GCC is designed to fit your future."],
											["url" => "https://glendale.edu", "text" => "Continuing Education Noncredit", "description" => "FREE, noncredit classes, including ESL, job training, GED preparation, and personal enrichment courses."],
											["url" => "https://glendale.edu", "text" => "Dual Enrollment for Current High School Students", "description" => "Take GCC classes & earn college credit while still in high school."],
											["url" => "https://glendale.edu", "text" => "Online Classes & Distance Education", "description" => "Take classes on your schedule — flexible, high-quality learning from anywhere."]
										]
									); ?>
									
									<h3 class="h4 gcc-anim-fade mt-4">Go Beyond Glendale</h3>
									<p>GCC doesn’t only happen in Glendale. Learn about the opportunities we have to learn in other countries.</p>
									<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 gy-2">
										<div class="col">
											<?php card_snippet(
												$content = <<<HTML
													<a href="#" class="arrow-link fs-7">Baja Program</a>
												HTML, 
												$style = 'white',
												$image = '/gcc/_resources/images/homepage/home-baja-program.jpg', 
												$orientation = 'vertical',
												$match_height = true, 
												$padding = '1rem'
											) ?>
										</div>
										<div class="col">
											<?php card_snippet(
												$content = <<<HTML
													<a href="#" class="arrow-link fs-7">Study Abroad</a>
												HTML, 
												$style = 'white',
												$image = '/gcc/_resources/images/homepage/home-study-abroad.jpg', 
												$orientation = 'vertical',
												$match_height = true, 
												$padding = '1rem'
											) ?>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-5 pt-md-4 pt-lg-5">
									<h3 class="h4 gcc-anim-fade">Explore by Learning &amp; Professional Pathways</h3>
									<div class="row row-cols-2 gx-1 gy-1">
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/vpa.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Visual &amp; Performing Arts</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/lc.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Language &amp; Communication</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/ppp.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">People, Power &amp; Perspective</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/bem.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Business, Entrepreneurship &amp; Management</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/ita.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Industrial Technology &amp; Aviation</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/stem.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Science, Technology, Engineering &amp; Math</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/hwps.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Health, Wellness &amp; Public Safety</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="" class="card card-lpp bg-white gcc-anim-fade-up">
												<div class="card-body px-2 py-3 match-height-row">
													<div class="d-flex flex-column justify-content-center align-items-center text-center gap-2">
														<img src="/gcc/_resources/images/lpp/pe.png" alt="LPP Name" />
														<span class="fw-bolder fs-7 lh-1">Personal Exploration</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="position-relative z-2">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-9 col-lg-8 pt-5 pb-3 pb-lg-0">
								<span class="preheading preheading-arrow gcc-anim-fade">Beyond the Lecture Halls</span>
								<h2 class="gcc-anim-fade">Discover GCC</h2>
								<p class="fs-3 pe-lg-5 gcc-anim-fade-up">Conveniently located in Metro LA,<br />but feeling a world apart.</p>
								<div class="row row-cols-1 row-cols-md-2 mt-3">
									<div class="col">
										<div class="mb-4 gcc-anim-fade-up">
											<img src="/gcc/_resources/images/homepage/home-3.jpg" class="rounded mb-2" alt="Graduation hug" />
											<h3 class="h5 lh-1">A Community That Feels Like Home</h3>
											<p class="fs-7">At GCC, you’ll find a welcoming, diverse, and dynamic campus filled with student organizations, events, and spaces designed to inspire and connect.</p>
											<a href="" class="btn btn-primary btn-sm">Student Life</a>
										</div>
										<div class=" mb-4 gcc-anim-fade-up">
											<img src="/gcc/_resources/images/homepage/home-4.jpg" class="rounded mb-2" alt="Student working on computer" />
											<h3 class="h5 lh-1">Built-In Support for Your Journey</h3>
											<p class="fs-7">From academic counseling to career services and mental health resources, we provide the tools you need to thrive in and out of the classroom.</p>
											<a href="" class="btn btn-primary btn-sm">Find Student Support Services</a>
										</div>
									</div>
									<div class="col">
										<div class="mb-4 gcc-anim-fade-up">
											<img src="/gcc/_resources/images/homepage/home-2.jpg" class="rounded mb-2" alt="GCC Student" />
											<h3 class="h5 lh-1">Affordable Excellence</h3>
											<p class="fs-7">A high-quality education shouldn’t come with a lifetime of debt. At GCC, we offer free to low-cost tuition, financial aid, and scholarships to make your education accessible and affordable.</p>
											<a href="" class="btn btn-primary btn-sm">Paying for College</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-3 col-lg-4">
								<div class="mb-4 gcc-anim-fade-up pt-3 pt-md-0 mt-md-n5">
									<div class="home-inline-video-bg mb-2" style="background-image: url('/gcc/_resources/images/placeholder_students_2.jpg');">
										<video autoplay="true" muted="true" loop="true" playsinline="true">
											<source src="/gcc/_resources/video/gcc-arial_optimized.mp4" type="video/mp4" />
										</video>
									</div>
									<h3 class="h5 lh-1">Prime Location</h3>
									<p class="fs-7">Nestled in the heart of Glendale, our campus offers stunning views, a vibrant community, and easy access to Los Angeles—putting opportunity right at your doorstep.</p>
									<a href="" class="btn btn-primary btn-sm">Our Locations</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="position-relative d-none d-lg-block z-3">
					<div class="container position-relative">
						<div class="row">
							<div class="col-12 col-lg-7 offset-lg-5 mb-lg-n5 mt-lg-n5">
								<img src="/gcc/_resources/images/homepage/home-5.jpg" alt="Students walking on campus" class="rounded gcc-anim-fade-up" />
							</div>
						</div>
						<div class="vert-dots-two">
							<div class="container">
								<div class="vert-dots"></div>
							</div>
						</div>
					</div>
				</section>
				<section class="position-relative z-2">
					<div class="container-xxl">
						<div class="homepage-cta rounded bg-primary position-relative py-lg-5">
							<div class="container py-5 gcc-anim-fade-up">
								<h2 class="text-white fw-bolder mt-3">What does your tomorrow look like?</h2>
								
								<div class="row gx-4 gy-2">
									<div class="col-12 col-md-8 col-lg-9">
										<p class="text-white fs-4 fw-medium">Opportunity is Waiting. Apply Today.</p>
										<p class="text-white">Whether you’re new to GCC, returning after some time away or transferring from another college, your first step to enrolling at GCC is to apply.</p>
										<a href="" class="btn btn-dark mt-1">Apply to GCC</a>
									</div>
									<div class="col-12 col-md-4 col-lg-3 homepage-cta-more">
										<span class="text-white preheading preheading-arrow">More About GCC</span>
										<div class="d-flex justify-content-start align-items-start gap-1 flex-column">
											<a href="" class="btn btn-outline-light btn-sm">Request Info</a>
											<a href="" class="btn btn-outline-light btn-sm">Contact Us</a>
											<a href="" class="btn btn-outline-light btn-sm">Discover GCC</a>
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