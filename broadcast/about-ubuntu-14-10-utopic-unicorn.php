<?php

	$Title_HTML = 'About Ubuntu 14.10 Utopic Unicorn';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Ubuntu 14.10 was released on the 23rd of October 2014, which just so happened to be a Thursday. From there on in, Ubuntu 14.10 Utopic Unicorn provided millions of users all over the world with a free, stable, secure operating system.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'about ubuntu 14.10 14 10 utopic unicorn';

	$Featured_Image = '';

	$Canonical = 'about-ubuntu-14-10-utopic-unicorn';

	$Post_Type = 'Blog Post';
	$Post_Category = 'About Ubuntu';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>About Ubuntu 14.10 Utopic Unicorn</h2>
			<h3 class="textcenter"><a class="download" href="http://www.ubuntu.com/download/desktop">Download Ubuntu</a></h3>
			<p class="nomargin after-download textcenter"><a title="Install Ubuntu 14.10 Utopic Unicorn" href="http://howtoubuntu.org/how-to-install-ubuntu-14-10-utopic-unicorn">Install Ubuntu 14.10</a> &nbsp;&middot;&nbsp; <a title="After Installing Ubuntu 14.10 Utopic Unicorn" href="http://howtoubuntu.org/things-to-do-after-installing-ubuntu-14-10-utopic-unicorn">After Installing Ubuntu 14.10</a></p>
			<p>Ubuntu 14.10 <a title="Ubuntu 14.10 Utopic Unicorn Release Schedule" href="https://wiki.ubuntu.com/UtopicUnicorn/ReleaseSchedule">was released</a> on the 23rd of October 2014, which just so happened to be a Thursday. From there on in, Ubuntu 14.10 Utopic Unicorn provided millions of users all over the world with a free, stable, secure operating system.</p>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>
	<h3 id="naming">Naming Ubuntu Releases</h3>
	<div class="section group">
		<div class="col span_1_of_4">
			<h4 id="numbers">Numbers</h4>
			<p>So the numbers part is easy, 14.10 was released on the 10th month of the 2014. Ubuntu 14.04 was released on the 4th month (April) of 2014. Releases are every six months so they will continue on as 15.04, 15.10, 16.04, and so on.</p>
			<h4 id="adjectives">Adjectives</h4>
			<p>The first letter of the adjectives always match that of the animals. Like the animals, these are usually lesser known, obscure, or infamous in dome way.</p>
		</div>
		<div class="col span_1_of_4">
			<h4>Past Releases</h4>
			<ul>
				<li>Ubuntu 4.10 (Warty Warthog)</li>
				<li>Ubuntu 5.04 (Hoary Hedgehog)</li>
				<li>Ubuntu 5.10 (Breezy Badger)</li>
				<li>Ubuntu 6.06 LTS (Dapper Drake)</li>
				<li>Ubuntu 6.10 (Edgy Eft)</li>
				<li>Ubuntu 7.04 (Feisty Fawn)</li>
				<li>Ubuntu 7.10 (Gutsy Gibbon)</li>
				<li>Ubuntu 8.04 LTS (Hardy Heron)</li>
				<li>Ubuntu 8.10 (Intrepid Ibex)</li>
				<li>Ubuntu 9.04 (Jaunty Jackalope)</li>
				<li>Ubuntu 9.10 (Karmic Koala)</li>
				<li>Ubuntu 10.04 LTS (Lucid Lynx)</li>
				<li>Ubuntu 10.10 (Maverick Meerkat)</li>
				<li>Ubuntu 11.04 (Natty Narwhal)</li>
				<li>Ubuntu 12.04 (Precise Pangolin)</li>
				<li>Ubuntu 12.10 (Quantal Quetzal)</li>
				<li>Ubuntu 13.04 (Raring Ringtail)</li>
				<li>Ubuntu 13.10 (Saucy Salamander)</li>
				<li>Ubuntu 14.04 (Trusty Tahr)</li>
				<li>Ubuntu 14.10 (Utopic Unicorn)</li>
			</ul>
		</div>
		<div class="col span_1_of_2">
			<h4 id="animals">Animals</h4>
			<p>Ubuntu release have always had the code-naming convention of an animal name as the second part, preceded by an adjective beginning with the same letter. Apart from the first two releases (back in 2004/5), they have been working through the alphabet (starting at B and missing C). While the animals honored in this way are not necessarily unheard of, many of them are either uncommon or infamous in some way. I would be surprised if most people could tell me what an Eft or an Ibex was. Or a Narwhal, or an Ocelot.</p>
			<p>Utopic does break this trend somewhat by being the first release to use a mythical creature as it's title feature, as well as being something more people will recognise.</p>
		</div>
	</div>

	<?php
	require '../footer.php';
}
