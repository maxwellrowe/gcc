<p>This snippet allows a user to create a link that opens collapsed content. This can contain any button styles or just a default link.</p>
<div class="d-flex flex-column gap-3 justify-content-start align-items-start">
	<button class="btn btn-link p-0" type="button" data-bs-toggle="collapse" data-bs-target="#component-collapse-1" aria-expanded="false" aria-controls="component-collapse-1">
		Example Collapse <span class="fa-sharp fa-regular fa-plus"></span>
	</button>
	<div class="collapse mt-2" id="component-collapse-1">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae tellus vitae leo maximus efficitur sit amet eget urna. Praesent porttitor arcu at auctor rutrum. Praesent a efficitur velit. Donec aliquam erat id vulputate bibendum. Suspendisse at aliquet risus. Duis massa sem, convallis nec velit quis, ultricies iaculis neque. In vel velit risus. Quisque lorem ex, placerat non volutpat id, iaculis sit amet elit. Integer urna risus, vulputate at metus in, consectetur mattis nibh. Etiam ac vehicula nisi, non faucibus nunc. Vivamus viverra tellus ut lectus fermentum interdum.</p>
	</div>
	
	<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#component-collapse-2" aria-expanded="false" aria-controls="component-collapse-2">
		Example Collapse <span class="fa-sharp fa-regular fa-plus"></span>
	</button>
	<div class="collapse mt-2" id="component-collapse-2">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae tellus vitae leo maximus efficitur sit amet eget urna. Praesent porttitor arcu at auctor rutrum. Praesent a efficitur velit. Donec aliquam erat id vulputate bibendum. Suspendisse at aliquet risus. Duis massa sem, convallis nec velit quis, ultricies iaculis neque. In vel velit risus. Quisque lorem ex, placerat non volutpat id, iaculis sit amet elit. Integer urna risus, vulputate at metus in, consectetur mattis nibh. Etiam ac vehicula nisi, non faucibus nunc. Vivamus viverra tellus ut lectus fermentum interdum.</p>
	</div>
	
	<button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#component-collapse-3" aria-expanded="false" aria-controls="component-collapse-3">
		Example Collapse <span class="fa-sharp fa-regular fa-plus"></span>
	</button>
	<div class="collapse mt-2" id="component-collapse-3">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae tellus vitae leo maximus efficitur sit amet eget urna. Praesent porttitor arcu at auctor rutrum. Praesent a efficitur velit. Donec aliquam erat id vulputate bibendum. Suspendisse at aliquet risus. Duis massa sem, convallis nec velit quis, ultricies iaculis neque. In vel velit risus. Quisque lorem ex, placerat non volutpat id, iaculis sit amet elit. Integer urna risus, vulputate at metus in, consectetur mattis nibh. Etiam ac vehicula nisi, non faucibus nunc. Vivamus viverra tellus ut lectus fermentum interdum.</p>
	</div>
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
					<td>Button Type</td>
					<td>
						<p>Refer to <a href="styleguide.php#buttons">Style Guide</a> for button types and size, but include an option for normal link, eg by adding the classes "btn-link p-0"</p>
					</td>
				</tr>
				<tr>
					<td>Button Text</td>
					<td>Text field</td>
				</tr>
				<tr>
					<td>Content</td>
					<td>WYSIWYG Content</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
