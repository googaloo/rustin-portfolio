jQuery(document).ready(function($) {

	$('.circle1').mouseenter(function() {

		if ( $(window).width() >= 1024 ) {
			$(this).addClass('circle1-rotate');
			$('.circle2').addClass('circle2-rotate');
			$('.circle3').addClass('circle3-rotate');
			$('.design-circle').addClass('circle-box-rotate');
		}

	}).mouseleave(function() {

		if ( $(window).width() >= 1024 ) {
			$(this).removeClass('circle1-rotate');
			$('.circle2').removeClass('circle2-rotate');
			$('.circle3').removeClass('circle3-rotate');
			$('.design-circle').removeClass('circle-box-rotate');
		}

	});

	$('.dev-container-box').mouseenter(function() {

		if ( $(window).width() >= 1024 ) {
			$('.dev-left-bracket').addClass('bracket-move-left');
			$('.dev-right-bracket').addClass('bracket-move-right');
		}

	}).mouseleave(function() {

		if ( $(window).width() >= 1024 ) {
			$('.dev-left-bracket').removeClass('bracket-move-left');
			$('.dev-right-bracket').removeClass('bracket-move-right');
		}

	});

	// if ( $(window).width() >= 1024 ) {

	// 	var socialButtons = '';

	// 	$('.contact-button').after(socialButtons);
			
	// } 

});

