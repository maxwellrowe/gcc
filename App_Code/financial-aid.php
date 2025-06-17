<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Financial Aid';
	$section_title = 'Financial Aid';
	$section_url = '';
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
					<header id="page-header" class="page-hero page-hero-full border-0 rounded overflow-hidden p-0" style="background-image: url('/gcc/_resources/images/financial-aid.jpg');">
						<div class="container">
							<div class="page-title-wrapper d-flex justify-content-end flex-column pt-5">
								<h1 id="page-title" class="text-white"><?php echo $page_title; ?></h1>
								<div class="on-this-page bg-gray-300 rounded p-2 d-flex gap-1 align-items-center fw-bold lh-1 flex-wrap w-max-content mt-2">
									<span class="text-uppercase text-nowrap">School Code</span>
									<span class="fa-sharp fa-regular fa-arrow-right"></span>
									<a href="#">001203</a>
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<h2>Invest in Your Future with Financial Aid</h2>
						<p class="lead">At Glendale Community College, cost should never be a barrier to education. Our Financial Aid Office is here to help you access grants, scholarships, work-study opportunities, and other resources to make college more affordable.</p>
						<div class="component-spacer cs-3"></div>
						<h2 class="preheading preheading-arrow">
							Announcements
						</h2>
						
						<div class="row row-cols-1 row-cols-3 gy-3">
							<div class="col">
								<?php card(
									'Introducing Bank Mobile',
									'To provide more flexible options for students receiving refunds, GCC has partnered with BankMobile Disbursements to deliver financial aid and other school refunds to GCC students beginning on January 29, 2024.',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "Learn More"]
									],
									'/gcc/_resources/images/financial-aid-announcement.jpg',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'It’s time to apply for Financial Aid for 2025-2026!',
									'The FAFSA / California Dream Act is now open.',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "Get Started"]
									],
									'/gcc/_resources/images/financial-aid-announcement-2.jpg',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'Federal Student Loans Repayment is Here',
									'We’ve hired ECMC Solutions to provide you with FREE Federal Student Loan Counseling Services. If you have questions about your repayment options you can call 877-331-3262 or visit ecmcsolutions.org.',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "Learn More"]
									],
									'/gcc/_resources/images/financial-aid-announcement-3.jpg',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="my-4 py-4 bg-sunset">
					<div class="container">
						<h2>How to Get Started  with Financial Aid</h2>
						<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2 w-max-content" role="alert">
							<div>
								<h2 class="fs-6 my-0">Important: When applying, use school code School Code: 001203</h2>
							</div>
						</div>
						<div class="row row-cols-1 row-cols-md-2 gy-3 mt-1">
							<div class="col">
								<?php card(
									'Apply for Aid',
									'Submit the FAFSA or California Dream Act Application to determine your eligibility.',
									'red',
									[
										["link" => "https://glendale.edu", "link_text" => "Apply for Aid"]
									],
									'',
									'vertical',
									true,
									'btn btn-light btn-sm'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'Know Your Deadlines',
									'Priority deadline: March 2. Apply early for the best aid options! ',
									'white',
									[
										["link" => "https://glendale.edu", "link_text" => "Important Dates & Deadlines"]
									],
									'',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
						</div>
						
						<h3 class="mt-3">We're Here to Help</h3>
						<?php
							quicklinks(
								$style = 'white', 
								$columns_desktop = '5',
								$columns_tablet = '3', 
								$columns_mobile = '1', 
								$icon_size = '3', 
								$links = [
									["url" => "https://glendale.com", "text" => "Submit the Financial Aid Contact Form", "icon" => "fa-sharp fa-regular fa-message-lines"],
									["url" => "https://glendale.com", "text" => "Request a Call Back", "icon" => "fa-sharp fa-regular fa-phone"],
									["url" => "https://glendale.com", "text" => "Sign Up for a Zoom Appointment", "icon" => "fa-sharp fa-regular fa-laptop"],
									["url" => "https://glendale.com", "text" => "Attend an In-Person Workshop", "icon" => "fa-sharp fa-regular fa-users"],
									["url" => "https://glendale.com", "text" => "Financial Aid FAQ", "icon" => "fa-sharp fa-regular fa-clipboard-question"]
								]
							);
						?>
					</div>
				</section>
				
				<section class="my-4">
					<div class="container">
						<h2>Types of Aid Available</h2>
						<a href="" class="arrow-link">Explore Financial Aid</a>
						
						<div class="row gy-3 gx-4 mt-1">
							<div class="col-12 col-md-6 col-lg-7">
								<div class="mb-2">
									<?php card(
										'Grants & Scholarships',
										'Free money that doesn’t need to be repaid.',
										'white-red-border',
										[
											["link" => "https://glendale.edu", "link_text" => "Grants & Scholarships"]
										],
										'',
										'vertical',
										true,
										'arrow-link'
									); ?>
								</div>
								<div class="mb-2">
									<?php card(
										'Work Study',
										'Earn money while gaining work experience.',
										'white-red-border',
										[
											["link" => "https://glendale.edu", "link_text" => "Work Study Options"]
										],
										'',
										'vertical',
										true,
										'arrow-link'
									); ?>
								</div>
								<div>
									<?php card(
										'Student Loans',
										'Borrow responsibly to fund your education.',
										'white-red-border',
										[
											["link" => "https://glendale.edu", "link_text" => "Student Loan Options"]
										],
										'',
										'vertical',
										true,
										'arrow-link'
									); ?>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-5">
								<h3 class="preheading">Key Resources</h3>
								<?php list_group (
									$items = [
										["url" => "https://glendale.edu", "text" => "Net Price Calculator", "description" => "Estimate your education costs.", "icon" => ""],
										["url" => "https://glendale.edu", "text" => "Forms & Documents", "description" => "Access required paperwork.", "icon" => ""],
										["url" => "https://glendale.edu", "text" => "Satisfactory Academic Progress", "description" => "Learn what’s required to maintain eligibility.", "icon" => ""],
									]
								); ?>
							</div>
						</div>
						<div class="component-spacer cs3"></div>
						<hr />
						<h2 class="mb-0">Hours &amp; Contact Information</h2>
						
						<div class="row gx-4 gy-3">
							<div class="col-12 col-md-8">
								<ul>
									<li>All services shut down 15 minutes prior to posted closing time to allow all queued students to be served.</li>
									<li>Hours of operation are subject to change.</li>
									<li>On the first Friday of every month, our office closes at 2:15 p.m. for professional development.</li>
								</ul>
								<div class="row row-cols-1 row-cols-md-2 gy-3">
									<div class="col">
										<h3 class="h5">In-Person Hours</h3>
										<ul>
											<li>Monday: 8:30 a.m. – 5:00 p.m.</li>
											<li>Tuesday: 8:30 a.m. – 5:00 p.m.</li>
											<li>Wednesday: 8:30 a.m. – 5:00 p.m.</li>
											<li>Thursday: 10:30 a.m. – 5:00 p.m.</li>
											<li>Friday: 8:30 a.m. – 3:30 p.m.</li>
										</ul>
									</div>
									<div class="col">
										<h3 class="h5">Remote/ Call Back Hours</h3>
										<ul>
											<li>Monday – Thursday: 11:00 a.m. – 4:00 p.m.</li>
										</ul>
										<h3 class="h5">Advising Hours</h3>
										<ul>
											<li>Monday – Thursday: 11:00 a.m. – last student served at 3:00 p.m.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<h3>Connect with Us</h3>
								
								<div class="card component-contact-card rounded-0 border-0">
									<div class="card-body p-0">
										<ul class="list-group list-group-flush border-gray-500 border-top border-bottom">
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-envelope"></span>
													<a href="mailto:finaid@glendale.edu " class="fw-medium flex-grow-1 text-break">finaid@glendale.edu</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="finaid@glendale.edu">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
													</button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-phone"></span>
													<a href="tel:8182401000" class="fw-medium flex-grow-1 text-break">(818) 240-1000, Ext. 5916</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="(818) 240-1000">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
												  </button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-fax"></span>
													<a href="tel:81854744690" class="fw-medium flex-grow-1 text-break">(818) 547-4469</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="(818) 547-4469">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
												  </button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-location-dot"></span>
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>Sierra Vista Building, 3rd Floor</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
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