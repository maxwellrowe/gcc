<p>Each block link should be a repeater field. This should be wrapped in the component <a href="#utilities">Utilities</a>.</p>
<p>For the icon, reference Font Awesome Icons, eg fa-brands fa-instagram or fa-sharp fa-regular fa-arrow-right.</p>

	<div class="bg-sunset p-4">
	<div class="row row-cols-1 row-cols-lg-3">
		<div class="col">
			<?php block_link (
				$style = 'white',
				$links = [
					["url" => "https://url.com/test.doc", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/test.pdf", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/test.xsl", "text" => "Lorem Ipsum"],
					["url" => "https://glendale.edu", "text" => "Lorem Ipsum"],
				]
			); ?>
		</div>
		<div class="col">
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
		<div class="col">
			<?php block_link (
				$style = 'red-border',
				$links = [
					["url" => "https://url.com/test.doc", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/test.pdf", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/test.xsl", "text" => "Lorem Ipsum"],
					["url" => "https://url.com/", "text" => "Lorem Ipsum"],
				]
			); ?>
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
					<td>Style</td>
					<td>Select</td>
					<td>
						<ul>
							<li>White (white)</li>
							<li>Light Gray (gray)</li>
							<li>Red Border (red-border)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Links</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Link (File Chooser, optional)</li>
							<li>Text (Text Input, required)</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>