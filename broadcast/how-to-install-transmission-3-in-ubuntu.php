<?php

	$Title_HTML = 'How to Install Transmission 3 in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Transmission is a fast, easy, free bittorrent client. This tutorial will teach you how to install the latest version in Ubuntu.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install transmission 3';

	$Featured_Image = '';

	$Canonical = 'how-to-install-transmission-3-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to Install Transmission 3 in Ubuntu</h2>

	<p>Transmission is a fast, easy, free bittorrent client. This tutorial will teach you how to install the latest version in Ubuntu.</p>
	<h3>Installing</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="easy">The Easy Way</h4>
			<p>Open your <span class="box">Update Manager</span>. Then, click <span class="box">Settings</span>. Under the <span class="box">Other Software</span> tab, click <span class="box">Add</span>. Paste the following line into the box and enter your password when prompted.</p>
			<input type="text" class="code" value="deb http://ppa.launchpad.net/transmissionbt/ppa/ubuntu focal main">
			<p>Check for Updates.</p>
			<p>Now you need to run just one line in the Terminal.</p>
			<input type="text" class="code" value="sudo apt-get install transmission-gtk">
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4 id="terminal">In the Terminal</h4>
			<p>Installing via the terminal is rather easy.</p>
			<input type="text" class="code" value="sudo add-apt-repository ppa:transmissionbt/ppa">
			<input type="text" class="code" value="sudo apt update">
			<input type="text" class="code" value="sudo apt install transmission-gtk">
		</div>
	</div>
	<h3>Congratulations, you've just installed Transmission 3.0 in Ubuntu!</h3>

	<?php
	require '../footer.php';
}
