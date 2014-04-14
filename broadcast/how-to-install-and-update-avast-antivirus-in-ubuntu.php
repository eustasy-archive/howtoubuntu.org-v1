<?php

	$Title_HTML = 'How to Install and Update avast! Antivirus in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Ubuntu doesn\'t tend to get viruses, but if you work with Windows, you can scan your machine using avast! Antivirus, once you\'ve fixed the update issue.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install update avast antivirus';

	$Featured_Image = '';

	$Canonical = 'how-to-install-and-update-avast-antivirus-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to Install and Update avast! Antivirus in Ubuntu</h2>

	<p>Ubuntu doesn't tend to get viruses, but if you work with Windows, you can scan your machine using avast! Antivirus, once you've fixed the update issue.</p>
	<div class="section group">
		<div class="col span_1_of_2">
			<div class="info">
				<h4 id="information">Information</h4>
				<p>It is generally accepted that there are no currently wild viruses for Ubuntu, or any Linux based system.  That is unlikely to change because of the vast quantities of eyes watching the code, integrated update system, and more in-built security. In the event that it does, neither How to Ubuntu, <a href="http://eustasy.oef/">eustasy</a>, nor <a href="http://www.avast.com/">avast!</a> guarantee any protection or prevention by following these steps.</p>
			</div>
		</div>
		<div class="col span_1_of_2">
			<div class="contents box">
				<h4 id="contents">Contents</h4>
				<div class="section group">
					<div class="col span_1_of_2">
						<p><a href="#download">1. Download</a></p>
						<p><a href="#register">3. Register</a></p>
						<p><a href="#update">5. Update</a></p>
					</div>
					<div class="col span_1_of_2">
						<p><a href="#install">2. Install</a></p>
						<p><a href="#fix">4. Fix</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3 id="download">1. Download</h3>
	<div class="section group">
		<div class="col span_1_of_4">
			<h4 class="textcenter">avast! Linux Edition</h4>
			<p class="textcenter">If you are using Ubuntu, you should download the deb version.</p>
		</div>
		<div class="col span_1_of_4">
			<h4 class="textcenter"><a class="download" href="http://files.avast.com/files/linux/avast4workstation_1.3.0-2_i386.deb">deb</a></h4>
			<p class="textcenter grey"><small>27.7 MB</small></p>
		</div>
		<div class="col span_1_of_4">
			<h4 class="textcenter"><a class="download" href="http://files.avast.com/files/linux/avast4workstation-1.3.0-1.i586.rpm">rpm</a></h4>
			<p class="textcenter grey"><small>27.8 MB</small></p>
		</div>
		<div class="col span_1_of_4">
			<h4 class="textcenter"><a class="download" href="http://files.avast.com/files/linux/avast4workstation-1.3.0.tar.gz">tar.gz</a></h4>
		</div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="install">2. Install</h3>
			<p>Once you have downloaded the package, you should have a file called <span class="box">avast4workstation_..._i386.deb</span>. It should be around 30 Megabytes. Double-Click to open it in the <span class="box">Ubuntu Software Centre</span>. Click the <span class="box">Install</span> button in the top-right-hand corner. Wait for it to finish installing before proceeding.</p>
			<a class="fancybox" title="Install avast! Free Antivirus Linux Home Edition with the Ubuntu Software Centre" href="assets/images/how-to-install-and-update-avast-antivirus-in-ubuntu/Screenshot-from-2012-07-22-195517.png"><img src="assets/images/how-to-install-and-update-avast-antivirus-in-ubuntu/Screenshot-from-2012-07-22-195517.png" alt="Install avast! Free Antivirus Linux Home Edition with the Ubuntu Software Centre" title="Install avast! Free Antivirus Linux Home Edition with the Ubuntu Software Centre"></a>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="register">3. Register</h3>
			<p class="important">You will need to complete the <a href="http://www.avast.com/registration-free-antivirus.php">Registration Form</a> to receive your free Key (via email) to use avast! Antivirus for Linux.</p>
			<p>The form asks your name, email, and country (all compulsory). Optional items include age, computer literacy, and previous antivirus, and your reason for choosing avast!. After entering your details, it states a license key will be emailed to you, usually within half-an-hour.</p><h6>Important Notes</h6><ul><li>I have registered several installations with the same key, with no repercussions so far.</li><li>While a valid email is required (it's where your key's being sent) i have never received any other mail from them.</li></ul>
			<p>When you launch avast! you will be asked for a key. If you exit without entering one, it will ask again on next launch. Because of the random nature of the key, you should copy and paste it from your registration email instead of typing it manually.</p>
		</div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="fix">4. Fix</h3>
			<p class="important">Unfortunately, while most of avast! works straight out of the metaphorical box, there is one problem.</p>
			<p>The updates for avast! (important for detecting the latest viruses) come in blocks. <strong>Big blocks.</strong> Too big for Ubuntu's default <span class="box">shmmax<span>.</p>
			<p>ShmMax is the maximum amount of shared memory any given process can have, and while it's probably not big enough for pretty much everything, single big temporary downloads (like those for applying big updates) means avast! usually wants more, and exits with an Update Engine Error.</p>
			<p>To fix it, we need to edit a file manually, which can be done in <span class="box">Gedit</span> via the <span class="box">Terminal</span>.</p><input type="text" class="code" value="gksudo gedit /etc/init.d/rcS">
			<p>Add this line of code in a new line directly <strong>before</strong> the line, which should already be there, <span class="box">exec /etc/init.d/rc S</span>.</p><input type="text" class="code" value="sysctl -w kernel.shmmax=128000000">
			<p>Because you've edited the Kernel settings, which are things that load very early on, you'll need to restart your computer before completing the next step.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="update">5. Update</h3>
			<p>Updating is ridiculously easy, there is a big <span class="box">Update Database</span> button in the top-left-hand corner, and you can also go via <span class="box">Tools</span>, <span class="box">Update Database</span>.</p>
			<p>Under <span class="box">Tools</span>, <span class="box">Preferences</span>, you can also set it to install updates automatically.</p>
			<h3>Congratulations, you have just Installed and Updated avast! Antivirus in Ubuntu!</h3>
		</div>
	</div>

<?php require '../footer.php'; } ?>
