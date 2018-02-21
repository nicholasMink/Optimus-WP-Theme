<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Opportunities
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OPTIMUS
 * 
 * 
 */

  get_header(); ?>

<div id="primary" class="content-area optimusBG__Opportunities">
		<main id="main" class="site-main wrapper__opportunities">

    <?php while ( have_posts() ) : the_post(); ?>

<header class="entry-header">
  <?php the_post_thumbnail(); ?>
  <h1 class="entry-title opportunities__heading"><?php the_title(); ?></h1>
</header>

<div class="entry-content main__opportunities">
  <div class="opportunities">
      <?php the_content(); ?>
    <?php
      $args = array(
        'post_type' => 'opportunities_post', // enter custom post type
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $loop = new WP_Query( $args );
      if( $loop->have_posts() ):
      while( $loop->have_posts() ): $loop->the_post(); global $post;
        $excerpt = get_the_excerpt( );
        echo '<div class="opportunity">';
        echo '<div class="opportunitiy__title"><h3>' . get_the_title() . '</h3></div>';
        echo '<div class="opportunity-image">'. get_the_post_thumbnail( $id ).'</div>';
        echo '<div class="opportunity__desc">'. $excerpt .'</div>'; 
        echo '<a href="' . get_permalink( ) . '">Full Job Description</a>';
        // echo '<div class="portfolio-work">'. get_the_content().'</div>';
        echo '</div>';
      endwhile;
      endif;
    ?>
  </div>
</div><!-- #entry-content -->
<?php comments_template( '', true ); ?>               
<?php endwhile; // end of the loop. ?>       

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();