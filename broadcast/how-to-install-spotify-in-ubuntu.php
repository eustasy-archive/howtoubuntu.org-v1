<?php

	$Title_HTML = 'How to Install Spotify in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'While Spotify has no supported release for Linux as such, their is, hidden away a little bit, a nice little "Preview" release that runs reasonably well, even if it is not the most native of applications.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install spotify music preview';

	$Featured_Image = '';

	$Canonical = 'how-to-install-spotify-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Applications';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to Install Spotify in Ubuntu</h2>
			<p>While Spotify has no supported release for Linux as such, their is, hidden away a little bit, a nice little "Preview" release that runs reasonably well, even if it is not the most native of applications.</p>
			<blockquote>
				<p>This is a preview build of Spotify for Linux. As a preview release this version is still unsupported, but we're running it ourselves and will try to make sure it keeps pace with its Mac and Windows siblings.</p>
			</blockquote>
			<p><a href="https://www.spotify.com/">Spotify</a> is a great way to listen to music by streaming it on your phone, in your browser, or on your Linux desktop. You can stream everything, upgrade and sync tracks and playlists offline, or purchase individual tracks to keep forever.</p>
			<p>Since December 2017, the Spotify developers have maintained a snap of their music player. The snap can be installed on all supported releases back to 14.04.</p> 
			<p>The following two lines will install the Spotify snap. Once installed, you'll get updates to the Spotify client as and when the developers upload it to the store. You should copy and paste this code into your Terminal and execute it.</p>
			<textarea class="textleft code resize">
sudo apt install snapd
sudo snap install spotify</textarea>
			<p>You can get support for this build of Spotify on their <a href="https://community.spotify.com/t5/Desktop-Linux/bd-p/desktop_linux">community support site</a>.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>

<?php require '../footer.php'; } ?>
