<?php

	$TextTitle = 'How to make your Dual Boot better with Burg';
	$WebTitle = 'How to make your Dual Boot better with Burg';
	$Canonical = 'how-to-make-your-dual-boot-better-with-burg';
	$PostType = 'Post';
	$FeaturedImage = '';
	$Description = 'Burg gives you the ability to use custom themes for selecting your bootloader, both with and without text. It also opens up the possibility of customizing and developing your own themes.';
	$Keywords = 'install burg boot dual';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to make your Dual Boot better with Burg</h2>
			<p>Grub 2 is all well and good, but if you want your dual boot to look a little better, then it's time to reverse it.</p>
			<p>Burg gives you the ability to use custom themes for selecting your bootloader, both with and without text. It also opens up the possibility of customizing and developing your own themes.</p>
			<br>
			<div class="warning">
				<h3 id="warnings">Warnings</h3>
				<p>Using the <span class="box">sudo</span> command, <em>especially</em> when affecting your bootloader, can render your system unbootable. Read all instructions and confirm you understand before executing any commands. When pasting into the Terminal, use <span class="box">Ctrl</span>+<span class="box">Shift</span>+<span class="box">V</span>, NOT <span class="box">Ctrl</span>+<span class="box">V</span>.</p>
			</div>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<br>
	<h3 id="installing">Installing</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="terminal">With the Terminal</h4>
			<p>We need to add a couple of PPAs (that's a place for ubuntu to get software from), update the sources (so your computer knows they're there) and then install a few things.</p>
			<textarea class="code">sudo add-apt-repository ppa:n-muench/burg -y && sudo add-apt-repository ppa:danielrichter2007/grub-customizer -y && sudo apt-get update && sudo apt-get install burg burg-themes grub-customizer</textarea>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4 id="update-manager">With the Update Manager</h4>
			<p><em>You'll have to use the terminal later on. If you're not comfortable doing that, don't do any of the steps listed on this page.</em></p>
			<p>Open the <span class="box">Update Manager,</span>. Click <span class="box">Settings</span>. Navigate to the <span class="box">Other Software</span> tab. Click the <span class="box">Add</span> button, and paste this code.</p>
			<input type="text" class="code" value="deb http://ppa.launchpad.net/n-muench/burg/ubuntu precise main">
			<p>Then click <span class="box">Add Source</span>. You will need to enter your password. Repeat for this Software Source.</p>
			<input type="text" class="code" value="deb http://ppa.launchpad.net/danielrichter2007/grub-customizer/ubuntu precise main">
			<p>Close the <span class="box">Software Sources</span> window, and use the <span class="box">Update Manager</span> to check for updates. This will make sure your Ubuntu knows about the new software. Now we need to install them.</p>
			<p>We're going to install 3 packages, <span class="box">burg</span> (that's the main one), <span class="box">burg-themes</span> (to make it look nice), and <span class="box">grub-customizer</span> (i know we're getting rid of grub and replacing it, but grub-customizer works for burg too).</p>
			<p>You can search for and install these in the <span class="box">ubuntu Software Centre</span>. Make sure you click <span class="box">Show # Technical Items</span> (bottom-left).</p>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_1_of_6"><br></div>
				<div class="col span_4_of_6">
			<h3 id="customizing">Customizing</h3>
			<p>Open <span class="box">Grub Customizer</span>. You will have to enter your password. When you are asked: <span class="box">BURG found! Do you want to configure BURG instead of grub2?</span>, click <span class="box">Yes</span>.</p><p>Click <span class="box">Install to MBR</span> (under File) to put Burg down as the default (over grub). Accept the default value unless you are booting from a hard drive other than the first one. If you're unsure, leave it as it is.</p>
			<p>I usually untick Ubuntu (recovery mode) because it's not something i want in my normal boot. This leaves me with Ubuntu 12.04 and Windows 7 (yours might be different). Under <span class="box">Preferences</span> you can also set the timeout and default boot item. Click the <span class="box">Save</span> button when you're happy, and close it.</p><p>Next, we're going to change the theme (the default isn't up to much). Open the Terminal and execute the following.</p>
			<input type="text" class="code" value="sudo burg-emu">
			<p>Provide your password and a screen like this should appear.</p>
			<a href="assets/images/how-to-make-your-dual-boot-better-with-burg/burg-emu.png" title="burg-emu Output" class="fancybox"><img src="assets/images/how-to-make-your-dual-boot-better-with-burg/burg-emu.png" alt="burg-emu Output" title="burg-emu Output"></a>
			<p>Press <span class="box">F2</span> and use the arrow keys to change the selected theme. I use radiance (looks like ubuntu, the one in the screenshot). Close the windows once you have made your selection (it saves automatically). The next time you start your computer, you will be able to choose your operating system in style.</p>
			<h3>Congratulations, you have just made your Dual Boot better with Burg!</h3>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>

	<?php require '../footer.php'; } ?>
