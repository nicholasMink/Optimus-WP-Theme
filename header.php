<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OPTIMUS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'optimus' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php if( is_active_sidebar( 'mobile-menu' ) ) : ?>
			<button type="button" class="menu-toggle" id="menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu</span>
				<svg class="icon icon-menu-toggle" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100">
					<g class="svg-menu-toggle" fill="#fff">
						<path class="line line-1" d="M5 13h90v14H5z"/>
						<path class="line line-2" d="M5 43h90v14H5z"/>
						<path class="line line-3" d="M5 73h90v14H5z"/>
					</g>
				</svg>
			</button>
			<?php dynamic_sidebar( 'mobile-menu' ); ?>
		<?php endif; ?>
		<!-- <?php esc_html_e( '', 'optimus' ); ?>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'mobile-menu',
				) );
			?> -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
