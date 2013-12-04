<?

	// This is the Title of your Site
	$Sitewide_Title = 'How to Ubuntu';

	// This is the Base URL of your Site
	$Sitewide_Root = 'http://b.howtoubuntu.org';
	// Don't include a trailing slash
	// Do include a http:// or https://

	$Request = parse_url($Sitewide_Root.$_SERVER['REQUEST_URI']);

	// This is a per-page 301 to strip trailing php extensions
	if (substr($Request['path'], -4, 4) == '.php') {
		header ('HTTP/1.1 301 Moved Permanently');
		header ('Location: '.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical);
	}

	$pages = array('all.php', 'about.php', 'contact.php', 'contribute.php', 'countdown.php', 'index.php');

?>
