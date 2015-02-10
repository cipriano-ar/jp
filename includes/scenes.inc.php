<?php
//This array contains the names of the scenes
$scene_titles = array(
	"Welcome to Jurassic Park",
	"Chaos Theory",
	"The Sick Triceratop",
	"T-Rex Attack",
	"Nedry's Plan Goes Awry"
	);

//This loop goes through each element of the array and create an <ul> with the scenes for <section id="scenes">
$i = 1;
echo '<ul>';
foreach ($scene_titles as $sgl_title) {
	echo '
		<li class="video-thumb">
			<h3>'.$sgl_title.'</h3>
			<div class="img-cont">
				<img src="images/scenes/scene-'.$i.'.jpg"></img>
				<a class="popup-youtube" href="videos/scenes/scene-'.$i.'.mp4">
					<div class="play-btn">
						<i class="fa fa-play fa-3x vert-align-txt txt-color-white"></i>
					</div>
				</a>
			</div>
		</li>
		';
	$i++;
}
echo '</ul>';
?>