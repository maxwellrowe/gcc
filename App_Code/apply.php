<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Apply to GCC';
	$section_title = 'Apply to GCC';
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
					<header id="page-header" class="page-hero page-hero-full border-0 rounded overflow-hidden p-0" style="background-image: url('/gcc/_resources/images/apply-hero.jpg');">
						<div class="container">
							<div class="page-title-wrapper d-flex justify-content-end flex-column pt-5">
								<h1 id="page-title" class="text-white"><?php echo $page_title; ?></h1>
								<div class="on-this-page bg-gray-300 rounded p-2 d-flex gap-1 align-items-center fw-bold lh-1 flex-wrap w-max-content mt-2">
									<span class="text-uppercase text-nowrap">On this page</span>
									<span class="fa-sharp fa-regular fa-arrow-right"></span>
									<a href="#apply">Applying</a>
									<a href="#steps">Steps After Applying</a>
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-4 position-relative z-3">
					<div class="container">
						<h2 id="apply">Step 1: The Application</h2>
						<div class="row gx-4 gy-2">
							<div class="col-12 col-md-7 col-lg-8">
								<p class="lead">Whether you’re new to GCC, returning after some time away, or transferring from another college, your first step to enrolling at GCC is to apply.</p>
								<p>For all students looking to take credit courses (excluding international students).</p>
								<a href="#" class="btn btn-primary mb-3 mt-2">Apply to GCC</a>
								<p class="mb-4">Already applied? <a href="#steps">View Steps After You Apply</a></p>
								
								<?php card_snippet(
									$content = <<<HTML
										<h2 class="preheading preheading-arrow mb-1">International Students</h2>
										<p class="fs-7">For students with an F-1 Visa looking to study at GCC.</p>
										<a href="#" class="btn btn-sm btn-outline-primary">Apply to GCC as an International Student</a>
										<div class="component-spacer cs3"></div>
										<h2 class="preheading preheading-arrow mb-1">Continuing Education Noncredit</h2>
										<p class="fs-7">For students interested in free noncredit classes through Continuing Education.</p>
										<a href="#" class="btn btn-sm btn-outline-primary">Apply to GCC Continuing Education Noncredit</a>
									HTML, 
									$style = 'white-red-border',
									$image = '', 
									$orientation = 'vertical',
									$match_height = false, 
									$padding = '2rem'
								) ?>
							</div>
							<div class="col-12 col-md-5 col-lg-4">
								<?php card_snippet(
									$content = <<<HTML
										<h2 class="h4 mb-2">Need help applying?</h2>
										<span class="preheading preheading-arrow mb-1">The Welcome Center</span>
										<p class="fs-7">The Welcome Center provides in-person and virtual help with completing the Application and finishing the steps to enroll at GCC.</p>
										<a href="#" class="btn btn-sm btn-outline-primary">Visit Welcome Center</a>
										<div class="component-spacer cs3"></div>
										<span class="preheading preheading-arrow">Watch These Video Tutorials</span>
										<a href="#" class="arrow-link fs-7 mb-2">How to Create an OpenCCC Account</a>
										<a href="#" class="arrow-link fs-7">How to Complete the GCC Application</a>
									HTML, 
									$style = 'sunset',
									$image = '', 
									$orientation = 'vertical',
									$match_height = false, 
									$padding = ''
								) ?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="apply-section pt-5 pb-5 mt-lg-n5" style="background-image: url('/gcc/_resources/images/apply-bg.jpg');">
					<div class="container">
						<h2 id="steps" class="text-white">Step 2: After You Apply</h2>
						<p class="lead text-white">Great job on completing the application! Your next enrollment steps depend on who you are. Choose the student type that best describes you.</p>
						<h3 class="mt-4 mb-3 text-white">What type of student are you?</h3>
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-2 gx-2">
							<div class="col">
								<?php card(
									'New &amp; Returning Student',
									'You have never taken classes at GCC, or you are returning to GCC after 2 consecutive regular semesters. (Spring and Fall).',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "New &amp; Returning Student"]
									],
									'',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'Transfer Student',
									'You have completed credit courses at other universities or colleges (s).',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "Transfer Student"]
									],
									'',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'High School Student',
									'You are taking GCC classes while still in high school.',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "High School Student"]
									],
									'',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'International Student',
									'You are studying at GCC with a F-1 Visa.',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "International Student"]
									],
									'',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
							<div class="col">
								<?php card(
									'Noncredit Student',
									'You are taking free, noncredit classes through Continuing Education. ',
									'white-red-border',
									[
										["link" => "https://glendale.edu", "link_text" => "Noncredit Student"]
									],
									'',
									'vertical',
									true,
									'arrow-link'
								); ?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="py-4">
					<div class="container">
						<div class="row gy-2">
							<div class="col-12 col-md-8">
								<h2>Frequently Asked Questions</h2>
								
								<div class="accordion accordion-flush accordion-rounded" id="accordion-default-2">
									<?php
										
										accordion_component("What is the CCCapply ID.me Verification?", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
										
										accordion_component("Who Must File an Application?", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
										
										accordion_component("Who May be Admitted?", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
										
									?>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<img src="/gcc/_resources/images/apply-faq.jpg" alt="Students" class="rounded mt-lg-n5" data-aos="fade" />
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