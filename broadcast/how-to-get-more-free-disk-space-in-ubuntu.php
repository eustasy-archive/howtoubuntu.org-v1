<?php

	$TextTitle = 'How to get more free disk space in Ubuntu';
	$WebTitle = 'How to get more free disk space in Ubuntu';
	$Canonical = 'how-to-get-more-free-disk-space-in-ubuntu';
	$FeaturedImage = '';
	$Description = 'Over time, any Operating System can become cluttered as programs are added and removed. In Ubuntu, the downloaded packages are cached for a certain time, as well as tmp (temporary) files, such as browser caches, which can take up valuable Gigabytes of space.';
	$Keywords = 'get more free space disk hard drive';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to get more free disk space</h2>

	<p>Over time, any Operating System can become cluttered as programs are added and removed. In Ubuntu, the downloaded packages are cached for a certain time, as well as <span class="box">tmp</span> (temporary) files, such as browser caches, which can take up valuable Gigabytes of space.</p>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 class="red" id="warnings">Warnings</h3>
			<p class="red">Bleachbit is a system cleaning tool. It includes the options to delete system caches. It is recommended that you check for and install all available updates. You should <strong>Not</strong> run if a restart is pending. Running "as root" makes critical changes to your system.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="install">Install</h3>
			<p>You can start by searching in the <span class="box">Ubuntu Software Center</span> and searching for <span class="box">Bleachbit</span>. Select the result and click <span class="box">Install</span>, or just click <a href="apt://bleachbit">Install &rsaquo;</a> to skip the search process.</p>
		</div>
	</div>
	<div class="breaker"></div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="run-normally">Free Space with Bleachbit Normally</h3>
			<p>Open the dash, and search for <span class="box">Bleachbit</span>. Click and select what you wish to be deleted. A good general rule is not to select anything you don't understand. Exceptions are mostly browser options.</p>
			<p>As cookies and caches happen to be things that come up often in the list, i will explain their function briefly.</p>
			<p>Cookies are small files used inside an application to mark you as you. It's like one of those stickers saying "Hi, i'm ______", except they can also track what you're searching, cooking, or liking. Cookies keep you logged in to websites, so you probably shouldn't delete them from the browser you use. Elsewhere, they are small, but sometimes annoying (privacy considerations), do what you want.</p>
			<p>Caches are groups of files, folders, or archives which store your data. Under your browser, this could mean images from websites you frequently visit, so they do not have to be loaded every time. For your e-mail client, this could be messages downloaded for offline reading. Be careful with these.</p>
			<p>You may wish to select everything you're sure about, press <span class="box">Clean</span> (in the top-left corner) and then select any additional items you are unsure about and press <span class="box">Preview</span> before actually removing them.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="run-elevated">Free Space with Bleachbit as Root</h3>
			<p>Now we're talking. Open the dash, and search for <span class="box">Bleachbit</span>. Click on <span class="box">Bleachbit (as root)</span>. Enter your password when prompted.</p>
			<p>For most people, under <span class="box">APT</span>, selecting <span class="box">autoclean</span>, <span class="box">autoremove</span>, and <span class="box">clean</span> will procure the most space, with <span class="box">Cache</span>, <span class="box">Rotated Logs</span>, and <span class="box">Temporary Files</span>, all under <span class="box">System</span>, will come a close second. I would also recommend selecting both options under <span class="box">Flash</span>.</p>
			<p>The ultimate clean will include <span class="box">Deep Scan</span>. The options here are <span class="box">.DS_Store</span> (generally junk, unless you switch back and forth between a Mac and Ubuntu), <span class="box">Backup Files</span> (can use a lot of space, be sure to make a fresh one straight after though), <span class="box">Temporary Files</span> (usually cleaned out automatically, but occasionally missed and left to take up space), and <span class="box">Thumbs.db</span> (which are like .DS_Store, but for speeding up Windows).</p>
			<a class="fancybox" title="Bleachbit Cleans unneeded files from Ubuntu" href="assets/images/how-to-get-more-free-disk-space-in-ubuntu/Screenshot-from-2012-06-04-195959.png"><img class="round" src="assets/images/how-to-get-more-free-disk-space-in-ubuntu/Screenshot-from-2012-06-04-195959.png" alt="Bleachbit Cleans unneeded files from Ubuntu" title="Bleachbit Cleans unneeded files from Ubuntu"></a>
		</div>
	</div>
	<p><strong>Most users will only need to clean there machine rarely, around two or three times a year. More technically inclined people, once a month.</strong></p>
	<h3>Congratulations, you now have more free space in Ubuntu!</h3>

<?php require '../footer.php'; } ?>
