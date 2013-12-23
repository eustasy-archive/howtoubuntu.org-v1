<?php

	$TextTitle = 'Tracking AdBlocking';
	$WebTitle = 'Tracking AdBlocking';
	$Canonical = 'site/tracking-adblocking';
	$PostType = 'Post';
	$FeaturedImage = '';
	$Description = 'We\'ve recently instigated a new tracking procedure to investigate how many of our users block the ads we display. As these are our only source of revenue, and this site accounts for the majority of visits, and, therefore, resources, they are vital not only to the continued availability of this site, but the entire eustasy network.';
	$Keywords = '';

	require '../../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../../header.php'; ?>

	<h2>Tracking AdBlocking</h2>

	<p>We've recently instigated a new tracking procedure to investigate how many of our users block the <del>two</del> three ads we display on every page. As these are our only source of revenue, and this site accounts for the majority of visits, and, therefore, resources, they are vital not only to the continued availability of this site, but the entire eustasy network.</p>
	<div class="section group">
		<div class="col span_2_of_3">
			<h3>Wait, you're tracking me?</h3>
			<p>Like many popular sites, we use industry standard Google Analytics to track our users. The main focus of this is finding out how you got here, for instance what you searched for on Google, or what website you clicked a link on before visiting. Our system for figuring out whether or not you are blocking ads (but not all JavaScript) works by loading an Ad.js on every page, which will be blocked by most ad-blocker extensions (despite not actually containing ads). This little white lie lets us compare how many times that was loaded, to how many times a page was loaded, and, hence, how many did and didn't block ads.</p>
		</div>
		<div class="col span_1_of_3">
			<h3>Numbers</h3>
			<p>Based on Tracking in AdSense and Google Analytics for the last month, 24.5% of our users visited our site but didn't get served ads. As there are no error reports of ads not being available, most of these are probably people blocking ads. It's also a little higher than the average of about 7%, but that's probably our users above average technical experience shining through.</p>
		</div>
	</div>
	<h2>AdBlockers</h2>
	<div class="section group">
		<div class="col span_1_of_3">
			<p>In fact, <a href="https://chrome.google.com/webstore/detail/gighmmpiobklfepjocnamgkkbiglidom">Adblock</a> and <a href="https://chrome.google.com/webstore/detail/cfhdojbkjhnklbpkdaibdccddilifddb">Adblock Plus (Beta)</a> are two of the most popular extensions for Google Chrome.</p>
		</div>
		<div class="col span_1_of_3">
			<p>Similar results apply to Firefox, for <a href="https://addons.mozilla.org/en-US/firefox/addon/adblock-plus/">Adblock</a>, <a href="https://addons.mozilla.org/en-US/firefox/addon/noscript/">NoScript</a>, <a href="https://addons.mozilla.org/en-US/firefox/addon/flashblock/">Flash Block</a>, and even an <a href="https://addons.mozilla.org/en-US/firefox/addon/elemhidehelper/">Element Hider Helper</a>.</p>
		</div>
		<div class="col span_1_of_3">
			<p>Opera lists <a href="https://addons.opera.com/en/extensions/details/noads/">NoAds</a>, <a href="https://addons.opera.com/en/extensions/details/noads-advanced/">NoAds Advanced</a>, <a href="https://addons.opera.com/en/extensions/details/opera-adblock/">Opera Adblock</a>, and <a href="https://addons.opera.com/en/extensions/details/bugmenot-2/">BugMeNot</a> as some of the most popular and highest rated tools.</p>
		</div>
	</div>
	<h3>But why&#8253;</h3>
	<p>All of these have one thing in common, they eliminate what keeps this site running. This site costs money, and while i and occasionally others are happy to donate our time, i am not in possession of trees that bear the fruit of gold, any other item of value, nor currency. The great thing about AdSense (Google's Ad Programme), is that it is so scalable. If our visitors double tomorrow, our costs go up accordingly. Rather than having to hunt for more money, Google will just serve the same two ads per page to every person, and our earnings keep (roughly) in line with costs.</p>
	<p>There is also a <a class="about-ads" href="http://eustasy.org/advertisements/">Why are there ads?</a> link under every advert we show, both clearly marking them and explaining more about what they're paying for.</p>

<?php require '../../footer.php'; } ?>
