<?php

	$TextTitle = 'Video: How Linux is Built';
	$WebTitle = 'Video: How Linux is Built';
	$Canonical = 'video-how-linux-is-built';
	$FeaturedImage = '';
	$Description = 'The Linux Foundation have an amazing video about just how Linux, the base of ubuntu and many other free systems, is built.';
	$Video = '<p><a href="https://www.youtube.com/user/TheLinuxFoundation">The Linux Foundation</a> have an amazing video about just how Linux, the base of ubuntu and many other free systems, is built.</p><h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/yVpbFMhOAwE?autohide=1&showinfo=0">Play Video</a></h3>';
	$Keywords = 'about ubuntu 13.10 saucy salamander';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: How Linux is Built</h2>
			<p><a href="https://www.youtube.com/user/TheLinuxFoundation">The Linux Foundation</a> have an amazing video about just how Linux, the base of ubuntu and many other free systems, is built.</p>
			<h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/yVpbFMhOAwE?autohide=1&showinfo=0">Play Video</a></h3>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

<?php require '../footer.php'; } ?>
