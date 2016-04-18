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
       
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/
		css">

        <!-- jQuery 2.2 CDN for accordion -->
        <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
        <script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"   integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="   crossorigin="anonymous"></script> 

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/snap.css">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" >

		<div id="container">

		<div class="snap-drawers">
      		<div class="snap-drawer snap-drawer-left navigation">

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

					<a href="/contact-us">contact us</a> &nbsp;&nbsp;&nbsp; <a href="/resources">resources</a><br />
					<input type="text" class="fancy-input" placeholder="search"/>

				</div><!-- mobile-navigation-container -->
			</div><!-- mobile-navigation -->

			</div><!-- snap-drawer -->
		</div><!-- snap drawers -->

		<div class="snap-content" id="wrap">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

		        	<a href="#" class="open-left" id="open-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/mobile-menu.png" class="mobile-nav-button"/></a>

					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/gatewaygi-logo.png" class="logo"/></a>

					<div class="desktop-secondary-nav">

					<ul class="secondary-desktop-menu">

						<li><a href="/contact">contact us</a></li>
						<li><a href="/resources">resources</a></li>
						<li><input type="text" class="fancy-input" placeholder="search"/></li>

					</ul><!-- secondary-desktop-menu -->


					</div><!-- desktop-secondary-nav -->

					<div class="desktop-nav">
					<?php 

						wp_nav_menu( array(
						    'menu' => 'desktop-menu'
						) );

					 ?>
					</div><!-- desktop-nav -->
					
				</div><!-- inner-header -->

			</header>
