<?php

	$Title_HTML = 'Things to do after installing Ubuntu 14.04 Trusty Tahr';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'After Installing Ubuntu 14.04 Trusty Tahr, there are a wealth of things that need to be dealt with, including Hardware Drivers, DVD, Audio and Video Codecs, Archiving formats, generally useful stuff.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'things after installing 14.04 14 04 trusty tahr';

	$Featured_Image = '';

	$Canonical = 'things-to-do-after-installing-ubuntu-14-04-trusty-tahr';

	$Post_Type = 'Pending';
	$Post_Category = 'Afterwards';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php';
	?>

	<h2>Things to do after installing Ubuntu 14.04 Trusty Tahr</h2>

	<div class="section group">
		<div class="col span_4_of_11">
			<div class="contents box">
				<h3 id="contents">Contents</h3>
				<p><a href="#drivers">1. Install Additional Drivers</a></p>
				<p><a href="#partners">2. Enable Partner Repositories</a></p>
				<p><a href="#getdeb">3. Install GetDeb and PlayDeb</a></p>
				<p><a href="#ppas">4. Add Personal Package Archives</a></p>
				<p><a href="#check">5. Check for Updates</a></p>
				<p><a href="#upgrade">6. Upgrade Package</a></p>
				<p><a href="#dist-upgrade">7. Major Upgrades</a></p>
				<p><a href="#disable-guest">8. Disable Guest</a></p>
				<p><a href="#install-essentials">9. Install Essentials</a></p>
				<p><a href="#chrome">10. Install Google Chrome</a></p>
				<p><a href="#clean">11. Clean Up</a></p>
			</div>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<p>After <a href="http://howtoubuntu.org/how-to-install-ubuntu-14-04-trusty-tahr">Installing Ubuntu 14.04 Trusty Tahr</a>, there are a wealth of things that need to be dealt with, including Hardware Drivers, DVD, Audio and Video Codecs, Archiving formats, generally useful stuff.</p>
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
			<a class="fancybox" href="assets/images/things-to-do-after-installing-ubuntu-14-04-trusty-tahr/1-additional-drivers.png"><img class="round" src="assets/images/things-to-do-after-installing-ubuntu-14-04-trusty-tahr/1-additional-drivers.png"></a>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<h4 id="drivers">1. Install Additional Drivers</h4>
			<p>If the Additional Drivers dialogue has not opened, and does not appear as an icon in the system tray, you may not require any Additional Drivers. However, if you wish to check, you can simply search for and open Additional Drivers. It will automatically check for the latest drivers for your system as it opens. This may take a few seconds.</p>
			<p>Once the Additional Drivers program has finished searching for new drivers, it will open a dialogue similar to the one to the left (above on mobiles). Here you can see the selection of drivers, if any, available to you. Grey icons indicate that the driver is not in use, and green indicates that it is in use, or "activated".</p>
			<p>To learn which driver you should be activating, if any at all, you should do some research into the component it applies to. Some basic details are provided: testing, license, and a short description, but much more information can usually be found online. Specifically, drivers for mid-to-high -end Graphics Cards are frequently complained about when they offer sub-standard performance, because the people in possession of them frequently car about such things.</p>
			<p>Ultimately, the decision is yours, but most drivers tested by Ubuntu Developers should work without a hitch.</p>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="partners">2. Enable Partner Repositories</h4>
			<p>The partner repositories are another source of software, but for those with restrictive licenses that mean the general public cannot simply share them, such as Flash and Skype. These are official repo's that are already added but disabled in Ubuntu. This command enables them.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<textarea class="left code resize">sudo sed -i "/^# deb .*partner/ s/^# //" /etc/apt/sources.list

if [[ $(lsb_release -si) = "elementary OS" ]]
then
	echo "elementary OS Luna, Modifying to be Trusty" &&
	sudo sed -i 's/luna/trusty/g' /etc/apt/sources.list &&
	sudo rm -f /etc/apt/sources.list.bck
fi</textarea>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="getdeb">3. Download and Install GetDeb and PlayDeb</h4>
			<p class="strong">Both <a href="http://www.getdeb.net/updates/Ubuntu/14.04#how_to_install">GetDeb</a> and <a href="http://www.playdeb.net/updates/Ubuntu/14.04#how_to_install">PlayDeb</a> are repositories, sources of updates for actual software you have or will have installed. They are useful for getting more up-to-date versions than those that ship in the official Ubuntu repositories, which programmers can find difficult to update as they encounter red tape. They may also contain less popular software which is not listed in the official repo's.</p>
			<p>While this may look like an awful lot of code for something that should be relatively simple, you should know that while GetDeb and PlayDeb <em>are</em> repositories, they're not launchpad hosted, and hence a little more difficult to add.</p>
			<p>A large part of this script is also adding support for elementary OS Luna, which, while based upon Ubuntu 14.04 Trusty Tahr, is detected as Luna by GetDeb. Since GetDeb doesn't support Luna, we have to pretend to be running Trusty.</p>
			<p>If you really want to shorten it down, you can remove everything from <span class="inline-code">if</span> to <span class="inline-code">fi &&</span>. This won't have much affect on Ubuntu, only a very slight speed increase, but will break support for elementary OS.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<textarea class="left code resize">echo "Downloading GetDeb and PlayDeb" &&
wget http://archive.getdeb.net/install_deb/getdeb-repository_0.1-1~getdeb1_all.deb http://archive.getdeb.net/install_deb/playdeb_0.3-1~getdeb1_all.deb &&

echo "Installing GetDeb" &&
sudo dpkg -i getdeb-repository_0.1-1~getdeb1_all.deb &&

echo "Installing PlayDeb" &&
sudo dpkg -i playdeb_0.3-1~getdeb1_all.deb &&

if [[ $(lsb_release -si) = "elementary OS" ]]
then
	echo "elementary OS Luna, Modifying to be Trusty" &&
	sudo sed -i 's/luna/trusty/g' /etc/apt/sources.list.d/getdeb.list &&
	sudo rm -f /etc/apt/sources.list.d/getdeb.list.bck &&
	sudo sed -i 's/luna/trusty/g' /etc/apt/sources.list.d/playdeb.list &&
	sudo rm -f /etc/apt/sources.list.d/playdeb.list.bck
fi &&

echo "Deleting Downloads" &&
rm -f getdeb-repository_0.1-1~getdeb1_all.deb &&
rm -f playdeb_0.3-1~getdeb1_all.deb</textarea>
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id=""></h4>
			<p></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">

		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h3 id="ppas">4. Add Personal Package Archives</h3>
			<p class="strong">Personal Package Archives, or PPAs, are yet more sources of updates and new and exciting software. These are some of the most popular, useful, and reliable sources for some default software and some more things we'll install later.</p></div>
		<div class="col span_1_of_5"><br></div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<p>Updates to the latest version of <a href="http://www.videolan.org/vlc/">VLC</a>, the popular media player that many people believe should be installed by default.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:videolan/stable-daily">
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<p>The default music player is <a href="http://projects.gnome.org/rhythmbox/">Rhythmbox</a>, and is usually at least a few version behind. This PPA is provided by the <a href="http://www.webupd8.org/">Webupd8 Team</a>.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:webupd8team/rhythmbox">
		</div>
	</div>
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
	<div class="section group">
		<div class="col span_4_of_11">
			<p>This PPA (WebUpd8 again), hosts the program Y PPA Manager. That's right, we're adding a PPA so we can add PPAs. But that's not all it does, it can also remove, purge, check for duplicates and remove broken ones.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:webupd8team/y-ppa-manager">
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<p>This PPA is for the amazing(ly popular) <a href="http://ubuntu-tweak.com">Ubuntu Tweak</a>, which, as it's name suggests, is a tool for tweaking Ubuntu (and other distributions based upon it, to a certain extent).</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:tualatrix/ppa">
		</div>
	</div>
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
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="check">5. Check for Updates</h4>
			<p>Now that we've added all those new sources, you're going to need to check for updates, even if they've already popped up of their own accord.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11"><input type="text" class="code" value="sudo apt-get update">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="upgrade">6. Upgrade Packages</h4>
			<p>Now that we've finished adding places to get updates from and secured them, it's time to update what you already have.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo apt-get upgrade">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="dist-upgrade">7. Major Upgrades</h4>
			<p>Some updates are bigger than others. This command is for the huge ones.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo apt-get dist-upgrade">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="disable-guest">8. Disable Guest</h4>
			<p>Now we're all up to date, we can disable the guest session. This is the only step not to do with installing or updating software.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<input type="text" class="code" value="sudo /usr/lib/lightdm/lightdm-set-defaults -l false">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="install-essentials">9. Install Essentials</h4>
			<p class="strong">Now we're going to install all the things we thing the average user will need to not encounter any problems playing Music or Videos, watching DVDs, going on YouTube or extracting archives.</p>
			<p>Below you can find a breakdown of what each package does. This is the step that most frequently goes wrong and you should read what your terminal prints out before confirming. You may end up removing something you don't want to if there is a conflict.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<textarea class="left code resize">sudo apt-get install synaptic ubuntu-tweak vlc gimp gimp-data gimp-plugin-registry gimp-data-extras y-ppa-manager firestarter bleachbit openjdk-7-jre oracle-java7-installer flashplugin-installer unace unrar zip unzip p7zip-full p7zip-rar sharutils rar uudeview mpack lha arj cabextract file-roller libxine1-ffmpeg mencoder flac faac faad sox ffmpeg2theora libmpeg2-4 uudeview libmpeg3-1 mpeg3-utils mpegdemux liba52-dev mpeg2dec vorbis-tools id3v2 mpg321 mpg123 libflac++6 ffmpeg totem-mozilla icedax lame libmad0 libjpeg-progs libdvdcss2 libdvdread4 libdvdnav4 libavcodec-extra-53 libavformat-extra-53 libavutil-extra-51 libpostproc-extra-52 libswscale-extra-2 ubuntu-restricted-extras ubuntu-wallpapers*</textarea>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_3_of_11">
			<p><span class="inline-code">synaptic</span> is a package manager, which we use in many tutorials.</p>
			<p><span class="inline-code">ubuntu-tweak</span> is far more than a settings manager, it has templates, scripts, workarounds and a file type manager, plus an amazing but simple cleaning utility.</p>
			<p><span class="inline-code">vlc</span> is one of the most popular and powerful media players available.</p>
			<p><span class="inline-code">gimp</span>, <span class="inline-code">gimp-data</span>, <span class="inline-code">gimp-plugin-registry</span>, and <span class="inline-code">gimp-data-extras</span> are all parts of a powerful photo editor, built to rival Adobe Photoshop.</p>
			<p><span class="inline-code">y-ppa-manager</span> is there so you can manage PPAs without needing to use the Terminal.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<p><span class="inline-code">firestarter</span> is a Firewall management application. All ports are closed by default, which means you should never need to use.</p>
			<p><span class="inline-code">bleachbit</span> is a powerful cleaning utility.</p>
			<p><span class="inline-code">openjdk-7-jre</span> is an open-source Java emulator.</p><p><span class="inline-code">oracle-java7-installer</span> is the official Java installer.</p>
			<p><span class="inline-code">flashplugin-installer</span> is the official Flash installer.</p>
			<p><span class="inline-code">unace</span>, <span class="inline-code">unrar</span>, <span class="inline-code">zip</span>, <span class="inline-code">unzip</span>, <span class="inline-code">p7zip-full</span>, <span class="inline-code">p7zip-rar</span>, <span class="inline-code">sharutils</span>, <span class="inline-code">rar</span>, <span class="inline-code">uudeview</span>, <span class="inline-code">mpack</span>, <span class="inline-code">lha</span>, <span class="inline-code">arj</span>, <span class="inline-code">cabextract</span>, and <span class="inline-code">file-roller</span> are there to extract and compress files in various archive formats.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<p><span class="inline-code">libxine1-ffmpeg</span>, <span class="inline-code">mencoder</span>, <span class="inline-code">flac</span>, <span class="inline-code">faac</span>, <span class="inline-code">faad</span>, <span class="inline-code">sox</span>, <span class="inline-code">ffmpeg2theora</span>, <span class="inline-code">libmpeg2-4</span>, <span class="inline-code">uudeview</span>, <span class="inline-code">libmpeg3-1</span>, <span class="inline-code">mpeg3-utils</span>, <span class="inline-code">mpegdemux</span>, <span class="inline-code">liba52-dev</span>, <span class="inline-code">mpeg2dec</span>, <span class="inline-code">vorbis-tools</span>, <span class="inline-code">id3v2</span>, <span class="inline-code">mpg321</span>, <span class="inline-code">mpg123</span>, <span class="inline-code">libflac++6</span>, <span class="inline-code">ffmpeg</span>, <span class="inline-code">totem-mozilla</span>, <span class="inline-code">icedax</span>, <span class="inline-code">lame</span>, <span class="inline-code">libmad0</span>, <span class="inline-code">libjpeg-progs</span>, <span class="inline-code">libdvdcss2</span>, <span class="inline-code">libdvdread4</span>, <span class="inline-code">libdvdnav4</span>, <span class="inline-code">libavcodec-extra-53</span>, <span class="inline-code">libavformat-extra-53</span>, <span class="inline-code">libavutil-extra-51</span>, <span class="inline-code">libpostproc-extra-52</span>, <span class="inline-code">libswscale-extra-2</span> and <span class="inline-code">ubuntu-restricted-extras</span> are <em>all</em> media codecs. They play videos, music, and DVDs.</p>
			<p><span class="inline-code">ubuntu-wallpapers*</span> adds basically every wallpaper that has ever lived.</p>
		</div>
	</div>
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="chrome">10. Install Google Chrome</h4>
			<p class="strong"><a href="https://www.google.com/chrome?platform=linux" target="_blank">Google Chrome</a> is not only one of the more popular, fastest, and most reliable browsers available, but it also includes a pre-packed and fully patched version of Adobe Flash and a huge array of extensions and apps.</p><p>This is another section of the script that seems long for what it does, but Google Chrome sets up it's repository itself when you install it. This script is set to download the current version and install it, but is more than three times as long so that it can detect whether you are using 32bit or 64bit and download and install the right one.</p>
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
	<div class="section group">
		<div class="col span_4_of_11">
			<h4 id="clean">11. Clean Up</h4>
			<p>Now it is time to tidy up, and the first command here makes sure we have everything we want. Second, we get rid of any old dependencies, then remove all the packages we've downloaded and installed, as we likely won't use those again. You can also use Ubuntu Tweak to remove orphaned Configurations and Outdated Kernels.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_6_of_11">
			<textarea class="left code resize">echo "Cleaning Up" &&
sudo apt-get -f install &&
sudo apt-get autoremove &&
sudo apt-get -y autoclean &&
sudo apt-get -y clean</textarea>
		</div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h4 id="references">References</h4>
			<p><a href="http://howtoubuntu.org/how-to-burn-an-iso-to-a-cd-or-dvd-in-ubuntu" target="_blank">How to Burn an ISO to a CD or DVD in Ubuntu</a><br>
			<a href="http://howtoubuntu.org/how-to-decide-if-you-should-use-32bit-or-64bit-ubuntu" target="_blank">How to decide if you should use 32bit or 64bit Ubuntu</a><br>
			<a href="http://howtoubuntu.org/how-to-find-out-how-much-ram-is-installed-in-ubuntu" target="_blank">How to find out how much RAM is installed in Ubuntu</a><br>
			<a href="http://howtoubuntu.org/how-to-install-a-32bit-program-in-64bit-ubuntu" target="_blank">How to Install a 32bit program in 64bit Ubuntu</a></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h4 id="further reading">Further Reading</h4>
			<p><a href="http://howtoubuntu.org/about-ubuntu-14-04-trusty-tahr" target="_blank">About Ubuntu 14.04 Trusty Tahr</a><br>
			<a href="http://howtoubuntu.org/how-to-install-ubuntu-14-04-trusty-tahr">How to Install Ubuntu 14.04 Trusty Tahr</a><br>
			<a href="http://howtoubuntu.org/how-to-make-your-dual-boot-better-with-burg" target="_blank">How to make your Dual Boot better with Burg</a></p>
		</div>
	</div>
<?php require '../footer.php'; }
