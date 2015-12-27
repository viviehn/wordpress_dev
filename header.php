<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fullPage.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
			    sectionsColor: ['#000', '#000', '#000', '#000', '#000'],
				css3: true
			});

			$.fn.fullpage.setKeyboardScrolling(true);
			$.fn.fullpage.setAllowScrolling(true, 'down, right');
		});
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<?php
	if ( is_front_page() && is_home() ): ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
			<img class="home-logo" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		</a>
	<?php endif;?>

	<div class="dropdown">
		<?php
		if ( !(is_front_page() && is_home() )): ?>
			<h1 class="nav-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php endif;?>
	    <input class="dropdown-toggle" type="text">
	  	<div class="dropdown-text"><span class="genericon genericon-menu"></span></div>
	    <ul class="dropdown-content">
	        <?php if ( has_nav_menu( 'primary' ) ) : ?>
			    <nav id="site-navigation" class="primary-nav" role="navigation">
				    <?php // Primary navigation menu.
						wp_nav_menu( array(
							'menu_class'     => 'nav-menu',
							'theme_location' => 'primary',
						) );
					?>
				</nav><!-- .primary-nav -->
			<?php endif; ?>
	    </ul><!-- .dropdown-content -->
	</div><!-- .dropdown -->

	<div id="content" class="site-content">
