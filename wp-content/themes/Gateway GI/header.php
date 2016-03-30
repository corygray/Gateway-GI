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
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- Snap.js -->
        <script type="text/javascript" src="/wp-content/themes/Gateway%20GI/library/js/libs/snap.js"></script>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<div class="mobile-navigation">

						<div class="mobile-navigation-container">
							<ul>
								<li><a href="/about">About</a></li>
								<li><a href="#">Patient Forms</a></li>
								<li><a href="/procedures">Procedures</a></li>
								<li><a href="/locations">Locations</a></li>
								<li><a href="/faqs">FAQs</a></li>
								<li><a href="/news">News</a></li>
							</ul>

							<a href="/contact">contact us</a> &nbsp;&nbsp;&nbsp; <a href="/resources">resources</a><br />
							<input type="text" class="fancy-input" placeholder="search"/>
						</div><!-- mobile-navigation-container -->
					</div><!-- mobile-navigation -->

		        	<a id="open-left"><img src="/wp-content/themes/Gateway%20GI/library/images/mobile-menu.png" style="float: left; top: 2%; left: 2%;"/></a>

					<img src="/wp-content/themes/Gateway%20GI/library/images/gatewaygi-logo.png" class="logo"/>
					
				</div><!-- inner-header -->

			</header>
