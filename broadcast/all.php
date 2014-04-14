<?php

	$Title_HTML = 'All Tutorials';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'All Tutorials';
	$Description_Plain = $Description_HTML;

	$Keywords = 'all tutorials';

	$Featured_Image = '';

	$Canonical = 'all';

	$Post_Type = 'Blog Index';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';

		// IFCATEGORY
		if (isset($_GET['category'])) $Category = htmlentities($_GET['category'], ENT_QUOTES, 'UTF-8');
		else $Category = false;

		Blog(basename(__FILE__), $Category, 3, 12);

	require '../footer.php';

}
