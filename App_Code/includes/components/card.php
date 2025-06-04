<p>There is a "Card Component" and a "Card Snippet" -- the difference is that with a "Card Snippet," an editor can place any content within the "Card Snippet" while the "Card Component" has more strict options.</p>
<p class="mb-3"><a href="#utilities">Component Utilities</a> should wrap in a div around the "card" except "match-height" which should be applied to the actual "card."</p>
<h3>Vertical</h3>
<div class="row row-cols-1 row-cols-lg-3">
	<div class="col mb-3">
		<?php card(
			'White Card',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'white',
			[
				["link" => "https://url.com", "link_text" => "Learn More"],
				["link" => "https://url.com", "link_text" => "Learn More"]
			],
			'/gcc/_resources/images/placeholder_students_3.jpg',
			'vertical',
			true,
			'arrow-link'
		); ?>
	</div>
	<div class="col mb-3">
		<?php card(
			'Red Card',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'red',
			[
				["link" => "https://url.com", "link_text" => "Learn More"]
			],
			'/gcc/_resources/images/placeholder_students_3.jpg',
			'vertical',
			true,
			'btn btn-light btn-sm'
		); ?>
	</div>
	<div class="col mb-3">
		<?php card(
			'White Red Header Card',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'white-red-header',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'/gcc/_resources/images/placeholder_students_3.jpg',
			'vertical',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
	<div class="col mb-3">
		<?php card(
			'Light Gray Card',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'light-gray',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'',
			'vertical',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
	<div class="col mb-3">
		<?php card(
			'Gray Card',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'gray',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'',
			'vertical',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
	<div class="col mb-3">
		<?php card(
			'Sunset Card',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'sunset',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'',
			'vertical',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
	<div class="col mb-3">
		<?php card(
			'Red Border',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'white-red-border',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'',
			'vertical',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
</div>

<h3>Horizontal</h3>
<p>Horizontal only really becomes a thing if an image is included...And this works best if used in full width or 2/3 or more of the page width.</p>
	<div class="mb-3">
		<?php card(
			'Sunset - Horizontal',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'sunset',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'/gcc/_resources/images/placeholder_students_3.jpg',
			'horizontal',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
	<div class="mb-3">
		<?php card(
			'Light Gray - Horizontal',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'light-gray',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'/gcc/_resources/images/placeholder_students_3.jpg',
			'horizontal',
			true,
			'btn btn-primary btn-sm'
		); ?>
	</div>
	<div class="mb-3">
		<?php card(
			'Red Border - Horizontal',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
			'white-red-border',
			[
				["link" => "https://url.com", "link_text" => "Do Something"]
			],
			'/gcc/_resources/images/placeholder_students_3.jpg',
			'horizontal',
			true,
			'btn btn-secondary btn-sm'
		); ?>
	</div>


<div class="full-width-bg bg-sunset py-5 ">
	<div class="container">
		<div class="row row-cols-1 row-cols-lg-3">
			<div class="col mb-3">
				<?php card(
					'Gray Card',
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
					'gray',
					[
						["link" => "https://url.com", "link_text" => "Do Something"]
					],
					'',
					'vertical',
					false,
					'btn btn-primary btn-sm'
				); ?>
			</div>
			<div class="col mb-3">
				<?php card(
					'White Card',
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
					'white',
					[
						["link" => "https://url.com", "link_text" => "Do Something"]
					],
					'',
					'vertical',
					false,
					'btn btn-primary btn-sm'
				); ?>
			</div>
			<div class="col mb-3">
				<?php card(
					'Red Border',
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.',
					'white-red-border',
					[
						["link" => "https://url.com", "link_text" => "Do Something"]
					],
					'',
					'vertical',
					false,
					'btn btn-primary btn-sm'
				); ?>
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
					<th>Field</th>
					<th>Type</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Image</td>
					<td>Image</td>
					<td>
						Note to upload an appropriately sized image.
					</td>
				</tr>
				<tr>
					<td>Title</td>
					<td>Text input</td>
					<td>
						Optional
					</td>
				</tr>
				<tr>
					<td>Content</td>
					<td>Visual Editor</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Links</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Link Text (text input)</li>
							<li>Link URL (file chooser)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Style</td>
					<td>Select</td>
					<td>
						<p>This sets the style of the card, adding a class to the card.</p>
						<ul>
							<li>white</li>
							<li>white-red-header</li>
							<li>white-red-border</li>
							<li>light-gray</li>
							<li>gray</li>
							<li>sunset</li>
							<li>red</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Orientation</td>
					<td>Select</td>
					<td>
						<p>If an editor chooses "horizontal" the card should not be used in a column unless larger than 2/3 column.</p>
						<ul>
							<li>vertical (default)</li>
							<li>horizontal</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Links Style</td>
					<td>Select</td>
					<td>
						<ul>
							<li>btn btn-primary btn-sm</li>
							<li>btn btn-secondary btn-sm</li>
							<li>btn btn-light btn-sm</li>
							<li>arrow-link</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Match Height</td>
					<td>Checkbox</td>
					<td>
						<p>This is one of the <a href="#utilities">advanced utilities</a> normally, but in this case the match height needs to be applied to the row. If true add class "match-height-row."</p>
						<ul>
							<li>true (default)</li>
							<li>false</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>