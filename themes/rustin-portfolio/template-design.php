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

<div class="show-box">

	<div class="content-container">

		<div class="port-type"><h2>Design</h2></div><!-- end .port-type -->

		<div class="el-comfort-box">

			<ul class="comfort-list">

				<li>Photoshop</li>
				<li>Illustrator</li>
				<li>After Effects / Flash</li>
				<li>Logo Design</li>
				<li>Web Design</li>
				<li>Motion Graphics</li>
				<li>Audio w/ Recording Studio</li>
				<li>Illustration</li>
				<li>Email Templates</li>

			</ul>

		</div><!-- end .el-comfort-box -->

		<div class="design-box">

		<?php $design_query = new WP_Query( array( 'post_type' => 'designs', 'orderby' => 'menu_order', 'order' => 'ASC' ) );

		if($design_query->have_posts() ) :

			while ($design_query->have_posts() ) : $design_query->the_post(); ?>

				<div class="design-thumb">

					<a href="<?php the_permalink(); ?>">

						<?php the_post_thumbnail('full'); ?>

					</a>

				</div><!-- end .mobile-design-thumb -->

			<?php endwhile; ?>
		<?php endif; ?>

		</div><!-- end .design-box -->

	</div><!-- end content-container -->

	
	
</div><!-- end .show-box -->

<?php

get_footer();

?>