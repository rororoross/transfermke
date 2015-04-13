<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package my-simone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="Description Here">
<meta name="author" content="Transfer Pizzeria and Café">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="wp-content/themes/my-simone/js/tabcontent.js" type="text/javascript"></script>
<script src="wp-content/themes/my-simone/js/responsive-nav.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="wp-content/themes/my-simone/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700|Pacifico' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header>
		 <a href="#home" class="logo" data-scroll><img class="logo" src="<?php bloginfo( 'template_url' ); ?>/images/Transfer-Logo-EPS-white.png"></a>
      <img class="logo-img-mobile" src="<?php bloginfo( 'template_url' ); ?>/images/LautobusTransfer.png">
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a href="#home" data-scroll>Home</a></li>
          <li class="menu-item"><a href="#specials" data-scroll>Specials</a></li>
          <li class="menu-item"><a href="#food" data-scroll>Food</a></li>
          <li class="menu-item"><a href="#drinks" data-scroll>Drinks</a></li>
          <li class="menu-item"><a href="#contact" data-scroll>Contact</a></li>
        </ul>
      </nav>
	</header><!-- #masthead -->
<div id="content" class="site-content">
<div id="calendar">
<?php echo do_shortcode('[ai1ec view="monthly"]'); ?>
</div></div>
	
<?php get_footer(); ?>
