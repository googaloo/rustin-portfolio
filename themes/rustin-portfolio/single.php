<?php

get_header();

?>

<a href="<?php bloginfo('url'); ?>/design"><div class="back-btn">&larr; Back</div><!-- end .back-btn --></a>

<div class="show-box">

	<div class="content-container">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="port-type"><h2><?php the_title(); ?></h2></div><!-- end .port-type -->

				<div class="single-box-container">

					<?php the_content(); ?>

				</div><!-- end .content-box -->

			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- end .content-container -->
	
</div><!-- end .show-box -->

<?php

get_footer();

?>