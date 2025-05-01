<!DOCTYPE html>
<html lang="en">
<?php
	// Head
	require_once('../_resources/includes/head.php');
	// head($title, $description);
	head('Template Index', '');
?>

	<body>
		
		<?php include('../_resources/includes/header.php'); ?>
		
		<main>
			
			<section class="mb-5">
				<div class="container">
					<h2>Color</h2>
					<?php include('styleguide/color.php'); ?>
				</div>
			</section>
			
			<section class="mb-5">
				<div class="container">
					<h2>Typography</h2>
					<?php include('styleguide/typography.php'); ?>
				</div>
			</section>
			
			<section class="mb-5">
				<div class="container">
					<h2>Buttons</h2>
					<?php include('styleguide/buttons.php'); ?>
				</div>
			</section>
			
		</main>
		
		<?php include('../_resources/includes/footer.php'); ?>
		
		<?php include('../_resources/includes/footer-scripts.php'); ?>
		
	</body>

</html>