<?php

	$TextTitle = 'How to Install Linux Kernel 3.9 in Ubuntu';
	$WebTitle = 'How to Install Linux Kernel 3.9 in Ubuntu';
	$Canonical = 'how-to-install-linux-kernel-3-9-in-ubuntu';
	$FeaturedImage = '';
	$Description = 'Linux Kernel 3.9 features many major improvements, namely dm-cache for Solid State Drives, and improved power efficiency thanks to the Intel PowerClamp Driver, expanded platforms (ARM, especially Chromebooks), among other improvements including compatibility, stability and security.';
	$Keywords = 'install linux kernel headers 3 9 3.9';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>How to Install Linux Kernel 3.9</h2>
			<p>Linux Kernel 3.9 features many major improvements, namely <span class="box">dm-cache</span> for Solid State Drives, and improved power efficiency thanks to the Intel PowerClamp Driver, expanded platforms (ARM, especially Chromebooks), among other improvements including compatibility, stability and security. However, no version of Ubuntu currently uses it, despite many user reporting safe and stable systems, and development commencing on 3.10 (yes, we know, versions can be weird and unmathmatical).</p>
			<h3>Important Notes</h3>
			<p>This script will attempt to install Linux Kernel 3.9 on this machine. Typically, your current version will be kept, and you will be able to utilize it again later if Linux Kernel 3.9 does not work. However, it is possible, if unlikely, that this script will render your system inoperable on with certain software installed, or with certain hardware configurations. How to Ubuntu does not offer any guarantees whatsoever, but it worked for us. Use with care (especially around UEFI).</p>
			<p>Also, note that your system will be running a package that it is unlikely to receive updates for, and that you will have to manually check for subsequent versions on How to Ubuntu.</p>
			<p>Finally, it should be noted that this script will automatically determine your system architecture, choosing the i386 packages for a 32bit system and amd64 packages for a 64bit system. ARM-type processors are not supported.</p>
			<h3>Script</h3>
<textarea class="resize code">echo " " &&
echo "This script will attempt to install Linux Kernel 3.9 on this machine." &&
echo "Typically, your current version will be kept, and you will be able to ustilise it again later if Kernel 3.9 does not work." &&
echo " " &&
read -p "Press Enter to continue, or abort by pressing CTRL+C" nothing &&
echo " " &&
echo "Downloading Kernel 3.9 Packages" &&
echo "3 Files, 55 MB to Download" &&
echo " " &&
echo "Creating Kernel Directory in Home folder" &&
echo " " &&
mkdir -p $HOME/howtoubuntu-kernel-3-9 &&
cd $HOME/howtoubuntu-kernel-3-9 &&
echo " " &&
echo "Downloading File 1 of 3, 12 MB" &&
echo " " &&
wget http://kernel.ubuntu.com/~kernel-ppa/mainline/v3.9.11-saucy/linux-headers-3.9.11-030911_3.9.11-030911.201307202035_all.deb &&
echo " " &&
if [ $(getconf LONG_BIT) = "64" ]
then
	echo "64bit Detected" &&
	echo " " &&
	echo "Downloading File 2 of 3, 1 MB" &&
	echo " " &&
	wget http://kernel.ubuntu.com/~kernel-ppa/mainline/v3.9.11-saucy/linux-headers-3.9.11-030911-generic_3.9.11-030911.201307202035_amd64.deb &&
	echo " " &&
	echo "Downloading File 3 of 3, 43 MB" &&
	wget http://kernel.ubuntu.com/~kernel-ppa/mainline/v3.9.11-saucy/linux-image-3.9.11-030911-generic_3.9.11-030911.201307202035_amd64.deb
else
	echo "32bit Detected" &&
	echo " " &&
	echo "Downloading File 2 of 3, 1 MB" &&
	echo " " &&
	wget http://kernel.ubuntu.com/~kernel-ppa/mainline/v3.9.11-saucy/linux-headers-3.9.11-030911-generic_3.9.11-030911.201307202035_i386.deb &&
	echo " " &&
	echo "Downloading File 3 of 3, 42 MB" &&
	echo " " &&
	wget http://kernel.ubuntu.com/~kernel-ppa/mainline/v3.9.11-saucy/linux-image-3.9.11-030911-generic_3.9.11-030911.201307202035_i386.deb
fi &&
echo " " &&
echo "Installing Kernel" &&
echo "This step will require you password." &&
echo "This is the last step you can safely cancel at." &&
echo "Use Ctrl+C to cancel." &&
echo " " &&
sudo dpkg -i *.deb &&
echo " " &&
echo "Installation Complete" &&
echo " " &&
read -p "Press Enter to Delete the Downloads, or CTRL+C to keep them." nothing &&
echo " " &&
sudo rm -rf $HOME/howtoubuntu-kernel-3-9</textarea>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

<?php require '../footer.php'; } ?>
