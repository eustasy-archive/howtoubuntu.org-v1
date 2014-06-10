<?php

	$Title_HTML = 'How to Repair, Restore, or Reinstall Grub 2 with a Ubuntu Live CD or USB';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Grub 2 typically gets overridden when you install Windows or another Operating System. To make Ubuntu control the boot process, you need Reinstall (Repair/Restore) Grub using a Ubuntu Live CD.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'repair restore reinstall install grub 2 burn boot live cd dvd usb';

	$Featured_Image = '';

	$Canonical = 'how-to-repair-restore-reinstall-grub-2-with-a-ubuntu-live-cd';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Boot';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to Repair, Restore, or Reinstall Grub 2 with a Ubuntu Live CD or USB</h2>
			<p>Grub 2 typically gets overridden when you install Windows or another Operating System. To make Ubuntu control the boot process, you need Reinstall (Repair/Restore) Grub using a Ubuntu Live CD.</p>
			<br>
			<div class="warning">
				<h3 id="warning">Warning</h3>
				<p>Using the <span class="box">sudo</span> command, <em>especially</em> from a Live CD can do serious damage to your system. Read all instructions and confirm you understand before executing any commands. When pasting into the Terminal, use <span class="box">Ctrl</span>+<span class="box">Shift</span>+<span class="box">V</span>, NOT <span class="box">Ctrl</span>+<span class="box">V</span>.</p>
			</div>
			<br>
			<h3 id="terminal">Terminal Commands</h3>
			<p>Mount the partition your Ubuntu Installation is on. If you are not sure which it is, launch <span class="box">GParted</span> (included in the Live CD) and find out. It is usually a EXT4 Partition. Replace the XY with the drive letter, and partition number, for example: <span class="box">sudo mount <span class="editable">/dev/sda1</span> /mnt</span>.</p>
			<code>sudo mount <span class="editable">/dev/sdXY</span> /mnt</code>
			<p>Now bind the directories that grub needs access to to detect other operating systems, like so.</p>
			<textarea class="code resize">sudo mount --bind /dev /mnt/dev &&
sudo mount --bind /dev/pts /mnt/dev/pts &&
sudo mount --bind /proc /mnt/proc &&
sudo mount --bind /sys /mnt/sys</textarea>
			<p>Now we jump into that using <span class="box">chroot</span>.</p>
			<input class="code" value="sudo chroot /mnt" />
			<p>Now install, check, and update grub.</p>
			<p>This time you only need to add the drive letter (usually a) to replace X, for example: <span class="box">grub-install <span class="editable">/dev/sda</span></span>, <span class="box">grub-install –recheck <span class="editable">/dev/sda</span></span>.</p>
			<code>grub-install <span class="editable">/dev/sdX</span></code>
			<code>grub-install --recheck <span class="editable">/dev/sdX</span></code>
			<input class="code" value="update-grub" />
			<p>Now grub is back, all that is left is to exit the chrooted system and unmount everything.</p>
			<textarea class="code resize">exit &&
sudo umount /mnt/sys &&
sudo umount /mnt/proc &&
sudo umount /mnt/dev/pts &&
sudo umount /mnt/dev &&
sudo umount /mnt</textarea>
			<p>Shut down and turn your computer back on, and you will be met with the default Grub2 screen.</p>
			<p>You may want to update grub or re-install burg however you like it.</p>
			<h3>Congratulations, you have just Repaired/Restored/Reinstalled Grub 2 with a Ubuntu Live CD!</h3>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>

<?php require '../footer.php'; } ?>
