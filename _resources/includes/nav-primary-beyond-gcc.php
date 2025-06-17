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
						["url" => "https://glendale.edu", "text" => "Beyond GCC", "description" => "Find resources to help you finish your program(s) at GCC and prepare for your next step. ", "icon" => ""]
					]
				); ?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Academic Planning</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Degree & Certificate Requirements", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "General Education Requirements", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Meet with a Counselor", "icon" => ""],
					["url" => "https://glendale.edu", "text" => "Program Mapper", "icon" => ""]
				] ); ?>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="row gy-3">
			<div class="col-12 col-xl-6">
				<span class="preheading">Transfer Support</span>
				<?php quicklinks(
					$style = 'white-red-border', 
					$columns_desktop = '1',
					$columns_tablet = '1', 
					$columns_mobile = '1', 
					$icon_size = '2', 
					$links = [
						["url" => "https://glendale.edu", "text" => "Transfer Center", "description" => "Providing transfer counseling, workshops, events, and guidance on applications and deadlines.", "icon" => ""]
					]
				); ?>
				<div class="component-spacer cs2"></div>
				<span class="preheading">Career Preparation</span>
				<?php quicklinks(
					$style = 'white-red-border', 
					$columns_desktop = '1',
					$columns_tablet = '1', 
					$columns_mobile = '1', 
					$icon_size = '2', 
					$links = [
						["url" => "https://glendale.edu", "text" => "Career Center", "description" => "Offering career counseling, student employment, workshops, and events to help students achieve their professional goals.", "icon" => ""]
					]
				); ?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Finish!</span>
				<?php primary_menu_links( $links = [
					["url" => "https://glendale.edu", "text" => "Apply for Your Degree/ Certificate", "icon" => "fa-sharp fa-regular fa-diploma"],
					["url" => "https://glendale.edu", "text" => "Commencement Ceremony", "icon" => "fa-sharp fa-regular fa-graduation-cap"]
				] ); ?>
			</div>
		</div>
	</div>
</div>