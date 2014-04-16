<?php

	$Title_HTML = 'Ubuntu Tutorials and How to\'s';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Ubuntu Tutorials and How to\'s';
	$Description_Plain = $Description_HTML;

	$Keywords = '';

	$Featured_Image = '';

	$Canonical = '';

	$Post_Type = 'Blog Index';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<!-- // TODO Trusty Release
	</div>

	<div class="content spanpage trusty">
		<div class="section group">
			<div class="col span_1_of_5"><br></div>
			<div class="col span_3_of_5">
				<div class="bubble">
					<h2>Ubuntu 14.04 Trusty Tahr LTS</h2>
					<h4>17th April 2014 &nbsp;&middot;&nbsp; 5 Years of Support</h4>
					<h3><a href="about-ubuntu-14-04-trusty-tahr">About Ubuntu 14.04 Trusty Tahr</a></h3>
					<h3><a href="how-to-install-ubuntu-14-04-trusty-tahr">How to Install Ubuntu 14.04</a></h3>
					<h3><a href="things-to-do-after-installing-ubuntu-14-04-trusty-tahr">Things to do after Installing</a></h3>
				</div>
			</div>
			<div class="col span_1_of_5"><br></div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="content">
	-->
		<h2>Latest Tutorials</h2>
		<div class="section group">
			<?php
				// Make an empty array
				$Posts_Return = array();

				// Set Looper to 0
				$Looper = 0;

				// List all the files
				$Posts_Return = glob('*.php', GLOB_NOSORT);

				// FORITEM
				foreach ($Posts_Return as $Key => $Item) {

					// IFCALLER
					if ($Item == basename(__FILE__)) unset($Posts_Return[$Key]);
					else {

						$Post_Type = 'INVALID';

						// Require it
						require $Item;

						// IFPOST If it is a post (and hence has a time)
						if ($Post_Type == 'Blog Post') {

							// IFCHECKCATEGORY If no category or category matches
							if ($Post_Category && ($Post_Category === 'Video')) {

								unset($Posts_Return[$Key]);

							} // IFCHECKCATEGORY

						} else unset($Posts_Return[$Key]);
						// IFPOST

					} // IFCALLER

				} // FORITEM

				array_multisort(array_map('filemtime', $Posts_Return), SORT_NUMERIC, SORT_DESC, $Posts_Return);
				$Posts_Return = array_slice($Posts_Return, 0, 3, true);

				// FOREACH: For each Item
				foreach ($Posts_Return as $Item) {

					// Require it
					require $Item;

					echo '
			<div class="col span_1_of_3">
				<h3><a href="'.$Sitewide_Root.$Canonical.'">'.$Title_HTML.'</a></h3>
				<p>'.$Description_HTML.'</p>
			</div>';

				} // FOREACH

			?>
		</div>
		<h5 class="textright"><a href="all">All Tutorials &raquo;</a></h5>

	<!-- TODO Ditch Tomorrow -->
	</div>

	<div class="content spanpage latest">
		<div class="section group">
			<div class="col span_1_of_2">
				<div class="bubble equalize">
					<h2>Install Ubuntu</h2>
					<h3><a href="how-to-install-ubuntu-13-10-saucy-salamander">Install Ubuntu 13.10 Saucy Salamander</a></h3>
					<h3><a href="how-to-install-ubuntu-12-04-precise-pangolin">Install Ubuntu 12.04 Precise Pangolin</a></h3>
				</div>
			</div>
			<div class="col span_1_of_2">
				<div class="bubble equalize">
					<h2>Things to do after Installing</h2>
					<h3><a href="things-to-do-after-installing-ubuntu-13-10-saucy-salamander">After Installing Ubuntu 13.10</a></h3>
					<h3><a href="things-to-do-after-installing-ubuntu-12-04-precise-pangolin">After Installing Ubuntu 12.04</a></h3>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="content">
	<!-- END -->
	
		<div class="section group">
			<div class="col span_1_of_2">
				<h2>Kernels</h2>
				<?php
					$items = glob('how-to-install-linux-kernel-*.php', GLOB_NOSORT);
					array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
					$i = 0;
					foreach($items as $entry) {
						if($i==3) break;
						require $entry;
						echo '<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $Title_HTML . '</a></h3>';
						$i++;
					}
				?>
			</div>
			<div class="col span_1_of_2">
				<h2>Latest Video</h2>
				<?php
					$items = glob('video-*.php', GLOB_NOSORT);
					array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
					foreach($items as $entry) {
						require $entry;
						echo '<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $Title_HTML . '</a></h3>';
						echo $Description_HTML;
						break;
					}
				?>
			</div>
		</div>

	<?php
	require '../footer.php';
}
