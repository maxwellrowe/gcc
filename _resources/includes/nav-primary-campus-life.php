<div class="row gy-3">
	<div class="col-12 col-lg-6">
		<span class="preheading">Get Involved</span>
		<div class="row">
			<div class="col-12 col-xl-6">
				<?php quicklinks(
					$style = 'white-red-border', 
					$columns_desktop = '1',
					$columns_tablet = '1', 
					$columns_mobile = '1', 
					$icon_size = '2', 
					$links = [
						["url" => "https://glendale.edu", "text" => "Student Activities", "description" => "Discover clubs, athletics, leadership, and cultural programs that bring our campus community to life.", "icon" => "fa-sharp fa-regular fa-users"],
						["url" => "https://glendale.edu", "text" => "Athletics", "description" => "Competitive sports teams and fitness programs for student athletes and fans alike.", "icon" => "fa-sharp fa-regular fa-flag-pennant"]
					]
				); ?>
			</div>
			<div class="col-12 col-xl-6">
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Associated Students", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Clubs & Organizations", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Multicultural & Community Engagement Center (MCEC)", "icon" => ""]
					] );
				?>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="row gy-3">
			<div class="col-12 col-xl-6">
				<span class="preheading">Stay Up To Date</span>
				<div class="card component-card-event-list">
					<div class="list-group list-group-flush">
						<div class="list-group-item">
							<div class="d-flex justify-content-start gap-2 align-items-start">
								<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
								<div>
									<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
										<span class="fa-sharp fa-regular fa-clock text-primary"></span>
										<span>11:00 AM - 12:30 PM</span>
									</div>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="d-flex justify-content-start gap-2 align-items-start">
								<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
								<div>
									<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
										<span class="fa-sharp fa-regular fa-clock text-primary"></span>
										<span>11:00 AM - 12:30 PM</span>
									</div>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="d-flex justify-content-start gap-2 align-items-start">
								<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
								<div>
									<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
										<span class="fa-sharp fa-regular fa-clock text-primary"></span>
										<span>11:00 AM - 12:30 PM</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="component-spacer cs2"></div>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "View All Events", "icon" => "fa-sharp fa-regular fa-calendar-days"],
						["url" => "https://glendale.edu", "text" => "View Academic Calendar", "icon" => "fa-sharp fa-regular fa-calendar-days"],
						["url" => "https://glendale.edu", "text" => "Campus News", "icon" => "fa-sharp fa-regular fa-megaphone"]
					] );
				?>
			</div>
			<div class="col-12 col-xl-6">
				<span class="preheading">Around Campus</span>
				<?php
					primary_menu_links( $links = [
						["url" => "https://glendale.edu", "text" => "Art Gallery", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Bookstore", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Library", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Maps & Parking", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Places to Eat", "icon" => ""],
						["url" => "https://glendale.edu", "text" => "Planetarium", "icon" => ""]
					] );
				?>
			</div>
		</div>
	</div>
</div>