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

<p class="opening-text">Plugins, frameworks, best practices and API's. Oh my!</p>

<div class="port-type dev-port-type"><h2>Development</h2></div><!-- end .port-type -->

<div class="show-box">

	<div class="el-comfort-box">

		<ul class="comfort-list">

			<li>jQuery / jQuery mobile</li>
			<li>Mobile Responsive</li>
			<li>Jekyll</li>
			<li>Bootstrap / Foundation</li>
			<li>Wordpress</li>
			<li>Joomla</li>
			<li>CodeIgniter</li>
			<li>AWS, S3</li>
			<li>Sass / Compass</li>
			<li>Flexbox</li>
			<li>Grids and Regions (HTML5)</li>
			<li>Vertical Rhythm</li>

		</ul>

	</div><!-- end .el-comfort-box -->

	<div class="dev-box">

		<?php $development_query = new WP_Query( array( 'post_type' => 'developments', 'orderby' => 'menu_order', 'order' => 'ASC' ) );

		if($development_query->have_posts() ) :
			while ($development_query->have_posts() ) : $development_query->the_post(); ?>

				<div class="dev-container">
					<div class="mobile-development-thumb"><?php the_post_thumbnail("mobile-development-thumbnail"); ?></div><!-- end .mobile-development-thumb -->
					<h2 class="dev-subheader"><?php the_title(); ?></h2>
					<div class="dev-content"><?php the_content(); ?></div><!-- end .dev-content -->
				</div> <!-- end .dev-box -->

			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- end .dev-box -->
	
</div><!-- end .show-box -->

<?php

get_footer();

?>