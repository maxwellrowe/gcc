<div class="row gy-3">
	<div class="col-12 col-lg-4 col-xl-3">
		<span class="fs-4 fw-bold d-block mb-2">Welcome to GCC—where everyone belongs!</span>
		<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
			<div>
				<h2 class="fs-6 my-0">Fall semester begins Sept. 2, 2025.</h2>
			</div>
		</div>
		<div class="component-spacer cs2"></div>
		<a href="#" class="btn btn-primary">Apply Now</a>
		<div class="component-spacer cs2"></div>
		<?php
			primary_menu_links( $links = [
				["url" => "https://glendale.edu", "text" => "Admissions & Records", "icon" => "fa-sharp fa-regular fa-list-check"],
			] );
		?>
		
		<hr />
		
		<span class="preheading">Special Admissions</span>
		<?php
			primary_menu_links( $links = [
				["url" => "https://glendale.edu", "text" => "Continuing Education Noncredit", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "Dual Enrollment for Current High School Students", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "International Students", "icon" => ""],
			] );
		?>
		
	</div>
	<div class="col-12 col-lg-4 col-xl-3">
		<span class="preheading">Paying for GCC</span>
		<?php quicklinks(
			$style = 'white-red-border', 
			$columns_desktop = '1',
			$columns_tablet = '1', 
			$columns_mobile = '1', 
			$icon_size = '2', 
			$links = [
				["url" => "https://glendale.edu", "text" => "Get Help Paying for College", "description" => "College can be affordable. Learn about the costs of GCC, financial aid, scholarships and programs to help you pay for college.", "icon" => "fa-sharp fa-regular fa-hand-holding-dollar"]
			]
		); ?>
		<div class="component-spacer cs2"></div>
		<?php
			primary_menu_links( $links = [
				["url" => "https://glendale.edu", "text" => "Apply for Financial Aid", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "Costs to Attend", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "How to Pay Your Fees", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "Promise +", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "Scholarships", "icon" => ""],
				["url" => "https://glendale.edu", "text" => "Work at GCC (Student Employment)", "icon" => ""]
			] );
		?>
		
	</div>
	<div class="col-12 col-lg-4 col-xl-6">
		<div class="row gy-3">
			<div class="col-12 col-xl-6">
				<span class="preheading">Get Ready for Your First Semester</span>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Class Schedule", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "How to Register", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Registration Dates/ Deadlines", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Summer Bridge", "icon" => ""]
					] );
				?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Get Help</span>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Admissions & Records", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Outreach Services", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Welcome Center", "icon" => ""],
					] );
				?>
			</div>
		</div>
	</div>
</div>