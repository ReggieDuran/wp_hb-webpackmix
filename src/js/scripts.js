import $ from "jquery";
import 'owl.carousel';


// LOAD
$(window).on('load',function(){

	setTimeout(function(){
		// $('#preloader').removeClass('animate');
		$('.no-scroll_js').removeClass('no-scroll_js');

		setTimeout(function() {
			// var sal = require('sal.js');

			// sal({
			// 	threshold: 0.5,
			// 	once: true,
			// });
		},200)

	},500);
});

$(document).ready(function(){	
	stickyMenu();
	navToggle();
	disableSubmitBtn();
	sliderBanner();
	howItWorksSlider();
});

$(window).on('scroll',function(){
	stickyMenu();
});


// FUNCTION
function navToggle() {
	$('.menu-hamburger').on('click',function(e) {
		e.preventDefault();
		
		if ( $('body').hasClass('active-header_js') ) {
			$('body').removeClass('active-header_js');
			
			setTimeout(function(){
				$('body').removeClass('no-scroll_js');
			},1000);

		} else {
			$('body').addClass('active-header_js');
			$('body').addClass('no-scroll_js');
		}
	});
}

function stickyMenu() {
	if ($(window).scrollTop() > 80 ) {
		if (!$('header').hasClass('sticky_js')) { 
			$('header').addClass('sticky_js'); 
			$('.search').removeClass('active');
		}		
	} else {				
		if ($('header').hasClass('sticky_js')) { 
			$('header').removeClass('sticky_js');
		}
	}
}

function disableSubmitBtn() {
	/**
	 * Disable WPCF7 button while it's submitting
	 * Stops duplicate enquiries coming through
	 */
	var disableSubmit = false;
	$('input[type="submit"]').click(function() {
		$(this).attr('value', 'sent');
		$(this).addClass('sent');
		if (disableSubmit == true) {
			$(this).attr('disabled', true);
			return false;
		}
		disableSubmit = true;
		return true;
	})
	 
	var wpcf7Elm = document.querySelector( '.wpcf7' );
	if ( wpcf7Elm ) {
		wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
			$('input[type="submit"]').attr('value', 'send')
			disableSubmit = false;
		}, false );
	}
}


function sliderBanner() {
	$('#slider-banner .owl-carousel').owlCarousel({
		items: 1,
		loop: true,
		dots: true,
		autoplay: true,
		smartSpeed: 700,
	});
}

function howItWorksSlider() {
	$('#how-it-works .owl-carousel').owlCarousel({
		smartSpeed: 700,
		responsive:{
			0:{
				items:1,
				dots: true
			},
			600:{
				items:2,
			},
			1000:{
				items:4,
			}
		}
	});
}