<?php

	$TextTitle = 'How to Save the Planet with Granola Personal for Ubuntu';
	$WebTitle = 'How to Save the Planet with Granola Personal for Ubuntu';
	$Canonical = 'how-to-save-the-planet-with-granola-personal-for-ubuntu';
	$FeaturedImage = '';
	$Description = 'Granola Personal is a small little app that cycles down your CPU in an intelligent manner to save computer time and money, but mainly energy and trees.';
	$Keywords = 'granola personal free gui download install repository settings save planet energy saving computer time money trees green cycles down';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Save the Planet with Granola Personal</h2>

	<p>Granola Personal is a small little app that cycles down your CPU in an intelligent manner to save computer time and money, but mainly energy and trees.</p>
	<h3 id="install">Install Granola</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="repository">Add Repository</h3>
			<p>You need to add the repository to recieve updates, and granola recommends a bash script, but this package which they also provide is much easier.</p>
			<p>Download <a href="https://download.miserware.com/linux/deb/ubuntu/precise/miserware-repo-latest.deb">this package</a> (precise only, go <a href="http://personal.grano.la/support/linux_install.php#repoconfig">here</a> to choose another version), and install it (by double clicking on the downloaded file).</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="download">Download Granola</h3>
			<p>You can download and install Granola by clicking the link below, or executing the code, also below.</p>
			<p><a href="apt:granola-gui">Install Granola &rsaquo;</a></p>
			<input type="text" class="code" value="sudo apt-get install granola-gui">
		</div>
	</div>
	<h3 id="settings">Change Settings</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<p>By default, Granola doesn't display anything, it just cycles down your CPU when you're not using it so much. I can vouch that i noticed no ill effects, but apparently save over 50% power when just browsing an typing.</p>
			<p>If, however, i then start playing a mid-level game, it becomes noticeable. At that point, you can turn it off.</p>
			<p>You do not do this by closing it, but by going to <span class="box">Edit</span> and <span class="box">Preferences</span>, and selecting <span class="box">Highest Power</span>.</p>
			<p>Other preferences include Currency, Energy Cost per kWh, changing CO2 saved from Kg to Lb, and (the only one I had to fiddle with) Annual of Cumulative counting. <em>I don't want to know what I'll save if I do this for a year, I want to know what I've already done.</em></p>
			<p>In case you're wondering how much of a difference this makes, no, &pound;30 is not a lot of money (yearly), but if i save enough CO2 for <em>a 500 mile flight, two trees and a gallon of</em> petrol this year, I'll feel a little better, even if i have to tap something before gaming/video rendering.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a class="fancybox" href="assets/images/how-to-save-the-planet-with-granola-personal-for-ubuntu/Screenshot-from-2012-04-29-190228.png"><img class="round" src="assets/images/how-to-save-the-planet-with-granola-personal-for-ubuntu/Screenshot-from-2012-04-29-190228.png" title="Granola Personal in Ubuntu" alt="Granola Personal in Ubuntu"></a>
		</div>
	</div>
	<h3>Congratulations, you have just started Saving the Planet (and Power) with Granola Personal for Ubuntu!</h3>

<?php require '../footer.php'; } ?>
