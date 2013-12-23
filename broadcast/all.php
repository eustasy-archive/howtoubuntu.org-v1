<?php

	$TextTitle = 'All Tutorials &nbsp;&middot;&nbsp; Ubuntu Tutorials and How to\'s';
	$WebTitle = 'All Tutorials &nbsp;&middot;&nbsp; Ubuntu Tutorials and How to\'s';
	$Canonical = 'all';
	$PostType = 'Blog';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = '';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

		<h2>All Tutorials</h2>
		<div class="breaker"></div>
		<div class="section group">
			<?php
				$items = glob('*.php', GLOB_NOSORT);
				array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
				$i = 0;
				foreach($items as $entry) {
					if(!in_array($entry, $pages) && substr($entry, 0, 6)!='video-') {
						require $entry;
						if($PostType=='Post') {
							echo '
			<div class="col span_1_of_3">
				<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $TextTitle . '</a></h3>
				<p>' . $Description . '</p>
			</div>';
							$i++;
							if($i%3==0) echo '
		</div>
		<div class="breaker"></div>
		<div class="section group">';
						}
					} else if(!in_array($entry, $pages) && substr($entry, 0, 6)=='video-') {
						require $entry;
						if($PostType=='Post') {
							echo '
			<div class="col span_1_of_3">
				<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $TextTitle . '</a></h3>
				'.$Video.'
			</div>';
							$i++;
							if($i%3==0) echo '
		</div>
		<div class="breaker"></div>
		<div class="section group">';
						}
					}
				}
			?>
		</div>
	</div>

<?php require '../footer.php'; }
