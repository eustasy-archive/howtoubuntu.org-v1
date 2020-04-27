<?php

	$Title_HTML = 'How to Install Linux Kernel 5.6';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Linux Kernel 5.6 includes WireGuard support to replace OpenVPN, USB4 as an open implementation of the Thunderbolt specification, file-system improvements, espcially to F2FS data compression using LZO/LZ4 algorithms, and a fix for 2K38 18-years early. Hardware improvements are AMD Zen power and temperature reporting, and open-source drivers for Nvidia RTX 2xxx';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install linux kernel headers 5.6';

	$Featured_Image = '';

	$Canonical = 'how-to-install-linux-kernel-5-6-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = 'Kernels';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {
	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_1_of_5"><br></div>
		<div class="col span_3_of_5">
			<h2>How to Install Linux Kernel 5.6</h2>
			<p>Linux Kernel 5.6 includes WireGuard support to replace OpenVPN, USB4 as an open implementation of the Thunderbolt specification, file-system improvements, espcially to F2FS data compression using LZO/LZ4 algorithms, and a fix for 2K38 18-years early.</p>
			<p>Hardware improvements are AMD Zen power and temperature reporting, and open-source drivers for Nvidia RTX 2xxx.</p>
			<h3>Important Notes</h3>
			<p>This script will attempt to install Linux Kernel 5.6 on this machine. Typically, your current version will be kept, and you will be able to utilize it again later if Linux Kernel 5.6 does not work. However, it is possible, if unlikely, that this script will render your system inoperable on with certain software installed, or with certain hardware configurations. How to Ubuntu does not offer any guarantees whatsoever, but it worked for us. Use with care (especially around UEFI).</p>
			<p>Also, note that your system will be running a package that it is unlikely to receive updates for, and that you will have to manually check for subsequent versions on How to Ubuntu.</p>
			<p>Finally, it should be noted that this script will automatically determine your system architecture, choosing the i386 packages for a 32bit system and amd64 packages for a 64bit system. ARM-type processors are not supported.</p>
			<h3>Script</h3>
<textarea class="resize code">echo " " &&
echo "This script will attempt to install Linux Kernel 5.6 on this machine." &&
echo "Typically, your current version will be kept, and you will be able to ustilise it again later if Kernel 5.6 does not work." &&
echo " " &&
read -p "Press Enter to continue, or abort by pressing CTRL+C" nothing &&
echo " " &&
echo "Downloading Kernel 5.6 Packages" &&
echo "4 Files, ~71 MB to Download" &&
echo " " &&
echo "Creating Kernel Directory in Home folder" &&
echo " " &&
mkdir -p $HOME/howtoubuntu-kernel-5-6 &&
cd $HOME/howtoubuntu-kernel-5-6 &&
echo " " &&
echo "Downloading File 1 of 4, 11 MB" &&
echo " " &&
wget https://kernel.ubuntu.com/~kernel-ppa/mainline/v5.6.6/linux-headers-5.6.6-050606_5.6.6-050606.202004210831_all.deb &&
echo " " &&
echo "64bit Detected" &&
echo " " &&
echo "Downloading File 2 of 4, 1 MB" &&
echo " " &&
wget https://kernel.ubuntu.com/~kernel-ppa/mainline/v5.6.6/linux-headers-5.6.6-050606-generic_5.6.6-050606.202004210831_amd64.deb &&
echo " " &&
echo "Downloading File 3 of 4, 9 MB" &&
wget https://kernel.ubuntu.com/~kernel-ppa/mainline/v5.6.6/linux-image-unsigned-5.6.6-050606-generic_5.6.6-050606.202004210831_amd64.deb &&
echo " " &&
echo "Downloading File 4 of 4, 50 MB" &&
wget https://kernel.ubuntu.com/~kernel-ppa/mainline/v5.6.6/linux-modules-5.6.6-050606-generic_5.6.6-050606.202004210831_amd64.deb &&
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
sudo rm -rf $HOME/howtoubuntu-kernel-5-6</textarea>
		</div>
		<div class="col span_1_of_5"><br></div>
	</div>

<?php require '../footer.php'; } ?>
