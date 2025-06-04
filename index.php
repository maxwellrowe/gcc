<!DOCTYPE html>
<html lang="en">
<?php
	// Head
	require_once('_resources/includes/head.php');
	// Set title and meta description via head($title, $description) function
	head('Styleguide', '');
	
	// Page Setup -- true or false
	$page_nav_secondary = true;
	$page_nav_tertiary = false;
	$page_garfield = false;
?>

	<body>
		
		<?php if($page_garfield) {
			include('_resources/includes/header-garfield.php');
		} else {
			include('_resources/includes/header.php');
		} ?> 
		
		<main id="main-content">
			<h1>Hello World!</h1>
			<a href="#" class="btn btn-primary">Go Somewhere</a>
		</main>
		
		<?php include('_resources/includes/footer.php'); ?>
		
		<?php include('_resources/includes/footer-scripts.php'); ?>
		
	</body>

</html>