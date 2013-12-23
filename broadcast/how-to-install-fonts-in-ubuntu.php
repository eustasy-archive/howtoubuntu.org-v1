<?php

	$TextTitle = 'How to Install Fonts in Ubuntu';
	$WebTitle = 'How to Install Fonts in Ubuntu';
	$Canonical = 'how-to-install-fonts-in-ubuntu';
	$PostType = 'Post';
	$FeaturedImage = '';
	$Description = 'Fonts are an integral part of any computer, if you\'re reading this, you\'re using a font. More fonts are only generally required by designers of some kind, or maybe some specific applications. Fonts are, simply put, the way letters look.';
	$Keywords = 'install font fonts fnt fon otf ttc ttf woff files file extension extensions type types';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Install Fonts in Ubuntu</h2>

	<p>Fonts are an integral part of any computer, if you're reading this, you're using a font. More fonts are only generally required by designers of some kind, or maybe some specific applications. Fonts are, simply put, the way letters look. It is the way the computer takes the code of a letter, eg. <span class="box">01100001</span>, and make it look like a letter (that was <span class="box">a</span>, by the way). Different fonts make text look different. They are effectively a collection of letters, numbers, and symbols drawn in a style. <span class="box">Times New Roman</span> is a popular example.</p>

	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="fonts">Fonts</h3>
			<p>First, you'll need to download some Fonts. These come in a variety of file types, usually depending on their copyright restrictions. Practically all fonts are free for personal use (occasionally requiring acceptance of a terms and conditions bit), whereas there are a lot of fonts free for commercial use, undermining the pay-for-use model some companies offer.</p>
			<p>Fonts are usually <span class="box">.fnt</span>, <span class="box">.fon</span>, <span class="box">.otf</span>, <span class="box">.ttc</span>, <span class="box">.ttf</span>, or <span class="box">.woff</span>. You can view a more complete list of <a href="http://www.fileinfo.com/filetypes/font" target="_blank">Font File Formats ›</a></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="installing">Installing</h3>
			<a href="assets/images/how-to-install-fonts-in-ubuntu/install-fonts.png" class="fancybox" title="How to Install Fonts in Ubuntu"><img src="assets/images/how-to-install-fonts-in-ubuntu/install-fonts.png" title="How to Install Fonts in Ubuntu" alt="How to Install Fonts in Ubuntu"></a>
			<p>Installing a font is as easy as double clicking the Font File, and clicking <span class="box">Install Font</span>.</p>
		</div>
	</div>

	<h3>Congratulations, you have just made your Installed Fonts in Ubuntu!</h3>

<?php require '../footer.php'; } ?>
