<?php

	$Title_HTML = 'Video: Ubuntu 18.04: What\'s New?';
	$Title_Plain = $Title_HTML;

	$Description_HTML = '<p><a href="https://www.youtube.com/channel/UCIiSwcm9xiFb3Y4wjzR41eQ">OMG! Ubuntu!</a> has put out their bi-annual video on what\'s new in Ubuntu.</p><h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/ONXfL6evR0Q?autohide=1&showinfo=0">Play Video</a></h3>';
	$Description_Plain = 'OMG! Ubuntu! has put out their bi-annual video on what\'s new in Ubuntu.';

	$Keywords = 'ubuntu 18.04 bionic beaver video';

	$Featured_Image = '';

	$Canonical = 'video-ubuntu-1804-whats-new';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Video';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: Ubuntu 18.04: What's New?</h2>
			<p><a href="https://www.youtube.com/channel/UCIiSwcm9xiFb3Y4wjzR41eQ">OMG! Ubuntu!</a> has put out their bi-annual video on what's new in Ubuntu.</p>
			<h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/ONXfL6evR0Q?autohide=1&showinfo=0">Play Video</a></h3>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

	<?php
	require '../footer.php';
}
