<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	// Page Variables Setup
	$page_title = 'Academic Programs at GCC';
	$section_title = 'Academics';
	$section_url = '';
	$page_nav_secondary = true;
	$page_nav_tertiary = true;
	$page_garfield = false;
	$custom_hero = false;
	
	// Nav Includes if applicable, otherwise leave blank
	$page_nav_secondary_include = 'navs/secondary-nav-academics.php';
	$page_nav_tertiary_inlcude = 'navs/tertiary-nav-academic-programs.php';
	
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
						<nav class="breadcrumbs" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Section</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
							</ol>
						</nav>
						<div class="page-title-wrapper d-flex justify-content-start justify-content-lg-between align-items-start align-items-lg-end flex-column flex-lg-row gap-3">
							<h1 id="page-title"><?php echo $page_title; ?></h1>
						</div>
					</header>
				</div>
				
				<section>
					<div class="container">
						<p class="lead">Choose from 65+ academic programs leading to degrees, certificates, and transfer opportunities. Whether you’re preparing for a career or planning to continue your education, GCC has the right program to get you there.</p>
						<div class="d-flex justify-content-center gap-2 flex-wrap fs-7 mt-3 mb-2">
							<span><strong>AA</strong> = Associate of Arts</span>
							<span><strong>AS</strong> = Associate of Science</span>
							<span><strong>AD-T</strong> = Associate Degree for Transfer</span>
							<span><strong>COA</strong> = Certificate of Achievement</span>
							<span><strong>SK</strong> = Skills Certificate</span>
						</div>
						
						<div id="academic-programs-list" class="my-3">
							<?php 
								$programs = get_academic_programs();
								
								foreach($programs as $program) { 
									$name = $program->program;
									$division = $program->division;
									$division_id = $program->division_id;
									$lpp = $program->lpp;
									$lpp_id = $program->lpp_id;
									$awards = array_map('trim', explode(',', $program->awards));
									
									?>
									<a href="" class="card academic-program-card bg-gray-300 mb-2 division-<?php echo $division_id; ?> lpp-<?php echo $lpp_id; ?> <?php foreach($awards as $award) { echo 'award-' . $award . ' '; } ?>">
										<div class="card-body">
											<div class="d-flex justify-content-between align-items-start align-items-lg-center gap-2">
												<div class="d-flex flex-column flex-lg-row gap-2 justify-content-lg-between align-items-lg-center w-100">
													<div class="ap-card-start d-flex flex-column flex-lg-row gap-lg-2">
														<div class="ap-card-title">
															<h2 class="h4 m-0 lh-sm"><?php echo $name; ?></h2>
														</div>
													</div>
													<div class="d-flex flex-column flex-lg-row justify-content-end align-items-lg-center">
														<div class="d-flex flex-column flex-lg-row justify-content-end align-items-lg-center flex-wrap gap-1">
															<div class="ap-card-awards d-flex justify-content-start align-items-center gap-1">
																<?php foreach($awards as $award) { ?>
																	<span>
																		<span class="rounded-pill bg-transparent border border-1 border-dark fw-bolder text-uppercase lh-1">
																			<?php echo $award; ?>
																		</span>
																	</span>
																<?php } ?>
															</div>
															<div class="mt-1 mt-lg-0">
																<span class="ap-card-lpp">
																	<span class="fa-sharp fa-regular fa-location-arrow"></span> <?php echo $lpp; ?>
																</span>
															</div>
															<div>
																<span class="ap-card-division">
																	<span class="fa-sharp fa-regular fa-school text-primary"></span> <?php echo $division; ?>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="ap-card-arrow">
													<span class="fa-sharp fa-regular fa-arrow-right"></span>
												</div>
											</div>
										</div>
									</a>	
								<?php }
							?>
						</div>
						<div id="ap-controller-no-results" class="my-3 text-center" style="display: none;">
							<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
								<div>
									<p class="mb-2 fs-3 fw-bold">¯\_(ツ)_/¯</p>
									<p class="my-0">No results, please modify your filters.</p>
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