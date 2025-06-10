<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'EOPS/ CARE/ Foster Youth';
	$section_title = 'EOPS/ CARE/ Foster Youth';
	$section_url = '';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = true;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-eops.php';
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
											<a class="arrow-link" href="#">Apply</a>
											<a class="arrow-link" href="#">Programs &amp; Services</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col order-1 order-lg-2">
								<a href="#" class="component-video-modal match-height-row page-hero-image d-block" data-bs-toggle="modal" data-bs-target="#page-hero-video-modal" arial-label="Play Video Caption" style="background-image: url('/gcc/_resources/images/eops-hero.jpg');">
									<span class="play-button fs-3">
										<span class="fa-sharp fa-solid fa-play"></span>
									</span>
									<div class="caption position-absolute d-flex flex-wrap align-items-center justify-content-center">
										<span class="text-white d-line-block w-max-content py-1 px-2 rounded-1 m-auto bg-dark fs-7">EOPS at GCC</span>
									</div>
								</a>
							</div>
						</div>
					</header>
				</div>
				<div class="modal fade video-modal" id="page-hero-video-modal" tabindex="-1" aria-label="Video" aria-hidden="true">
					<button class="btn btn-outline-light" data-bs-dismiss="modal"><span class="fa-sharp fa-regular fa-xmark"></span><span class="visually-hidden">Close</span></button>
					<div class="modal-dialog modal-dialog-centered modal-xl">
						<div class="modal-content rounded-0">
							<div class="modal-body p-0">
								<div class="ratio ratio-16x9">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/K5SZlu2bGLg?si=aGuYJhzo7PcY0RQK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="true"></iframe>
								</div>
								<div class="video-modal-caption p-1 bg-dark text-white small text-center">
									EOPS at GCC
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<h2>Helping Students Overcome Barriers & Achieve More!</h2>
						<p class="lead">EOPS supports students facing economic, language, social, and educational challenges by providing specialized services to help them stay enrolled, complete certificates, graduate, and transfer to universities. We’re here to help you succeed with personalized guidance, resources, and a supportive community.</p>
						<hr />
						<h3 class="preheading preheading-arrow">Announcements</h3>
						
						<div class="row row-cols-1 row-cols-md-2">
							<div class="col">
								<?php card_snippet(
									$content = <<<HTML
										<h2 class="h4">Winter 2025 Counseling</h2>
										<p class="fs-7 mb-0">Counseling meeting dates are January 6 thru February 13</p>
									HTML, 
									$style = 'light-gray',
									$image = '', 
									$orientation = 'vertical',
									$match_height = true, 
									$padding = ''
								) ?>
							</div>
							<div class="col">
								<?php card_snippet(
									$content = <<<HTML
										<h2 class="h4">EOPS is now accepting applications for Spring 2025 until March 14, 2025</h2>
										<a href="" class="arrow-link fs-7">How to Apply</a>
									HTML, 
									$style = 'white-red-border',
									$image = '', 
									$orientation = 'vertical',
									$match_height = true, 
									$padding = ''
								) ?>
							</div>
						</div>
						<div class="component-spacer cs4"></div>
						<div class="p-4 bg-sunset rounded">
							<h2 class="gcc-anim-fade-up">Why EOPS</h2>
							<a href="" class="arrow-link gcc-anim-fade-up">View All Programs & Services</a>
							<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-3 gy-3 mt-2">
								<div class="col">
									<?php card_snippet(
										$content = <<<HTML
											<h2 class="h4">Book Voucher</h2>
											<p class="fs-7">EOPS students who fulfill all responsibilities will receive a voucher to help pay for textbooks.</p>
										HTML, 
										$style = 'white',
										$image = '', 
										$orientation = 'vertical',
										$match_height = true, 
										$padding = ''
									) ?>
								</div>
								<div class="col">
									<?php card_snippet(
										$content = <<<HTML
											<h2 class="h4">EOPS Grant</h2>
											<p class="fs-7">EOPS grants are awarded to eligible students in Fall and Spring semesters based on funding and financial aid eligibility.</p>
										HTML, 
										$style = 'white',
										$image = '', 
										$orientation = 'vertical',
										$match_height = true, 
										$padding = ''
									) ?>
								</div>
								<div class="col">
									<?php card_snippet(
										$content = <<<HTML
											<h2 class="h4">Priority Tutoring</h2>
											<p class="fs-7">EOPS students get an additional one half hour per week of tutoring at the Writing Center and Tutoring Center.</p>
										HTML, 
										$style = 'white',
										$image = '', 
										$orientation = 'vertical',
										$match_height = true, 
										$padding = ''
									) ?>
								</div>
								<div class="col">
									<?php card_snippet(
										$content = <<<HTML
											<h2 class="h4">EOPS Dedicated Counselor</h2>
											<p class="fs-7">An EOPS counselor will be available to help you achieve your educational and career goals.</p>
										HTML, 
										$style = 'white',
										$image = '', 
										$orientation = 'vertical',
										$match_height = true, 
										$padding = ''
									) ?>
								</div>
								<div class="col">
									<?php card_snippet(
										$content = <<<HTML
											<h2 class="h4">Priority Registration</h2>
											<p class="fs-7">EOPS students are given priority registration each semester, allowing you to register for classes before the general student population.</p>
										HTML, 
										$style = 'white',
										$image = '', 
										$orientation = 'vertical',
										$match_height = true, 
										$padding = ''
									) ?>
								</div>
								<div class="col">
									<?php card_snippet(
										$content = <<<HTML
											<h2 class="h4">Career & Transfer Planning</h2>
											<p class="fs-7">EOPS Counselors at GCC can assist you with choosing a major, planning for transfer, and developing your career path.</p>
										HTML, 
										$style = 'white',
										$image = '', 
										$orientation = 'vertical',
										$match_height = true, 
										$padding = ''
									) ?>
								</div>
							</div>
						</div>
						
						<div class="component-spacer cs6"></div>
						<div class="row row-cols-1 row-cols-md-2 align-items-center gx-4 gy-3">
							<div class="col">
								<h2>Services that Go Above and Beyond</h2>
								<?php list_group (
									$items = [
										["url" => "", "text" => "CARE Program", "description" => "The CARE program helps single parents who are currently on CalWORKs and enrolled in EOPS by giving them additional support and resources to help them succeed!", "icon" => ""],
										["url" => "", "text" => "Foster Youth Program", "description" => "The Foster Youth Support Program ensures that current and/or former foster youth have every opportunity to succeed in higher education by providing them with financial and academic resources.", "icon" => ""]
									]
								); ?>
							</div>
							<div class="col">
								<img src="/gcc/_resources/images/eops-2.jpg" alt="Student and Counselor" class="gcc-anim-fade rounded" />
							</div>
						</div>
						<div class="component-spacer cs6"></div>
						<?php card_snippet(
							$content = <<<HTML
								<h2>Get Started - How to Apply</h2>
								<p class="lead">EOPS,  CARE and the Foster Yoputh Program all start with applying to EOPS.  Learn more about the application process, requirements, and qualifications.</p>
								<a href="" class="btn btn-primary">How to Apply</a>
							HTML, 
							$style = 'light-gray',
							$image = '', 
							$orientation = 'vertical',
							$match_height = true, 
							$padding = '3rem'
						) ?>
						<div class="component-spacer cs6"></div>
						<div class="row row-cols-1 row-cols-md-3">
							<div class="col">
								<h2 class="h3">Contact Us</h2>
								<div class="card component-contact-card rounded-0 border-0">
									<div class="card-body p-0">
										<ul class="list-group list-group-flush border-gray-500">
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-envelope"></span>
													<a href="mailto:eopsdesk@glendale.edu" class="fw-medium flex-grow-1 text-break">eopsdesk@glendale.edu</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemail@glendale.edu">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
													</button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-phone"></span>
													<a href="tel:8182401000" class="fw-medium flex-grow-1 text-break">(818) 240-1000 ex. 6900</a>
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
														<span>Sierra Vista Building, 3rd floor</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>EOPS Chatbot</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>Submit Online Questionnaire</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col">
								<h2 class="h3">Hours</h2>
								<p class="fw-bolder">Virtual</p>
								<ul class="fs-7">
									<li>M-Th: 8:30am-4:30pm</li>
									<li>F: 9:00am-2:00pm</li>
								</ul>
								<a href="" class="arrow-link fs-7">Zoom</a>
								<p class="fw-bolder mt-3">In-Person</p>
								<ul class="fs-7">
									<li>M-Th: 8:30am-5:00pm</li>
									<li>F: 8:30am-3:30pm</li>
								</ul>
							</div>
							<div class="col">
								<h2 class="preheading preheading-arrow">Resources and Student Tools</h2>
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "EOPS Calendar"],
										["url" => "https://glendale.edu", "text" => "EOPS Workshops & Classes"],
										["url" => "https://glendale.edu", "text" => "EOPS FAQ"],
										["url" => "https://glendale.edu", "text" => "Graduation"],
										["url" => "https://glendale.edu", "text" => "Suggestion Box"]
									]
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