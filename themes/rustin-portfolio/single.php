<?php

get_header();

?>

<a href="<?php bloginfo('url'); ?>/design"><div class="back-btn">&larr; Back</div><!-- end .back-btn --></a>

<div class="show-box">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<h3><?php the_title(); ?></h3>

			<div class="single-content-box">

				<?php the_content(); ?>

			</div><!-- end .content-box -->

		<?php endwhile; ?>
	<?php endif; ?>
	
</div><!-- end .show-box -->

<?php

get_footer();

?>