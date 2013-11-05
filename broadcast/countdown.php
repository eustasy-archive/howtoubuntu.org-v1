<?php

	$TextTitle = 'Countdown';
	$WebTitle = 'Countdown';
	$Canonical = 'countdown';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = 'countdown';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>Countdown</h2>

	<iframe style="float: left; width: 270px; height: 42px; border: none;" src="http://howtoubuntu.org/count.html"></iframe>
	<p>If you want to embed our countdown on your website, blog or space station, then just copy and paste this code into your theme / sidebar / supercomputer.</p>
	<input class="code" type="text" value='&lt;iframe style="float: left; width: 270px; height: 42px; border: none;" src="http://howtoubuntu.org/count.html"&gt;&lt;/iframe&gt;'>
	<p>The <span class="box">float</span> and <span class="box">margin</span> CSS can be changed (pretty simple, but we recommend not fussing with the size (it doesn't grow into any space, and smaller results in scrollbars). However, there is a slimmer but taller version, which looks like this, and you can embed this with the code below.</p>
	<iframe style="float: right; width: 175px; height: 62px; border: none;" src="http://howtoubuntu.org/count.html"></iframe>
	<input class="code" type="text" value='&lt;iframe style="float: left; width: 175px; height: 62px; border: none;" src="http://howtoubuntu.org/count.html"&gt;&lt;/iframe&gt;'>
	<p>The countdown code here will always work, publicizing the current release until 90 days before the next one (which should mean about 3 months saying "It's here!", and then three counting down until the next one).</p>

<?php require '../footer.php'; } ?>
