<?php

	$TextTitle = 'How to Install Skype Wrapper and Integrate Skype into Ubuntu';
	$WebTitle = 'How to Install Skype Wrapper and Integrate Skype into Ubuntu';
	$Canonical = 'how-to-install-skype-wrapper-and-integrate-skype-into-ubuntu';
	$FeaturedImage = '';
	$Description = 'If you\'ve used Skype then you may have come across some of the patchy integration that is now Microsoft\'s problem. While they take their time fixing that, there is, in typical Linux fashion, a home-grown alternative. Skype Wrapper gives you tighter integration into Ubuntu and Unity via a convenient python app.';
	$Keywords = 'install skype-wrapper skype wrapper integrate unity';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<h2>How to Install Skype Wrapper and Integrate Skype into Ubuntu</h2>

	<div class="section group">
		<div class="col span_1_of_2">
			<p>If you've used Skype then you may have come across some of the patchy integration that is now Microsoft's problem. While they take their time fixing that, there is, in typical Linux fashion, a home-grown alternative. Skype Wrapper gives you tighter integration into Ubuntu and Unity via a convenient python app.</p>
			<p>You also might want to <a href="how-to-install-or-upgrade-to-the-latest-version-of-skype-in-ubuntu">Install or Upgrade to the latest version of Skype</a>.</p>
		</div>
		<div class="col span_1_of_2">
			<div class="contents box">
				<h3 id="contents">Contents</h3>
				<p><a href="#terminal">1. a) Add Source in the Terminal</a></p>
				<p><a href="#add">1. b) Add Source in the Update Manager</a></p>
				<p><a href="#install">2. Install</a></p>
				<p><a href="#use">3. Using it</a></p>
			</div>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="terminal">1. a) Add the Source in the Terminal</h3>
			<p>Open the terminal, and execute the following line of code.</p>
			<input type="text" class="code" value="sudo add-apt-repository -y ppa:skype-wrapper/ppa && sudo apt-get -qq update">
			<p>This will add the Software Source, check it, and install the package you want, automatically confirming any changes.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="add">Add the Source in the Update Manager</h3>
			<p>If you're not comfortable using the terminal to add software sources, or get easily scared by large amounts of text, you can add the source and check it in the <span class="box">Update Manager</span>.</p>
			<p>First, in the <span class="box">Update Manager</span>, click <span class="box">Settings</span>, then select the tab <span class="box">Other Software</span>. Finally, click <span class="box">Add...</span> and paste the line below. Exiting the settings window, click <span class="box">Check</span>.</p>
			<input type="text" class="code" value="deb http://ppa.launchpad.net/skype-wrapper/ppa/ubuntu precise main">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="install">2. Install</h3>
			<p>Now open <span class="box">Synaptic Package Manager</span> (you can <a href="apt:synaptic">Install Synaptic Package Manager</a> if you don't already have it), enter for <span class="box">skype</span> in the search box (top, centre), and <span class="box">Right-Click</span> and <span class="box">Mark for Installation</span> the package <span class="box">skype-wrapper</span>.</p>
			<p>Then, hit the <span class="box">Apply</span> button (a tick to the left of the search box). If it's not already, you may wish to check the <span class="box">Close this Window when finished.</span>. This will close the pop-up, but not Synaptic upon completion.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="use">3. Using it</h3>
			<p>First, open Skype however you usually do.</p>
			<p>Then, hold the <span class="box">Alt</span> key and press <span class="box">F2</span>.</p>
			<p>Type <span class="box">skype-wrapper</span> and hit enter into the resulting Unity layover.</p>
			<p>A pop-up will appear over the Skype window, tick the check-box to allow the Skype Wrapper to access Skype all the time.</p>
		</div>
	</div>
	<h3>Congratulations, you have just Installed Skype Wrapper and Integrated Skype into Ubuntu!</h3>

<?php require '../footer.php'; } ?>
