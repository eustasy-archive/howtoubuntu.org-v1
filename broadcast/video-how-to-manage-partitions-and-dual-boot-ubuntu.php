<?php

	$TextTitle = 'Video: How to Manage Partitions and Dual Boot Ubuntu';
	$WebTitle = 'Video: How to Manage Partitions and Dual Boot Ubuntu';
	$Canonical = 'video-how-to-manage-partitions-and-dual-boot-ubuntu';
	$FeaturedImage = '';
	$Description = 'The lovely NixiePixel has a video on Resizing and Dual Booting Ubuntu.';
	$Video = '<p>The lovely <a target="_blank" href="http://www.youtube.com/nixiedoeslinux">NixiePixel</a> has a video on Resizing and Dual Booting Ubuntu.</p><h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/eSMMs4cfMqY?autohide=1&showinfo=0">Play Video</a></h3>';
	$Keywords = 'manage partitions dual boot video';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>Video: How to Manage Partitions and Dual Boot Ubuntu</h2>
			<p>The lovely <a target="_blank" href="http://www.youtube.com/nixiedoeslinux">NixiePixel</a> has a video on Resizing and Dual Booting Ubuntu.</p>
			<h3 class="textcenter"><a class="download fancybox-media" href="http://www.youtube.com/embed/eSMMs4cfMqY?autohide=1&showinfo=0">Play Video</a></h3>
			<p>As you may be moving everything on your hard drive, remember to back up anything important. We recommend using a Live CD or USB for this, to maximize the performance of your drive, and kill any issues from parts of your drive that are in use.</p>

		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

<?php require '../footer.php'; } ?>
