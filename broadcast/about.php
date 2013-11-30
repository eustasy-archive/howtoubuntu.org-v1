<?php

	$TextTitle = 'About';
	$WebTitle = 'About';
	$Canonical = 'about';
	$FeaturedImage = '';
	$Description = 'How to Ubuntu aim to provide reliable, precise, tested tutorials on anything and everything Ubuntu.';
	$Keywords = 'about';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>About</h2>
	<p>How to Ubuntu aim to provide reliable, precise, tested tutorials on anything and everything Ubuntu.</p>

	<!-- http://www.seethestats.com/site/howtoubuntu.org -->

	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="testing">The Testing of our Tutorials</h2>
			<p>All our Tutorials are tested with all Versions listed on that Individual How To, across WBUI, Dual-Boot, Virtualbox and Clean Installs of Ubuntu. Individual packages may cause some interference to some Tutorials, but unfortunately we cannot test them all.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="easy">Ease of Use</h3>
			<p>We aim to make this site, and it's tutorials, easy for everyone to use, navigate, and execute regardless of placement, language, eyesight, hearing, manual dexterity, or experience.</p>
		</div>
	</div>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="relevancy">Relevancy</h3>
			<p>To keep this site relevant in a rapidly evolving landscape, all tutorials will be checked and marked for more recent versions as they are released.Replacements will be created and linked as necessary.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="specifics">Specific Problems with Ubuntu</h3>
			<p>Please use <a href="http://askubuntu.com/" target="_blank">AskUbuntu.com</a> to ask questions about your Ubuntu.</p>
		</div>
	</div>

<?php require '../footer.php'; } ?>
