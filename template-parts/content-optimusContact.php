<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OPTIMUS
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php optimus_post_thumbnail(); ?>
	<div>
		
			<?php
			the_content();
			
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'optimus' ),
				'after'  => '</div>',
				) );
				?>
				

	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
