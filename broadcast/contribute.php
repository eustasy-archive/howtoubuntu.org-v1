<?php

	$TextTitle = 'Contribute';
	$WebTitle = 'Contribute';
	$Canonical = 'contribute';
	$PostType = 'Page';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = 'contribute';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>Contribute</h2>

	<div class="section group">
		<div class="col span_1_of_2">
			<h3>Report Problems</h3>
			<p>If you experience an issue, with our site or one of our tutorials, you should <a href="https://github.com/eustasy/howtoubuntu.org/issues/new">report it as an issue</a> on our <a href="https://github.com/eustasy/howtoubuntu.org">GitHub repository</a>. Try to include your Browser and Operating System, as well as an exact copy of any error messages you received.</p>
		</div>

		<div class="col span_1_of_2">
			<h3>Fix Problems</h3>
			<p>If you have experience in working with Ubuntu, professionally or not, and especially if you have previously worked with a Virtual Environment Solution like VirtualBox, you may be able to help<!-- TODO eustasy Votes --> by <a href="https://github.com/eustasy/howtoubuntu.org/issues">fixing filed issues</a>. Alternatively, individuals with experience improving websites may be able to assist in <a href="https://github.com/eustasy/howtoubuntu.org">developing How to Ubuntu</a> further.</p>
		</div>
	</div>

	<h3>Write Tutorials</h3>
	<div class="section group">
		<div class="col span_1_of_2">
			<p>If you have a good command of English and an advanced skillset you wish to share, you could write a Tutorial for us. Tutorials are committed to our <a href="https://github.com/eustasy/howtoubuntu.org">GitHub repository</a> in the same way as bugfixes. If you are not familiar with Git you may not be ready to write Tutorials for us. You can work towards it by <a href="http://try.github.io/">learning Git</a>.</p>
		</div>
		<div class="col span_1_of_2">
			<p>If you do feel ready to begin writing, you should fork our repository (once for each contribution), and get started using our <a href="https://github.com/eustasy/howtoubuntu.org/wiki/Tutorial-Template">Tutorial Template</a> and <a href="https://github.com/eustasy/howtoubuntu.org/wiki/Tutorial-Checklist">Tutorial Checklist</a>. In the future, we will be adding a Wiki page in which we will list requested Tutorials.</p>
		</div>
	</div>

<?php require '../footer.php'; }
