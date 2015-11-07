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

			<div class="site-contact-bar flex-bar">
				<div class="contact-bar-inner flexbox row">

					<?php // printf( esc_html__( '%1$s', '_djh' ), 'html' ); ?>

					<div class="site-title nav-control">
						<a id="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php if ( is_front_page() ) : ?>
							<h1 id="site-title"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></h1>
							<?php else : ?>
							<p id="site-title"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></p>
							<?php endif; ?>
							<span>djh</span>
						</a>
					</div>

					<div class="site-email nav-control">
						<a href="mailto:admin@dylanjharris.net">
							<button class="menu-toggle" aria-hidden="true">
								<i class="fa fa-envelope"></i>
								Email
							</button>
							<span class="contact-point">admin@dylanjharris.net</span>
						</a>
					</div>

					<div class="site-phone nav-control">
						<a href="tel:+15091234567">
							<button class="menu-toggle" aria-hidden="true">
								<i class="fa fa-phone"></i>
								<span>Call</span>
							</button>
							<span class="contact-point">(509) 123&ndash;4567</span>
						</a>
					</div>

				</div><!-- .contact-bar-inner -->
			</div><!-- .site-contact-bar -->

			<div class="site-navigation-bar flex-bar">
				<div class="navigation-bar-inner flexbox row">

					<div class="site-connect nav-control">
						<button class="menu-toggle" aria-controls="primary-social" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-thumbs-o-up"></i>
							<span>Connect</span>
						</button>
					</div>

					<div class="site-menu nav-control">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</button>
					</div>

					<div class="site-search nav-control">
						<button class="menu-toggle" aria-controls="primary-search" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-search"></i>
							<span>Search</span>
						</button>
					</div>

				</div>
			</div>

			<div class="site-navigation-items flex-bar">
				<nav class="navigation-items-inner flexbox col-row" role="navigation">

					<div class="navigation-item nav-menu">
						<span class="screen-reader-text" aria-hidden="false"><?php esc_html_e( 'Primary Menu', '_djh' ); ?></span>
						<div id="primary-menu-wrapper" class="primary-menu-wrapper toggled">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div>
						<a class="search-toggle" aria-controls="primary-search" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-search"></i>
						</a>
					</div>

					<div class="navigation-item nav-search">
						<span class="screen-reader-text" aria-hidden="false"><?php esc_html_e( 'Search', '_djh' ); ?></span>
						<div id="primary-search" class="search-form-wrapper"><?php get_search_form(); ?></div>
					</div>

					<div class="navigation-item nav-social">
						<?php _djh_site_social_menu(); ?>
					</div>

				</nav><!-- .navigation-bar-inner  -->
			</div><!-- .site-navigation-bar -->
			
			<div class="site-hero-bar flex-bar">
				<div class="hero-bar-inner flexbox column">
					<h2><span class="design">Design, </span><span class="dev">Development, </span><span class="creatives">Creative Services.</span></h2>
					<p>Healthy ideas. Wealthy results. Happy humans.</p>
					<a href="">Let's get started.</a>
					<a href=""><i class="fa fa-angle-double-down"></i></a>
				</div><!-- .hero-bar-inner -->
			</div><!-- .site-hero-bar -->

			<!-- PROMO -->
			<?php if ( is_active_sidebar( 'sidebar-promo' ) ) { ?>
			<aside class="site-promo-bar flex-bar">
				<div class="promo-bar-inner flexbox row">
					<?php dynamic_sidebar( 'sidebar-promo' ); ?>				
				</div>
			</aside><!-- .site-promo -->
			<?php } ?>
		</div><!-- .site-branding -->
	</header>
	<!-- #masthead -->





	<div id="content" class="site-content">
