$(function() {

	// Scroll effect when clicking on an anchor link
	$('.scroll').click(function(event){
		var scroll_duration = 1000;
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, scroll_duration);
	});

	// Secondary Nav Bar added on scroll
	$(window).scroll(function(){
		var scroll_breakpoint = 110;
		var duration = 400;
		if ( $(this).scrollTop() > scroll_breakpoint ) {
			$('.sec-nav-bar').slideDown(duration);
		} else {
			$('.sec-nav-bar').slideUp(duration);
		}
	});

	// Popup window with video
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 200,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: true,
		fixedContentPos: false
	});

});