<?php // Card Contact Component ?>
<p>This component can be used standalone on a page as well as used for Secondary Navigation Contact dropdown. The data can be pulled from the Directory or added in the component.</p>
<p>These cards should allow for the "Utilities - Advanced Options" listed above (animation, padding, match height, etc). Those classes and options can be added to the div with the "card" class.</p>

<h3>Vertical</h3>
<div class="row row-cols-1 row-cols-lg-3 g-3">
	<div class="col">
		<p><strong>All Options - Default</strong>
		<div class="card component-card-contact component-card-contact-vertical border-primary">
			<img src="/gcc/_resources/images/placeholder_profile.jpg" alt="Jane Doe" class="card-img-top" />
			<div class="px-3 py-2">
				<h2 class="h5 mb-0">Jane Doe</h2>
				<p class="small mb-0">Dean of Anthropology</p>
			</div>
			<ul class="list-group list-group-flush border-gray-500">
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
						<span class="fa-sharp fa-regular fa-envelope"></span>
						<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">myemailsuperlongemail@glendale.edu</a>
						<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemailsuperlongemail@glendale.edu">
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
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-location-dot"></span>
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>B Building</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-clock"></span>
						<a href="#hours-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="hours-toggle-content">
							<span>Hours</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="hours-toggle-content">
						<div class="pt-2">
							<p>Monday - Friday | 8:00 a.m. to 4:30 p.m.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-fax"></span>
						<span class="fw-medium flex-grow-1 text-break">818-123-4567</span>
						<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
							<span class="fa-sharp fa-regular fa-copy"></span>
							<span class="visually-hidden">Copy</span>
					  </button>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#custom-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-toggle-content">
							<span>Custom Toggle</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="custom-toggle-content">
						<div class="pt-2">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>All Contact Info</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="col">
		<p><strong>All Options - Light Gray</strong>
		<div class="card component-card-contact component-card-contact-vertical component-card-contact-light-gray border-0">
			<img src="/gcc/_resources/images/placeholder_profile.jpg" alt="Jane Doe" class="card-img-top" />
			<div class="px-3 py-2">
				<h2 class="h5 mb-0">Jane Doe</h2>
				<p class="small mb-0">Dean of Anthropology</p>
			</div>
			<ul class="list-group list-group-flush border-gray-500">
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
						<span class="fa-sharp fa-regular fa-envelope"></span>
						<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">myemailsuperlongemail@glendale.edu</a>
						<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemailsuperlongemail@glendale.edu">
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
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-location-dot"></span>
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>B Building</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-clock"></span>
						<a href="#hours-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="hours-toggle-content">
							<span>Hours</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="hours-toggle-content">
						<div class="pt-2">
							<p>Monday - Friday | 8:00 a.m. to 4:30 p.m.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-fax"></span>
						<span class="fw-medium flex-grow-1 text-break">818-123-4567</span>
						<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
							<span class="fa-sharp fa-regular fa-copy"></span>
							<span class="visually-hidden">Copy</span>
					  </button>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#custom-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-toggle-content">
							<span>Custom Toggle</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="custom-toggle-content">
						<div class="pt-2">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>All Contact Info</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="col">
		<p><strong>All Options - Medium Gray w/ Red Header</strong>
		<div class="card component-card-contact component-card-contact-vertical component-card-contact-medium-gray border-0">
			<img src="/gcc/_resources/images/placeholder_profile.jpg" alt="Jane Doe" class="card-img-top" />
			<div class="px-3 py-2">
				<h2 class="h5 mb-0">Jane Doe</h2>
				<p class="small mb-0">Dean of Anthropology</p>
			</div>
			<ul class="list-group list-group-flush border-gray-500">
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
						<span class="fa-sharp fa-regular fa-envelope"></span>
						<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">myemailsuperlongemail@glendale.edu</a>
						<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemailsuperlongemail@glendale.edu">
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
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-location-dot"></span>
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>B Building</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-clock"></span>
						<a href="#hours-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="hours-toggle-content">
							<span>Hours</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="hours-toggle-content">
						<div class="pt-2">
							<p>Monday - Friday | 8:00 a.m. to 4:30 p.m.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-fax"></span>
						<span class="fw-medium flex-grow-1 text-break">818-123-4567</span>
						<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
							<span class="fa-sharp fa-regular fa-copy"></span>
							<span class="visually-hidden">Copy</span>
					  </button>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#custom-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-toggle-content">
							<span>Custom Toggle</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="custom-toggle-content">
						<div class="pt-2">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>All Contact Info</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="row row-cols-1 row-cols-lg-3 mt-3 g-3">
	<div class="col">
		<div class="card component-card-contact component-card-contact-vertical border-primary match-height-row">
			<div class="px-3 py-2">
				<h2 class="h5 mb-0">Department Name</h2>
			</div>
			<ul class="list-group list-group-flush border-gray-500">
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
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<span class="fa-sharp fa-regular fa-clock"></span>
						<a href="#hours-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="hours-toggle-content">
							<span>Hours</span>
							<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
						</a>
					</div>
					<div class="collapse" id="hours-toggle-content">
						<div class="pt-2">
							<p>Monday - Friday | 8:00 a.m. to 4:30 p.m.</p>
						</div>
					</div>
				</li>
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>All Contact Info</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="col">
		<div class="card component-card-contact component-card-contact-vertical component-card-contact-medium-gray border-0 match-height-row">
			<div class="px-3 py-2">
				<h2 class="h5 mb-0">Department Name</h2>
			</div>
			<ul class="list-group list-group-flush border-gray-500">
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
				<li class="list-group-item border-gray-500">
					<div class="d-flex align-items-center justify-content-start gap-2">
						<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
							<span>All Contact Info</span>
							<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="col">
		<div class="card component-card-contact component-card-contact-vertical component-card-contact-light-gray border-0 match-height-row">
			<div class="px-3 py-2">
				<h2 class="h5 mb-0">Department Name</h2>
			</div>
			<ul class="list-group list-group-flush border-gray-500">
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
			</ul>
		</div>
	</div>
</div>

<h3 class="mt-3">Contact List Group</h3>
<p>In cases where the entire card is not needed, have the ability to still use the list group styling.</p>
<div class="row">
	<div class="col-12 col-lg-4">
		<div class="card component-contact-card rounded-0 border-0">
			<div class="card-body p-0">
				<ul class="list-group list-group-flush border-gray-500">
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
							<span class="fa-sharp fa-regular fa-envelope"></span>
							<a href="mailto:myemail@glendale.edu" class="fw-medium flex-grow-1 text-break">myemailsuperlongemail@glendale.edu</a>
							<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="myemailsuperlongemail@glendale.edu">
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
					<li class="list-group-item border-gray-500">
						<div class="d-flex align-items-center justify-content-start gap-2">
							<span class="fa-sharp fa-regular fa-location-dot"></span>
							<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
								<span>B Building</span>
								<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
							</a>
						</div>
					</li>
					<li class="list-group-item border-gray-500">
						<div class="d-flex align-items-center justify-content-start gap-2">
							<span class="fa-sharp fa-regular fa-clock"></span>
							<a href="#hours-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="hours-toggle-content">
								<span>Hours</span>
								<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
							</a>
						</div>
						<div class="collapse" id="hours-toggle-content">
							<div class="pt-2">
								<p>Monday - Friday | 8:00 a.m. to 4:30 p.m.</p>
							</div>
						</div>
					</li>
					<li class="list-group-item border-gray-500">
						<div class="d-flex align-items-center justify-content-start gap-2">
							<span class="fa-sharp fa-regular fa-fax"></span>
							<span class="fw-medium flex-grow-1 text-break">818-123-4567</span>
							<button class="btn btn-outline-primary btn-sm btn-circle flex-shrink-0 gcc-copy-button" data-clipboard-text="8181234567">
								<span class="fa-sharp fa-regular fa-copy"></span>
								<span class="visually-hidden">Copy</span>
						  </button>
						</div>
					</li>
					<li class="list-group-item border-gray-500">
						<div class="d-flex align-items-center justify-content-start gap-2">
							<a href="#custom-toggle-content" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1 collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-toggle-content">
								<span>Custom Toggle</span>
								<span class="fa-sharp fa-light fa-plus flex-shrink-0"></span>
							</a>
						</div>
						<div class="collapse" id="custom-toggle-content">
							<div class="pt-2">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</li>
					<li class="list-group-item border-gray-500">
						<div class="d-flex align-items-center justify-content-start gap-2">
							<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
								<span>All Contact Info</span>
								<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<h3 class="mt-3">Horizontal</h3>
<p>Card - Contact Components can be made horizontal by adding the class "component-card-contact-horizontal" to the wrapping div. It is recommended if using Horizontal layout, not to include toggles and limit number of contact fields/ items.</p> 

<div class="card component-card-contact component-card-contact-horizontal component-card-contact-light-gray border-0 match-height-row">
	<div class="px-3 py-2">
		<h2 class="h5 mb-0">Department Name</h2>
	</div>
	<ul class="list-group list-group-flush border-gray-500">
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
	</ul>
</div>
<div class="mb-3"></div>
<div class="card component-card-contact component-card-contact-horizontal component-card-contact-medium-gray border-0">
	<img src="/gcc/_resources/images/placeholder_profile.jpg" alt="Jane Doe" class="card-img-top" />
	<div class="px-3 py-2">
		<h2 class="h5 mb-0">Jane Doe</h2>
		<p class="small mb-0">Dean of Anthropology</p>
	</div>
	<ul class="list-group list-group-flush border-gray-500">
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
				<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
					<span>View Profile</span>
					<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
				</a>
			</div>
		</li>
	</ul>
</div>
<div class="mb-3"></div>
<div class="card component-card-contact component-card-contact-horizontal border-primary">
	<img src="/gcc/_resources/images/placeholder_profile.jpg" alt="Jane Doe" class="card-img-top" />
	<div class="px-3 py-2">
		<h2 class="h5 mb-0">Jane Doe</h2>
		<p class="small mb-0">Dean of Anthropology</p>
	</div>
	<ul class="list-group list-group-flush border-gray-500">
		<li class="list-group-item border-gray-500">
			<div class="d-flex align-items-center justify-content-start gap-2">
				<a href="#" class="fw-medium flex-grow-1 text-break d-flex align-items-center justify-content-between gap-2 pe-1">
					<span>View Profile</span>
					<span class="fa-sharp fa-light fa-arrow-right-long flex-shrink-0"></span>
				</a>
			</div>
		</li>
	</ul>
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
					<td>Orientation</td>
					<td>Select</td>
					<td>
						<ul>
							<li>Vertical</li>
							<li>Horizontal</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Email (text input)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Phone Number (text input)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Fax</td>
					<td>Repeater</td>
					<td>
						<ul>
							<li>Fax (text input)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Location</td>
					<td>2 Text Input Fields</td>
					<td>
						<ul>
							<li>Location Label (text input)</li>
							<li>Location URL (text input, optional)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Hours</td>
					<td>2 Fields</td>
					<td>
						<ul>
							<li>Hours Label (text input)</li>
							<li>Hours Content (Visual Editor)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Custom Toggles</td>
					<td>Repeater -- 2 fields for each</td>
					<td>
						<ul>
							<li>Toggle Label (text input)</li>
							<li>Toggle Content (Visual Editor)</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Custom Links</td>
					<td>Repeater -- 2 fields for each</td>
					<td>
						<ul>
							<li>Link Text (text input)</li>
							<li>Link URL (file chooser)</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>