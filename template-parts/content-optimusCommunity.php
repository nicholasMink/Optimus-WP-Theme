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
	<?php
			the_content(); ?>
			<div class="wrapper__services">
				
				<div class="tab__wrapper">
						<h1><?php the_title(); ?></h1>

				<ul>
					<li>
					<?php if(get_field('first_tab')): ?>
						<h2 class='first__tab__title'><?php the_field('first_tab'); ?></h2>
						<?php endif?>
					</li>
					<li>
					<?php if(get_field('second_tab')): ?>
						<h2 class='second__tab__title'><?php the_field('second_tab'); ?></h2>
						<?php endif?>
					</li>
					<li>
					<?php if(get_field('third_tab')): ?>
						<h2 class='third__tab__title'><?php the_field('third_tab'); ?></h2>
						<?php endif?>
					</li>
				</ul>

				<!-- Tabs -->
				<div class="first__tab__content">
					
					<?php if(get_field('permanent_placement')): ?>
							<p><?php the_field('permanent_placement'); ?></p>
					<?php endif; ?>

				</div>
	
				<div class="second__tab__content">
					
					<?php if(get_field('strategic_projects')): ?>
							<p><?php the_field('strategic_projects'); ?></p>
					<?php endif; ?>

				</div>
	
				<div class="third__tab__content">
					<?php if(get_field('interim_staff')): ?>
							<p><?php the_field('interim_staff'); ?></p>
					<?php endif; ?>
				</div>
				<!-- End Tabs -->
				
			</div>
	
</article><!-- #post-<?php the_ID(); ?> -->

<script>
	const firstTitle = document.querySelector('.first__tab__title'), 
				firstContent = document.querySelector('.first__tab__content'), 
				secondTitle = document.querySelector('.second__tab__title'), 
				secondContent = document.querySelector('.second__tab__content'), 
				thirdTitle = document.querySelector('.third__tab__title'), 
				thirdContent = document.querySelector('.third__tab__content');
	
	// Page load styles
	firstTitle.style.borderBottom = "1px solid";
	firstTitle.style.fontWeight = 'bold';
	secondContent.style.display = "none";
	thirdContent.style.display = "none";

	firstTitle.addEventListener('click', function( ) {
		firstTitle.style.borderBottom = "1px solid";
		secondTitle.style.borderBottom = "none";
		thirdTitle.style.borderBottom = "none";

		firstContent.style.display = "block";
		secondContent.style.display = "none";
		thirdContent.style.display = "none";

		firstTitle.style.fontWeight = 'bold';
		secondTitle.style.fontWeight = 'normal';
		thirdTitle.style.fontWeight = 'normal';
	});

	secondTitle.addEventListener('click', function( ) {
		firstTitle.style.borderBottom = "none";
		secondTitle.style.borderBottom = "1px solid";
		thirdTitle.style.borderBottom = "none";

		firstContent.style.display = "none";
		secondContent.style.display = "block";
		thirdContent.style.display = "none";

		firstTitle.style.fontWeight = 'normal';
		secondTitle.style.fontWeight = 'bold';
		thirdTitle.style.fontWeight = 'normal';
	});

	thirdTitle.addEventListener('click', function( ) {
		firstTitle.style.borderBottom = "none";
		secondTitle.style.borderBottom = "none";
		thirdTitle.style.borderBottom = "1px solid";

		firstContent.style.display = "none";
		secondContent.style.display = "none";
		thirdContent.style.display = "block";

		firstTitle.style.fontWeight = 'normal';
		secondTitle.style.fontWeight = 'normal';
		thirdTitle.style.fontWeight = 'bold';
	});
</script>

