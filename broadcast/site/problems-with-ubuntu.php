<?php

	$TextTitle = 'Problems with Ubuntu';
	$WebTitle = 'Problems with Ubuntu';
	$Canonical = 'site/problems-with-ubuntu';
	$FeaturedImage = '';
	$Description = 'There are some things that i thought would all be fixed by 12.04, and wonder now why they weren\'t.';
	$Keywords = '';

	require '../../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../../header.php'; ?>

	<h2>Problems with Ubuntu</h2>

	<p class="textcenter">There are some things that i thought would all be fixed by 12.04, and wonder now why they weren't.</p>
	<div class="section group">
		<div class="col span_1_of_3">
			<h3 id="lockscreen">The Lock Screen</h3>
			<p>Some people don't lock their computer.</p>
			<p>Fair enough. Some people, however, do.</p>
			<p>Frequently.</p>
			<p>I am one of those people.</p>
			<p>For some strange reason, when the login screen was redesigned with the cool scrolling thing and other aesthetic updates, someone forgot that there was another screen that appears when you lock your computer.</p>
		</div>
		<div class="col span_1_of_3">
			<h3 id="guestaccount">The Guest Account</h3>
			<p>There is a guest account.</p>
			<p>Okay, that's <a class="fancybox-media" href="http://www.youtube.com/embed/z6azSHCHwPc?autohide=1&showinfo=0" title="Tom Jones - It's Not Unusual">not unusual</a>.</p>
			<p>Having it enabled by default? A little curious maybe (especially where security is concerned).</p>
			<p>Not being able to disable it? Downright silly.</p>
			<p>Why, oh, why, is it not listed with all the other users (or just the one, if you're that kind of person).</p>
		</div>
		<div class="col span_1_of_3">
			<h3 id="computername">The Computers Name</h3>
			<p>Should this not be under the <span class="box">Details</span> section of the <span class="box">System Settings</span>?</p>
			<p>It is?</p><p>It's a text box?</p>
			<p>You can't change it?</p>
			<p>Wait, what?</p>
		</div>
	</div>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="ubuntuoneindicator">The Ubuntu One Indicator</h3>
			<p>This isn't part of the default build because..?</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="ubuntuoneinterface">The "New" Ubuntu One Interface</h3>
			<p>I'm sorry, you want all applications to conform to your styling, but you don't have to?</p>
		</div>
	</div>

<?php require '../../footer.php'; } ?>
