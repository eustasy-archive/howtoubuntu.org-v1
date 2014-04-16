<?php

	$Title_HTML = 'About Ubuntu 14.04 Trusty Tahr';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Ubuntu 14.04 was released on the 17th of April 2014, which just so happened to be a Thursday. From there on in, Ubuntu 14.04 Trusty Tahr provided millions of users all over the world with a free, stable, secure operating system.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'about ubuntu 14.04 14 04 trusty tahr';

	$Featured_Image = '';

	$Canonical = 'about-ubuntu-14-04-trusty-tahr';

	$Post_Type = 'Pending';
	$Post_Category = 'About Ubuntu';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>About Ubuntu 14.04 Trusty Tahr</h2>
			<h3 class="textcenter"><a class="download" href="http://www.ubuntu.com/download/desktop">Download Ubuntu</a></h3>
			<p class="nomargin after-download textcenter"><a title="Install Ubuntu 14.04 Trusty Tahr" href="http://howtoubuntu.org/how-to-install-ubuntu-14-04-trusty-tahr">Install Ubuntu 14.04</a> &nbsp;&middot;&nbsp; <a title="After Installing Ubuntu 14.04 Trusty Tahr" href="http://howtoubuntu.org/things-to-do-after-installing-ubuntu-14-04-trusty-tahr">After Installing Ubuntu 14.04</a></p>
			<p>Ubuntu 14.04 <a title="Ubuntu 14.04 Trusty Tahr Release Schedule" href="https://wiki.ubuntu.com/TrustyTahr/ReleaseSchedule">was released</a> on the 26th of April 2014, which just so happened to be a Thursday. From there on in, Ubuntu 14.04 Trusty Tahr provided millions of users all over the world with a free, stable, secure operating system.</p>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="release-date">Release Date</h3>
			<p>Ubuntu 14.04 Trusty Tahr was released on 17th April 2014, and future releases will reoccur every 6 months (you can upgrade as easily as updating, it just takes a little longer) in April and October.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="lts">Long Term Support</h3>
			<p>5 Years of support for this release, makes it good for people who don't want to constantly change, or even have to pay for upgrades (shudder). That makes it good for business or servers that you don't want to be doing major upgrades on too often.</p>
		</div>
	</div>
	<h3 id="naming">Naming Ubuntu Releases</h3>
	<div class="section group">
		<div class="col span_1_of_4">
			<h4 id="numbers">Numbers</h4>
			<p>So the numbers part is easy, 14.04 was released on the 4th month of the 2014. Ubuntu 13.10 was released on the 10th month (October) of 2013. Releases are every six months so the will go 14.04, 14.10, 15.04, 15.10, 16.04, and so on.</p>
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
			</ul>
		</div>
		<div class="col span_1_of_2">
			<h4 id="animals">Animals</h4>
			<blockquote>
				<p>Tahrs are three species of large Asian ungulates related to the wild goat. Until recently the three species were believed to be closely related and were placed in a single genus, Hemitragus.</p>
			</blockquote>
			<cite><a href="http://en.wikipedia.org/wiki/Tahr">Wikipedia</a>	</cite>
			<p>Ubuntu release have always had the code-naming convention of an animal name as the second part, preceded by an adjective beginning with the same letter. Apart from the first two releases (back in 2004/5), they have been working through the alphabet (starting at B and missing C). While the animals honored in this way are not necessarily unheard of, many of them are either uncommon or infamous in some way. I would be surprised if most people could tell me what an Eft or an Ibex was. Or a Narwhal, or an Ocelot.</p>
		</div>
	</div>

	<?php
	require '../footer.php';
}
