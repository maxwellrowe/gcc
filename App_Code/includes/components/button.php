<p>Each button should be a repeater field so that an editor can include multiple buttons in a row if they wish. This should be wrapped in the component <a href="#utilities">Utilities</a>.</p>
<p>For the icon, reference Font Awesome Icons, eg fa-brands fa-instagram or fa-sharp fa-regular fa-arrow-right.</p>

<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row align-items-lg-center gap-2">
	<?php button (
		$type = 'default', 
		$style = 'btn-primary', 
		$size = 'default', 
		$link = '#', 
		$text = 'Default Button', 
		$icon = ''
	); ?>
	
	<?php button (
		$type = 'default', 
		$style = 'btn-secondary', 
		$size = 'default', 
		$link = '#', 
		$text = 'Button', 
		$icon = 'fa-sharp fa-regular fa-arrow-right'
	); ?>
	
	<?php button (
		$type = 'btn-circle', 
		$style = 'btn-outline-primary', 
		$size = 'default', 
		$link = '#', 
		$text = 'Button', 
		$icon = 'fa-brands fa-instagram'
	); ?>
</div>

<div class="d-flex align-items-start justify-content-start flex-column flex-lg-row align-items-lg-center gap-2 mt-2">
	<?php button (
		$type = 'default', 
		$style = 'btn-yellow', 
		$size = 'btn-lg', 
		$link = '#', 
		$text = 'Button', 
		$icon = ''
	); ?>
	
	<?php button (
		$type = 'default', 
		$style = 'btn-light', 
		$size = 'default', 
		$link = '#', 
		$text = 'Button', 
		$icon = 'fa-sharp fa-regular fa-arrow-right'
	); ?>
	
	<?php button (
		$type = 'default', 
		$style = 'btn-dark', 
		$size = 'btn-sm', 
		$link = '#', 
		$text = 'Button', 
		$icon = ''
	); ?>
</div>

<div class="mt-4 border-top border-3 border-primary pt-1">
	<p class="preheading">Component Fields/ Options</p>
	<p><strong>Each button should be a "repeater" field.</strong></p>
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
					<td>Type</td>
					<td>Select</td>
					<td>
						<ul>
							<li>Default (default)</li>
							<li>Circle (btn-circle)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Style</td>
					<td>Select</td>
					<td>
						<ul>
							<li>Red (btn-primary)</li>
							<li>Dark Red (btn-secondary)</li>
							<li>Light (btn-light)</li>
							<li>Yellow (btn-yellow)</li>
							<li>Dark (btn-dark)</li>
							<li>Red Outline (btn-outline-primary)</li>
							<li>Light Outline (btn-outline-light)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Size</td>
					<td>Select</td>
					<td>
						<ul>
							<li>Default (default)</li>
							<li>Small (btn-sm)</li>
							<li>Large (btn-lg)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Link</td>
					<td>File Chooser</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Text input</td>
				</tr>
				<tr>
					<td>Icon</td>
					<td>Text input</td>
					<td>
						<p>Enter classes from Font Awesome</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>