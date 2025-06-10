<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Current Students';
	$section_title = 'Current Students';
	$section_url = 'styleguide.php';
	$page_nav_secondary = false;
	$page_nav_tertiary = true;
	$page_garfield = false;
	$custom_hero = true;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = '';
	$page_nav_tertiary_inlcude = 'navs/tertiary-nav-current-students.php';
	
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
											<a class="arrow-link" href="#">My GCC</a>
											<a class="arrow-link" href="#">Canvas</a>
											<a class="arrow-link" href="#">Email</a>
											<a class="arrow-link" href="#">Directory</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col order-1 order-lg-2">
								<div class="match-height-row page-hero-image" data-aos="fade" style="background-image: url('/gcc/_resources/images/current-students.jpg');">
									
								</div>
							</div>
						</div>
					</header>
				</div>
				
				<section class="mb-4">
					<div class="container">
						<h2 id="events">Happening Now</h2>
						<a href="#" class="arrow-link fs-7">View All Events</a>
						<div class="component-spacer cs2"></div>
						<div class="row row-cols-1 row-cols-lg-3">
							<div class="col mb-2 mb-lg-0">
								<a class="card component-events border-primary d-block match-height-row text-decoration-none">
									<div class="card-body p-2">
										<div class="row">
											<div class="col-3">
												<span class="text-uppercase d-block text-center text-secondary fw-medium">Feb</span>
												<span class="lora d-block text-center fs-2 text-secondary fw-bold lh-1">03</span>
											</div>
											<div class="col-9">
												<h2 class="h5 lh-sm">The Event Title</h2>
												<div class="d-flex align-items-center justify-content-start w-100 gap-2 fs-7">
													<span class="fa-sharp fa-regular fa-clock text-primary"></span>
													<span>11:00 AM - 12:30 PM</span>
												</div>
												<div class="d-flex align-items-center justify-content-start w-100 gap-2 fs-7">
													<span class="fa-sharp fa-regular fa-map-marker text-primary"></span>
													<span>Main Auditorium</span>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col mb-2 mb-lg-0">
								<a class="card component-events border-primary d-block match-height-row text-decoration-none">
									<div class="card-body p-2">
										<div class="row">
											<div class="col-3">
												<span class="text-uppercase d-block text-center text-secondary fw-medium">Feb</span>
												<span class="lora d-block text-center fs-2 text-secondary fw-bold lh-1">03</span>
											</div>
											<div class="col-9">
												<h2 class="h5 lh-sm">A Long Event Title that goes on forever</h2>
												<div class="d-flex align-items-center justify-content-start w-100 gap-2 fs-7">
													<span class="fa-sharp fa-regular fa-clock text-primary"></span>
													<span>11:00 AM - 12:30 PM</span>
												</div>
												<div class="d-flex align-items-center justify-content-start w-100 gap-2 fs-7">
													<span class="fa-sharp fa-regular fa-map-marker text-primary"></span>
													<span>Main Auditorium</span>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col mb-2 mb-lg-0">
								<a class="card component-events border-primary d-block match-height-row text-decoration-none">
									<div class="card-body p-2">
										<div class="row">
											<div class="col-3">
												<span class="text-uppercase d-block text-center text-secondary fw-medium">Feb</span>
												<span class="lora d-block text-center fs-2 text-secondary fw-bold lh-1">03</span>
											</div>
											<div class="col-9">
												<h2 class="h5 lh-sm">The Event Title</h2>
												<div class="d-flex align-items-center justify-content-start w-100 gap-2 fs-7">
													<span class="fa-sharp fa-regular fa-clock text-primary"></span>
													<span>11:00 AM - 12:30 PM</span>
												</div>
												<div class="d-flex align-items-center justify-content-start w-100 gap-2 fs-7">
													<span class="fa-sharp fa-regular fa-map-marker text-primary"></span>
													<span>Main Auditorium</span>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
				
				<section class="">
					<div class="container">
						<h2 id="help">Find Help at GCC</h2>
						<div class="row">
							<div class="col-12 col-md-6 col-lg-8">
								<?php card(
									'Vaquero Success Center',
									'A center that focuses on student retention and in-reach. Educate and guide students to on-campus resources accessible.',
									'sunset',
									[
										["link" => "#", "link_text" => "Go to Success Center"]
									],
									'/gcc/_resources/images/vaquero-success-center.jpg',
									'horizontal',
									false,
									'arrow-link'
								); ?>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "All Support Services"],
										["url" => "https://glendale.edu", "text" => "Directory"]
									]
								); ?>
							</div>
						</div>
						<div class="component-spacer cs2"></div>
						<div class="accordion accordion-flush mb-2" id="accordion-default">
							<?php
								
								accordion_component("Student Services Contacts", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
								
							?>
						</div>
						
					</div>
				</section>
				
				<section class="my-4 py-4 bg-sunset">
					<div class="container">
						<h2 id="nextterm">Get Ready for the Next Term</h2>
						<div class="row gx-4">
							<div class="col-12 col-md-8">
								<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
									<div>
										<h2 class="fs-6 my-0">Tip/Update: Spring 2025 starts February 18, 2025. Late registration open Feb 18 - March 1. </h2>
									</div>
								</div>
								
								<div class="row gy-3 mt-2">
									<div class="col-12 col-lg-6">
										<?php card(
											'Missed last semester?',
											'Reapply so you can register for the next term!',
											'white',
											[
												["link" => "#", "link_text" => "Get Started"]
											],
											'',
											'vertical',
											true,
											'arrow-link'
										); ?>
										
										<h3 class="preheading mt-4">Need help?</h3>
										<a href="#" class="arrow-link fs-7">Visit the Vaquero Success Center</a>
									</div>
									<div class="col-12 col-lg-6">
										<?php list_group (
											$items = [
												["url" => "#", "text" => "Class Schedule", "description" => "", "icon" => "fa-sharp fa-regular fa-calendar"],
												["url" => "#", "text" => "Upcoming Sessions & Deadlines", "description" => "", "icon" => "fa-sharp fa-regular fa-clock"],
												["url" => "#", "text" => "Get Your Books at the Bookstore", "description" => "", "icon" => "fa-sharp fa-regular fa-book"],
												["url" => "#", "text" => "Pay Your Tuition & Fees", "description" => "", "icon" => "fa-sharp fa-regular fa-receipt"],
												["url" => "#", "text" => "Parking Permits", "description" => "", "icon" => "fa-sharp fa-regular fa-circle-parking"],
											]
										); ?>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<img src="/gcc/_resources/images/placeholder_students.jpg" data-aos="fade" class="rounded" alt="Title" />
							</div>
						</div>
					</div>
				</section>
				
				<section class="">
					<div class="container">
						<h2 id="pay">Help Paying for Classes</h2>
						<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
							<div>
								<h2 class="fs-6 my-0">Tip: You need to re-apply for financial aid every year! The priority deadline is March 2. Use GCC school code 001203 when applying.</h2>
							</div>
						</div>
						
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 mt-2">
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Financial Aid"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Payment Plans"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Student Jobs at GCC"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Scholarships"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Zero & Low Textbook Costs"]
									]
								); ?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="mt-4">
					<div class="container">
						<h2 id="path">Plan Your Academic Path</h2>
						<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
							<div>
								<h2 class="fs-6 my-0">Tip: Counselors are here to help you set up an education plan based on your academic goals.  Visit Counseling</h2>
							</div>
						</div>
						
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 mt-2">
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Program Maps"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Degree/ Certificate Requirements"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Explore Academic Programs"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Graduation Petition"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Transfer Help"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Career Help"]
									]
								); ?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="my-4">
					<div class="container">
						<h2 id="campus">On Campus</h2>
						
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 mt-2">
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Parking & Maps"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Student Activities"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Bookstore"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Library"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Food Options on Campus"]
									]
								); ?>
							</div>
							<div class="col">
								<?php block_link (
									$style = 'gray',
									$links = [
										["url" => "https://glendale.edu", "text" => "Safety Information"]
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