<?php

	$Title_HTML = 'How to Enable Sharing in Miro on Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'If you have just installed Miro in Ubuntu, you may be wondering why trying to enable sharing results in an error message about the Avahi mDNSResponder Compatibility Library.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'enable sharing miro avahi mdnsresponder compatibility library apt libavahi compat libdnssd1 libavahi-compat-libdnssd1 apt:libavahi-compat-libdnssd1';

	$Featured_Image = '';

	$Canonical = 'how-to-enable-sharing-in-miro-on-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {
	require '../header.php';
	?>

	<h2>How to Enable Sharing in Miro</h2>
	<p>If you have just installed Miro in Ubuntu, you may be wondering why trying to enable sharing results in an error message about the Avahi mDNSResponder Compatibility Library. There are two ways to do this. The first column you just click the button and click install, and the second one requires the execution of a command in the terminal, but may well be faster.</p>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="easy">The Easy Way</h3>
			<p>All you need to do is install the Avahi mDNSResponder Compatibility Library, and then restart. No, most things in Ubuntu do <em>not</em> require a full restart, but this one usually does. Installation can be done in two clicks, one on the link below, and then clicking the install button in the Ubuntu Software Center.</p>
			<p class="textcenter"><a class="download" href="apt:libavahi-compat-libdnssd1">Install Avahi mDNSResponder Compatibility Library &rsaquo;</a></p>
			<p>After restarting, you can launch Miro and enable sharing, no more Install Avahi mDNSResponder Compatibility Library error message.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="terminal">In the Terminal</h3>
			<p>If you are a little more technologically adept, you may prefer to run a terminal command. Here it is:</p>
			<input type="text" class="code" value="sudo apt-get install libavahi-compat-libdnssd1"/>
			<p>After restarting, you can launch Miro and enable sharing, no more Install Avahi mDNSResponder Compatibility Library error message.</p>
		</div>
	</div>
	<h3>Congratulations, you have just Enabled Sharing in Miro on Ubuntu!</h3>

	<?php
	require '../footer.php';
}