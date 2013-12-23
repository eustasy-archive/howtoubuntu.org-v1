<?php

	$TextTitle = 'Site Blog';
	$WebTitle = 'Site Blog';
	$Canonical = 'site/';
	$PostType = 'Blog';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = '';

	require '../../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../../header.php'; ?>

		<h2>Site Blog</h2>
		<div class="section group">
			<?php
				$loop = 0;
				$items = glob('*.php', GLOB_NOSORT);
				array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
				foreach($items as $entry) {
					if($entry!='index.php') {
						require $entry;
						if($PostType=='Post'){
							echo '
			<div class="col span_1_of_3">
				<h2><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $TextTitle . '</a></h2>
				<p>' . $Description . '</p>
			</div>';
							$loop = $loop + 1;
							if (is_int($loop/3)) {
								echo '
		</div>
		<div class="breaker"></div>
		<div class="section group">';
							}
						}
					}
				}
		?>
		</div>
	</div>

<?php require '../../footer.php'; } ?>
