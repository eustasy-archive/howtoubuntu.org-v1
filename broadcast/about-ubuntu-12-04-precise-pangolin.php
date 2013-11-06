<?php

	$TextTitle = 'About Ubuntu 12.04 Precise Pangolin';
	$WebTitle = 'About Ubuntu 12.04 Precise Pangolin';
	$Canonical = 'about-ubuntu-12-04-precise-pangolin';
	$FeaturedImage = '';
	$Description = 'Ubuntu 12.04 was released on the 26th of April 2012, which just so happened to be a Thursday. From there on in, Ubuntu 12.04 Precise Pangolin provided millions of users all over the world with a free, stable, secure operating system.';
	$Keywords = 'about ubuntu 12.04 precise pangolin';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>About Ubuntu 12.04 Precise Pangolin</h2>
			<h3 class="textcenter"><a class="download" href="http://www.ubuntu.com/download/desktop">Download Ubuntu</a></h3>
			<p class="nomargin after-download textcenter"><a title="Install Ubuntu 12.04 Precise Pangolin" href="http://howtoubuntu.org/how-to-install-ubuntu-12-04-precise-pangolin">Install Ubuntu 12.04</a> &nbsp;&middot;&nbsp; <a title="After Installing Ubuntu 12.04 Precise Pangolin" href="http://howtoubuntu.org/things-to-do-after-installing-ubuntu-12-04-precise-pangolin">After Installing Ubuntu 12.04</a></p>
			<p>Ubuntu 12.04 <a title="Ubuntu 12.04 Precise Pangolin Release Schedule" href="https://wiki.ubuntu.com/PrecisePangolin/ReleaseSchedule#line-44">was released</a> on the 26th of April 2012, which just so happened to be a Thursday. From there on in, Ubuntu 12.04 Precise Pangolin provided millions of users all over the world with a free, stable, secure operating system.</p>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="release-date">Release Date</h3>
			<p>Ubuntu 12.04 Precise Pangolin was released on 26th April 2012, and future releases will reoccur every 6 months (you can upgrade as easily as updating, it just takes a little longer) in April and October.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="lts">Long Term Support</h3>
			<p>5 Years of support for this release, makes it good for people who don't want to constantly change, or even have to pay for upgrades (shudder), that means fuddy-duddies, businesses, snails, and someone else who i've forgotten</p>
		</div>
	</div>
	<h3 id="naming">Naming Ubuntu Releases</h3>
	<div class="section group">
		<div class="col span_1_of_4">
			<h4 id="numbers">Numbers</h4>
			<p>So the numbers part is easy, 12.04 was released on the 4th month of the 2012. Ubuntu 11.10 was released on the 10th month (October) of 2011. Releases are every six months so the will go 12.04, 12.10, 13.04, 13.10, 14.04, and so on.</p>
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
				<li>Ubuntu 11.10 (Oneiric Ocelot)</li>
			</ul>
		</div>
		<div class="col span_1_of_2">
			<h4 id="animals">Animals</h4>
			<p>A Pangolin is a nocturnal scaly anteater, or Trenggiling, and is a mammal of the order Pholidota. One of eight species, but with no other families (Manidae) or genera (Manis), Pangolins have large keratin scales covering their skin and are the only mammals with this adaptation. They are found in tropical regions of Africa and Asia. The name "pangolin" derives from the Malay word pengguling ("something that rolls up"). Ubuntu release have always had the code-naming convention of an animal name as the second part, preceded by an adjective beginning with the same letter. Apart from the first two releases (back in 2004/5), they have been working through the alphabet (starting at B and missing C).</p>
			<p>While the animals honored in this way are not necessarily unheard of, many of them are either uncommon or infamous in some way. I would be surprised if most people could tell me what an Eft or an Ibex was. Or a Narwhal, or an Ocelot. For the curious amongst you, i will save you some googling. An <a href="https://www.google.com/search&quest;tbm=isch&amp;amp&semi;q=eft&plus;animal&amp;amp&semi;qscrl=1">Eft</a> is a kind of Red Newt, whereas and <a href="https://www.google.com/search&quest;tbm=isch&amp;amp&semi;q=ibex&amp;amp&semi;qscrl=1">Ibex</a> is a mountain goat. A <a href="https://www.google.com/search&quest;tbm=isch&amp;amp&semi;q=narwhal&amp;amp&semi;qscrl=1">Narwhal</a> is a kind of Unicorned Whale (no, really, they live in the arctic). A <a href="https://www.google.com/search&quest;tbm=isch&amp;amp&semi;q=ocelot&amp;amp&semi;qscrl=1">Ocelot</a>is a wild cat, like a small leopard. Some people keep them as pets.</p>
		</div>
	</div>

<?php require '../footer.php'; } ?>
