<?php

	$TextTitle = 'How to Play a DVD in Ubuntu';
	$WebTitle = 'How to Play a DVD in Ubuntu';
	$Canonical = 'how-to-play-a-dvd-in-ubuntu';
	$PostType = 'Post';
	$FeaturedImage = '';
	$Description = 'Ubuntu, by default, does not include the necessary libraries or codecs to decode DVDs. As such, it will not play commercial videos off of them. Here we detail the variety of ways to Play a DVD in Ubuntu.';
	$Keywords = 'play dvd codec';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to Play a DVD in Ubuntu</h2>
			<p>Ubuntu, by default, does not include the necessary libraries or codecs to decode DVDs. As such, it will not play commercial videos off of them. Here we detail the variety of ways to Play a DVD in Ubuntu.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<h3 id="install-codecs">Install Codecs</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="software-centre">Using the Software Centre</h4>
			<p>You should click the links below one at a time. They will open the Software Centre to the correct package. You may need to allow your browser to open the Software Centre.</p><p>Once the Software Centre has opened, you can click install in the top-right-hand corner of the screen (you may be asked for your password), then close the Software Centre. You will need to click the links and then click install one at a time, but you do not need to wait for one to finish installing before proceeding to the next.</p>
			<a class="fancybox" href="assets/images/how-to-play-a-dvd-in-ubuntu/Screenshot-from-2012-06-04-173033.png" title="LibDVDCSS in the Ubuntu Software Centre"><img src="assets/images/how-to-play-a-dvd-in-ubuntu/Screenshot-from-2012-06-04-173033.png" alt="LibDVDCSS in the Ubuntu Software Centre" title="LibDVDCSS in the Ubuntu Software Centre" />
			<p><a href="apt:libdvdcss2?section=universe?section=multiverse" class="install">Install LibDVDCSS &rsaquo;</a></span> For recognizing DVDs in Ubuntu.</p>
			<p><a href="apt:libdvdread4?section=universe?section=multiverse" class="install">Install LibDVDRead4 &rsaquo;</a> For reading DVDs in Ubuntu.</p>
			<p><a href="apt:libdvdnav4?section=universe?section=multiverse" class="install">Install LibDVDNav4 &rsaquo;</a> For navigating DVDs in Ubuntu.</p>
			<p>These are not included by default, because to pass them on to you, Canonical (who make Ubuntu) would have to pay a royalty, making Ubuntu non-free. For personal use however, they are free for you to install.</p>
			<p>*Note: If these links do not work, open the Software Center and install the packages <span class="box">libdvdcss</span>, <span class="box">libdvdread4</span>, and <span class="box">libdvdnav4</span> by searching for them (upper-right-hand corner) and clicking install (only revealed when they're selected). Give your password when prompted.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4 id="terminal">Using the Terminal</h4>
			<p>If you are more technically experienced, you may find it significantly faster and easier to install via the terminal.</p>
			<input type="text" class="code" value="sudo apt-get install libdvdcss libdvdread4 libdvdnav4">
			<p>*Note: To paste in the terminal, DO NOT use Ctrl+V. Use Ctrl+Shift+V.<br>
			The same applies to copying and cutting.</p>
			<p>You will be prompted for your password. When you provide it, no dots, stars, or other characters will appear in place of the letters. This is normal. Proceed and hit enter.</p>#
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
