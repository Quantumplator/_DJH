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
<meta name="viewport" content="width=device-width, user-scalable=0, minimal-ui">
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

					<div class="site-title nav-control">
						<a id="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="dylanjharris.net">
							<?php if ( is_front_page() ) : ?>
							<h1 id="site-title-h1"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></h1>
							<?php else : ?>
							<p id="site-title"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span></p>
							<?php endif; ?>
							<span class="djh">d<span class="thej">j</span>h</span>
						</a>
					</div>

					<div class="site-email nav-control">
						<a href="<?php echo esc_url( __( 'mailto:admin@dylanjharris.net?subject=Website&nbsp;inquiry', '_djh' ) ); ?>" title="Click to email us">
							<button class="menu-toggle" aria-hidden="true">
								<i class="fa fa-envelope"></i>
								<span>Email</span>
							</button>
							<span class="contact-point">admin@dylanjharris.net</span>
						</a>
					</div>

					<div class="site-phone nav-control">
						<a href="<?php echo esc_url( __( 'tel:+15093169055', '_djh' ) ); ?>" title="Click to call us">
							<button class="menu-toggle" aria-hidden="true">
								<i class="fa fa-phone"></i>
								<span>Call</span>
							</button>
							<span class="contact-point">(509) 316&ndash;9055</span>
						</a>
					</div>

				</div><!-- .contact-bar-inner -->
			</div><!-- .site-contact-bar -->

			<div class="site-navigation-bar flex-bar">
				<div class="navigation-bar-inner flexbox row">

					<div id="site-connect" class="site-connect nav-control">
						<button id="menu-button" class="menu-toggle" aria-controls="primary-social" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-share-alt"></i>
							<span>Connect</span>
						</button>
					</div>

					<div id="site-menu" class="site-menu nav-control">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</button>
					</div>

					<div id="site-search" class="site-search nav-control">
						<button class="menu-toggle" aria-controls="primary-search" aria-expanded="false" aria-hidden="true">
							<i class="fa fa-search"></i>
							<span>Search</span>
						</button>
					</div>

				</div>
			</div>

			<div class="site-navigation-items">
				<nav class="navigation-items-inner flexbox col-row" role="navigation">

					<div class="navigation-item nav-menu">
						<span class="screen-reader-text" aria-hidden="false"><?php esc_html_e( 'Primary Menu', '_djh' ); ?></span>
						<div id="primary-menu-wrapper" class="primary-menu-wrapper">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div>
							<a id="full-site-search" class="search-toggle" aria-controls="primary-search" aria-expanded="false" aria-hidden="true">
								<i class="fa fa-search"></i>
							</a>
					</div>

					<div id="nav-search" class="navigation-item nav-search">
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

				<!-- Conditional Header Content -->
				<?php if ( is_front_page() ) : ?>

					<h2>
						<span id="design" class="design hero-bar">Design,</span>
						<span class="dev hero-bar">Development,</span>
						<span class="creatives hero-bar">
							<span class="vest">Creative</span>
							<span class="shirt">Branding</span>
						</span>
					</h2>
					<p class="start">
						<a href="#entry-title" class="site-more"><i class="fa fa-angle-double-down"></i></a>
					</p>

				<?php elseif ( is_home() ) : ?>

					<header class="entry-header">
						<p id="blog-page-title" class="page-title"><span>The Blog</span></p>
					</header><!-- .entry-header -->

				<?php else : ?>

					<header class="entry-header">
						<h1 id="page-title" class="page-title">
							<?php 
								$postid = get_the_ID();
								echo get_the_title( $postid );
							?>
						</h1>
					</header><!-- .entry-header -->

				<?php endif; ?>

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
