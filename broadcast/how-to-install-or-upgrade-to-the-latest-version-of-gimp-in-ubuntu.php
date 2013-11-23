<?php

	$TextTitle = 'How to Install or Upgrade to the latest version of Gimp';
	$WebTitle = 'How to Install or Upgrade to the latest version of Gimp in Ubuntu';
	$Canonical = 'how-to-install-or-upgrade-to-the-latest-version-of-gimp-in-ubuntu';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = 'install update upgrade gimp';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Install or Upgrade to the latest version of Gimp in Ubuntu</h2>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<p>Gimp is one of the most popular image editing programs that doesn't cost big money. This free programme is frequently tooted as an alternative for Adobe Photoshop. Unfortunately, the Ubuntu sources don't tend to stock the most recent version.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<div class="info">
				<h3>Note</h3>
				<p>If you have followed any of our "<a href="things-to-do-after-installing-ubuntu-12-04-precise-pangolin">things to do after installing Ubuntu</a>" tutorials, then you already have the latest version of GIMP, and do not need to follow these instructions.</p>
			</div>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="easy">In the Update Manager</h3>
			<p class="important">If you are not familiar or comfortable adding PPAs and installing software through the command line, then you can accomplish everything we wish to do with the <span class="box">Update Manager</span>, but it may take slightly longer.</p>
			<p>In Precise, open your <span class="box">Update Manager</span>. Then, click <span class="box">Settings</span>. Under the <span class="box">Other Software</span> tab, click <span class="box">Add</span>. Paste the following line into the box and enter your password when prompted.</p>
			<input type="text" class="code" value="deb http://ppa.launchpad.net/otto-kesselgulasch/gimp/ubuntu precise main">
			<p>Repeat for this line.</p>
			<input type="text" class="code" value="deb-src http://ppa.launchpad.net/otto-kesselgulasch/gimp/ubuntu precise main">
			<p>Close the Software Sources window and Check for Updates.</p>
			<p>Open the Software Centre and search for Gimp, or just <a href="apt:gimp" class="box">Install Gimp</a>.</p><p>Once you've found it or clicked that link (which you may be asked to confirm, tick the checkbox so you don't get asked again), you'll need to click <span class="box">Install</span> in the top-right-hand-corner of the Software Centre.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<h3 id="terminal">In the Terminal</h3>
			<p>Adding the repository, updating, and installing the latest gimp, can be done via one unified command. You will need to enter your (administrator) password, and then press <span class="box">Enter</span> (sometimes called return) when prompted to confirm the addition of a new (and previously untrusted) software source.</p>
			<input type="text" class="code" value="sudo add-apt-repository ppa:otto-kesselgulasch/gimp && sudo apt-get update && sudo apt-get install gimp">
			<p>If you prefer, or just for explanatory purposes, these are the individual commands, where <span class="box">&&</span> runs the commands one after the other.</p>
			<p>This command adds the new Software Repository.</p>
			<input type="text" class="code" value="sudo add-apt-repository ppa:otto-kesselgulasch/gimp">
			<p>This command Updates the Software Sources, so your computer knows what software is available in your new repository.</p>
			<input type="text" class="code" value="sudo apt-get update">
			<p>This command installs Gimp, or updates it is it is already installed. It will also install or update any dependencies (required packages/software).</p>
			<input type="text" class="code" value="sudo apt-get install gimp">
		</div>
	</div>
	<br>
	<h3>Congratulations, you have just Installed or Upgraded Gimp in Ubuntu!</h3>

<?php require '../footer.php'; } ?>