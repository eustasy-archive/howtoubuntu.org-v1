<?php

	$Title_HTML = 'How to decide if you should use 32bit or 64bit Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Ubuntu 12.04 and 12.10 were both set to be the first release to have 64bit set as the "recommended" architecture, except neither did. Now, Canonical recommend 64bit for both 13.10 and 12.04.3, unless you have 2GB of RAM or less. But what are the pros and cons of each?';
	$Description_Plain = $Description_HTML;

	$Keywords = '32bit 64bit 32 64 bit ubuntu decide choose recommend';

	$Featured_Image = '';

	$Canonical = 'how-to-decide-if-you-should-use-32bit-or-64bit-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Supporting';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to decide if you should use 32bit or 64bit Ubuntu</h2>

	<div class="section group">
		<div class="col span_2_of_5">
			<p>Ubuntu 12.04 and 12.10 were both set to be the first release to have 64bit set as the "recommended" architecture, except neither did. Now, Canonical recommend 64bit for both 13.10 and 12.04.3, unless you have 2GB of RAM or less. But what are the pros and cons of each?</p>
		</div>
		<div class="col span_3_of_5">
			<h3 id="what">What are 32bit and 64bit?</h3>
			<p>32bit and 64bit are types of architecture, 32 works in 4 sets of 8 (the 8 being a byte), and 64 in 8 sets of 8. More bits mean that data is processed in larger chunks, resulting in greater speed and accuracy.</p>
		</div>
	</div>
	<table id="comparison">
		<tr>
			<th><h3>32bit</h3></th>
			<th><h3>32bit with PAE</h3></th>
			<th><h3>64bit</h3></th>
		</tr>
		<tr>
			<td style="color: #DF382C;">Slowest.</td>
			<td style="color: #DF382C;">Slightly Slower.</td>
			<td style="color: #38B44A;">Fastest.</td>
		</tr>
		<tr>
			<td style="color: #38B44A;">Works on older and newer CPUs.</td>
			<td style="color: #38B44A;">Works on older and newer CPUs.</td>
			<td style="color: #DF382C;">Some older CPUs will not work.</td>
		</tr>
		<tr>
			<td style="color: #38B44A;">Software more widely available.</td>
			<td style="color: #38B44A;">Software more widely available.</td>
			<td style="color: #DF382C;">Some older Software encounters difficulties..</td>
		</tr>
		<tr>
			<td style="color: #38B44A;">Drivers more widely available.</td>
			<td style="color: #38B44A;">Drivers more widely available.</td>
			<td style="color: #DF382C;">Some older Drivers encounter difficulties.</td>
		</tr>
		<tr>
			<td style="color: #38B44A;">Faster with less RAM.</td>
			<td style="color: #38B44A;">Support smaller and larger amounts of RAM.</td>
			<td style="color: #DF382C;">Decreased performance on low-RAM machines.</td>
		</tr>
		<tr>
			<td style="color: #38B44A;">Fast with less RAM.</td>
			<td style="color: #38B44A;">Works with any amount of RAM</td>
			<td style="color: #DF382C;">Decreased performance on low-RAM machines.</td>
		</tr>
		<tr>
			<td style="color: #DF382C;">Does not utilise more than 3GB or RAM.</td>
			<td style="color: #38B44A;">Utilises almost any amount of RAM,</td>
			<td style="color: #DF382C;">Inefficient with less RAM.</td>
		</tr>
		<tr>
			<td style="color: #DF382C;">No longer available.</td>
			<td style="color: #38B44A;">Recommended Download.</td>
			<td style="color: #DF382C;">Alternative download.</td>
		</tr>
	</table>
	<div class="section group">
		<div class="col span_2_of_5">
			<h3 id="other">Other Operating Systems</h3>
			<p>Are we really sacrificing all that for speed? Put simply, yes.</p>
			<p>It's not as bad as it looks though, all computers made within the last few years have 64bit capable CPUs, and most maintained applications and drivers have 64bit versions available.</p>
			<p>Windows 7 ships 64bit as default, as does OS X. Previously, Ubuntu shipped 32bit as default, but both 12.04.3 and 13.10 ships with 64bit as default, and 32bit (with PAE) "for machines with less than 2GB of RAM". But is it right for you?</p>
		</div>
		<div class="col span_3_of_5">
			<h3 id="decision">Decision Time</h3>
			<h3 style="color:#19B6EE;">You can probably stick to the default download option of 64bit, unless you're quite low on RAM.</h3>
			<p class="center">You'll be less likely to run into any unusual issues.</p>
			<h3 style="color:#19B6EE;">If your came with Windows 8 (or UEFI firmware), you should always use 64bit.</h3>
			<p>Having read this, you might want to know how to find out how much ram you have in <a href="how-to-find-out-how-much-ram-is-installed-in-ubuntu" target="_blank">Ubuntu</a>, <a href="http://windows.microsoft.com/en-GB/windows7/Find-out-how-much-RAM-your-computer-has" target="_blank">Windows</a>, or <a href="http://support.apple.com/kb/HT2353?viewlocale=en_US" target="_blank">OS X</a>.</p>
		</div>
	</div>

<?php require '../footer.php'; } ?>
