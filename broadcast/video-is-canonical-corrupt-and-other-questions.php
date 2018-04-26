<?php

	$Title_HTML = 'Video: Is Canonical Corrupt? and Other Questions';
	$Title_Plain = $Title_HTML;

	$Description_HTML = '<p><a href="https://www.youtube.com/nixiedoeslinux">NixiePixel</a> doesn\'t usually do the \'ask Nixie\' type thing.. but here are some of your most commonly asked Linux / FOSS questions and her replies. || <a href="http://plus.google.com/+NixiePixel/">+NixiePixel</a></p><h3 class="textcenter"><a class="download fancybox-media" href="https://www.youtube.com/embed/KOF05L1tZaE?autohide=1&showinfo=0">Play Video</a></h3>';
	$Description_Plain = 'NixiePixel doesn\'t usually do the \'ask Nixie\' type thing.. but here are some of your most commonly asked Linux / FOSS questions and her replies.';

	$Keywords = 'is canonical corrupt other questions nixie pixel nixiepixel nixiedoeslinux video';

	$Featured_Image = '';

	$Canonical = 'video-is-canonical-corrupt-and-other-questions';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Video';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: Is Canonical Corrupt? and Other Questions</h2>
			<p><a href="https://www.youtube.com/nixiedoeslinux">NixiePixel</a> doesn't usually do the 'ask Nixie' type thing.. but here are some of your most commonly asked Linux / FOSS questions and her replies. || <a href="http://plus.google.com/+NixiePixel/">+NixiePixel</a></p>
			<h3 class="textcenter"><a class="download fancybox-media" href="https://www.youtube.com/embed/KOF05L1tZaE?autohide=1&showinfo=0">Play Video</a></h3>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

	<?php
	require '../footer.php';
}