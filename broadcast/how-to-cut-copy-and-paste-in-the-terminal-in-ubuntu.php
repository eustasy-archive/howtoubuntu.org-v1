<?php

	$TextTitle = 'How to Cut, Copy, and Paste in the Terminal in Ubuntu';
	$WebTitle = 'How to Cut, Copy, and Paste in the Terminal in Ubuntu';
	$Canonical = 'how-to-cut-copy-and-paste-in-the-terminal-in-ubuntu';
	$FeaturedImage = '';
	$Description = 'If you\'re new to the Terminal, Pasting Commands probably seems like a godsend. Until it doesn\'t work. Here\'s how to do it properly.';
	$Keywords = 'cut copy paste terminal command line';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Cut, Copy, and Paste in the Terminal</h2>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<p>If you're new to the Terminal, Pasting Commands probably seems like a godsend. Until it doesn't work. Here's how to do it properly.</p>
			<h3 id="do">Cutting, Copying and Pasting</h3>
			<p>This is actually very simple to do.</p>
			<p>In most applications Cut, Copy and Paste are <span class="box">Ctrl</span> + <span class="box">X</span>, <span class="box">Ctrl</span> + <span class="box">C</span> and <span class="box">Ctrl</span>+<span class="box">V</span> respectively.</p>
			<p>In the Terminal, <span class="box">Ctrl</span>+<span class="box">C</span> is Cancel Command. The others do things to, but that's not important.</p><p>To paste (probably the one you'll use the most), use <span class="box">Ctrl</span> + <span class="box">Shift</span> + <span class="box">V</span>.</p>
			<p>Use <span class="box">X</span> or <span class="box">C</span> appropriately for cutting and copying.</p>
			<h3>Congratulations, you have just learnt how to Cut, Copy, and Paste in the Terminal in Ubuntu!</h3>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>


<?php require '../footer.php'; } ?>
