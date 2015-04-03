<?php
/**
 * The Header for Open Bootpress Theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package OpenBootpress
 * @subpackage Tempaltes
 * @since Open Bootpress 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/html5.js"></script>
	<![endif]-->
	<?php
	wp_head(); ?>
	<link rel="stylesheet" href="<?php echo openbootpress_get_resource_uri('public/font-awesome-4.3.0/css/font-awesome.min.css'); ?>">
	<!--[if IE 8]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/respond/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
	<!---//Facebook button code-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<div id="page" class="hfeed site">
		<div id="header">
			<header id="masthead" class="container site-header" role="banner">
				<div class="hidden-xs pull-left">
					<a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
						<img class="site-logo" src="<?php echo openbootpress_get_resource_uri('public/images/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
					</a>
				</div>
				<div class="network">
					<ul>
						<li><a href="https://www.facebook.com/eccone" target="_blank" title="<?php echo esc_attr(__('Page Facebook Eccone'));?>" data-toggle="tooltip"><span class="fa fa-facebook-official"></span></a></li>
						<li><a href="https://twitter.com/eccone_org" target="_blank" title="<?php echo esc_attr(__('Twitter'));?>" data-toggle="tooltip"><span class="fa fa-twitter"></span></a></li>
						<li><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="<?php echo esc_attr(__('Flux RSS des articles'));?>" data-toggle="tooltip"><span class="fa fa-rss"></span></a></li>
					</ul>
				</div>
				<h1><?php echo get_bloginfo('description', 'display'); ?></h1>
			</header>
			<nav id="site-navigation" class="container navbar navigation main-navigation" role="navigation">
				<div class="navbar-header">
	            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
	            	</button>
	            	<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_bloginfo('name', 'display'); ?></a>
	          	</div>
	          	<?php wp_nav_menu(array(
						'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav',
	          			'container' => 'div', 'container_class' => 'navbar-collapse collapse',
						'walker' => new OpenBP_Walker_Dropdown_Nav_Menu()
					));
	          	?>
	        </nav>
        </div>
        <?php if (is_home() || is_front_page()) {
        	locate_template(array('templates/home-splash.php'), true, true);
        	echo '<div class="home-page">';
        }?>
		<div id="main" class="container site-main">
			<div class="row">
				<?php if (!is_front_page()) {?>
				<div class="col-lg-8 col-md-7">
				<?php }?>