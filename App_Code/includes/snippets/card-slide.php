<p>The Flip Card is initiated by click. The front consists of an image and title. The back can contain any content, but the size of the card should be taken into context.</p>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-2">
	<div class="col">
		<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
			<img src="/gcc/_resources/images/placeholder_students_3.jpg" alt="" class="card-img-top">
			<div class="card-body p-0">
				<a href="#" class="slide-card-toggle">
					<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
						<span>Slide Me!</span>
						<span class="fa-sharp fa-regular fa-plus"></span>
					</h2>
				</a>
				<div class="component-slide-card-content">
					<div class="px-2 pb-2">
						<!-- CONTENT GOES HERE-->
						<?php list_group (
							$items = [
								["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-unicorn"],
								["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "", "icon" => "fa-sharp fa-regular fa-phone"],
								["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-laptop"],
								["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-unicorn"],
								["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "", "icon" => "fa-sharp fa-regular fa-phone"],
								["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-laptop"],
								["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-unicorn"],
								["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "", "icon" => "fa-sharp fa-regular fa-phone"],
								["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-laptop"],
							]
						); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card component-slide-card component-card card-style-white-red-border card-orientation-vertical match-height-row">
			<img src="/gcc/_resources/images/placeholder_students_3.jpg" alt="" class="card-img-top">
			<div class="card-body p-0">
				<a href="#" class="slide-card-toggle">
					<h2 class="h5 d-flex align-items-center justify-content-between p-2 mb-0">
						<span>Slide Me!</span>
						<span class="fa-sharp fa-regular fa-plus"></span>
					</h2>
				</a>
				<div class="component-slide-card-content">
					<div class="px-2 pb-2">
						<!-- CONTENT GOES HERE-->
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
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
					<td>Image</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td>Title</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Content</td>
					<td>
						<p>Any content, snippet, component</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>