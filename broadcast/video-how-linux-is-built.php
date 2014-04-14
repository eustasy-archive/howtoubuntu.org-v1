<?php

	$Title_HTML = 'Video: How Linux is Built';
	$Title_Plain = $Title_HTML;

	$Description_HTML = '<p><a href="https://www.youtube.com/user/TheLinuxFoundation">The Linux Foundation</a> have an amazing video about just how Linux, the base of ubuntu and many other free systems, is built.</p><h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/yVpbFMhOAwE?autohide=1&showinfo=0">Play Video</a></h3>';
	$Description_Plain = 'The Linux Foundation have an amazing video about just how Linux, the base of ubuntu and many other free systems, is built.';

	$Keywords = 'video linux is built';

	$Featured_Image = '';

	$Canonical = 'video-how-linux-is-built';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Video';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: How Linux is Built</h2>
			<p><a href="https://www.youtube.com/user/TheLinuxFoundation">The Linux Foundation</a> have an amazing video about just how Linux, the base of ubuntu and many other free systems, is built.</p>
			<h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/yVpbFMhOAwE?autohide=1&showinfo=0">Play Video</a></h3>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

	<?php
	require '../footer.php';
}
