<?php

	$Title_HTML = 'How to tell if you\'re using 32bit or 64bit Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Sometimes you may be asked if you want to download  i386 or amd64. These stand for 32bit and 64bit respectively, and no longer have any relation to your CPU manufacturer (Intel or AMD). This is a simple guide to determining your architecture in a few simple clicks.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'tell find out 32bit 64bit 32 64 bit architecture amd amd64 i intel i386 i586 i686';

	$Featured_Image = '';

	$Canonical = 'how-to-tell-if-youre-using-32bit-or-64bit-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Supporting';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<h2>How to tell if you're using 32bit or 64bit Ubuntu</h2>

	<p>Sometimes you may be asked if you want to download  i386 or amd64. These stand for 32bit and 64bit respectively, and no longer have any relation to your CPU manufacturer (Intel or AMD). This is a simple guide to determining your architecture in a few simple clicks.</p>
	<div class="section group">
		<div class="col span_5_of_11">
			<p>First you need to open <span class="box">System Settings</span>. This can be done either in the dash, or by going to the gear icon (top right). From there you need to open <span class="box">System Info</span>.</p>
			<p>Under the Ubuntu Logo and Version Number, a line will list <span class="box">OS type &nbsp;&nbsp;&nbsp; 64-bit</span>.</p>
			<p>In this example, 64-bit is installed.</p>
			<p>32-bit is the only other architecture you are likely to encounter and still require this tutorial.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a class="fancybox" href="assets/images/how-to-tell-if-youre-using-32bit-or-64bit-ubuntu/Screenshot-from-2012-06-04-201133.png" title="This computer is running 64bit Ubuntu"><img class="round" src="assets/images/how-to-tell-if-youre-using-32bit-or-64bit-ubuntu/Screenshot-from-2012-06-04-201133.png" alt="This computer is running 64bit Ubuntu" title="This computer is running 64bit Ubuntu"></a>
		</div>
	</div>

<?php require '../footer.php'; } ?>
