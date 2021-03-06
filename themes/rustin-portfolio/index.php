<?php

get_header();

?>

<p class="opening-text">Thanks for visiting my portfolio!</p>
<p class="opening-text">I specialize in both design and development.</p>
<p class="opening-text">That means after much ninja-esque training, the left and right sides of my brain are finally friends.</p>

<div class="show-box-home">

	<div class="ninja-box">

		<a href="<?php bloginfo('url'); ?>/design"><div class="circle1"><div class="circle2"><div class="circle3"><div class="design-circle"><p>Design</p></div><!-- end .design-circle --></div></div></div><!-- end .circles --></a>
		<a href="<?php bloginfo('url'); ?>/development">
			<div class="dev-container-box">
				<div class="dev-left-bracket"></div>
				<div class="dev-circle"><p>Development</p></div>
				<div class="dev-right-bracket"></div>
			</div><!-- end .dev-container-box --></a>

	</div><!-- end .ninja-box -->

	<span class="choose-text">Choose</span><!-- end .choose-text -->
	
</div><!-- end .show-box -->

<?php

get_footer();

?>