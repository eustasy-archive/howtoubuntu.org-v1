<?php

	$Title_HTML = 'How to Install LAMP on Ubuntu';
	$Title_Plain = $Title_HTML;

	$Description_HTML = 'The following tutorial presumes you understand what a LAMP Server is, how to work a website from the back end and how to install software using either the Software Centre or the Terminal. It also expect experience running other Basic Terminal Commands.';
	$Description_Plain = $Description_HTML;

	$Keywords = 'install lamp stack linux apache mysql php check restart server';

	$Featured_Image = '';

	$Canonical = 'how-to-install-lamp-on-ubuntu';

	$Post_Type = 'Blog Post';
	$Post_Category = '';

	require_once __DIR__.'/../request.php';

if ($Request['path'] === $Place['path'].$Canonical) {
	require '../header.php';
	?>

	<div class="section group">
		<div class="col span_5_of_11">
			<p>The following tutorial presumes you understand what a LAMP Server is, how to work a website from the back end and how to install software using either the Software Centre or the Terminal. It also expect experience running other Basic Terminal Commands.</p>
			<p>There is also an <a href="https://www.digitalocean.com/community/articles/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu">excellent article on Digital Ocean</a> that may be of more relevance if you are working on a remote or public facing server.</p>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_5_of_11">
			<div id="contents" class="box">
				<h3>Contents</h3>
				<div class="section group">
					<div class="col span_1_of_3">
						<p><a href="#install-apache">1. Install Apache</a></p>
						<p><a href="#restart-server">4. Restart Server</a></p>
					</div>
					<div class="col span_1_of_3">
						<p><a href="#install-mysql">2. Install MySQL</a></p>
						<p><a href="#check-apache">5. Check Apache</a></p>
					</div>
					<div class="col span_1_of_3">
						<p><a href="#install-php">3. Install PHP</a></p>
						<p><a href="#check-php">6. Check PHP</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_3_of_11">
			<h3 id="install-apache">1. Install Apache</h3>
			<p>To install Apache you must install the Metapackage <span class="box">apache2</span>. This can be done by searching for and installing in the Software Centre, or by running the following command.</p>
			<input type="text" class="code" value="sudo apt-get install apache2">
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<h3 id="install-mysql">2. Install MySQL</h3>
			<p>To install MySQL you must install the Metapackage <span class="box">mysql-server</span>. This can be done by searching for and installing in the Software Centre, or by running the following command.</p>
			<input type="text" class="code" value="sudo apt-get install mysql-server">
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<h3 id="install-php">3. Install PHP</h3>
			<p>To install PHP you must install the Metapackages <span class="box">php5</span> and <span class="box">libapache2-mod-php5</span>. This can be done by searching for and installing in the Software Centre, or by running the following command.</p>
			<input type="text" class="code" value="sudo apt-get install php5 libapache2-mod-php5">
		</div>
	</div>
	<br>
	<div class="section group">
		<div class="col span_3_of_11">
			<h3 id="restart-server">4. Restart Server</h3>
			<p>Your server should restart Apache automatically after the installation of both MySQL and PHP. If it doesn't, execute this command.</p>
			<input type="text" class="code" value="sudo /etc/init.d/apache2 restart">
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_3_of_11">
			<h3 id="check-apache">5. Check Apache</h3>
			<p>Open a web browser and navigate to <a href="http://localhost/">http://localhost/</a>. You should see a message saying <span class="box">It works!</span></p>
		</div>
		<div class="col span_3_of_11">
		<div class="col span_1_of_11"><br></div>
			<h3 id="check-php">6. Check PHP</h3>
			<p>You can check your PHP by executing any PHP file from within <span class="box">/var/www/</span>. Alternatively you can execute the  following command, which will make PHP run the code without the need for creating a file .</p>
			<input type="text" class="code" value="php -r 'echo &quot;\n\nYour PHP installation is working fine.\n\n\n&quot;;''">
		</div>
	</div>
	<br>
	<h3>Congratulations, you have just Installed a Ubuntu LAMP Server!</h3>

	<?php
	require '../footer.php';
}
