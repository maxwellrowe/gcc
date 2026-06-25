<?php function page_nav_tertiary($page_title, $section_title, $section_url, $page_nav_tertiary_inlcude) { ?>
	<div id="secondary-nav" class="d-block d-lg-none">
		<div class="px-0 border-bottom border-1 border-gray-500 bg-white">
			<div class="container-fluid px-xl-4">
				<div class="d-block d-lg-flex justify-content-start align-items-center" role="navigation">
					<div class="d-flex justify-content-between justify-content-lg-start align-items-center">
						<div class="secondary-nav-section" aria-label="Section Home">
							<a href="<?php echo $section_url; ?>" class="lora py-2 match-height-row d-inline-block"><em><?php echo $section_title; ?></em></a>
						</div>
						<button class="btn btn-link d-inline-block d-lg-none secondary-nav-mobile-toggle d-flex align-items-center justify-content-between gap-1 px-3 match-height-row collapsed" data-bs-toggle="collapse" data-bs-target="#secondary-nav-nav" aria-expanded="false" aria-controls="secondary-nav-nav">
							<span class="fs-6 text-uppercase lh-1 fw-bold">More</span>
							<span class="fa-sharp fa-solid fa-angle-down"></span>
						</button>
					</div>
					<div class="collapse" id="secondary-nav-nav">
						<div class="d-block d-lg-none">
							<?php include('../_resources/includes/nav-tertiary.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>