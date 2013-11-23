<?php

	$TextTitle = 'How to Install Ubuntu 12.04 Precise Pangolin';
	$WebTitle = 'How to Install Ubuntu 12.04 Precise Pangolin';
	$Canonical = 'how-to-install-ubuntu-12-04-precise-pangolin';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = 'install ubuntu 12.04 12 04 1204 precise pangolin linux';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h2>How to Install Ubuntu 12.04 Precise Pangolin</h2>

			<p>Ubuntu 12.04 Precise Pangolin came out on April the 26th of 2012. It features an improved version of Unity, the new Heads-Up Display (HUD), and version support for the next five years. It is completely free to download and install and offers a fast, free, and secure alternative to Windows or OS X.</p>
			<br>
			<div class="warning">
				<h3 id="warnings">Warnings</h3><p>When choosing how to install, some options will <strong>completely erase</strong> your drive before doing so. Please read carefully the description of your options below <em>before</em> choosing an install method. If you are comfortable managing partitions, we recommend doing so manually.</p>
			</div>
			<br>
			<div class="contents box">
				<h3 id="contents">How to Install Ubuntu 12.04 Precise Pangolin</h3>
				<div class="section group">
					<div class="col span_1_of_2">
						<p><a href="#warnings">Warnings</a></p>
						<p><a href="#download">Download</a><br>
						&middot;&nbsp; <a href="#architecture">32 or 64 bit</a></p>
					</div>
					<div class="col span_1_of_2">
						<p><a href="#media">CD, DVD or USB</a></p>
						<p><a href="#install">Install</a></p>
					</div>
				</div>
			</div>
			<br>
			<h3 id="download">Downloading</h3>
			<p>You can <a href="http://www.ubuntu.com/download/desktop">Download Ubuntu 12.04</a> directly. The file size is just under a Gigabyte and may take anything from a few minutes to a few hours, depending primarily on your connection speed. Downloads will be faster after the first day of release (as less people download).</p>
			<h4 id="architecture">32 or 64 Bit</h4>
			<p>A good general rule of thumb is if your computer has 4GB of RAM or more, go for 64bit. Less, go for 32bit.</p>
			<p>You might need to know how to find out how much ram you have, if you don't already know, in <a href="how-to-find-out-how-much-ram-is-installed-in-ubuntu" target="_blank">Ubuntu</a>, <a href="http://windows.microsoft.com/en-GB/windows7/Find-out-how-much-RAM-your-computer-has" target="_blank">Windows</a>, or <a href="http://support.apple.com/kb/HT2353?viewlocale=en_US" target="_blank">OS X</a>. You might want to take a look at the <a title="Pros and Cons of 32 and 64bit systems." href="how-to-decide-if-you-should-use-32bit-or-64bit-ubuntu#what" target="_blank">pros and cons</a>.</p>
			<p>Basically, 64bit is faster.</p>
			<br>
			<h3 id="media">CD, DVD or USB</h3>
			<p>To install Ubuntu, you must first put the installation image onto some form of media. Your choices are CD, DVD or USB. Most computers can boot from both, unless they lack a disc drive, in which case you can skip the next paragraph, as you'll be using a USB then.</p>
			<p>CDs and DVDs offer no real advantage over one another, DVDs may be larger, but the space will not be used, but cost only a tiny amount more. RW means you can write new data again and again, whereas R means once the Ubuntu installation image is on there, there it will stay. It can be used again, but never written to again. As for + or -, + means a computer can treat it like a USB drive, whereas - is a little older and won't. Either + or -, and R or RW will work for this.</p>
			<p>USB sticks need to be at least 2GB in size, and be prepared for it to be formatted (everything deleted).</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<div class="section group">
		<div class="col span_3_of_11">
			<h4>Windows</h4>
			<p><a href="http://www.ubuntu.com/download/help/burn-a-cd-on-windows">How to burn a CD on Windows</a><br>
			<a href="http://www.ubuntu.com/download/help/create-a-usb-stick-on-windows">How to create a bootable USB stick on Windows</a><br>
			<a href="http://www.ubuntu.com/download/help/install-ubuntu-with-windows">Installing Ubuntu with the Windows installer</a></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<h4>OS X</h4>
			<p><a href="http://www.ubuntu.com/download/help/burn-a-cd-on-mac-osx">How to burn a CD on OS X</a><br>
			<a href="http://www.ubuntu.com/download/help/create-a-usb-stick-on-mac-osx">How to create a bootable USB stick on OS X</a></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<h4>Ubuntu</h4>
			<p><a href="how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu">How to burn a CD on Ubuntu</a><br>
			<a href="http://www.ubuntu.com/download/help/create-a-usb-stick-on-ubuntu">How to create a bootable USB stick on Ubuntu</a></p>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_1_of_6"><br></div>
		<div class="col span_4_of_6">
			<h3 id="install">Install Ubuntu 12.04 Precise Pangolin</h3>
			<p>Once you've put the image you downloaded onto a CD, DVD, or USB, you will need to shut down your computer. This may be a good time to print this page, or just read through and make notes.</p>
			<p>Turn your computer back on, tapping F12 to select a boot device when your screen shows the name of the manufacturer. You can then use the arrow keys, finally hitting enter, to select either USB or Disc Drive.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>1. Click Install</h4>
			<p>Once Ubuntu has booted, you will be presented with a screen that looks like this.</p>
			<p>Click <span class="box">Install Ubuntu</span> to install. You can open the installer again later if you choose to try it out, but remember it will be far slower running from a Disc/USB than had you installed it, and nothing you do will actually be saved.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/1-Welcome.png" class="fancybox rounded" rel="install" title="Click Install"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/1-Welcome.png" alt="Click Install" title="Click Install"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>2. Check both Boxes</h4>
			<p>We recommend checking both boxes, but if you don't want to install all updates while installing, or don't want to play MP3 files (music), then you can leave the relevant box(es) unchecked.</p>
			<p>If you don't have at least 4.5GB of available drive space, then you can't continue. If you're not plugged in, then plug in before continuing. If you're not connected to the internet, then you'll be prompted to connect when you click continue. You can do it now using the icon to the left of the sound menu to connect. Mine shows two arrows, as I'm plugged in, disconnected it looks different, and a little change again if using WiFi. You can continue without connecting, but you won't be able to get updates, or any language packs you may require.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/2-Check.png" class="fancybox rounded" rel="install" title="Check both Boxes"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/2-Check.png" alt="Check both Boxes" title="Check both Boxes"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>3. Choose How to Install</h4>
			<p>Yours will probably look a little different to mine here. My hard drive doesn't have anything on it yet, so i can choose either to use the whole disk, or specify partitions manually (surprisingly easy stuff). Yours may have a slightly different first option, and one or two extra.</p>
			<p>It may say <span class="box">Delete Windows and Install Ubuntu</span> and <span class="box">Shrink Windows and Install Ubuntu Alongside</span>.</p>
			<p>Choosing to install alongside will mean you are presented with a menu with the option to choose which operating system with the arrow keys and enter every time you turn on your computer.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/3-Choose.png" class="fancybox rounded" rel="install" title="Choose How to Install"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/3-Choose.png" alt="Choose How to Install" title="Choose How to Install"></a>
		</div>
	</div>
	<br>
	<div class="warning">
		<h4>Warning</h4>
		<div class="section group">
			<div class="col span_5_of_11">
				<p>In this step you could potentially erase your entire computer. This means all your programs, documents, photos, videos, and everything else could be lost. Be careful, especially if you plan to remove Windows or OS X and use only Ubuntu, or if you are installing to a USB Drive.</p>
			</div>
			<div class="col span_1_of_11"><br></div>
			<div class="col span_5_of_11">
				<p>Make sure you understand where it is being installed and how it will effect your data. This is the last point at which you can safely cancel the install without potential data loss.</p>
				<p>It is always a good idea to make backups.<p>
			</div>
		</div>
		<h4>If you have not done so already, backup your data.</h4>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>4. Confirm your Choice</h4>
			<p>After clicking continue, you may be presented with a confirmation screen, much like this, to confirm your choices.</p>
			<p>Click <span class="box">Install Now</span> to begin installing.</p>
			<p>You'll be asked a few more questions in a second about where you are, what your name is, and how you want your computer set up. These are for time settings, user names, and home folders.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/4-Confirm.png" class="fancybox rounded" rel="install" title="Confirm your Choice"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/4-Confirm.png" alt="Confirm your Choice" title="Confirm your Choice"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>5. Choose your Location</h4>
			<p>Now you get to choose your location by dropping a pin on this nifty looking map. This is to select your timezone and apply any regional adjustments.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/5-Where.png" class="fancybox rounded" rel="install" title="Choose your Location"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/5-Where.png" alt="Choose your Location" title="Choose your Location"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>6. Choose your Keyboard Layout</h4>
			<p>This is probably the most technical step in the installation, made a lot simpler by the <span class="box">Detect Keyboard Layout</span>. Just click that and follow the instructions on screen.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/6-How.png" class="fancybox rounded" rel="install" title="Choose your Keyboard Layout"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/6-How.png" alt="Choose your Keyboard Layout" title="Choose your Keyboard Layout"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>7. Set a Username and Password</h4>
			<p>Now you get to enter your name, the name you want your computer to be (not really important), your username (again, you won't see this much, but it can't have capitals or spaces, best leave as it is made from your real name), a password (if you want, then confirm it, and keep it strong), whether or not to log in automatically, and whether or not to encrypt your home folder (which is where documents, music, and video folder can be found, among others).</p>
			<p>I would not recommend encrypting your home folder, as this usually complicates things for you as much as any potential trespassers. It can lead to complications with keyrings, forgotten passwords, and bad data recovery. Only use if it is company policy.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/7-Who.png" class="fancybox rounded" rel="install" title="Set a Username and Password"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/7-Who.png" alt="Set a Username and Password" title="Set a Username and Password"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11 floatright">
			<h4>8. Sit Back and Relax</h4>
			<p>Sit back and enjoy a little slideshow about Ubuntu, all the free, full-version software you've got, and just how great it is to have installed Ubuntu 12.04 Precise Pangolin LTS.</p>
			<p>You can rest easy in the knowledge that your computer is faster, safer, and simpler to use, now it's running a free open-source system.</p>
			<p>Check out <a href="http://askubuntu.com/">askubuntu.com</a> if you need any further help.</p>
		</div>
		<div class="col span_1_of_11 floatright"><br></div>
		<div class="col span_5_of_11">
			<a href="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/8-Welcome-to-Ubuntu-12.04-Precise-Pangolin-LTS.png" class="fancybox rounded" rel="install" title="Sit Back and Relax"><img src="assets/images/how-to-install-ubuntu-12-04-precise-pangolin/8-Welcome-to-Ubuntu-12.04-Precise-Pangolin-LTS.png" alt="Sit Back and Relax" title="Sit Back and Relax"></a>
		</div>
	</div>
	<br>
	<h3>Welcome to Ubuntu 12.04 Precise Pangolin LTS!</h3>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4>References</h4>
			<p><a href="how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu" target="_blank">How to Burn an ISO to a CD or DVD in Ubuntu</a><br>
			<a href="how-to-make-your-dual-boot-better-with-burg" target="_blank">How to make your Dual Boot better with Burg</a><br>
			<a href="how-to-decide-if-you-should-use-32bit-or-64bit-ubuntu" target="_blank">How to decide if you should use 32bit or 64bit Ubuntu</a><br>
			<a href="how-to-find-out-how-much-ram-is-installed-in-ubuntu" target="_blank">How to find out how much RAM is installed in Ubuntu</a><br>
			<a href="how-to-install-a-32bit-programme-in-64bit-ubuntu" target="_blank">How to Install a 32bit programme in 64bit Ubuntu</a></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4>Further Reading</h4>
			<p><a href="about-ubuntu-12-04-precise-pangolin" target="_blank">About Ubuntu 12.04 Precise Pagolin</a><br>
			<a href="things-to-do-after-installing-ubuntu-12-04-precise-pangolin">Things to go after Installing Ubuntu 12.04 Precise Pangolin</a></p>
		</div>
	</div>

<?php require '../footer.php'; } ?>
