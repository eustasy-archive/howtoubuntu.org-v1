<?php

	$Title_HTML = 'How to Cut, Copy, and Paste in the Terminal in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'If you\'re new to the Terminal, Pasting Commands probably seems like a godsend. Until it doesn\'t work. Here\'s how to do it properly.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'cut copy paste terminal command line';

	$Featured_Image = '';

	$Canonical = 'how-to-cut-copy-and-paste-in-the-terminal-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to Cut, Copy, and Paste in the Terminal</h2>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h3 id="do">Cutting, Copying and Pasting in Ubuntu Terminal</h3>
			<p>In most applications Cut, Copy and Paste are <span class="box">Ctrl</span> + <span class="box">X</span>, <span class="box">Ctrl</span> + <span class="box">C</span> and <span class="box">Ctrl</span>+<span class="box">V</span> respectively.</p>
			<p>In the Terminal, <span class="box">Ctrl</span>+<span class="box">C</span> is the cancel command. Use these in the terminal instead:</p>
			<p>To cut <span class="box">Ctrl</span> + <span class="box">Shift</span> + <span class="box">X</span>.</p>
			<p>To copy <span class="box">Ctrl</span> + <span class="box">Shift</span> + <span class="box">C</span>.</p>
			<p>To paste <span class="box">Ctrl</span> + <span class="box">Shift</span> + <span class="box">V</span>.</p>
			
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>


<?php require '../footer.php'; } ?>
