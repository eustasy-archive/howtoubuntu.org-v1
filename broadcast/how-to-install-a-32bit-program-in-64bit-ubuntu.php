<?php

	$Title_HTML = 'How to Install a 32bit program in 64bit Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'With Ubuntu 12.04 and 13.10 both recommending 64bit for most users (at last), you may find that some software doesn\'t have a 64bit counterpart.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install 32bit 64bit 32 64 bit program ubuntu';

	$Featured_Image = '';

	$Canonical = 'how-to-install-a-32bit-program-in-64bit-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to Install a 32bit program in 64bit Ubuntu</h2>
	<p>With Ubuntu 12.04 and 13.10 both recommending 64bit for most users (at last), you may find that some software doesn't have a 64bit counterpart.</p>
	<p>Some people would have undoubtedly moaned and groaned about it. However, if you favorite no-name muse doesn't seem to swing that way, there is a solution. Lie. That's right, you can trick applications into thinking you're still a 32bit kinda guy. They might not work perfectly every time, and certainly won't take advantage of your new-found super-speed, but they might just plod along anyway.</p>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 class="red" id="warnings">Warnings</h3>
			<p class="red">Some software may not work this way. Some may cause damage that should be easily reversible (no promises). Unfortunately, we can't help every individual case, but you can <a href="http://askubuntu.com/" target="_blank">askubuntu.com</a> about specific pieces of software if this doesn't work.</p>
		</div>
		<div class="col span_1_of_2">
			<h3 id="check">1. Check</h3>
			<p>First, check to see if the package you want is available in 64bit. Try googling around, 32bit will have i386, i586 or i686 in the name, whereas amd64 indicates 64bit. You might want to include amd64 in your search terms.</p>
		</div>
	</div>
	<div class="section group">
		<div class="col span_1_of_2">
			<h3 id="lie">2. Lie</h3>
			<p>Start by installing the package <span class="box"><a href="apt:ia32-libs">ia32-libs</a></span>. Clicking that link should open the Ubuntu Software Centre, and the install button is located near the top-right-hand corner. If that doesn't work, then try searching for it in the Software Centre. You might have to click "Show # Technical Items" (bottom left).</p>
			<p class="center">Alternatively, you can run the following in the terminal, providing your password when prompted.</p>
			<input type="text" class="code" value="sudo apt-get install ia32-libs" />
		</div>
		<div class="col span_1_of_2">
			<h3 id="install">3. Install</h3>
			<p class="center">If you program will still not install (try doing it the normal way), grab a .Deb and try it manually (edit the parts in <span class="editable">blue</span>).</p>
			<code>sudo dpkg --force-architecture -i Downloads/<span class="editable">your-package</span>.deb</code>
		</div>
	</div>

	<h3>Congratulations, you have just Installed a 32bit program in 64bit Ubuntu!</h3>

<?php require '../footer.php'; } ?>
