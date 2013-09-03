<?php

/*
 * 
 *  Template Name: Design
 * 
 */

?>

<?php

get_header();

?>

<p class="opening-text">So many projects, so little time to show them off.</p>

<div class="port-type"><h2>Design</h2></div><!-- end .port-type -->

<div class="show-box">

	<div class="design-box">

	<?php $design_query = new WP_Query( array( 'post_type' => 'designs' ) );

	if($design_query->have_posts() ) :
		while ($design_query->have_posts() ) : $design_query->the_post(); ?>

			<div class="mobile-design-thumb">

				<a href="<?php the_permalink(); ?>">

					<?php the_post_thumbnail(); ?>

				</a>

			</div><!-- end .mobile-design-thumb -->

		<?php endwhile; ?>
	<?php endif; ?>

	</div><!-- end .design-box -->
	
</div><!-- end .show-box -->

<?php

get_footer();

?>