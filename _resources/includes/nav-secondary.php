<?php function page_nav_secondary($page_title, $section_title, $section_url, $page_nav_secondary_include, $page_nav_tertiary) { ?>
	<div id="secondary-nav">
		<div class="px-0 border-bottom border-1 border-gray-500 bg-white">
			<div class="container-xxl">
				<div class="d-block d-lg-flex justify-content-start align-items-center">
					<div class="d-flex justify-content-between justify-content-lg-start align-items-center">
						<div class="secondary-nav-section">
							<a href="<?php echo $section_url; ?>" class="lora py-2 match-height-row d-inline-block"><em><?php echo $section_title; ?></em></a>
						</div>
						<button class="btn btn-link d-inline-block d-lg-none secondary-nav-mobile-toggle d-flex align-items-center justify-content-between gap-1 px-3 match-height-row collapsed" data-bs-toggle="collapse" data-bs-target="#secondary-nav-nav" aria-expanded="false" aria-controls="secondary-nav-nav">
							<span class="fs-6 text-uppercase fw-bold">Menu</span>
							<span class="menu-bars">
								<span class="menu-bar"></span>
								<span class="menu-bar"></span>
							</span>
						</button>
					</div>
					<div class="collapse" id="secondary-nav-nav">
						<div class="d-block d-lg-none">
							<?php if($page_nav_tertiary) {
								include('../_resources/includes/nav-tertiary.php');
							} ?>
						</div>
						<?php if($page_nav_tertiary) { ?>
							<div class="mt-3 mb-1 preheading preheading-arrow small px-2 d-flex d-lg-none w-100">Section Navigation</div> 
						<?php } ?>
						<nav class="nav-secondary d-lg-flex align-items-center" aria-label="Section Navigation">
							<?php if(!empty($page_nav_secondary_include)) {
								include($page_nav_secondary_include);
							} else {
								include('../App_Code/navs/secondary-nav-links.php');
							} ?>
							<ul id="secondary-nav-more">
								<li>
									<a href="#">More</a>
									<ul>
										
									</ul>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>