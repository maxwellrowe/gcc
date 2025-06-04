<p>The purpose of this component is to be used in the page. This is separate from <a href="alerts.php">Omni CMS Alerts</a>.</p>
<h3>Default</h3>
<div class="component-notification d-flex flex-column flex-lg-row align-items-lg-center justify-content-start justify-content-lg-between bg-light-yellow rounded p-3 gap-2" role="alert">
	<div>
		<h2 class="h4 my-0">Notification Title</h2>
		<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis.</p>
	</div>
	<a href="#" class="btn btn-primary btn-sm align-self-start align-self-lg-center">Call to Action</a>
</div>

<h3 class="mt-3">Small</h3>
<p>Small is to be used in smaller contexts, eg within a column. It will always be stacked in orientation.</p>
<div style="max-width: 400px;">
	<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
		<div>
			<h2 class="fs-6 my-0">Notification Title</h2>
		</div>
		<a href="#" class="btn btn-primary btn-sm align-self-start">Call to Action</a>
	</div>
	<div class="component-spacer cs2"></div>
	<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
		<div>
			<h2 class="fs-6 my-0">Spring semester begins Feb. 18, 2025.</h2>
		</div>
	</div>
	<div class="component-spacer cs2"></div>
	<div class="notification-component d-flex flex-column justify-content-start bg-light-yellow rounded-1 p-2 gap-2" role="alert">
		<div>
			<h2 class="fs-6 my-0">Spring semester begins Feb. 18, 2025.</h2>
			<p class="mb-0 fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit enim, ut cursus felis.</p>
		</div>
		<a href="#" class="btn btn-primary btn-sm align-self-start">Call to Action</a>
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
							<li>Small</li>
							<li>Default</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Title</td>
					<td>Text Input</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Content</td>
					<td>Textarea</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Button URL</td>
					<td>File Chooser</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>Button Text</td>
					<td>Text Input</td>
					<td>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>