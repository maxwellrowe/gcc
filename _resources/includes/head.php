<?php function head($title, $description) { ?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>">
		
		<link rel="icon/x-icon" href="/gcc/_resources/images/favicon.ico" type="image/x-icon">
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
		
		<!-- Plugins -->
		<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
		<!-- GCC -->
		<link href="/gcc/_resources/css/utilities.css" rel="stylesheet" />
		<link href="/gcc/_resources/css/global.css" rel="stylesheet" />
		<link href="/gcc/_resources/css/components.css" rel="stylesheet" />
		
	</head>
<?php } ?>