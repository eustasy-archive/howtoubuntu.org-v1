<?php

	$Title_HTML = 'How to Resize Partitions with the Ubuntu or GParted Live CD';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Having installed Ubuntu, you may find yourself wanting to shrink or get rid of your Windows partition completely. This tutorial will show you how do do either of those things, with a variety or filesystems, including NTFS, and EXT4. The instructions do not vary based on filesystem format.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'resize partitions live cd dvd usb gparted';

	$Featured_Image = '';

	$Canonical = 'how-to-resize-partitions-with-the-ubuntu-or-gparted-live-cd';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Boot';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<h2>How to Resize Partitions with the Ubuntu or GParted Live CD</h2>

	<p>Having installed Ubuntu, you may find yourself wanting to shrink or get rid of your Windows partition completely. This tutorial will show you how do do either of those things, with a variety or filesystems, including NTFS, and EXT4. The instructions do <strong>not</strong> vary based on filesystem format.</p>
	<div class="section group">
		<div class="col span_5_of_11">
			<ol>
				<li>Disable System Protection and Pagefile on Windows (if you are running out of space there too, both can use a lot of space but protect and speed up Windows).</li>
				<li>Make a Backup of as much as possible if you have the space on an external drive, usb or cd/dvd.</li>
				<li>Boot either a <a href="http://www.ubuntu.com/download" target="_blank">Ubuntu</a> or <a href="http://gparted.sourceforge.net/livecd.php" target="_blank">GParted Live CD</a>.</li>
				<li>Open GParted.</li>
				<li>Right-click on the main Windows Partition.</li>
				<li>Select Resize.</li>
				<li>Shrink or Delete the main Windows Partition (make sure you leave at least a couple of GB for Windows to play with, unless you're deleting it completely).</li>
				<li>Click Apply (tick at the right of the icons along the top, this might take a while, and you can't undo or stop it half-way through).</li>
				<li>Right-click on your Ubuntu Partition.</li>
				<li>Expand into all the free space.</li>
				<li>Click Apply again.</li>
			</ol>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-resize-partitions-with-the-ubuntu-or-gparted-live-cd/Screenshot-from-2012-06-04-195206.png" title="GParted is a nice way to Manage Partitions"><img src="assets/images/how-to-resize-partitions-with-the-ubuntu-or-gparted-live-cd/Screenshot-from-2012-06-04-195206.png" alt="GParted is a nice way to Manage Partitions" title="GParted is a nice way to Manage Partitions"></a>
		</div>
	</div>
	<p>This could take a fair while to shift things about, so make sure you're plugged in and don't shut a laptops lid (the Ubuntu Live CD will go to sleep). You may want to disable screen locking and sleeping after a certain time on the Ubuntu Live CD under Power Options.</p>
	<p>Windows should run a disk check when next started, this is normal behavior, it should finish and reboot.</p>
	<p>Boot Windows before accessing the Windows Partition from Ubuntu.</p>
	<h3>Congratulations, you've successfully resized your partitions!</h3>

<?php require '../footer.php'; } ?>
