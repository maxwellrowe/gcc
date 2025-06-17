<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'The GCC Library';
	$section_title = 'Library';
	$section_url = '';
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
	$custom_hero = true;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-library.php';
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
										
										<div class="library-onesearch border border-0 border-top border-light mt-3 pt-3">
											<p class="fs-7 fw-bold text-white">Search GCC Library Materials</p>
											<!-- LIBGUIDES EMBED -->
											<!-- Nav tabs -->
											<ul class="nav nav-tabs border-0 fs-7" id="onesearchTabs" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active fs-7" id="everything-tab" data-bs-toggle="tab" data-bs-target="#everything" type="button" role="tab" aria-controls="everything" aria-selected="true">Everything</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fs-7" id="textbooks-tab" data-bs-toggle="tab" data-bs-target="#textbooks" type="button" role="tab" aria-controls="textbooks" aria-selected="false">Textbooks</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fs-7" id="articles-tab" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab" aria-controls="articles" aria-selected="false">Articles</button>
												</li>
											</ul>
											
											<!-- Tab panes -->
											<div class="tab-content p-3 bg-secondary text-light fs-7">
												<!-- Everything Tab -->
												<div class="tab-pane fade show active" id="everything" role="tabpanel" aria-labelledby="everything-tab">
													<form action="https://caccl-glendale.primo.exlibrisgroup.com/discovery/search" method="get" target="_blank" onsubmit="document.getElementById('query-everything').value = 'any,contains,' + document.getElementById('temp-everything').value.replace(/[,]/g, ' ');">
														<label for="temp-everything" class="form-label fs-7">Search for books, articles, and more</label>
														<div class="d-lg-flex justify-content-start align-items-start gap-2"> 
															<div class="flex-grow-1">
																<input type="text" class="form-control mb-2 fs-7" id="temp-everything" placeholder="Enter keywords">
																<input type="hidden" name="vid" value="01CACCL_GLENDALE:GLENDALE">
																<input type="hidden" name="tab" value="Everything">
																<input type="hidden" name="search_scope" value="MyInst_and_CI">
																<input type="hidden" name="mode" value="basic">
																<input type="hidden" name="query" id="query-everything">
															</div>
															<button class="btn btn-outline-light btn-sm m-0" type="submit">Search</button>
														</div>
													</form>
												</div>
											
												<!-- Textbooks Tab -->
												<div class="tab-pane fade" id="textbooks" role="tabpanel" aria-labelledby="textbooks-tab">
													<form action="https://caccl-glendale.primo.exlibrisgroup.com/discovery/search" method="get" target="_blank" onsubmit="document.getElementById('query-textbooks').value = 'any,contains,' + document.getElementById('temp-textbooks').value.replace(/[,]/g, ' ');">
														<label for="temp-textbooks" class="form-label fs-7">Find Textbooks</label>
														<div class="d-lg-flex justify-content-start align-items-start gap-2"> 
															<div class="flex-grow-1">
																<input type="text" class="form-control mb-2 fs-7" id="temp-textbooks" placeholder="Enter course or title">
																<input type="hidden" name="vid" value="01CACCL_GLENDALE:GLENDALE">
																<input type="hidden" name="tab" value="CourseReserves">
																<input type="hidden" name="search_scope" value="CourseReserves">
																<input type="hidden" name="query" id="query-textbooks">
															</div>
															<button class="btn btn-outline-light btn-sm" type="submit">Search</button>
														</div>
													</form>
												</div>
											
												<!-- Articles Tab -->
												<div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
													<form action="https://caccl-glendale.primo.exlibrisgroup.com/discovery/search" method="get" target="_blank" onsubmit="document.getElementById('query-articles').value = 'any,contains,' + document.getElementById('temp-articles').value.replace(/[,]/g, ' ');">
														<label for="temp-articles" class="form-label fs-7">Find Articles</label>
														<div class="d-lg-flex justify-content-start align-items-start gap-2"> 
															<div class="flex-grow-1">
																<input type="text" class="form-control mb-2 fs-7" id="temp-articles" placeholder="Enter keywords">
																<input type="hidden" name="vid" value="01CACCL_GLENDALE:GLENDALE">
																<input type="hidden" name="tab" value="CentralIndex">
																<input type="hidden" name="search_scope" value="CentralIndex">
																<input type="hidden" name="query" id="query-articles">
															</div>
															<button class="btn btn-outline-light btn-sm" type="submit">Search</button>
														</div>
													</form>
												</div>
											</div>
											
											<!-- Footer Links -->
											<div class="d-flex justify-content-start align-items-center mt-2 fs-7 gap-2">
													<a href="https://campusguides.glendale.edu/OneSearch" class="link-light">OneSearch Guide</a>
													<a href="https://caccl-glendale.primo.exlibrisgroup.com/discovery/search?vid=01CACCL_GLENDALE:GLENDALE&lang=en&mode=advanced" class="link-light" target="_blank">Advanced Search</a>
											</div>
											<!-- LIBGUIDES EMBED END -->
										</div>
										
										<div class="page-hero-ctas mt-3 pt-3 d-flex gap-2 flex-wrap align-items-lg-center" data-aos="fade">
											<a class="arrow-link" href="#">Visit the Library</a>
											<a class="arrow-link" href="#">Services</a>
											<a class="arrow-link" href="#">About</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col order-1 order-lg-2">
								<div class="swiper page-hero-slider" data-mobile-items="1" data-tablet-items="2" data-desktop-items="3" data-autoplay="true">
									<div class="swiper-wrapper">
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/library-1.jpg');"></div>
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/library.jpg');"></div>
										<div class="match-height-row page-hero-image swiper-slide" style="background-image: url('/gcc/_resources/images/lirbary-2.jpg');"></div>
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
						<h2 class="preheading preheading-arrow">Announcements</h2>
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
											'/gcc/_resources/images/library-promo.jpg',
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
											'/gcc/_resources/images/library-promo-2.jpg',
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
											'/gcc/_resources/images/library-promo-3.jpg',
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
											'/gcc/_resources/images/library-promo-4.jpg',
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
						
						<div class="component-spacer cs2"></div>
						<h2>Visit the Library</h2>
						<h3 class="mb-0">Library Hours</h3>
						<hr class="hr-short border-3 mt-1" />
						<div class="library-hours">
							<script src="https://glendale.libcal.com/js/hours_grid.js?002"></script>
							<div id="s-lc-whw0"></div>
							<script>
								$(function(){ 
								var week0 = new $.LibCalWeeklyGrid( $("#s-lc-whw0"), { iid: 766, lid: 0, systemTime: false }); 
								});
							</script>
						</div>
						<div class="component-spacer cs3"></div>
						<div class="row row-cols-1 row-cols-md-2 gx-4 gy-3">
							<div class="col">
								<h3 class="mb-0">Ask a Librarian</h3>
								<hr class="hr-short border-3 mt-1" />
								<div class="card component-contact-card rounded-0 border-0">
									<div class="card-body p-0">
										<ul class="list-group list-group-flush border-gray-500">
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>Chat with a GCC Librarian</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
														<span>Make an Appointment</span>
														<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
													</a>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-envelope"></span>
													<a href="mailto:eopsdesk@glendale.edu" class="fw-medium flex-grow-1 text-break">library@glendale.edu</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemail@glendale.edu">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
													</button>
												</div>
											</li>
											<li class="list-group-item border-gray-500">
												<div class="d-flex align-items-center justify-content-start gap-2">
													<span class="fa-sharp fa-regular fa-phone"></span>
													<a href="tel:8182401000" class="fw-medium flex-grow-1 text-break">(818) 240-1000</a>
													<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
														<span class="fa-sharp fa-regular fa-copy"></span>
														<span class="visually-hidden">Copy</span>
												  </button>
												</div>
												<span class="d-block fs-8">Circulation - Ext. 5586 or 5581</span>
												<span class="d-block fs-8">Research Help - Ext. 5577</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col">
								<h3 class="mb-0">Locations</h3>
								<hr class="hr-short border-3 mt-1" />
								<div class="accordion accordion-flush accordion-rounded" id="accordion-default-2">
									<?php
										
										accordion_component("Verdugo Campus", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
										
										accordion_component("Garfield Campus", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
										
									?>
								</div>
							</div>
						</div>
						<div class="component-spacer cs3"></div>
						<hr />
						<span class="preheading preheading-arrow">Research</span>
						<div class="row align-items-center gx-4 gy-2">
							<div class="col-12 col-md-8 col-lg-6 order-md-2">
								<h2>Start Your Research</h2>
								<p class="lead">Use your database index to find the best library databases for your search.</p>
								<a href="" class="btn btn-outline-primary">Database A-Z</a>
								<div class="component-spacer cs3"></div>
								<?php card_snippet(
									$content = <<<HTML
										<span class="preheading">Help with Your Research</span>
										<div class="row row-cols-1 row-cols-md-2">
											<div class="col">
												<a href="" class="arrow-link fs-7">Citing Resources</a>
												<div class="component-spacer cs1"></div>
												<a href="" class="arrow-link fs-7">Research Help Desk</a>
											</div>
											<div class="col">
												<a href="" class="arrow-link fs-7">Books in Other Libraries</a>
												<div class="component-spacer cs1"></div>
												<a href="" class="arrow-link fs-7">ESL Resources</a>
											</div>
										</div>
									HTML, 
									$style = 'light-gray',
									$image = '', 
									$orientation = 'vertical',
									$match_height = false, 
									$padding = ''
								) ?>
							</div>
							<div class="col-12 col-md-4 col-lg-6 order-md-1">
								<img src="/gcc/_resources/images/library-research.jpg" alt="student in library researching" class="rounded gcc-anim-fade-up"/>
							</div>
						</div>
					</div>
				</section>
				<div class="component-spacer cs3"></div>
				<section class="bg-gray-200 pt-4 pb-5">
					<div class="container">
						<h2>Library Services</h2>
						<div class="d-flex justify-content-start align-items-start align-items-lg-center flex-column flex-lg-row gap-3">
							<a href="" class="arrow-link">All Services</a>
							<a href="" class="arrow-link">Faculty Services</a>
						</div>
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-3 gy-2">
							<div class="col">
								<div class="card component-card card-style-white-red-header card-orientation-vertical ">
									<div class="card-header rounded-top">
										<h2 class="h4 mb-0 lh-sm">Borrow</h2>
									</div>
									<?php list_group (
										$items = [
											["url" => "https://glendale.com", "text" => "Print Books", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "Laptops/ Devices", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "Textbooks", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "Interlibrary Loan (ILL)", "description" => "", "icon" => ""]
										]
									); ?>
								</div>
							</div>
							<div class="col">
								<div class="card component-card card-style-white-red-header card-orientation-vertical">
									<div class="card-header rounded-top">
										<h2 class="h4 mb-0 lh-sm">Study in the Library</h2>
									</div>
									<?php list_group (
										$items = [
											["url" => "https://glendale.com", "text" => "Reserve a Study Room", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "Technology, Printing & Copying", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "Connect to WiFi Library", "description" => "", "icon" => ""]
										]
									); ?>
								</div>
							</div>
							<div class="col">
								<div class="card component-card card-style-white-red-header card-orientation-vertical">
									<div class="card-header rounded-top">
										<h2 class="h4 mb-0 lh-sm">Instruction</h2>
									</div>
									<?php list_group (
										$items = [
											["url" => "https://glendale.com", "text" => "Library Credit Courses", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "Library Workshops Schedule", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "CampusGuides", "description" => "", "icon" => ""],
											["url" => "https://glendale.com", "text" => "IC@GCC", "description" => "", "icon" => ""]
										]
									); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="py-5">
					<div class="container">
						<div class="row gx-4 gy-2 align-items-center">
							<div class="col-12 col-md-8 col-lg-6">
								<h2>About the GCC Library</h2>
								<div class="row row-cols-1 row-cols-lg-2 gy-2">
									<div class="col">
										<?php block_link (
											$style = 'gray',
											$links = [
												["url" => "https://glendale.edu", "text" => "Mission Statement"],
												["url" => "https://glendale.edu", "text" => "Contact Us"],
												["url" => "https://glendale.edu", "text" => "Library FAQ"]
											]
										); ?>
									</div>
									<div class="col">
										<?php block_link (
											$style = 'gray',
											$links = [
												["url" => "https://glendale.edu", "text" => "Accessibility"],
												["url" => "https://glendale.edu", "text" => "GCC Archives"]
											]
										); ?>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-6">
								<img src="/gcc/_resources/images/library-about.jpg" alt="desks in library" class="rounded gcc-anim-fade-up"/>
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