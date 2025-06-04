<?php 
function accordion_component($heading, $content) {
	$id = uniqid();
	?>
		<div class="accordion-item">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-<?php echo $id; ?>" aria-expaneded="false" aria-controls="accordion-<?php echo $id; ?>">
					<?php echo $heading; ?>
				</button>
			</h2>
			<div id="accordion-<?php echo $id; ?>" class="accordion-collapse collapse">
				<div class="accordion-body">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	<?php
} ?>

<h3>Default</h3>
<div class="accordion accordion-flush mb-2" id="accordion-default">
	<?php
		
		accordion_component("Accordion Heading", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
		
		accordion_component("Accordion Heading 2", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
		
		accordion_component("Accordion Heading 3", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
		
	?>
</div>

<h3>Rounded</h3>
<div class="accordion accordion-flush accordion-rounded" id="accordion-default">
	<?php
		
		accordion_component("<span class='fa-sharp fa-light fa-unicorn'></span> Accordion Heading", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
		
		accordion_component("Accordion Heading 2", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
		
		accordion_component("Accordion Heading 3", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo libero, consequat aliquam accumsan nec, porta sit amet lorem. Fusce nibh nisl, posuere sit amet egestas nec, vehicula in mi.</p>");
		
	?>
</div>

<div class="mt-4 border-top border-3 border-primary pt-1">
	<p class="preheading">Component Fields/ Options</p>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Option</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Style</td>
					<td>
						<p>Classes added to accordion wrapper:</p>
						<ul>
							<li>default</li>
							<li>rounded</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Content</td>
					<td>WYSIWYG Content</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
