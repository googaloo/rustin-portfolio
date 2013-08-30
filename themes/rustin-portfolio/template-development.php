<?php

/*
 * 
 *  Template Name: Development
 * 
 */

?>

<?php

get_header();

?>

<p class="opening-text">So many projects, so little time to show them off.</p>

<div class="port-type dev-port-type"><h2>Development</h2></div><!-- end .port-type -->

<div class="show-box">

	<div class="dev-box">

		<?php $development_query = new WP_Query( array( 'post_type' => 'developments' ) );

		if($development_query->have_posts() ) :
			while ($development_query->have_posts() ) : $development_query->the_post(); ?>

				<div class="mobile-development-thumb"><?php the_post_thumbnail("mobile-development-thumbnail"); ?></div><!-- end .mobile-development-thumb -->
				<h2 class="dev-subheader"><?php the_title(); ?></h2>
				<div class="dev-content"><?php the_content(); ?></div><!-- end .dev-content -->

			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- end .dev-box -->
	
</div><!-- end .show-box -->

<?php

get_footer();

?>