<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<meta content='Personal website and portfolio for Thomas Wicker: Software Developer in Denver, CO' name='description'>
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link href='img/favicon.ico' rel='shortcut icon'>
		<meta content='Personal website and portfolio for Thomas Wicker: Front End Dev' property='og:title'>

		<!-- <link href='css/foundation.min.css' rel='stylesheet'> -->
		<!-- <link href='bower_components/motion-ui/dist/motion-ui.min.css' rel='stylesheet'> -->
		<!-- <link href='bower_components/components-font-awesome/css/font-awesome.min.css' rel='stylesheet'> -->
		<!-- <link href='css/application.min.css' rel='stylesheet'> -->

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<!-- Application Spells -->
		<!-- <link href='bower_components/foundation-sites/dist/foundation.min.css' rel='stylesheet'>
		<link href='bower_components/lightbox2/dist/css/lightbox.min.css' rel='stylesheet'>
		<link href='css/application.min.css' rel='stylesheet'>
		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'> -->

	</head>

	<body>

		<?php include_once("analyticstracking.php") ?>
