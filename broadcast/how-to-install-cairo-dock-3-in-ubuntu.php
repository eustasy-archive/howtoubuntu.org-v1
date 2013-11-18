<?php

	$TextTitle = 'How to Install Cairo Dock 3 in Ubuntu';
	$WebTitle = 'How to Install Cairo Dock 3 in Ubuntu';
	$Canonical = 'how-to-install-cairo-dock-3-in-ubuntu';
	$FeaturedImage = '';
	$Description = 'Cairo Dock is an OS X like approach to alternative desktop environment. This tutorial will teach you how to install the latest version.';
	$Keywords = 'install cairo dock 3';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Install Cairo Dock 3 in Ubuntu</h2>

	<p>Cairo Dock is an OS X like approach to alternative desktop environment. This tutorial will teach you how to install the latest version.</p>
	<h3>Installing</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="easy">The Easy Way</h4>
			<p>In Precise, open your <span class="box">Update Manager</span>. Then, click <span class="box">Settings</span>. Under the <span class="box">Other Software</span> tab, click <span class="box">Add</span>. Paste the following line into the box and enter your password when prompted.</p>
			<input type="text" class="code" value="deb http://ppa.launchpad.net/cairo-dock-team/ppa/ubuntu precise main">
			<p>Check for Updates.</p>
			<p>Now you need to run just one line in the Terminal.</p>
			<input type="text" class="code" value="sudo apt-get install cairo-dock cairo-dock-plug-ins">
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4 id="terminal">In the Terminal</h4>
			<p>Installing via the terminal is rather easy.</p>
			<input type="text" class="code" value="sudo add-apt-repository ppa:cairo-dock-team/ppa">
			<input type="text" class="code" value="sudo apt-get update">
			<input type="text" class="code" value="sudo apt-get install cairo-dock cairo-dock-plug-ins">
		</div>
	</div>
	<h3 id="switching">Switching:</h3>
	<p>Once you've installed Cairo, you may switch, with or without Unity/Gnome, and back again when you login, using the Gear icon to the right of your name.</p>
	<h3>Congratulations, you've just installed Cairo Dock 3.0 in Ubuntu!</h3>

<?php require '../footer.php'; } ?>
