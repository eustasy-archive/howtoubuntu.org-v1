<?php

	$TextTitle = 'Ubuntu Tutorials and How to\'s';
	$WebTitle = 'Ubuntu Tutorials and How to\'s';
	$Canonical = '';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = '';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

		<h2>Latest Tutorials</h2>
		<div class="section group">
			<?php
				$items = glob('*.php', GLOB_NOSORT);
				array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
				$i = 0;
				foreach($items as $entry) {
					if($i==3) break;
					if (!in_array($entry, $pages)) {
						require $entry;
						echo '
			<div class="col span_1_of_3">
				<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $TextTitle . '</a></h3>
				<p>'.$Description.'</p>
			</div>';
						$i++;
					}
				}
			?>
		</div>
		<h5 class="textright"><a href="all">All Tutorials &raquo;</a></h5>
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
						echo '<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $TextTitle . '</a></h3>';
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
						echo '<h3><a href="'.$Request['scheme'].'://'.$Request['host'].'/'.$Canonical.'">' . $TextTitle . '</a></h3>';
						echo $Video;
						break;
					}
				?>
			</div>
		</div>

<?php require '../footer.php'; } ?>
