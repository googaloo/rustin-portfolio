<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title><?php wp_title(); ?></title>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
        
        <!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-43722479-1', 'rustinlodom.com');
		ga('send', 'pageview');
	</script>

	<?php wp_head(); ?>
</head>

<body>
	
	<div id="page" class="hfeed site">

		<div class="masthead-top"></div><!-- end .masthead-top -->
		<div class="masthead-name">

			<a href="<?php bloginfo('url'); ?>"><h1 class="rustin-header">Rustin L Odom</h1></a>

		</div><!-- end .masthead-name -->
		<div class="masthead-bottom"></div><!-- end .masthead-bottom -->

		<h2 class="masthead-subheader">Digital Ninja</h2>
			
