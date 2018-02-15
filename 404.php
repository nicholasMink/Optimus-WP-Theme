<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package OPTIMUS
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Sorry about that...', 'optimus' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="error404">
						<p><?php esc_html_e( 'That page doesn&rsquo;t exist', 'optimus' ); ?></p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Optimus-Logo-1200x532.png" alt="OPTIMUS Logo" />
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
