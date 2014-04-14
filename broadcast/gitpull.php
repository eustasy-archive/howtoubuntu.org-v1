<?php

	$Title_HTML = 'GitPull';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'GitPull for How to Ubuntu';
	$Description_Plain = $Description_HTML;

	$Keywords = 'git pull update contriute';

	$Featured_Image = '';

	$Canonical = 'gitpull';

	$Post_Type = 'Function';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';

	echo '
	<h2>GitPull</h2>';

	// If the auth is correct and Git posted a payload.
	// We can check for the payload to help stop attacks.
	// isset($_POST['payload'])
	// for some reason post doesn't seem to always get it.

	if (isset($_REQUEST['payload'])) {
		// We're going to run a few commands now.
		// git reset --hard HEAD	// Cleans out uncommitted changes.
		// git clean -f -d		// Remove junk files. DO NOT EXECUTE. DELETES DOWNLOADS.
		// git pull			// Get the latest version.

		// git reset --hard HEAD && git pull

		$GitPull = nl2br( shell_exec('git reset --hard HEAD && git pull') ); // Capture the output.

	} else { // Or not.
		$GitPull = nl2br( shell_exec('git reset --hard HEAD') ); // Just tell us where we are
	}

	// That is all.

	// Kind of
	echo '
<pre>'.$GitPull.'</pre>';

	require '../footer.php';
}