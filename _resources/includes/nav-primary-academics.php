<div class="row gy-3">
	<div class="col-12 col-lg-6">
		<div class="row gy-3">
			<div class="col-12 col-xl-6">
				<?php quicklinks(
					$style = 'white-red-border', 
					$columns_desktop = '1',
					$columns_tablet = '1', 
					$columns_mobile = '1', 
					$icon_size = '2', 
					$links = [
						["url" => "https://glendale.edu", "text" => "Learning & Professional Pathways", "description" => "Choose a program based on your interests and career goals.", "icon" => "fa-sharp fa-regular fa-sign-post"]
					]
				); ?>
				<div class="component-spacer cs2"></div>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Browse All Programs", "icon" => "fa-sharp fa-regular fa-graduation-cap"],
						["url" => "https://glendale.edu", "text" => "Browse by Degree or Certificate", "icon" => "fa-sharp fa-regular fa-award-simple"]
					] );
				?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Flexible Options for All</span>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Career Education", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Continuing Education Noncredit at the Garfield Campus", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Dual Enrollment for Current High School Students", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "International Student Program", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Online Classes", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Professional Development", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Transfer Pathways", "icon" => ""],
					] );
				?>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="row gy-3">
			<div class="col-12 col-xl-6">
				<span class="preheading">Enrichment Programs</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Baja Program", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Learning Communities", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "MESA", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Scholars Program", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Study Abroad", "icon" => ""]
				] ); ?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Academics Support</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Library", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Online Tutoring", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Student Labs", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Tutoring at the Learning Center", "icon" => ""]
				] ); ?>
				<div class="component-spacer cs2"></div>
				<span class="preheading">Resources for your Classes</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Academic Calendar", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Academic Divisions", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Class Schedule", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Course Catalogs", "icon" => ""]
				] ); ?>
			</div>
		</div>
	</div>
</div>