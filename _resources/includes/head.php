<?php 
	// functions used for Components and Snippets
	require_once('../App_Code/includes/functions/template-functions.php');
?>

<?php function head(
		$title, 
		$description,
		$page_garfield = false
	) { ?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		
		<link rel="icon/x-icon" href="/gcc/favicon.ico" type="image/x-icon">
		<link rel="icon/png" href="/gcc/_resources/images/favicon-32x32.png" type="image/png">
		<link rel="apple-touch-icon" href="/gcc/_resources/images/apple-touch-icon.png">
		
		<!-- Open Graph meta tags (Facebook, LinkedIn, etc.) -->
		<meta property="og:title" content="<?php echo $title; ?>">
		<meta property="og:description" content="<?php echo $description; ?>">
		<meta property="og:image" content="/gcc/_resources/images/og-icon.png">
		<meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
		<meta property="og:type" content="website">
		
		<!-- Twitter Card meta tags -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="<?php echo $title; ?>">
		<meta name="twitter:description" content="<?php echo $description; ?>">
		<meta name="twitter:image" content="/gcc/_resources/images/og-icon.png">
		<meta name="twitter:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
		
		<!-- Android/ Chrome -->
		<link rel="manifest" href="/gcc/manifest.json">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/cxl7ewr.css">
		
		<!-- Font Awesome -->
		<link href="/gcc/_resources/font-awesome/css/fontawesome.min.css" rel="stylesheet" />
		<link href="/gcc/_resources/font-awesome/css/brands.min.css" rel="stylesheet" />
		<link href="/gcc/_resources/font-awesome/css/sharp-light.min.css" rel="stylesheet" />
		<link href="/gcc/_resources/font-awesome/css/sharp-regular.min.css" rel="stylesheet" />
		<link href="/gcc/_resources/font-awesome/css/sharp-solid.min.css" rel="stylesheet" />
		<link href="/gcc/_resources/font-awesome/css/sharp-thin.min.css" rel="stylesheet" />
		<link href="/gcc/_resources/font-awesome/css/all.css" rel="stylesheet" />
		
		<!-- Plugins -->
		<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.bootstrap5.css" rel="stylesheet">
		
		<!-- GCC Bootstrap -->
		<link href="/gcc/_resources/css/gcc-bootstrap.css" rel="stylesheet" />
		
		<!-- GCC -->
		<link href="/gcc/_resources/css/main.css?v=2.3" rel="stylesheet" />
		
		<?php if (isset($page_garfield) && $page_garfield === true) { ?>
			<!-- Garfield-->
			<link href="/gcc/_resources/css/garfield.css?v=1.4" rel="stylesheet" />
		<?php } ?>
		
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	</head>
<?php } ?>