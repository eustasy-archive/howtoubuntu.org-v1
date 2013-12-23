<?php

	$TextTitle = 'How to Disable, Stop or Uninstall Apport Error Reporting in Ubuntu';
	$WebTitle = 'How to Disable, Stop or Uninstall Apport Error Reporting in Ubuntu';
	$Canonical = 'how-to-disable-stop-uninstall-apport-error-reporting-in-ubuntu';
	$PostType = 'Post';
	$FeaturedImage = '';
	$Description = 'Popups reading "Sorry, Ubuntu 12.04 has experienced an internal error" are part of Apport, an internal debugger which automatically generate reports to submit for packages that crash.';
	$Keywords = 'disable stop uninstall apport error reporting';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Disable, Stop or Uninstall Apport Error Reporting</h2>

	<p>Ubuntu 12.04 is the first release of Ubuntu that ships with Apport Error Reporting enabled by default, and as a result, you may get a large quantity of <span class="box">Internal System Error</span> popups inside Ubuntu. Similar popups may also read <span class="box">Sorry, Ubuntu 12.04 has experienced an internal error.</span> These popups are part of Apport, an internal debugger which automatically generate reports to submit for packages that crash. Many reports can't be filed or have already been filed, and as such it is usually safe to turn off.</p>
	<h3 id="information">Information</h3>
	<p>Apport is an Error Reporting Service provided by Ubuntu to intercept and analyze crashes and bugs as and when they occur. Crashes and Bugs may sound like bad things, but actually most operating systems will have several a day, and it doesn't mean your computer is broken, nor does it necessarily stop working. As such, Apport can usually be safely disabled, as it doesn't fix anything, it just tells developers that something went wrong.</p>
	<div class="section group">
		<div class="col span_1_of_3">
			<h3 id="stop">Stop Apport</h3>
			<p>You can stop the currently running Apport service with the following command.</p>
			<input type="text" class="code" value="sudo service apport stop">
			<p>Note that unless you remove it or disable it at boot it will start again the next time you turn on your computer.</p>
		</div>
		<div class="col span_1_of_3">
			<h3 id="disable">Disable Apport at Boot</h3><p>You need to manually edit a file to Stop Apport Running at Boot (when you turn on your machine. Open the Terminal, and paste the following command with <span class="box">Ctrl</span>+<span class="box">Shift</span>+<span class="box">V</span>, or type it in manually.</p>
			<input type="text" class="code" value="sudo nano /etc/default/apport">
			<p>Change the line that says <span class="box">enabled=1</span> to <span class="box">enabled=0</span> to disable Apport. To re-enable, change it back.</p>
		</div>
		<div class="col span_1_of_3">
			<h3 id="uninstall">Uninstall Apport</h3>
			<p>It is fairly simple to uninstall Apport, as you can open the <span class="box">Ubuntu Software Centre</span>, search for <span class="box">apport</span>, and simply click <span class="box">Remove</span>.</p>
			<p>A similar process can be used for the package <span class="box">apport</span> in both <span class="box">Synaptic</span> and the <span class="box">Terminal</span>.</p>
			<input type="text" class="code" value="sudo apt-get purge apport">
		</div>
	</div>

<?php require '../footer.php'; } ?>
