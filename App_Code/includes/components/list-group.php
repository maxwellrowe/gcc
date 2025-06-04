<p>Each button should be a repeater field so that an editor can include multiple list items. This should be wrapped in the component <a href="#utilities">Utilities</a>.</p>
<p>For the icon, reference Font Awesome Icons, eg fa-brands fa-instagram or fa-sharp fa-regular fa-arrow-right.</p>

<div class="row">
	<div class="col col-lg-4">
		<?php list_group (
			$items = [
				["url" => "https://url.com", "text" => "List Group Title", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum ornare eros, sit amet volutpat elit congue id. Proin suscipit non lacus pretium pharetra.", "icon" => "fa-sharp fa-regular fa-unicorn"],
				["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-unicorn"],
				["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "", "icon" => "fa-sharp fa-regular fa-phone"],
				["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-laptop"]
			]
		); ?>
	</div>
	<div class="col col-lg-8">
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
					<td>Items</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Link (File Chooser, optional)</li>
							<li>Text (Text Input, required)</li>
							<li>Description (Textarea)</li>
							<li>Icon (Text Input, Font Awesome class)</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>