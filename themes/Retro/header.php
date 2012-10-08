<!doctype html>

<!-- Html -->
<html <?php language_attributes(); ?>>

<!-- Head -->
<head>
	
	<!-- Charset -->
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Viewport -->
	<meta name="viewport" content="width=<?php echo get_theme_option('viewport'); ?>">
	
	<!-- Page title -->
	<title><?php wp_title('-', 1, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<!-- Profile -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<!-- Favourites icon -->
	<link rel="shortcut icon" href="<?php echo get_theme_option('favicon'); ?>">
	
	<!-- CSS -->
	<link type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=<?php echo get_theme_version(); ?>" rel="stylesheet" />
	<link type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/user.php?v=<?php echo get_theme_version(); ?>" rel="stylesheet">
	
	<!-- Pingback -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
	<!-- WP head -->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<!-- BEGIN HEADER -->
<div id="header">

	<div class="section_inn">
	
		<div id="menu">
		
			<ul id="nav" class="nav">

				<li class="second">
					<!-- <a href="<?php echo get_site_url(); ?>/#portfolio_section"><?php echo retro_filter( get_theme_option('portfolio_label') ); ?></a> -->
					<a>NYE NETTSIDER</a>
				</li>
				<li class="third">
					<!-- <a href="<?php echo get_site_url(); ?>/#blog_section"><?php echo retro_filter( get_theme_option('blog_label') ); ?></a> -->
					<a>KOMMER SNART</a>
				</li>

			</ul>
			
			<div class="clr"></div>
			
		</div><!-- end div #menu -->
		
		<?php if ( get_theme_option('logo') ) : ?>
		
		<!-- Logo -->
		<div id="top_logo">
			<a href="<?php echo get_site_url(); ?>/#home_section"><img src="<?php echo get_theme_option('logo'); ?>" alt="" /></a>
		</div>
		
		<?php endif; ?>
		
		<div class="clr"></div>

	</div><!-- end div .section_inn -->
	
	<div class="clr"></div>
	
</div>
<!-- END HEADER -->