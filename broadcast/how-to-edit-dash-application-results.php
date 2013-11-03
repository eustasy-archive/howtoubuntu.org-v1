<?php

	$TextTitle = 'How to Edit Dash Application Results in Ubuntu';
	$WebTitle = 'How to Edit Dash Application Results in Ubuntu';
	$Canonical = 'how-to-edit-dash-application-results';
	$FeaturedImage = '';
	$Description = 'When you search for something in the Unity Dash, you may wish to remove some of the applications listed, or add some that are either hidden by default, or simply don\'t exist.';
	$Keywords = 'edit dash application results';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Edit Dash Application Results</h2>

	<div class="section group">
		<div class="col span_1_of_3">
			<p>When you search for something in the Unity Dash, you may wish to remove some of the applications listed, or add some that are either hidden by default, or simply don't exist.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
		<div class="col span_1_of_2">
			<div class="box">
				<h3>Contents</h3>
				<div class="section group">
					<div class="col span_1_of_2">
						<h5><a href="#with-alacarte">With Alacarte</a></h5>
						<p><a href="#install-alacarte">Install Alacarte</a></p>
						<p><a href="#edit">Edit Results</a></p>
					</div>
					<div class="col span_1_of_2">
						<h5><a href="#terminal">Terminal</a></h5>
						<p><a href="#personal">Just For You</a><br>
						&middot;&emsp;<a href="#make">Make</a><br>
						&middot;&emsp;<a href="#copy">Copy</a><br>
						&middot;&emsp;<a href="#action">Add or Remove</a></p>
						<p><a href="#everyone">For Everyone</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="with-alacarte">With Alacarte</h3>
			<h4 id="install-alacarte">Install Alacarte</h4>
			<p>First, you will need to install a menu editor. This is what we will be using to edit our application results. We will be using Alacarte.</p>
			<p class="textcenter"><a class="download" href="apt:alacarte">Install Alacarte &rsaquo;</a></p>
			<p>If asked, confirm that How To Ubuntu (this site) should be allowed to open the Ubuntu Software Centre. This does now allow us to install software at any time. You will <span class="strong">always</span> have to click install yourself. You may need to enter your password to install this piece of software.</p>
			<p>The <span class="box">Install</span> button is located in the top-right corner of the Ubuntu Software Centre. Now, we must open the editor.</p>
			<a class="fancybox" title="Install Alacarte" href="assets/images/how-to-edit-dash-application-results/InstallAlacarte.png"><img src="assets/images/how-to-edit-dash-application-results/InstallAlacarte.png" alt="Install Alacarte" title="Install Alacarte"></a>
			<h4 id="edit">Edit Application Results</h4>
			<a class="fancybox" title="Edit" href="assets/images/how-to-edit-dash-application-results/SearchMenu.png"><img src="assets/images/how-to-edit-dash-application-results/SearchMenu.png" alt="Search Menu" title="Search Menu"></a>
			<p>You can open Alacarte by searching the Dash for <span class="box">Menu</span>, and Clicking <span class="box">Main Menu</span>. Now we can enable (un-hide), disable (hide), and permanently delete items and whole categories from here.</p>
			<p>Categories can be found in the left-hand column. You can uncheck items or categories to hide them, and check to make them searchable again. This will not install or uninstall any software, however we recommend unchecking items rather than deleting them.</p>
			<a class="fancybox" title="Search Menu" href="assets/images/how-to-edit-dash-application-results/Edit.png"><img src="assets/images/how-to-edit-dash-application-results/Edit.png" alt="Edit" title="Edit"></a>
			<p>Here, we are enabling <span class="box">Software Sources</span>.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11" id="terminal">
			<h3 id="personal">Terminal for You</h3>
			<h4 id="make">Make a Folder for Them</h4>
			<p>This folder will just be a nice, quiet, hidden place that the Dash already checks.</p>
			<input type="text" class="code" value="mkdir -p ~/.local/share/applications">
			<h4 id="copy">Copy the Launcher</h4>
			<p>You'll need to copy the launcher.</p>
			<textarea class="code resize">cp /usr/share/applications/software-properties-gtk.desktop ~/.local/share/applications/</textarea>
			<h4 id="action">Add and or Remove</h4>
			<p>You'll need to copy the launcher.</p>
			<code>gedit ~/.local/share/applications/<span class="editable">software-properties-gtk</span>.desktop</span></code>
			<p>Here, we're using the <span class="box">Software Sources</span> launcher, as this is hidden by default, but might be useful to have visible for more direct access. Now we just need to change the <span class="box">NoDisplay</span> value from true to false.</p>
			<input type="text" class="code" value="NoDisplay=true">
			<input type="text" class="code" value="NoDisplay=false">
			<p>Now you can find <span class="box">Software Sources</span> in the Dash. If it is not immediately available, try logging out and in again to refresh it. Reverse to hide an item.</p>
			<h3 id="everyone" class="break">Terminal for Everyone</h3>
			<p>We're going to edit the root file for the <span class="box">Software Sources</span> launcher, as this is hidden by default, but might be useful to have visible for more direct access. Editing like this will enable (or disable) the launcher for everyone.</p>
			<textarea class="code resize">gksudo gedit /usr/share/applications/software-properties-gtk.desktop</textarea>
			<p>Now we just need to change the <span class="box">NoDisplay</span> value for this.</p>
			<input type="text" class="code" value="NoDisplay=true">
			<input type="text" class="code" value="NoDisplay=false">
			<p>Now you can find <span class="box">Software Sources</span> in the Dash. If it is not immediatly available, try logging out and in again to refresh it. Reverse to hide an item.</p>
		</div>
	</div>

	<h3>Congratulations, you have just Edited Dash Application Results!</h3>

<?php require '../footer.php'; } ?>
