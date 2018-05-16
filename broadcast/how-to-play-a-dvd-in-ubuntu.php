<?php

	$Title_HTML = 'How to Play a DVD in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Ubuntu, by default, does not include the necessary libraries or codecs to decode DVDs. As such, it will not play commercial videos off of them. This is how to play a DVD in Ubuntu.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'play dvd codec';

	$Featured_Image = '';

	$Canonical = 'how-to-play-a-dvd-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Media';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to Play a DVD in Ubuntu</h2>
			<p>Ubuntu, by default, does not include the necessary libraries or codecs to decode DVDs. As such, it will not play commercial videos off of them. This is how to play a DVD in Ubuntu.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<h3 id="install-codecs">Install Codecs</h3>
	<div class="section group">
		<div class="col span_11_of_11">
			<h4 id="terminal">Using the Terminal</h4>
			<p>If you are more technically experienced, you may find it significantly faster and easier to install via the terminal.</p>
			<textarea class="code resize">echo 'deb http://download.videolan.org/pub/debian/stable/ /' | sudo tee -a /etc/apt/sources.list.d/libdvdcss.list &&
echo 'deb-src http://download.videolan.org/pub/debian/stable/ /' | sudo tee -a /etc/apt/sources.list.d/libdvdcss.list &&
wget -O - http://download.videolan.org/pub/debian/videolan-apt.asc | sudo apt-key add - &&
sudo apt-get update &&
sudo apt-get install libdvdcss2 libdvdread4 libdvdnav4 libavcodec-extra-53 libavformat-extra-53 libavutil-extra-51 libpostproc-extra-52 libswscale-extra-2 ubuntu-restricted-extras gstreamer1.0-plugins-bad gstreamer1.0-plugins-ugly libdvd-pkg</textarea>
			<p>*Note: To paste in the terminal, DO NOT use Ctrl+V. Use Ctrl+Shift+V.<br>
			The same applies to copying and cutting.</p>
			<p>You will be prompted for your password. When you provide it, no dots, stars, or other characters will appear in place of the letters. This is normal. Proceed and hit enter.</p>
			<p>You may need to confirm you want to install certain things using tab to navigate text-buttons and space to check boxes.</p>
		</div>
	</div>
	<br>
	<h3>Congratulations, you can now Play a DVD in Ubuntu!</h3>
	<br>
	<br>
	<br>
	<h3 id="playing">Playing DVDs</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="vlc">VLC Media Player</h4>
			<a class="fancybox" href="assets/images/how-to-play-a-dvd-in-ubuntu/Screenshot-from-2012-06-04-173405.png" title="VLC Media Player"><img src="assets/images/how-to-play-a-dvd-in-ubuntu/Screenshot-from-2012-06-04-173405.png" alt="VLC Media Player" title="VLC Media Player" /></a>
			<p>Open the dashboard and launch VLC Media Player. You can find it by searching for VLC.</p>
			<p>If VLC is not installed, you can <a href="apt:vlc" class="install">Install VLC &rsaquo;</a></p>
			<p>Open VLC. If VLC does not play your DVD automatically, click <span class="box">File</span> and select <span class="box">Open Disc</span>.</p>
			<p>Click <span class="box">Play</span>.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4 id="totem">Totem Media Player</h4>
			<p>Open the dashboard and launch Movie Player. You can find it by searching for Totem.</p>
			<p>If Totem does not play your DVD automatically, click <span class="box">Movie</span> and select <span class="box">Open</span>. Select your DVD (in the left hand column and click <span class="box">Play</span>.</p>
		</div>
	</div>

<?php require '../footer.php'; } ?>
