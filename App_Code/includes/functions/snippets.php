<?php 
// CARD
// Created as a function for easier use across demonstration templates
// function card_snippet($content, $style, $image, $orientation, $match_height, $padding)
// Options for $style are white, white-red-border, light-gray, gray, sunset, red
// $match_height true or false
// $padding is raw values eg 1rem 2rem
function card_snippet(
	$content = '', 
	$style = 'white-red-border',
	$image = '', 
	$orientation = 'vertical',
	$match_height = false, 
	$padding = ''
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
			<div class="card-body" <?php if(!empty($padding)) { ?>style="padding: <?php echo $padding; ?>;"<?php } ?>>
				<?php echo $content; ?>
			</div>
		</div>
	</div>
<?php }


// Accordion
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
}