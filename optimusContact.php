<?php

/**
 * The template for landing page.
 *
 * Template Name: Optimus Contact
 *
 * @package OPTIMUS
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="contact__wrapper">
				<div class="contact__location">
					<?php
					while ( have_posts() ) : the_post();
		
						get_template_part( 'template-parts/content', 'optimusContact' );
		
					endwhile; // End of the loop.
					?>

				</div>
	
				
				<form class="contact__form" action="post">
					<h1>Send us a message</h1>
					<label for="email"> Email
						<input type="email" id="email" name="email" placeholder="Email" required/>
					</label>
					<label for="message"> Message
						<textarea rows="4" cols="50" type="text" id="message" name="message" placeholder="Type your message here..." required></textarea>
					</label>
					<button type="file" id="file" class="fileUpload">Upload Resume/CV</button>
					<button type="submit" id="submitBtn" class="optimus__contactForm__submit">Send Message</button>
				</form>
				

			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
