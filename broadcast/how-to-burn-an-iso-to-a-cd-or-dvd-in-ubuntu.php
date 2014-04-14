<?php

	$Title_HTML = 'How to Burn an ISO to a CD or DVD in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'An .iso file is an image of a CD, DVD, or BluRay disc. It is a way of storing files in a computer as if they were on a disc. Unfortunately, individual files are not accessible easily, but can be extracted like a zip archive.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'burn iso disc cd dvd r rm plus minus brasero';

	$Featured_Image = '';

	$Canonical = 'how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to Burn an ISO to a CD or DVD</h2>

	<p>An .iso file is an image of a CD, DVD, or BluRay disc. It is a way of storing files in a computer as if they were on a disc. Unfortunately, individual files are not accessible easily, but can be extracted like a zip archive.</p>
	<h3 id="choosing">Choosing a Disc</h3>
	<p>Choosing the right disc to write an .iso to isn't all that difficult. First, select your .iso and on the bottom left read how big it is. Now, you simply need to use a disc big enough to fit it on to. CDs are typically 700MB to 1.4GB, DVDs 4.7GB to 9.4GB, and BluRay Discs 25GB to 50GB (all three come in single or dual layer). Your computer also needs a disc drive (optical drive) capable of writing to your chosen disc. DVD Writer drives are fairly commonplace, as are Writable DVDs.</p>
	<div class="section group">
		<div class="col span_1_of_2">
			<h4 id="r-or-rw">R or RW</h4>
			<p>R stands for Recordable, and RW for ReWriteable.</p>
			<p>R discs can only be written to once. Once the data is there, it stays there, sort of. It's actually possible to erase them afterwards, but then that's it, you have a permanently blank disc. RW discs can be written to thousands of time. Generally the disc will become to scratched from human handling before it wears out.</p><p>As R and RW discs cost roughly the same amount, i would recommend RW.</p>
		</div>
		<div class="col span_1_of_2">
			<h4 id="plus-or-minus">+ or -</h4>
			<p>The - (minus) was originally just a hyphen. but was changed (sort of) to be a minus (see what i mean) when the + (plus) discs were introduced.</p>
			<p>Plus discs usually cost slightly more, as they support direct writing from a computer, whereas Minus discs require the files to be packaged into an .iso before writing. Seeing as we're burning an .iso, it actually doesn't matter, but Plus discs will be more flexible if your using them later.</p>
		</div>
	</div>
	<h3 id="brasero">Using Brasero</h3>
	<div class="section group">
		<div class="col span_1_of_2">
			<a class="fancybox" title="Burning and ISO to a DVD in Brasero on Ubuntu" href="assets/images/how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu/burn-an-iso-in-brasero.png"><img class="round" src="assets/images/how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu/burn-an-iso-in-brasero.png" alt="Burning and ISO to a DVD in Brasero on Ubuntu" title="Burning and ISO to a DVD in Brasero on Ubuntu"></a>
		</div>
		<div class="col span_1_of_2">
			<p>Either double-click, or right-click and <span class="box">Write to Disc</span>, and Brasero should open (unless you've installed another image burner). The file is already selected in the top box. Click the bottom box and select the disc you want to write to (if you haven't inserted it yet, now would be a good time). Click <span class="box">Burn</span>. Brasero will write the image to the disc. Wait for it to finish.</p>
		</div>
	</div>
	<h3>Congratulations, you have now Burnt the ISO to a Disc!</h3>


<?php require '../footer.php'; } ?>
