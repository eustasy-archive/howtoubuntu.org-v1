<?php

	$Title_HTML = 'Sitemap';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Root Sitemap.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'sitemap';

	$Featured_Image = '';

	$Canonical = 'sitemap';

	$Post_Type = 'Sitemap';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	// Send the right header for a Sitemap
	header('Content-Type: application/xml');

	// Set the encoding and doctype
	echo '<?xml version="1.0" encoding="utf-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	// List all the files
	$Items = globRecursive('*.php');

	// Order them by time
	array_multisort(array_map('filemtime', $Items), SORT_NUMERIC, SORT_DESC, $Items);

	// FOREACH: For each Item
	foreach ($Items as $Item) {

		// IFNOTTHIS: So long as it isn't this file
		if ($Item != basename(__FILE__)) {

			// Require it
			require $Item;

			// IFRECOGNISE If the Post_Type is Recognized
			if (in_array($Post_Type, $Post_Types)) {

				// Echo out the Item
				echo '
	<url>
		<loc>'.$Sitewide_Root.$Canonical.'</loc>
		<lastmod>'.date('Y-m-d', filemtime($Item)).'</lastmod>
		<priority>1</priority>
		<changefreq>daily</changefreq>
	</url>';

			} // IFRECOGNISE

			$Post_Type = 'INVALID';

		} // IFNOTTHIS

	} // FOREACH

	// Fin
	echo '
</urlset>';

}
