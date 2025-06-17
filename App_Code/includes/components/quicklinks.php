<p class="mb-2">Quicklinks are built upon the Card Component source, but only have an icon, title and text. Each quicklink should be a repeater.</p>

<?php
	quicklinks(
		$style = 'sunset', 
		$columns_desktop = '4',
		$columns_tablet = '2', 
		$columns_mobile = '1', 
		$icon_size = '3', 
		$links = [
			["url" => "https://url.com", "text" => "Quicklink Title", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "icon" => "fa-sharp fa-regular fa-phone"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-laptop"]
		]
	);
	
	quicklinks(
		$style = 'red', 
		$columns_desktop = '4',
		$columns_tablet = '2', 
		$columns_mobile = '1', 
		$icon_size = '3', 
		$links = [
			["url" => "https://url.com", "text" => "Quicklink Title", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "icon" => "fa-sharp fa-regular fa-phone"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-laptop"]
		]
	);
	
	quicklinks(
		$style = 'light-gray', 
		$columns_desktop = '4',
		$columns_tablet = '2', 
		$columns_mobile = '1', 
		$icon_size = '3', 
		$links = [
			["url" => "https://url.com", "text" => "Quicklink Title", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "icon" => "fa-sharp fa-regular fa-phone"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-laptop"]
		]
	);
	
	quicklinks(
		$style = 'white-red-border', 
		$columns_desktop = '4',
		$columns_tablet = '2', 
		$columns_mobile = '1', 
		$icon_size = '3', 
		$links = [
			["url" => "https://url.com", "text" => "Quicklink Title", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "icon" => "fa-sharp fa-regular fa-phone"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-laptop"]
		]
	);
	
	quicklinks(
		$style = 'white', 
		$columns_desktop = '4',
		$columns_tablet = '2', 
		$columns_mobile = '1', 
		$icon_size = '3', 
		$links = [
			["url" => "https://url.com", "text" => "Quicklink Title", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "icon" => "fa-sharp fa-regular fa-phone"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-laptop"]
		]
	);
	
	quicklinks(
		$style = 'gray', 
		$columns_desktop = '4',
		$columns_tablet = '2', 
		$columns_mobile = '1', 
		$icon_size = '3', 
		$links = [
			["url" => "https://url.com", "text" => "Quicklink Title", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-unicorn"],
			["url" => "https://url.com", "text" => "Submit the Financial Aid Contact Form", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "icon" => "fa-sharp fa-regular fa-phone"],
			["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "icon" => "fa-sharp fa-regular fa-laptop"]
		]
	);
?>

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
					<td>Links</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Link Text (text input)</li>
							<li>Description (text input, optional)</li>
							<li>Link URL (file chooser)</li>
							<li>Icon (text input, Font Awesome classes)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Style</td>
					<td>Select</td>
					<td>
						<p>This sets the style of the quicklink, adding a class to the card.</p>
						<ul>
							<li>white</li>
							<li>white-red-border</li>
							<li>light-gray</li>
							<li>gray</li>
							<li>sunset</li>
							<li>red</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Icon Size</td>
					<td>Select</td>
					<td>
						<p>Values 1-7</p>
					</td>
				</tr>
				<tr>
					<td>Columns Desktop</td>
					<td>Select</td>
					<td>
						<p>Values 1-6</p>
					</td>
				</tr>
				<tr>
					<td>Columns Tablet</td>
					<td>Select</td>
					<td>
						<p>Values 1-4</p>
					</td>
				</tr>
				<tr>
					<td>Columns Mobile</td>
					<td>Select</td>
					<td>
						<p>Values 1-3</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>