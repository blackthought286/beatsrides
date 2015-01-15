<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width">
	<title>Beats Rides</title>
	<!-- <title><?php wp_title(); ?></title> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body>
	<header id="site-head">
		<div id="site-logo">
			<h1><a href="<?php echo esc_url( home_url('/') ); ?>">Beats Rides</a></h1>
		</div>
		<div id="header-social-icons">
			<img class-"social-icon" height="60" width="60" src="<?php echo get_template_directory_uri(); ?>/images/Facebook.png" />
			<img class-"social-icon" height="60" width="60" src="<?php echo get_template_directory_uri(); ?>/images/Instagram.png" />
			<img class-"social-icon" height="60" width="60" src="<?php echo get_template_directory_uri(); ?>/images/Twitter.png" />
			<img class-"social-icon" height="60" width="60" src="<?php echo get_template_directory_uri(); ?>/images/YouTube.png" />
			<img class-"social-icon" height="60" width="60" src="<?php echo get_template_directory_uri(); ?>/images/Mail.png" />
		</div>
	</header>
	<nav id="site-nav">
		<?php wp_nav_menu(); ?>
	</nav>