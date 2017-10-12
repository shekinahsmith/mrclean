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
	<link rel="icon" href="/assets/images/favicon.png">

	<? 
		// adding body class based on page URI

		$siteURL = $_SERVER['SCRIPT_NAME']; 

		switch ($siteURL) {

            case '/':
            case '/index.html':
				$bodyClass = "page--home";
                $pageTitle = "Mr. Clean Commercial Cleaning Services | Comprehensive Commerical Cleaning and Janitorial Services";
                $pageMetaDesc = "Mr. Clean commerical cleaning services serving Charlotte";
			break;

			case '/about.html':
				$bodyClass = "page--about";
                $pageTitle = "Mr. Clean Commerical Cleaning Services | About Us";
                $pageMetaDesc = "Mr. Clean commerical cleaning services serving Charlotte";
			break;

			case '/clients.html':
				$bodyClass = "page--clients";
                $pageTitle = "Mr. Clean Commerical Cleaning Services | Our Clients";
                $pageMetaDesc = "Mr. Clean commerical cleaning services serving Charlotte";
			break;

			case '/contact-us.html':
				$bodyClass = "page--contact";
                $pageTitle = "Mr. Clean Commerical Cleaning Services | Contact Us";
                $pageMetaDesc = "Mr. Clean commerical cleaning services serving Charlotte";
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
	<script src="https://www.google.com/recaptcha/api.js"></script>

	<!-- HTML5 MODERNIZER -->
	<script src="assets/js/plugins/modernizr.js"></script>

</head>

<body class="<? echo $bodyClass .' '. $fixedNav; ?>">