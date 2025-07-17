<div class="row">
	<div class="col-12 col-lg-6">
		<div class="mb-3">
			<?php card(
				'Congratulations Class of 2025!',
				'',
				'sunset',
				[
					["link" => "https://glendale.com", "link_text" => "Watch the Ceremony"]
				],
				'/gcc/_resources/images/placeholder_students_3.jpg',
				'horizontal',
				true,
				'arrow-link'
			); ?>
		</div>
		
		<span class="preheading">Updates &amp; Announcements</span>
		<?php block_link (
			$style = 'red-border',
			$links = [
				["url" => "https://glendale.edu", "text" => "Congratulations Class of 2025", "description" => "Watch the ceremony!"],
				["url" => "https://glendale.edu", "text" => "Connect to Your Dreams", "description" => "Fall Semester starts in Fall 2025."],
			]
		); ?>
	</div>
	<div class="col-12 col-lg-6">
		<div class="row gy-3">
			<div class="col-12 col-xxl-6 order-xxl-2">
				<span class="preheading">Info For...</span>
				<?php block_link (
					$style = 'red-border',
					$links = [
						["url" => "https://glendale.edu", "text" => "Prospective Students", "description" => ""],
						["url" => "https://glendale.edu", "text" => "Current Students", "description" => ""],
						["url" => "https://glendale.edu", "text" => "International Students", "description" => ""],
						["url" => "https://glendale.edu", "text" => "High School Students", "description" => ""],
						["url" => "https://glendale.edu", "text" => "Employees", "description" => ""],
					]
				); ?>
			</div>
			<div class="col-12 col-xxl-6 order-xxl-1">
				<span class="preheading">Upcoming Events</span>
				<div class="card component-card-event-list">
					<div class="list-group list-group-flush">
						<div class="list-group-item">
							<div class="d-flex justify-content-start gap-2 align-items-start">
								<div class="component-event-list-image flex-shrink-0" style="background-image: url('/gcc/_resources/images/placeholder_profile.jpg');"></div>
								<div>
									<h2 class="fs-5 lh-sm mb-1">The Event Title</h2>
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-8 mb-1">
										<span class="fa-sharp fa-regular fa-calendar text-primary"></span>
										<span>July 15, 2025</span>
									</div>
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
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-8 mb-1">
										<span class="fa-sharp fa-regular fa-calendar text-primary"></span>
										<span>July 15, 2025</span>
									</div>
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
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-8 mb-1">
										<span class="fa-sharp fa-regular fa-calendar text-primary"></span>
										<span>July 15, 2025</span>
									</div>
									<div class="d-flex align-items-center justify-content-start w-100 gap-1 fs-7">
										<span class="fa-sharp fa-regular fa-clock text-primary"></span>
										<span>11:00 AM - 12:30 PM</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column gap-2 mt-3">
					<a href="" class="arrow-link">View All Events</a>
					<a href="" class="arrow-link">View Academic Calendar</a>
				</div>
			</div>
		</div>
	</div>
</div>