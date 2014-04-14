<?php

// ### Blog Function ###
//
// Echo out titles and descriptions of posts in the directory
// this is called from. Should be called as
// Blog($Caller, $Category, $PerLine);
// Where $Caller is the file that would cause recursion,
// and $Category is a Category or false.
// $PerLine should be an integer: 1, 2, or 3.
//
// Blog(__DIR__, $Category);
// Blog(__DIR__, $Category, 1);

function Blog($Caller, $Category = false, $PerLine = 3, $Show = 10) {

	// Set some Globals so the required scripts don't error.
	global $Sitewide_Root, $Place, $Request;

	echo '
		<div class="section group posts">';

	// Make an empty array
	$Posts_Return = array();

	// Set Looper to 0
	$Looper = 0;

	// List all the files
	$Posts_Return = glob('*.php', GLOB_NOSORT);

	// FORITEM
	foreach ($Posts_Return as $Key => $Item) {

		// IFCALLER
		if ($Item == $Caller) unset($Posts_Return[$Key]);
		else {

			$Post_Type = 'INVALID';

			// Require it
			require $Item;

			// IFPOST If it is a post (and hence has a time)
			if ($Post_Type == 'Blog Post') {

				// IFCHECKCATEGORY If no category or category matches
				if ($Category && ( $Category != $Post_Category )) {

					unset($Posts_Return[$Key]);

				} // IFCHECKCATEGORY

			} else unset($Posts_Return[$Key]);
			// IFPOST

		} // IFCALLER

	} // FORITEM

	// Stop Page being further than possible
	// (Show the last if it's over, first if negative)
	$Posts_Count = count($Posts_Return);

	$Pagination = Pagination_Pre($Posts_Count, $Show);

	$Posts_Return = array_slice($Posts_Return, $Pagination['Start'], $Pagination['Show'], true);

	// Order them by time
	array_multisort(array_map('filemtime', $Posts_Return), SORT_NUMERIC, SORT_DESC, $Posts_Return);

	// FOREACH: For each Item
	foreach ($Posts_Return as $Item) {

		// Require it
		require $Item;

		// Make the link
		$Post_Link = $Sitewide_Root.$Canonical;

		// Echo out the Item
		if ($PerLine == 1) echo '
			<div class="col span_1_of_1">';
		if ($PerLine == 2) echo '
			<div class="col span_1_of_2">';
		if ($PerLine == 3) echo '
			<div class="col span_1_of_3">';
		echo '
				<h3><a href="'.$Post_Link.'">' . $Title_HTML . '</a></h3>
				<p class="textright faded"><small>Last Updated on the ' . date ('jS \o\f F, Y', filemtime($Item)) .'</small></p>
				<p>' . $Description_HTML . '</p>
			</div>';

		// Increment Looper and echo a break every other post.
		$Looper += 1;
		if (is_int($Looper/$PerLine)) {
			echo '
		</div>
		<hr>
		<div class="section group">';
		}

	} // FOREACH

	// Preserve Query Strings
	$PreserveQueryStrings = Pagination_PreserveQueryStrings();

	// Paginate if necessary
	if ($Pagination['Page Max'] > 1) {
		echo '<div class="breaker"></div>';
		Pagination_Links($Pagination, $PreserveQueryStrings);
	}

	// IFNOPOSTS
	if ($Looper === 0) {
		// IFNOPOSTSCATEGORY
		if ($Category) {
			echo '<h2>Sorry, no posts found in the Category &ldquo;'.$Category.'&rdquo;.</h2>';
		} else {
			echo '<h2>Sorry, no posts found.</h2>';
		} // IFNOPOSTSCATEGORY
		echo '
		</div>';
		return false;
	} // IFNOPOSTS

	echo '
		</div>';

	return true;

}
