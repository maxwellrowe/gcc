<p>With "Carousel Anything" any type of content, snippet or component can be added and displayed as a carousel.</p>

<div class="swiper component-carousel-anything" data-mobile-items="1" data-tablet-items="2" data-desktop-items="3" data-autoplay="false">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<div class="swiper-slide-content">
				<?php card_snippet(
					$content = <<<HTML
						<h2 class="h4">My Heading 2 Title</h2>
						<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2 mb-2" role="alert">
							<div>
								<h2 class="fs-6 my-0">Notification Title</h2>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.</p>
						<a href="#" class="btn btn-primary">Do Something</a>
					HTML, 
					$style = 'white-red-border',
					$image = '/gcc/_resources/images/placeholder_students_3.jpg', 
					$orientation = 'vertical',
					$match_height = false, 
					$padding = ''
				) ?>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="swiper-slide-content">
				<?php list_group (
					$items = [
						["url" => "", "text" => "List Group Title", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.", "icon" => "fa-sharp fa-regular fa-unicorn"],
						["url" => "", "text" => "Sign Up for a Zoom Session", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.", "icon" => "fa-sharp fa-regular fa-unicorn"],
						["url" => "", "text" => "List Group Title", "description" => "", "icon" => "f"],
						["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-bell"]
					]
				); ?>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="swiper-slide-content">
				<?php block_link (
					$style = 'gray',
					$links = [
						["url" => "https://url.com/test.doc", "text" => "Lorem Ipsum"],
						["url" => "https://url.com/test.pdf", "text" => "Lorem Ipsum"],
						["url" => "https://glendale.edu", "text" => "Lorem Ipsum"],
						["url" => "https://url.com/test.xsl", "text" => "Lorem Ipsum"],
						["url" => "https://url.com/", "text" => "Lorem Ipsum"],
					]
				); ?>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="swiper-slide-content">
				<?php card(
					'Red Card',
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
					'red',
					[
						["link" => "https://url.com", "link_text" => "Learn More"]
					],
					'/gcc/_resources/images/placeholder_students_3.jpg',
					'vertical',
					false,
					'btn btn-light btn-sm'
				); ?>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="swiper-slide-content">
				<img src="/gcc/_resources/images/placeholder_students_3.jpg" alt="Test Image" />
			</div>
		</div>
	</div>
	<div class="swiper-button-prev"><span class="visually-hidden">Previous Slide</span></div>
	<div class="swiper-button-next"><span class="visually-hidden">Next Slide</span></div>
	<div class="swiper-scrollbar"></div>
</div>

<div class="mt-4 border-top border-3 border-primary pt-1">
	<p class="preheading">Component Fields/ Options</p>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Option</th>
					<th>Values</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mobile # of Items</td>
					<td>
						<p>Numeral, usually 1 for mobile.</p>
					</td>
				</tr>
				<tr>
					<td>Tablet # of Items</td>
					<td>
						<p>Numeral</p>
					</td>
				</tr>
				<tr>
					<td>Desktop # of Items</td>
					<td>
						<p>Numeral (default 3)</p>
					</td>
				</tr>
				<tr>
					<td>Autoplay?</td>
					<td>
						<p>true or false</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>