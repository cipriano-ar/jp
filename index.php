<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Jurassic Park</title>

	<!-- For proper rendering across all devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome & Bootstrap CSS -->
	<link rel="stylesheet" href="frameworks/font-awesome/font-awesome-4.2.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="frameworks/bootstrap/bootstrap-3.3.1/css/bootstrap.min.css">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- My CSS -->
	<link rel="stylesheet" href="css/styles.css">

</head>
<body id="top">

	<!-- ########## Secondary Nav Bar added on scroll ########## -->

	<nav class="sec-nav-bar">
		<!-- "Back to Top" text -->
		<!-- <a class="scroll" href="#top">
			<div class="sml-cont">Back to Top</div>
		</a> -->
		<!-- Logo -->
		<div class="img-container">
			<a class="scroll" href="#top">
				<img src="images/logo.jpg" alt="logo">	
			</a>
		</div>
	</nav>

	<!-- ########## HEADER ########## -->

		<header>

			<h1 class="txt-outline-yellow">Jurassic Park</h1>
			<!-- <div class="background"></div> -->

		</header>

	<!-- ########## CONTAINER ########## -->

	<div class="container">

		<!-- ########## NAV MENU ########## -->

		<nav class="row">

			<!-- TRAILER -->
			<div class="col-sm-6 button">
				<div class="flipper">
					<div class="back">
						<h2>Trailer</h2>
						<div .button-cont>
							<a class="scroll" href="#trailer"><button>Go</button></a>
						</div>
						<p>Click to watch.</p>
						<img src="images/navigation/1-trailer.jpg" alt="">
					</div>
					<div class="front">
						<h1 class="vert-align-txt txt-color-black txt-outline-yellow">Trailer</h1>
					</div>
				</div>
			</div>

			<!-- SCENES -->
			<div class="col-sm-6 button">
				<div class="flipper">
					<div class="back">
						<h2>Scenes</h2>
						<div .button-cont>
							<a class="scroll" href="#scenes"><button>Go</button></a>
						</div>
						<p>Click here to choose from a list of the best scenes.</p>
						<img src="images/navigation/2-scenes.jpg" alt="">
					</div>
					<div class="front">
						<h1 class="vert-align-txt txt-color-red txt-outline-yellow">Scenes</h1>
					</div>
				</div>
			</div>

			<!-- LOCATIONS -->
			<div class="col-sm-6 button">
				<div class="flipper">
					<div class="back">
						<h2>Locations</h2>
						<div .button-cont>
							<a class="scroll" href="#locations"><button>Go</button></a>
						</div>
						<p>Checkout all the stunning locations where the movie was filmed.</p>
						<img src="images/navigation/3-locations-map.jpg" alt="locations map thumbnail">
					</div>
					<div class="front">
						<h1 class="vert-align-txt txt-color-red txt-outline-yellow">Locations</h1>
					</div>
				</div>
			</div>

			<!-- THE DINOSAURS -->
			<div class="col-sm-6 button">
				<div class="flipper">
					<div class="back">
						<h2>The Dinosaurs</h2>
						<div .button-cont>
							<a class="scroll" href="#dinosaurs"><button>Go</button></a>
						</div>
						<p>Learn how the ‘Jurassic Park’ dinos were built and where they got their voices from.</p>
						<img src="images/navigation/4-dinosaurs-trex.jpg" alt="">
					</div>
					<div class="front">
						<h1 class="vert-align-txt txt-color-black txt-outline-yellow">The Dinosaurs</h1>
					</div>
				</div>
			</div>

		</nav>

		<!-- ########## MAIN CONTENT ########## -->

		<main class="row">

			<!-- TRAILER -->
			<section id="trailer" class="col-xs-12 text-center">
				<h2 class="txt-outline-red">Trailer</h2>
				<video controls width="100%">
					<source src="videos/jp-trailer.mp4" type="video/mp4">
					<source src="videos/jp-trailer.webm" type="video/webm">
					<div class="play-btn">
						<i class="fa fa-play fa-3x vert-align-txt txt-color-white"></i>
					</div>
				</video>
			</section>

			<!-- SCENES -->
			<section id="scenes" class="col-xs-12 text-center">
				<h2 class="txt-outline-red">Scenes</h2>
				<p>Jurassic Park is one of the best page-to-screen adaptations ever. Spielberg’s thrill-ride shares its characters, setting and its most prominent dino-stars with the book</p>
				<p>Here we show you five of our favorites scenes.</p>

				<!-- Inserts an <ul> with the scene thumbnails -->
				<?php include 'includes/scenes.inc.php'; ?>

			</section>

			<!-- LOCATIONS -->
			<section id="locations" class="col-xs-12 text-center">
				<h2 class="txt-outline-red">Locations</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237607.1375005274!2d-157.9652284!3d21.4837543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006632db726b03%3A0xd9587d69906fcbc3!2zT-KAmGFodSwgSGF3YWlpLCBVU0E!5e0!3m2!1sen!2snz!4v1420598322283" frameborder="0" style="border:0"></iframe>
			</section>

			<!-- DINOSAURS -->
			<section id="dinosaurs" class="col-xs-12 text-center">
				<h2 class="txt-outline-red">The Dinosaurs</h2>
				<p>Jurassic Park is considered by many to be one of the greatest films of the 1990s, as well as a landmark in the vector of visual effects regarding its computer-generated imagery and animatronics.</p>
				<p>These videos tell you the details about how the <b>Jurassic Park</b> "dinos" were built and where they got their voices from.</p>
				<ul>
					<li class="video-thumb">
						<h3>Animatronic Dinosaurs - Part I</h3>
						<div class="img-cont">
							<img src="images/dino-making/pic-1.jpg"></img>
							<a class="popup-youtube" href="videos/dinosaurs/part-1.mp4">
								<div class="play-btn">
									<i class="fa fa-play fa-3x vert-align-txt txt-color-white"></i>
								</div>
							</a>
						</div>
					</li>
					<li class="video-thumb">
						<h3>Animatronic Dinosaurs - Part II</h3>
						<div class="img-cont">
							<img src="images/dino-making/pic-2.jpg"></img>
							<a class="popup-youtube" href="videos/dinosaurs/part-2.mp4">
								<div class="play-btn">
									<i class="fa fa-play fa-3x vert-align-txt txt-color-white"></i>
								</div>
							</a>
						</div>
					</li>
					<li class="video-thumb">
						<h3>Animatronic Dinosaurs - Part III</h3>
						<div class="img-cont">
							<img src="images/dino-making/pic-3.jpg"></img>
							<a class="popup-youtube" href="videos/dinosaurs/part-3.mp4">
								<div class="play-btn">
									<i class="fa fa-play fa-3x vert-align-txt txt-color-white"></i>
								</div>
							</a>
						</div>
					</li>
					<li class="video-thumb">
						<h3>Dinosaurs Voices</h3>
						<div class="img-cont">
							<img src="images/dino-making/pic-4.jpg"></img>
							<a class="popup-youtube" href="videos/dinosaurs/sounds.mp4">
								<div class="play-btn">
									<i class="fa fa-play fa-3x vert-align-txt txt-color-white"></i>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</section>
			
		</main>

		<!-- ########## FOOOTER ########## -->

		<footer class="row">
		<div class="col-xs-8 col-xs-offset-2 text-center">

			<!-- Social Icons -->
			<h2>Jurassic</h2>
			<p class="social">
				<a  href="https://www.facebook.com/jurassicpark" target="_blank">
					<i class="fa fa-facebook fa-4x"></i>
				</a>
			</p>
			<p class="social">
				<a  href="https://twitter.com/jurassicpark" target="_blank">
					<i class="fa fa-twitter fa-4x"></i>
				</a>
			</p>
			<h2>Park</h2>
		
		</div>
		</footer>
	</div> <!-- Container ends -->

	
		
	<script src="frameworks/jquery/jquery-1.11.2.min.js"></script>
	<script src="frameworks/bootstrap/bootstrap-3.3.1/js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!--<script src="js/custom.js"></script>-->
	<script>

	//var nav = responsiveNav('.nav-collapse');
	$(function() {

		// Scroll effect when clicking on an anchor link
		$('.scroll').click(function(event){
			var scroll_duration = 400;
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top}, scroll_duration);
		});

		// Secondary Nav Bar added on scroll
		$(window).scroll(function(){
			var scroll_breakpoint = 110;
			var duration = 200;
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
	  	

</script>

</body>
</html>
