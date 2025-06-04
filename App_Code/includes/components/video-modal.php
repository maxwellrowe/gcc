<p>Allow for an embed of either YouTube or Vimeo. The "modal" code needs to be placed outside of a container or columns. There is a JS function to move all modals just before the closing body tag.</p>
<a href="#" class="component-video-modal rounded" data-bs-toggle="modal" data-bs-target="#unique-modal-id" arial-label="Play Video Caption">
	<img src="/gcc/_resources/images/placeholder_students.jpg" alt="Video Cover" />
	<span class="play-button fs-3">
		<span class="fa-sharp fa-solid fa-play"></span>
	</span>
	<div class="caption position-absolute d-flex flex-wrap align-items-center justify-content-center">
		<span class="text-white d-line-block w-max-content py-1 px-2 rounded-1 m-auto bg-dark fs-7">Video Caption Optional</span>
	</div>
</a>

<div class="mt-4 border-top border-3 border-primary pt-1">
	<p class="preheading">Component Fields/ Options</p>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Field</th>
					<th>Type</th>
					<th>Notes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Video</td>
					<td>Textarea</td>
					<td>Required. YouTube or Vimeo Embed Code (note that MC doesn't like single attributes, eg autoplay)</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>File Chooser</td>
					<td>Required</td>
				</tr>
				<tr>
					<td>Caption</td>
					<td>Text Input</td>
					<td>Required, keep under 140 characters or something like that.</td>
				</tr>
				<tr>
					<td>Caption Show/ HideL</td>
					<td>Select</td>
					<td>
						<ul>
							<li>Show</li>
							<li>Hide</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade video-modal" id="unique-modal-id" tabindex="-1" aria-label="Video" aria-hidden="true">
	<button class="btn btn-outline-light" data-bs-dismiss="modal"><span class="fa-sharp fa-regular fa-xmark"></span><span class="visually-hidden">Close</span></button>
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content rounded-0">
			<div class="modal-body p-0">
				<div class="ratio ratio-16x9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/1Xe6aSYSkvg?si=fdJVOyFptRrcOG4F" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="true"></iframe>
				</div>
				<div class="video-modal-caption p-1 bg-dark text-white small text-center">
					Video Caption Optional
				</div>
			</div>
		</div>
	</div>
</div>