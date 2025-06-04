<?php 
// CARD
// Created as a function for easier use across demonstration templates
// function card($title, $content, $style, $links, $image, $orientation, $match_height)
// $links must be an array [["link" => "https://url.com", "link_text" => "Learn More"], ["link" => "https://url.com", "link_text" => "Learn More"]]
// Options for $style are white, white-red-header, white-red-border, light-gray, gray, sunset, red
// $match_height true or false
// $link_style options "btn btn-primary btn-sm" "btn btn-secondary btn-sm" "btn btn-light btn-sm" or "arrow-link"
function card(
	$title = '', 
	$content = '', 
	$style = 'white-red-border', 
	$links = [], 
	$image = '',
	$orientation = 'vertical', 
	$match_height = false, 
	$link_style = 'btn btn-primary btn-sm'
) { ?>
	<div class="card component-card card-style-<?php echo $style; ?> card-orientation-<?php echo $orientation; ?><?php echo $match_height ? ' match-height-row' : ''; ?>">
		<?php if(!empty($image)) { ?>
			<?php if($orientation == 'horizontal') { ?>
				<div class="card-img-bg" style="background-image: url(<?php echo $image; ?>);"></div>
			<?php } else { ?>
				<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="card-img-top" />
			<?php } ?>
		<?php } ?>
		<div class="component-card-content">
			<?php if(!empty($title)) { ?>
				<div class="card-header">
					<h2 class="h4 mb-0 lh-sm">
						<?php echo $title; ?>
					</h2>
				</div>
			<?php } ?>
			<div class="card-body">
				<p><?php echo $content; ?></p>
				
				<?php if (!empty($links) && is_array($links) && count($links) > 0) { ?>
					<div>
						<?php foreach($links as $link) { ?>
							<a href="<?php echo $link['link']; ?>" class="fs-7 <?php echo $link_style; ?> mt-2">
								<?php echo $link['link_text']; ?>
							</a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php }

// Button
// Options
// $style --> btn-primary, btn-secondary, btn-dark, btn-outline-light, btn-yellow, btn-outline-primary, $btn-light
// $size --> default, btn-sm, btn-lg
// $type --> default, btn-circle
// $link
// $text
// $icon enter a Font Awesome icon, eg fa-sharp fa-regular 
function button(
	$type = 'default', 
	$style = 'btn-primary', 
	$size = 'default', 
	$link = '', 
	$text = '', 
	$icon = ''
) { ?>
	<a href="<?php echo $link; ?>" class="btn <?php echo $type; ?> <?php echo $style; ?> <?php echo $size; ?> d-flex gap-1 align-items-center flex-wrap">
		<?php if($type == 'btn-circle') { ?>
			<?php if(!empty($icon)) { ?>
				<span class="<?php echo $icon; ?>"></span>
			<?php } ?>
			<span class="visually-hidden"><?php echo $text; ?>
		<?php } else { ?>
			<?php if(!empty($icon)) { ?>
				<span class="fa-sharp fa-regular <?php echo $icon; ?>"></span>
			<?php } ?>
			<span><?php echo $text; ?>
		<?php } ?>
	</a>	
<?php }

// Quicklinks
// $links --> array of links [['url' => '#', 'text' => 'TEXT', 'icon' => 'fa-sharp fa-regular fa-arrow-right']]
// $style --> white, white-red-header, white-red-border, light-gray, gray, sunset, red
// $columns_desktop --> 1, 2, 3 etc
// $columns_tablet --> 1, 2, 3 etc
// $columns_mobile --> 1, 2, 3 etc
 function quicklinks(
	$style = 'border-between',
	$columns_desktop = '4',
	$columns_tablet = '2',
	$columns_mobile = '1',
	$icon_size = '6',
	$links = []
) { ?>
	<?php if (!empty($links) && is_array($links) && count($links) > 0) { ?>
		<div class="row row-cols-<?php echo $columns_mobile; ?> row-cols-sm-<?php echo $columns_tablet; ?> row-cols-lg-<?php echo $columns_desktop; ?>">
			<?php foreach($links as $link) { ?>
				<div class="col mb-3">
					<a href="<?php echo $link['url']; ?>" class="card card-style-<?php echo $style; ?> component-card component-quicklink d-block ">
						<div class="card-body d-flex flex-column align-items-center justify-content-center p-3 match-height-row">
							<div class="component-quicklink-icon">
								<span class="<?php echo $link['icon']; ?> fs-<?php echo $icon_size; ?>"></span>
							</div>
							<div class="component-quicklink-text text-center lh-sm mt-2 fs-7 fw-bold">
								<?php echo $link['text']; ?>
							</div>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
<?php }


// List Group
// $items is an array with key values, eg ["url" => "https://url.com", "text" => "Sign Up for a Zoom Session", "description" => "", "icon" => "fa-sharp fa-regular fa-unicorn"]
function list_group(
	$items = []
) {
	if(count($items) > 0) {
	?>
		<div class="list-group list-group-flush component-list-group">
			<?php foreach($items as $item) {
				$url = $item['url'];
				$text = $item['text'];
				$description = $item['description'];
				$icon = $item['icon'];
			?>
				<?php if(!empty($url)) { ?>
					<a href="<?php echo $url; ?>" class="list-group-item list-group-action text-decoration-none">
						<span class="d-flex align-items-start justify-content-start gap-2">
							<?php if(!empty($icon)) { ?>
								<span class="<?php echo $icon; ?>"></span>
							<?php } ?>
							<?php if(!empty($description)) { ?>
								<span>
									<span class="h5 d-block lh-1 mb-1"><?php echo $text; ?></span>
									<span class="d-block"><?php echo $description; ?></span>
								</span>
							<?php } else { ?>
								<span class="lh-1"><?php echo $text; ?></span>
							<?php } ?>
							<span class="fa-sharp fa-light fa-arrow-up-right me-0 ms-auto"></span>
						</span>
					</a>
				<?php } else { ?>
					<div class="list-group-item list-group-action text-decoration-none">
						<span class="d-flex align-items-start justify-content-start gap-2">
							<?php if(!empty($icon)) { ?>
								<span class="<?php echo $icon; ?>"></span>
							<?php } ?>
							<?php if(!empty($description)) { ?>
								<span>
									<span class="h5 d-block lh-1 mb-1"><?php echo $text; ?></span>
									<span class="d-block"><?php echo $description; ?></span>
								</span>
							<?php } else { ?>
								<span><?php echo $text; ?></span>
							<?php } ?>
						</span>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	<?php		
	}	
}

// Block Link
// $style can be white, gray, red-border
// $links is an array [["url" => "", "text" => ""]]
function block_link(
	$style = "white",
	$links = []
) { ?>
	<div class="d-flex flex-column gap-1 justify-content-start align-items-start">
		<?php foreach($links as $link) { ?>
			<a href="<?php echo $link['url']; ?>" class="component-block-link block-link-style-<?php echo $style; ?>">
				<?php echo $link['text']; ?>
			</a>
		<?php } ?>	
	</div>
<?php }
