<?php

	$Title_HTML = 'Video: How to Manage Partitions and Dual Boot Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = '<p>The lovely <a target="_blank" href="https://ww.youtube.com/nixiedoeslinux">NixiePixel</a> has a video on Resizing and Dual Booting Ubuntu.</p><h3 class="textcenter"><a class="download fancybox-media" href="https://ww.youtube.com/embed/eSMMs4cfMqY?autohide=1&showinfo=0">Play Video</a></h3>';
	$Description_Plain = 'The lovely NixiePixel has a video on Resizing and Dual Booting Ubuntu.';

	$Keywords = 'manage partitions dual boot video';

	$Featured_Image = '';

	$Canonical = 'video-how-to-manage-partitions-and-dual-boot-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Video';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: How to Manage Partitions and Dual Boot Ubuntu</h2>
			<p>The lovely <a target="_blank" href="https://ww.youtube.com/nixiedoeslinux">NixiePixel</a> has a video on Resizing and Dual Booting Ubuntu.</p>
			<h3 class="textcenter"><a class="download fancybox-media" href="https://ww.youtube.com/embed/eSMMs4cfMqY?autohide=1&showinfo=0">Play Video</a></h3>
			<p>As you may be moving everything on your hard drive, remember to back up anything important. We recommend using a Live CD or USB for this, to maximize the performance of your drive, and kill any issues from parts of your drive that are in use.</p>

		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

	<?php
	require '../footer.php';
}