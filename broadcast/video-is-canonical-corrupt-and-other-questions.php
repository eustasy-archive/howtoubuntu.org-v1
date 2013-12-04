<?php

	$TextTitle = 'Video: Is Canonical Corrupt? and Other Questions';
	$WebTitle = 'Video: Is Canonical Corrupt? and Other Questions';
	$Canonical = 'video-is-canonical-corrupt-and-other-questions';
	$FeaturedImage = '';
	$Description = 'NixiePixel doesn\'t usually do the \'ask Nixie\' type thing.. but here are some of your most commonly asked Linux / FOSS questions and her replies.';
	$Video = '<p><a href="http://www.youtube.com/nixiedoeslinux">NixiePixel</a> doesn\'t usually do the \'ask Nixie\' type thing.. but here are some of your most commonly asked Linux / FOSS questions and her replies. || <a href="http://plus.google.com/+NixiePixel/">+NixiePixel</a></p><h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/KOF05L1tZaE?autohide=1&showinfo=0">Play Video</a></h3>';
	$Keywords = 'is canonical corrupt other questions nixie pixel nixiepixel nixiedoeslinux video';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: Is Canonical Corrupt? and Other Questions</h2>
			<p><a href="http://www.youtube.com/nixiedoeslinux">NixiePixel</a> doesn't usually do the 'ask Nixie' type thing.. but here are some of your most commonly asked Linux / FOSS questions and her replies. || <a href="http://plus.google.com/+NixiePixel/">+NixiePixel</a></p>
			<h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/KOF05L1tZaE?autohide=1&showinfo=0">Play Video</a></h3>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

<?php require '../footer.php'; } ?>
