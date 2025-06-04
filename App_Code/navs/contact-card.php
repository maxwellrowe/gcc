<?php // This is the same markup as used for the Card - Contact component, just minus the <div class="card"> wrapper ?>
<ul class="list-group list-group-flush">
	<li class="list-group-item border-gray-500">
		<div class="d-flex align-items-center justify-content-start gap-2">
			<span class="fa-sharp fa-regular fa-envelope"></span>
			<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">myemail@glendale.edu</a>
			<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemail@glendale.edu">
				<span class="fa-sharp fa-regular fa-copy"></span>
				<span class="visually-hidden">Copy</span>
			</button>
		</div>
	</li>
	<li class="list-group-item border-gray-500">
		<div class="d-flex align-items-center justify-content-start gap-2">
			<span class="fa-sharp fa-regular fa-phone"></span>
			<a href="tel:8181234567" class="fw-medium flex-grow-1 text-break">818-123-4567</a>
			<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
				<span class="fa-sharp fa-regular fa-copy"></span>
				<span class="visually-hidden">Copy</span>
		  </button>
		</div>
	</li>
	<li>
		<a href="">All Contact Info</a>
	</li>
</ul>