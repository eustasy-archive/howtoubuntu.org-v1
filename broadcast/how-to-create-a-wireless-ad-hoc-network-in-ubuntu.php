<?php

	$Title_HTML = 'How to Create a Wireless Ad-Hoc Network in Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'Sometimes, either when connected via a Wired Connection or USB Dongle, you may want to use your computers Wi-Fi to create a Network to share your internet connection over. Such networks are commonly referred to as Ad-Hoc, and we detail below some simple instructions on how to create one.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'create wireless ad hoc ad-hoc adhoc network';

	$Featured_Image = '';

	$Canonical = 'how-to-create-a-wireless-ad-hoc-network-in-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {

	require '../header.php'; ?>

	<h2>How to Create a Wireless Ad-Hoc Network</h2>

	<div class="section group">
		<div class="col span_1_of_2">
			<p>Sometimes, either when connected via a Wired Connection or USB Dongle, you may want to use your computers Wi-Fi to create a Network to share your internet connection over. Such networks are commonly referred to as Ad-Hoc, and we detail below some simple instructions on how to create one.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
		<div class="col span_1_of_3">
			<div class="contents box">
				<h3 id="contents">Contents</h3>
				<div class="section group">
					<div class="col span_1_of_3">
						<p><a href="#create">Create</a></p>
					</div>
					<div class="col span_1_of_3">
						<p><a href="#edit">Edit</a></p>
					</div>
					<div class="col span_1_of_3">
						<p><a href="#delete">Delete</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3 id="create">Create Wireless (Ad-Hoc) Network</h3>
	<div class="section group">
		<div class="col span_1_of_2">
			<p>First, we will start by clicking the Network menu, and disconnecting from any Wireless Networks. Most computers can't handle more than one wireless connection.</p>
			<p>Second we will go to the same menu, and click <span class="box">Create New Wireless Network</span>. Then you will need to enter a Network Name (Service Set Identifier, SSID), select Wireless Security (we recommend a WEP 128-bit Passphrase, the default), and enter a Passphrase.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
		<div class="col span_1_of_3">
			<a class="fancybox" title="New Network Details" href="assets/images/how-to-create-a-wireless-ad-hoc-network-in-ubuntu/NewNetworkDetails.png"><img class="round" src="assets/images/how-to-create-a-wireless-ad-hoc-network-in-ubuntu/NewNetworkDetails.png" alt="New Network Details" title="New Network Details"></a>
		</div>
	</div>
	<h3 id="edit">Edit Network</h3>
	<div class="section group">
		<div class="col span_1_of_3">
			<a class="fancybox" title="Edit Network" href="assets/images/how-to-create-a-wireless-ad-hoc-network-in-ubuntu/EditNetwork.png"><img class="round" src="assets/images/how-to-create-a-wireless-ad-hoc-network-in-ubuntu/EditNetwork.png" alt="Edit Network" title="Edit Network"></a>
		</div>
		<div class="col span_1_of_6"><br></div>
		<div class="col span_1_of_2">
			<p>Access the Network menu again, and click the bottom item, <span class="box">Edit Connections</span>.</p>
			<p>Then, select your newly created network and click <span class="box">Edit</span> in the right-hand column.</p>
			<p>From there, you can change the Network Name, Security Settings and Passphrase.</p><p>You can also modify more advanced settings like the Band and Channel, IPv4 and IPv6, MAC addresses, Basic SSID (BSSID), MTU, Automatic Connection (Creation), and the Availability of this to other users on your machine.</p>
		</div>
	</div>
	<h3 id="delete">Delete Network</h3>
	<div class="section group">
		<div class="col span_1_of_2">
			<p>Much the same as <a href="#edit">Editing a Network</a>, Deleting one simply requires you to click the network icon, choose <span class="box">Edit Connections</span>, select the Network you wish to delete, and then click <span class="box">Delete</span> from the right-hand column.</p>
		</div>
		<div class="col span_1_of_6"><br></div>
		<div class="col span_1_of_3">
			<a class="fancybox" title="Delete Network" href="assets/images/how-to-create-a-wireless-ad-hoc-network-in-ubuntu/DeleteNetwork.png"><img class="round" src="assets/images/how-to-create-a-wireless-ad-hoc-network-in-ubuntu/DeleteNetwork.png" alt="Delete Network" title="Delete Network"></a>
		</div>
	</div>
	<h3>Congratulations, you have just Created a Wireless (Ad-Hoc) Network in Ubuntu!</h3>

<?php require '../footer.php'; } ?>
