// Elements by Anwar Montasir. url http://anwarmontasir.com/ 

jQuery(document).ready(function ($) {
	// page loader 
	$('body').css('opacity', 0);
		$(window).load(function( slow ) {
  	$('body').css('opacity', 1);
	});
	// nav
  $(document).ready(function() {
		$('#nav-wrapper #open-menu, #nav-wrapper #close-menu').click(function() {
			$('nav').toggleClass('open');
			return false;
		});
		$('#nav-wrapper ul li a').click(function() {
			$('nav').toggleClass('open');
			var target = $(this.hash);
			$('html, body').animate({
				'scrollTop': target.offset().top + 5
			});
			return false;
		});
		// toggle menu buttons
		$( '#open-menu' ).click(function() {
			$ ('#close-menu').show();
		});
		$( '#close-menu' ).click(function() {
			$ ('#close-menu').hide();
		});
		$( 'nav ul li a' ).click(function() {
			$ ('#close-menu').hide();
		});
	});
// Slick Slider
	$('.my-works-item').slick({
		accessibility: true,
		slidesToScroll: 1,
		dots: true,
		fade: true,
		responsive: [
			{
			breakpoint: 681,
			settings: {
				autoplay: true,
				autoplaySpeed: 8000,
				fade: false,
				arrows: false,
				dots: false,
				pauseOnFocus: true,
				pauseOnHover: true
			}},
			]
		});
// remove p wrap in img 
	$('p > img').unwrap();

});
