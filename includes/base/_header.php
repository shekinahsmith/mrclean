<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"> <!--<![endif]-->


<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<![endif]-->
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<? 
		// adding body class based on page URI

		$siteURL = $_SERVER['SCRIPT_NAME']; 

		switch ($siteURL) {

            case '/':
            case '/index.html':
				$bodyClass = "page--home";
                $pageTitle = "Mr. Clean, LLC | Comprehensive Commerical Cleaning and Janitorial Services";
                $pageMetaDesc = "Mr. Clean Comprehensive Commercial Cleaning and Janitorial Services serving Charlotte, NC, Gastonia, Statesville, Mecklenburg County, Iredell County, Gaston County and Cabarrus County.";
			break;

			case '/about-us.html':
				$bodyClass = "page--about";
                $pageTitle = "Mr. Clean, LLC | About Us";
                $pageMetaDesc = "Mr. Clean Comprehensive Commercial Cleaning and Janitorial Services has been serving the Charlotte area for 14 years. We adhere to the highest standards in the industry and use eco-friendly products.";
			break;

			case '/clients.html':
				$bodyClass = "page--clients";
                $pageTitle = "Mr. Clean, LLC | Our Clients";
                $pageMetaDesc = "Mr. Clean Comprehensive Commercial Cleaning and Janitorial Services serve a variety of clients including Healthcare facilities, Schools, Government facilities and offices in Charlotte, Gastonia, Statesville, Mecklenburg County, Iredell County, Gaston County and Cabarrus County.";
			break;

			case '/faq.html':
				$bodyClass = "page--faq";
                $pageTitle = "Mr. Clean, LLC | FAQ";
                $pageMetaDesc = "Mr. Clean Commercial Cleaning Services has the answer to your commercial cleaning needs!";
			break;

			case '/contact-us.html':
				$bodyClass = "page--contact";
                $pageTitle = "Mr. Clean Commerical, LLC | Contact Us";
                $pageMetaDesc = "Contact Mr. Clean commerical cleaning services to schedule your next comprehensive commerical cleaning service for your business today!";
			break;

		}

	?>
	<title><? echo $pageTitle ?></title>
	<link rel="canonical" href="http://www.mrcleanco.com">

	<!-- META -->

	<? include 'includes/base/_header-meta.php'; ?>

	<!-- CSS -->

	<? include 'includes/base/_header-css.php'; ?>
	
	<script src="https://code.jquery.com/jquery-1.11.2.min.js" integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>

	<!-- HTML5 MODERNIZER -->
	<script src="assets/js/plugins/modernizr.js"></script>

</head>

<body class="<?= $bodyClass; ?>">