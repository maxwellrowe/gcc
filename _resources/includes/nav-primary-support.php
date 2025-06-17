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
						["url" => "https://glendale.edu", "text" => "All Support", "description" => "Lorem Ipsum Dolor", "icon" => "fa-sharp fa-regular fa-hand-holding-heart"],
						["url" => "https://glendale.edu", "text" => "Vaquero Success Center", "description" => "Virtual and in-person support for current students.", "icon" => "fa-sharp fa-regular fa-message-heart"]
					]
				); ?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Student Services &amp; Programs</span>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Admissions & Records", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Career Services", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Counseling", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Financial Aid Office", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Specialized Support Services & Programs", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Transfer Center", "icon" => ""]
					] );
				?>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="row gy-3">
			<div class="col-12 col-xl-6">
				<span class="preheading">Learning Support</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Library", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Online Tutoring", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Student Labs", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Tutoring at the Learning Center", "icon" => ""]
				] ); ?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Health, Safety &amp; Wellness</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Campus Police", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Food Pantry", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "GCC Cares (Basic Needs)", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Health Center", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Virtual Care Services", "icon" => ""]
				] ); ?>
			</div>
		</div>
	</div>
</div>