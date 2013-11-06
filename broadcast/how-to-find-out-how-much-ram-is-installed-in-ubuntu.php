<?php

	$TextTitle = 'How to find out how much RAM is installed in Ubuntu';
	$WebTitle = 'How to find out how much RAM is installed in Ubuntu';
	$Canonical = 'how-to-find-out-how-much-ram-is-installed-in-ubuntu';
	$FeaturedImage = '';
	$Description = 'You may find yourself struggling to remember how much RAM you have at your disposal, or just wondering how much is being recognized by Ubuntu. This tutorial details ways to find out.';
	$Keywords = 'find out much ram installed recognized';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>How to find out how much RAM is installed</h2>
			<p>You may find yourself struggling to remember how much RAM you have at your disposal, or just wondering how much is being recognized by Ubuntu. This tutorial details ways to find out.</p>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>
	<div class="section group">
		<div class="col span_1_of_2">
			<p>Open <span class="box">System Info</span>.</p>
			<p>This can be done either in the dash, or by going to the gear icon (top right), opening <span class="box">System Settings</span>, and opening <span class="box">System Info</span>.</p>
			<p>Under the Ubuntu Logo and Version Number, it will state <span class="box">Memory &nbsp;&nbsp;&nbsp; 5.5GiB</span>.</p>
			<p>In this instance, 6GB is installed, but 5.5 is recognized because they are two 3GB modules (sticks). In some cases, there may be overlap such as this.</p>
		</div>
		<div class="col span_1_of_2">
			<a class="fancybox" title="This computer has 5.5GB of RAM installed in Ubuntu" href="assets/images/how-to-find-out-how-much-ram-is-installed-in-ubuntu/Screenshot-from-2012-06-04-201133.png"><img class="round" src="assets/images/how-to-find-out-how-much-ram-is-installed-in-ubuntu/Screenshot-from-2012-06-04-201133.png" alt="This computer has 5.5GB of RAM installed in Ubuntu" title="This computer has 5.5GB of RAM installed in Ubuntu"></a>
		</div>
	</div>

<?php require '../footer.php'; } ?>
