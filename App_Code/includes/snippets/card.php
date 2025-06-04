<p>This snippet is in addition to the "Card Component." This is more freeform and allow for any content rather than a more structured type of content. There are some similar options, but this differs from the "Card Component."</p>

<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
	<div class="col">
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
			$match_height = true, 
			$padding = ''
		) ?>
	</div>
	<div class="col">
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
			$style = 'light-gray',
			$image = '', 
			$orientation = 'vertical',
			$match_height = true, 
			$padding = ''
		) ?>
	</div>
	<div class="col">
		<?php card_snippet(
			$content = <<<HTML
				<h2 class="h4">My Heading 2 Title</h2>
				<a href="#" class="btn btn-primary mb-2">Do Something</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.</p>
				<img src="/gcc/_resources/images/placeholder_students_3.jpg" alt="Students" class="rounded-sm" />
			HTML, 
			$style = 'sunset',
			$image = '', 
			$orientation = 'vertical',
			$match_height = true, 
			$padding = '3rem'
		) ?>
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
					<td>Style</td>
					<td>
						<p>Choose from one of the following:</p>
						<ul>
							<li>white</li>
							<li>white-red-border</li>
							<li>light-gray</li>
							<li>gray</li>
							<li>sunset</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Orientation</td>
					<td>
						<p>Choose from one of the following:</p>
						<ul>
							<li>vertical</li>
							<li>horizontal</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Match Height</td>
					<td>
						<p>Choose from one of the following:</p>
						<ul>
							<li>false</li>
							<li>true</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>
						<p>Enter image path...Optional</p>
					</td>
				</tr>
				<tr>
					<td>Padding</td>
					<td>
						<p>Enter shorthand CSS padding, optional override.</p>
						<ul>
							<li>vertical</li>
							<li>horizontal</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Content</td>
					<td>
						<p>Visual Editor -- html, snippets, components, etc.</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>