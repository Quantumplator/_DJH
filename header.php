<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _djh
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_djh' ); ?></a>

  <!-- #masthead display flex column for branding/promo order swap -->
	<header id="masthead" class="site-header" role="banner">

		<div id="site-branding" class="site-branding flexbox column">

			<div class="site-contact-bar">
				<div class="site-contact-wrap flexbox row">
					<!-- Display site-title as h1 on front-page, p on others to allow article h1 -->
					<?php if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></a></h1>
					<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?><!-- .site-title -->

					<button id="site-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-hidden="true"><i class="fa fa-bars"></i></button>
					<button id="site-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-hidden="true"><i class="fa fa-bars"></i></button>
	      	<?php printf( esc_html__( '%1$s', '_djh' ), '<a href="mailto:admin@dylanjharris.net" class="site-email">admin@dylanjharris.net</a>' ); ?>
	      	<?php printf( esc_html__( '%1$s', '_djh' ), '<a href="tel:+15091234567" class="site-phone">(509) 123&ndash;4567</a>' ); ?>
				</div>
			</div><!-- .site-contact-bar -->
			<div class="site-navigation-bar">

				<nav id="site-navigation" class="site-navigation-wrap flexbox row" role="navigation">

					<button id="site-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-hidden="true"><i class="fa fa-bars"></i></button>
					<button id="site-search-toggle" class="search-toggle" aria-controls="primary-search" aria-expanded="false" aria-hidden="true"><i class="fa fa-search"></i></button>
					<button id="site-social-toggle" class="social-toggle" aria-controls="primary-social" aria-expanded="false" aria-hidden="true"><i class="fa fa-thumbs-o-up"></i></button>

					<span class="screen-reader-text" aria-hidden="false"><?php esc_html_e( 'Primary Menu', '_djh' ); ?></span>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<span class="screen-reader-text" aria-hidden="false"><?php esc_html_e( 'Search', '_djh' ); ?></span>
					<div id="primary-search" class="search-form-wrapper"><?php get_search_form(); ?></div>

					<span class="screen-reader-text" aria-hidden="false"><?php esc_html_e( 'Join Us', '_djh' ); ?></span>
					<div id="primary-social" class="site-social"><?php _djh_site_social_menu(); ?></div>

				</nav><!-- .site-navigation  -->

			</div><!-- .site-navigation-bar -->
			
			<div class="site-hero-bar">
				<h2><span class="design">Design, </span><span class="dev">Development, </span><span class="creatives">Creative Services.</span></h2>
				<p></p>
				<a href=""></a>
				<a href=""></a>
			</div><!-- .site-hero -->

			<?php if ( is_active_sidebar( 'sidebar-promo' ) ) { ?>
			<aside class="site-promo-bar">
				<div class="site-promo-wrap">
					<?php dynamic_sidebar( 'sidebar-promo' ); ?>				
				</div>
			</aside><!-- .site-promo -->
			<?php } ?>
		</div><!-- .site-branding -->
	</header>
	<!-- #masthead -->





	<div id="content" class="site-content">
