<?php

	$Title_HTML = 'How to Install or Upgrade to the latest version of Skype in Ubuntu';
	$Title_Plain = 'How to Install or Upgrade to the latest version of Skype';

	$Description_HTML = 'The version of Skype, like so many programs, is often out of date in the official repositories for Ubuntu. Upgrading to or Installing the latest version of Skype in Ubuntu is a simple as downloading the right package, opening it, and hitting Upgrade or Install.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install update upgrade skype';

	$Featured_Image = '';

	$Canonical = 'how-to-install-or-upgrade-to-the-latest-version-of-skype-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Applications';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<h2>How to Install or Upgrade to the latest version of Skype in Ubuntu</h2>

	<div class="section group">
		<div class="col span_5_of_11">
			<p>The version of Skype, like so many programs, is often out of date in the official repositories for Ubuntu. Upgrading to or Installing the latest version of Skype in Ubuntu is a simple as downloading the right package, opening it, and hitting <span class="box">Upgrade</span> or <span class="box">Install</span>.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<div class="info">
				<h3>Information</h3>
				<p>While packages may indeed be regularly out of date in the official repos, the <a href="https://apps.ubuntu.com/cat/applications/skype/">Skype package</a>, as of 4.1.0.20 at least, does not seem to be. If downloading the deb and opening it does not result in an <span class="box">Upgrade</span> or <span class="box">Install</span> button, then you may already have the most recent version.</p>
			</div>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<a class="fancybox" title="Upgrade Skype in the Ubuntu Software Centre" href="assets/images/how-to-install-or-upgrade-to-the-latest-version-of-skype-in-ubuntu/Screenshot-from-2012-06-15-191851.png"><img src="assets/images/how-to-install-or-upgrade-to-the-latest-version-of-skype-in-ubuntu/Screenshot-from-2012-06-15-191851.png" alt="Upgrade Skype in the Ubuntu Software Centre" title="Upgrade Skype in the Ubuntu Software Centre"></a>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 class="textcenter"><a class="download" href="http://www.skype.com/en/download-skype/skype-for-linux/">Download</a></h3>
			<p>Once the <span class="box">.Deb</span> has finished downloading, open it by double-clicking, and you'll see a Software Centre Screen that has an Upgrade Button in the top-right-hand-corner. Hit it, sit back, and relax (maybe close Skype if it's open first).</p>
			<p>Once it's all done, you might have to restart, as this is a pretty big update (it does vary). Occasionally, the old version of Skype may refuse to be replaced, in which case Uninstall it from the Ubuntu Software Centre (search, don't open the .deb) then proceed with the installation as described above.</p>
		</div>
	</div>
	<br>
	<h3>Congratulations, you have just Installed or Upgraded to the latest version of Skype in Ubuntu!</h3>

<?php require '../footer.php'; } ?>
