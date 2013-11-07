<?php

	$TextTitle = '';
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
					if ($entry != 'about.php' && $entry != 'contact.php' && $entry != 'contribute.php' && $entry != 'countdown.php' &&  $entry != 'index.php') {
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
	</div>

	<div class="content spanpage latest">
		<div class="section group">
			<div class="col span_1_of_2">
				<div class="bubble equalize">
					<h2>About Ubuntu</h2>
					<?php
						$items = glob('about-ubuntu-*.php');
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
			</div>
			<div class="col span_1_of_2">
				<div class="bubble equalize">
					<h2>Install Ubuntu</h2>
					<?php
						$items = glob('how-to-install-ubuntu-*.php');
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
