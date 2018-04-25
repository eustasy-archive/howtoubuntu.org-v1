<?php

	$Title_HTML = 'Things to do after installing Ubuntu 18.04 Bionic Beaver';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'After Installing Ubuntu 18.04 Bionic Beaver, there are a wealth of things that need to be dealt with, including Hardware Drivers, DVD, Audio and Video Codecs, Archiving formats, generally useful stuff.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'things after installing 18.04 18 04 bionic beaver';

	$Featured_Image = '';

	$Canonical = 'things-to-do-after-installing-ubuntu-18-04-bionic-beaver';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Afterwards';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

</div>
<div class="content spanpage bionic">
	<div class="section group">
		<div class="col span_1_of_11"><br></div>
		<div class="col span_9_of_11">
			<div class="bubble">
				<h2>Things to do after installing Ubuntu 18.04 Bionic Beaver</h2>
			</div>
		</div>

		<div class="col span_1_of_11"><br></div>
	</div>
</div>
<div class="content">

	<div class="section group">
		<div class="col span_4_of_11">
			<div class="contents box">
				<h3 id="contents">Contents</h3>
				<p><a href="#partners">1. Enable Partner Repositories</a></p>
				<p><a href="#ppas">2. Add Personal Package Archives</a></p>
				<p><a href="#check">3. Check for Updates</a></p>
				<p><a href="#upgrade">4. Upgrade Package</a></p>
				<p><a href="#dist-upgrade">5. Major Upgrades</a></p>
				<p><a href="#install-essentials">6. Install Essentials</a></p>
				<p><a href="#drivers">7. Install Additional Drivers</a></p>
				<p><a href="#chrome">8. Install Google Chrome</a></p>
				<p><a href="#clean">9. Clean Up</a></p>
				<p><a href="#enjoy">10. Enjoy your new computer</a></p>
			</div>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<p>After <a href="https://howtoubuntu.org/how-to-install-18-04-bionic-beaver">Installing Ubuntu 18.04 Bionic Beaver</a>, there are a wealth of things that need to be dealt with, including Hardware Drivers, DVD, Audio and Video Codecs, Archiving formats, generally useful stuff.</p>
			<p><em>These instructions presume you are proficient with PPAs, .Debs, and other terminal commands, Ubuntu Tweak, and require a full set of video, audio, and archive codecs, as well as Skype, Flash, and a truck-load of wallpapers.</em></p>
			<br>
			<div class="warning">
				<h3 id="warning">Warning</h3>
				<p>Using the <span class="inline-code">sudo</span> command can result in severe system damage. Read all instructions and confirm you understand before executing any commands.</p>
				<p>Make sure you type commands correctly, or copy and paste the entire code. Your first click will highlight all the code, or you can double click in the code area to do it again.</p>
			</div>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="partners">1. Enable Partner Repositories</h3>
			<p>The partner repositories are another source of software, but for those with restrictive licenses that mean the general public cannot simply share them, such as Flash and Skype. These are official repo's that are already added but disabled in Ubuntu.</p>
			<p>Open <span class="inline-code">Software &amp; Updates</span> and navigate to the <span class="inline-code">Other Software</span> tab. Check both of the boxes next to Canonical Partners and close the dialog. If prompted, agree to fresh the sources now.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<a class="fancybox" href="assets/images/things-to-do-after-installing-ubuntu-18-04-bionic-beaver/1-enable-partners-repositories.png"><img class="round" src="assets/images/things-to-do-after-installing-ubuntu-18-04-bionic-beaver/1-enable-partners-repositories.png"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h3 id="ppas">2. Add Personal Package Archives</h3>
			<p class="strong">Personal Package Archives, or PPAs, are yet more sources of updates and new and exciting software. These are some of the most popular, useful, and reliable sources for some default software and some more things we'll install later.</p></div>
		<div class="col span_1_of_5"><br></div>
	</div>
	<!-- TODO VLC PPA disabled until bionic builds are available
	<div class="section group">
		<div class="col span_4_of_11">
			<p>Updates to the latest version of <a href="http://www.videolan.org/vlc/">VLC</a>, the popular media player that many people believe should be installed by default.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:videolan/stable-daily">
		</div>
	</div>
	-->
	<div class="section group">
		<div class="col span_4_of_11">
			<p><a href="http://www.gimp.org/">GIMP</a> is an image editor akin to Adobe Photoshop, except free. It is included in many open-source systems, and it would be a crime to use a version old enough not to have single window mode.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:otto-kesselgulasch/gimp">
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<p>While we won't be installing the full <a href="http://www.gnome.org/">GNOME</a> desktop environment, they do make many of the packages that are already installed on your system, and they can be updated from here.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:gnome3-team/gnome3">
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<p>Another WebUpd8 PPA, this time a masterfully crafted <a href="http://www.java.com/">Java</a> package. It hosts Java 8Beta (not yet stable), Java 6 (an old version) and, most importantly, Java 7 (which we will install later).</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:webupd8team/java">
		</div>
	</div>
	<!-- See TODO for y-ppa-manager lower down
	<div class="section group">
		<div class="col span_4_of_11">
			<p>This PPA (WebUpd8 again), hosts the program Y PPA Manager. That's right, we're adding a PPA so we can add PPAs. But that's not all it does, it can also remove, purge, check for duplicates and remove broken ones.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:webupd8team/y-ppa-manager">
		</div>
	</div>
	-->
	<div class="section group">
		<div class="col span_4_of_11">
			<p><a href="http://www.transmissionbt.com/">Transmission</a> is the default torrent client in Ubuntu, and as such should be kept shiny and new.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:transmissionbt/ppa">
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<p><a href="http://www.videolan.org/developers/libdvdcss.html">LibDVDCSS</a> is a library required for reading some DVDs. Unfortunately, due to legal issues, it is not included by default. This repository is provided by Videolan, and requires a bit more code to add.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<textarea class="left code resize">echo 'deb http://download.videolan.org/pub/debian/stable/ /' | sudo tee -a /etc/apt/sources.list.d/libdvdcss.list &&
echo 'deb-src http://download.videolan.org/pub/debian/stable/ /' | sudo tee -a /etc/apt/sources.list.d/libdvdcss.list &&
wget -O - http://download.videolan.org/pub/debian/videolan-apt.asc|sudo apt-key add -</textarea>
		</div>
	</div>
	<br>
	<div class="ad banner billboard">
		<!-- Banner Billboard -->
		<ins class="adsbygoogle"
			style="display: inline-block; width: 970px; height: 250px"
			data-ad-client="ca-pub-9775669566179340"
			data-ad-slot="9786999318"></ins>
		<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
		<p class="about-ads">Advertisement <a href="https://eustasy.org/advertisements">Why are there ads?</a></p>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="check">3. Check for Updates</h3>
			<p>Now that we've added all those new sources, you're going to need to check for updates, even if they've already popped up of their own accord.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11"><input type="text" class="code" value="sudo apt update">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="upgrade">4. Upgrade Packages</h3>
			<p>Now that we've finished adding places to get updates from and secured them, it's time to update what you already have.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo apt upgrade">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="dist-upgrade">5. Major Upgrades</h3>
			<p>Some updates are bigger than others. This command is for the huge ones.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo apt dist-upgrade">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="install-essentials">6. Install Essentials</h3>
			<p class="strong">Now we're going to install all the things we thing the average user will need to not encounter any problems playing Music or Videos, watching DVDs, going on YouTube or extracting archives.</p>
			<p>Below you can find a breakdown of what each package does. This is the step that most frequently goes wrong and you should read what your terminal prints out before confirming. You may end up removing something you don't want to if there is a conflict.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<!-- TODO y-ppa-manager removed because gksu not installable -->
			<textarea class="left code resize">sudo apt install synaptic vlc gimp gimp-data gimp-plugin-registry gimp-data-extras bleachbit openjdk-8-jre oracle-java8-installer unace unrar zip unzip p7zip-full p7zip-rar sharutils rar uudeview mpack arj cabextract file-roller mencoder flac faac faad sox ffmpeg2theora libmpeg2-4 uudeview mpeg3-utils mpegdemux liba52-dev mpeg2dec vorbis-tools id3v2 mpg321 mpg123 icedax lame libmad0 libjpeg-progs libdvdcss2 libdvdread4 libdvdnav4 ubuntu-restricted-extras ubuntu-wallpapers*</textarea>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_1_of_3">
			<p><span class="inline-code">synaptic</span> is a package manager, which we use in many tutorials.</p>
			<p><span class="inline-code">vlc</span> is one of the most popular and powerful media players available.</p>
			<p><span class="inline-code">gimp</span>, <span class="inline-code">gimp-data</span>, <span class="inline-code">gimp-plugin-registry</span>, and <span class="inline-code">gimp-data-extras</span> are all parts of a powerful photo editor, built to rival Adobe Photoshop.</p>
			<!--<p><span class="inline-code">y-ppa-manager</span> is there so you can manage PPAs without needing to use the Terminal.</p>-->
			<p><span class="inline-code">bleachbit</span> is a powerful cleaning utility.</p>
		</div>
		<div class="col span_1_of_3">
			<p><span class="inline-code">openjdk-8-jre</span> is an open-source Java emulator.</p>
			<p><span class="inline-code">oracle-java8-installer</span> is the official Java installer.</p>
			<p><span class="inline-code">unace</span>, <span class="inline-code">unrar</span>, <span class="inline-code">zip</span>, <span class="inline-code">unzip</span>, <span class="inline-code">p7zip-full</span>, <span class="inline-code">p7zip-rar</span>, <span class="inline-code">sharutils</span>, <span class="inline-code">rar</span>, <span class="inline-code">uudeview</span>, <span class="inline-code">mpack</span>, <span class="inline-code">arj</span>, <span class="inline-code">cabextract</span>, and <span class="inline-code">file-roller</span> are there to extract and compress files in various archive formats.</p>
		</div>
		<div class="col span_1_of_3">
			<p><span class="inline-code">flac</span>, <span class="inline-code">faac</span>, <span class="inline-code">faad</span>, <span class="inline-code">sox</span>, <span class="inline-code">ffmpeg2theora</span>, <span class="inline-code">libmpeg2-4</span>, <span class="inline-code">uudeview</span>, <span class="inline-code">mpeg3-utils</span>, <span class="inline-code">mpegdemux</span>, <span class="inline-code">liba52-dev</span>, <span class="inline-code">mpeg2dec</span>, <span class="inline-code">vorbis-tools</span>, <span class="inline-code">id3v2</span>, <span class="inline-code">mpg321</span>, <span class="inline-code">mpg123</span>, <span class="inline-code">icedax</span>, <span class="inline-code">lame</span>, <span class="inline-code">libmad0</span>, <span class="inline-code">libjpeg-progs</span>, <span class="inline-code">libdvdcss2</span>, <span class="inline-code">libdvdread4</span>, <span class="inline-code">libdvdnav4</span> and <span class="inline-code">ubuntu-restricted-extras</span> are <em>all</em> media codecs. They play videos, music, and DVDs.</p>
			<p><span class="inline-code">ubuntu-wallpapers*</span> adds basically every wallpaper that has ever lived.</p>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="drivers">7. Install Additional Drivers</h3>
			<p>If the Additional Drivers dialogue has not opened, and does not appear as an icon in the system tray, you may not require any Additional Drivers. However, if you wish to check, you can simply search for and open Additional Drivers. It will automatically check for the latest drivers for your system as it opens. This may take a few seconds.</p>
			<p>Once the Additional Drivers program has finished searching for new drivers, it will open a dialogue similar to the one to the left (above on mobiles). Here you can see the selection of drivers, if any, available to you. Grey icons indicate that the driver is not in use, and green indicates that it is in use, or "activated".</p>
			<p>To learn which driver you should be activating, if any at all, you should do some research into the component it applies to. Some basic details are provided: testing, license, and a short description, but much more information can usually be found online. Specifically, drivers for mid-to-high -end Graphics Cards are frequently complained about when they offer sub-standard performance, because the people in possession of them frequently car about such things.</p>
			<p>Ultimately, the decision is yours, but most drivers tested by Ubuntu Developers should work without a hitch.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<a class="fancybox" href="assets/images/things-to-do-after-installing-ubuntu-18-04-bionic-beaver/8-additional-drivers.png"><img class="round" src="assets/images/things-to-do-after-installing-ubuntu-18-04-bionic-beaver/8-additional-drivers.png"></a>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h3 id="chrome">8. Install Google Chrome</h3>
			<p class="strong"><a href="https://www.google.com/chrome?platform=linux" target="_blank">Google Chrome</a> is not only one of the more popular, fastest, and most reliable browsers available, but it also includes a pre-packed and fully patched version of Adobe Flash and a huge array of extensions and apps.</p>
			<p>This is another section of the script that seems long for what it does, but Google Chrome sets up it's repository itself when you install it. This script is set to download the current version and install it, but is more than three times as long so that it can detect whether you are using 32bit or 64bit and download and install the right one.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11"><textarea class="left code resize">if [[ $(getconf LONG_BIT) = "64" ]]
then
	echo "64bit Detected" &&
	echo "Installing Google Chrome" &&
	wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb &&
	sudo dpkg -i google-chrome-stable_current_amd64.deb &&
	rm -f google-chrome-stable_current_amd64.deb
else
	echo "32bit Detected" &&
	echo "Installing Google Chrome" &&
	wget https://dl.google.com/linux/direct/google-chrome-stable_current_i386.deb &&
	sudo dpkg -i google-chrome-stable_current_i386.deb &&
	rm -f google-chrome-stable_current_i386.deb
fi</textarea>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="clean">9. Clean Up</h4>
			<p>Now it is time to tidy up, and the first command here makes sure we have everything we want. Second, we get rid of any old dependencies, then remove all the packages we've downloaded and installed, as we likely won't use those again. You can also use Ubuntu Tweak to remove orphaned Configurations and Outdated Kernels.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<textarea class="left code resize">echo "Cleaning Up" &&
sudo apt -f install &&
sudo apt autoremove &&
sudo apt -y autoclean &&
sudo apt -y clean</textarea>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="enjoy">10. Enjoy your new computer</h4>
				<p>You can learn more about your computer just by exploring, or starting to use it however you want.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<a class="fancybox" href="assets/images/things-to-do-after-installing-ubuntu-18-04-bionic-beaver/ubuntu-1804-whats-new.png"><img class="round" src="assets/images/things-to-do-after-installing-ubuntu-18-04-bionic-beaver/ubuntu-1804-whats-new.png"></a>
		</div>
	</div>
	<div class="breaker"></div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="further-reading">Further Reading</h4>
			<p class="textcenter"><a href="https://howtoubuntu.org/about-ubuntu-18-04-bionic-beaver" target="_blank">About Ubuntu 18.04 Bionic Beaver</a></p>
			<p class="textcenter"><a href="https://howtoubuntu.org/how-to-install-a-32bit-program-in-64bit-ubuntu" target="_blank">How to Install a 32bit program in 64bit Ubuntu</a></p>
			<p class="textcenter"><a href="https://howtoubuntu.org/how-to-make-your-dual-boot-better-with-burg" target="_blank">How to make your Dual Boot better with Burg</a></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<!-- TODO Replace these external links
			<h4 id="external-links">External Links</h4>
			<p class="textcenter"><a href="http://www.omgubuntu.co.uk/2018/04/10-things-to-do-after-installing-ubuntu-18-04" class="external" target="_blank">10 Things to Do After Installing Ubuntu 18.04 LTS - OMG!Ubuntu</a></p>
			<p class="textcenter"><a href="http://www.webupd8.org/2018/04/10-things-to-do-after-installing-ubuntu.html" class="external" target="_blank">10 Things To Do After Installing Ubuntu 18.04 Bionic Beaver To Get A Near Perfect Desktop ~ Web Upd8: Ubuntu / Linux blog</a></p>
		-->
		</div>
	</div>
	<?php
	require '../footer.php';
}
