<?php
/**
 * The header for popper-child theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package popper-child
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'popper-child' ); ?></a>

	<?php
		if ( get_header_image() ) { ?>
			<header id="masthead" class="site-header header-background-image" style="background-image: url(<?php echo get_header_image(); ?>) " role="banner">
		<?php } else { ?>
			<header id="masthead" class="site-header" role="banner">
		<?php }
		?>

		
		<div class="site-branding<?php if ( !is_front_page() && is_singular() ) { echo ' screen-reader-text'; } ?>">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->

    <div id="socia-media">
      <a class="fab fa-linkedin" href="https://www.linkedin.com/in/theleonsantana/"></a>
      <a class="fab fa-github" href="https://github.com/theleonsantana"></a>
      <a class="fab fa-twitter-square" href="https://twitter.com/theleonsantana"></a>
    </div><!-- social media -->
  <nav>
    <div id="nav-wrapper">
			
			<a id="open-menu" href="#" ><i class="fas fa-bars"></i><span class="clip">Menu</span></a>
			<a id="close-menu" href="#" ><i class="fas fa-times"></i><span class="clip">Close</span></a>
			
			<?php if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array( 'theme_location' => 'primary' ) ); } 
				?> 

    </div>
	</nav><!-- #nav -->
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">