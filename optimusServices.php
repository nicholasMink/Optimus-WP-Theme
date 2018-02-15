<?php

/**
 * The template for landing page.
 *
 * Template Name: Optimus Services
 *
 * @package OPTIMUS
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'optimusServices' );

			endwhile; // End of the loop.
			?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
