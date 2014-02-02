<?php

	// Site Configuration

	// This is the Title of your Site
	$Sitewide_Title = 'How to Ubuntu';

	// And the tagline
	$Sitewide_Tagline = 'Ubuntu Tutorials and How to\'s';

	// This is the Base URL of your Site
	// Do include a trailing slash
	// Do include a http:// or https://
	$Sitewide_Root = 'http://b.howtoubuntu.org/';

	// Allow or disallow Signups
	$Sitewide_Signups = true;

	// Enable or Disable Browning Mail
	// Requires Setup in libs
	$Browning = true;

	// Strip .php Extensions
	// IMPORTANT: Requires additional server-side setup.
	$PHP_Strip = true;

	$Place = parse_url($Sitewide_Root);

	$Request = parse_url($Place['scheme'].'://'.$Place['host'].$_SERVER['REQUEST_URI']);

	if($PHP_Strip && substr($Request['path'], -4, 4) == '.php') {
		header ('HTTP/1.1 301 Moved Permanently');
		header ('Location: '.$Sitewide_Root.$Canonical);
	}

	$pages = array('all.php', 'about.php', 'contact.php', 'contribute.php', 'countdown.php', 'index.php');