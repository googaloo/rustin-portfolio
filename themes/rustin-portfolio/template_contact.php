<?php

/*
 * 
 *  Template Name: Contact
 * 
 */

?>

<?php get_header(); ?>

<p class="opening-text">Send a message, and you get a response.</p> <p class="opening-text">Pretty straight forward ;)</p>

<div class="show-box">

	<div class="content-container">

		<div class="port-type"><h2>Contact</h2></div><!-- end .port-type -->

		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<div class="contact-box">

				<?php the_content(); ?>

			</div><!-- end .contact-box -->

			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- end .content-container -->

</div><!-- end .show-box -->


<?php get_footer("no-contact"); ?>