<?php

get_header();

?>

<a href="<?php bloginfo('url'); ?>/designs"><div class="back-btn">&larr; Back</div><!-- end .back-btn --></a>

<div class="show-box-home">

	<h3><?php the_title(); ?></h3>

	<div class="content-box">

		<?php the_content(); ?>

	</div><!-- end .content-box -->
	
</div><!-- end .show-box -->

<?php

get_footer();

?>