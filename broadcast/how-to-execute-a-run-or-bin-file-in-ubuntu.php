<?php

	$TextTitle = 'How to Execute a .Run or .Bin file in Ubuntu';
	$WebTitle = 'How to Execute a .Run or .Bin file in Ubuntu';
	$Canonical = 'how-to-execute-a-run-or-bin-file-in-ubuntu';
	$PostType = 'Post';
	$FeaturedImage = '';
	$Description = '.Run or .Bin files are probably the only file types you will ever need to mark as executable in normal use of Ubuntu. There are two ways to execute them (which usually installs something), either in the terminal, or graphically (which usually relies on the terminal somewhat as well).';
	$Keywords = 'execute run bing .run .bin file install';

	require '../request.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

	<div class="section group">
		<div class="col span_3_of_11"><br></div>
		<div class="col span_5_of_11">
			<h2>How to Execute a .Run or .Bin file</h2>
			<p>.Run or .Bin files are probably the only file types you will ever need to mark as executable in normal use of Ubuntu. There are two ways to execute them (which usually installs something), either in the terminal, or graphically (which usually relies on the terminal somewhat as well). Whichever you choose, read the red warnings below.</p>
		</div>
		<div class="col span_3_of_11"><br></div>
	</div>
	<div class="section group">
		<div class="col span_5_of_11">
			<h3 id="warnings" class="red">Warnings</h3>
			<p class="red">.Run and .Bin files are fairly easy to execute or install, but can be notoriously difficult to remove. This depends on the developer. They also can be downloaded from anywhere, and made by anyone, so make sure you or other people have experience and therefore trust of the source. You should check any uninstall procedures before proceeding with these instructions.</p>
			<p class="red">Some .Run and .Bin files require root permissions to run, using the <span class="box">sudo</span> command. Remember that root access means the file has full access to your system and could potentially damage its stability and security.</p>
			<h3>Terminal</h3>
			<p>First, open the Terminal, then mark the file as executable with the <span class="box">chmod</span> command.</p>
			<p class="code">chmod +x <span class="editable">file-name.run</span></p>
			<p>Now you can execute the file in the terminal.</p>
			<p class="code">./<span class="editable">file-name.run</span></p>
			<p>If an error message including a problem such as 'permission denied' appears, use <span class="box">sudo</span> to run it as root (admin). Be careful, <span class="box">sudo</span> allows you to make critical changes to your system. Many software installs will require <span class="box">sudo</span>.</p>
			<p class="code">sudo ./<span class="editable">file-name.run</span></p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<h3 id="easy">Beginner (easy)</h3>
			<h4 id="before">Before Executing</h4>
			<a class="fancybox" title="Edit" href="assets/images/how-to-execute-a-run-or-bin-file-in-ubuntu/Screenshot-from-2012-06-04-182041.png"><img src="assets/images/how-to-execute-a-run-or-bin-file-in-ubuntu/Screenshot-from-2012-06-04-182041.png" alt="Allow Executing as a Program" title="Allow Executing as a Program"></a>
			<p>First, move the .Run or .Bin file to your Home folder. This is just precautionary. Second, Right-click on the file and select <span class="box">Properties</span>. Under the <span class="box">Permissions</span> tab, tick the checkbox near the bottom labeled <span class="box">Allow executing file as program</span>. Click <span class="box">Apply Permissions</span>. Then Close the Properties Window.</p>
			<h4 id="executing">Executing</h3>
			<p>Double-click the .Run or .Bin file. If not action appears to be happening, right-click and select <span class="box">Run in Terminal</span>. A purple window with white text will open. This is the terminal. Do not worry if it takes a few seconds to appear, this is normal. Answer any questions using the <span class="box">Tab</span>, <span class="box">Arrow</span>, <span class="box">Space</span>, and <span class="box">Enter</span> keys.</p>
		</div>
	</div>

	<h3>Congratulations, you have just Executed a .Run or .Bin file in Ubuntu!</h3>

<?php require '../footer.php'; } ?>
