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
			<p>The following code will add the Spotify repository, authenticate it (which makes sure the software you install is the official one), checks for the latest version, and installs Spotify. You should copy and paste this code into your Terminal and execute it.</p>
			<textarea class="textleft code resize">sudo apt-add-repository -y &quot;deb http://repository.spotify.com stable non-free&quot; &&
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys D2C19886 &&
sudo apt-get update -qq &&
sudo apt-get install spotify-client</textarea>
			<p>You can view these commands individually at the <a href="http://www.spotify.com/uk/download/previews/">Official Spotify Linux Preview page</a>.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>

<?php require '../footer.php'; } ?>
