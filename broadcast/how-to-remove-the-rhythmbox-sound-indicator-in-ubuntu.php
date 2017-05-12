<?php

	$Title_HTML = 'How to Remove the Rhythmbox Sound Indicator';
	$Title_Plain = 'How to Remove the Rhythmbox Sound Indicator in Ubuntu';

	$Description_HTML = 'While some may find it useful to have music players listed in the sound indicator menu with individual controls, installers of multiple software may want to blacklist some media players from appearing there. It can be done with this simple command, or edited in dconf Editor.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'remove rythmbox disable hide sound indicator blacklist';

	$Featured_Image = '';

	$Canonical = 'how-to-remove-the-rhythmbox-sound-indicator-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Media';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to Remove the Rhythmbox Sound Indicator</h2>
			<p>While some may find it useful to have music players listed in the sound indicator menu with individual controls, installers of multiple software may want to blacklist some media players from appearing there. It can be done with this simple command, or edited in dconf Editor.</p>
			<p>First, open the Terminal. Then execute the following code.</p>
			<input type="text" class="code" value="gsettings set com.canonical.indicator.sound blacklisted-media-players &quot;['rhythmbox']&quot;">
			<h3>Congratulations, you have just Removed the Rhythmbox Sound Indicator in Ubuntu!</h3>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>

<?php require '../footer.php'; } ?>
