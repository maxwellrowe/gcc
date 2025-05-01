<header class="global-header">
	<div class="container">
		<nav class="d-flex justify-content-between align-items-center gap-4 py-3">
			<div class="d-flex justify-content-start align-items-center gap-3">
				<a href="/" class="global-brand">
					<img src="/gcc/_resources/images/gcc-logo.png" alt="Glendale City College Logo" />
				</a>
				<a href="#" class="btn btn-primary d-none d-lg-block">Apply Now</a>
			</div>
			<div class="d-flex justify-content-end gap-3">
				<ul class="nav gap-2">
					<li class="nav-item dropdown d-none d-lg-block">
						<a class="dropdown-toggle btn btn-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Info For...</a>
						<?php include('nav-audiences.php'); ?>
					</li>
					<li class="nav-item">
						<button class="btn btn-dark btn-circle collapsed" aria-expanded="false" aria-controls="global-search" data-bs-target="#global-search" data-bs-toggle="collapse" type="button" id="global-search-toggle">
							<span class="fa-sharp fa-regular fa-magnifying-glass"></span>
							<span class="fa-sharp fa-regular fa-xmark"></span>
							<span class="visually-hidden">Open Search</span>
						</button>
					</li>
					<li class="nav-item">
						<button class="btn btn-yellow d-flex align-items-center justify-content-between gap-1 collapsed" id="primary-menu-toggle" data-bs-toggle="collapse" type="button" data-bs-target="#primary-menu" aria-expanded="false" aria-controls="primary-menu">
							<span class="menu-bars">
								<span class="menu-bar"></span>
								<span class="menu-bar"></span>
							</span>
							<span class="d-none d-lg-inline-block">Menu</span>
						</button>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	
	<?php include('nav-primary.php'); ?>
	<?php include('search.php'); ?>
</header>