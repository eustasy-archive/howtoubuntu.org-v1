
		<div class="clear"></div>
	</div>
	<div class="content bottom"></div>

	<div class="section group content last">
		<div class="col span_6_of_11">
			<h3>Trending</h3>
			<?php
				$Trending = Trending(basename($Canonical), 'Blog Post', 5	);
				foreach ($Trending as $Trending_Canonical => $Trending_Count) {
					if (substr($Trending_Canonical, -1) == '/') require $Trending_Canonical.'index.php';
					else require $Trending_Canonical.'.php';
					echo '
				<p class="textleft"><a href="'.$Sitewide_Root.$Trending_Canonical.'">'.$Title_HTML.' <span class="floatright">'.number_format($Trending_Count).'</span></a></p>';
				}
			?>
			<hr>
			<h3>Social</h3>
			<div class="networks">
				<div class="network google">
					<div class="box">
						<a class="type" target="_blank" href="https://plus.google.com/+HowtoubuntuOrg"><span>Google+</span></a>
						<script type="text/javascript">document.write('<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/117279225305045556184" data-rel="publisher"></div>');</script>
						<noscript><a target="_blank" href="https://plus.google.com/+HowtoubuntuOrg">Circle</a></noscript>
					</div>
				</div>
				<div class="network facebook">
					<div class="box">
						<a class="type" target="_blank" href="http://www.facebook.com/howtoubuntu"><span>Facebook</span></a>
						<script type="text/javascript">document.write('<div class="fb-like" data-href="http://www.facebook.com/howtoubuntu" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>');</script>
						<noscript><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fhowtoubuntu&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=211598199034258" scrolling="no" frameborder="0" style="border:none;overflow:hidden;height:21px;" allowTransparency="true"></iframe></noscript>
					</div>
				</div>
				<div class="network twitter">
					<div class="box">
						<a class="type" target="_blank" href="https://twitter.com/htubuntu"><span>Twitter</span></a>
						<script type="text/javascript">document.write('<a href="https://twitter.com/htubuntu" class="twitter-follow-button" data-show-count="true">Follow @htubuntu</a>');</script>
						<noscript><iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=htubuntu&size=large" style="width:300px; height:20px;"></iframe></noscript>
					</div>
				</div>
				<div class="network youtube">
					<div class="box">
						<a class="type" target="_blank" href="https://www.youtube.com/HowtoUbuntuOrg"><span>YouTube</span></a>
						<script type="text/javascript">document.write('<div class="g-ytsubscribe" data-channel="HowtoubuntuOrg" data-layout="default" data-count="default"></div>');</script>
						<noscript><iframe scrolling="no" src="http://www.youtube.com/subscribe_embed?usegapi=1&bsv=o&channel=HowtoUbuntuOrg&origin=http%3A%2F%2Fhowtoubuntu.org&gsrc=3p&ic=1&jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_GB.Rdkraw0TVFs.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTMianVTDgGh090TyMLDabhESajIJQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&id=I2_1386506353008&parent=http%3A%2F%2Fhowtoubuntu.org&pfname=&rpctoken=36299024" data-gapiattached="true"></iframe></noscript>
					</div>
				</div>
			</div>
			<!-- Google+ and YouTube -->
			<script type="text/javascript">(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='http://apis.google.com/js/platform.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();</script>
			<!-- Twitter -->
			<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
			<!-- Facebook -->
			<div id="fb-root"></div>
			<script type="text/javascript">(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)) return;js=d.createElement(s);js.id=id;js.src='http://connect.facebook.net/en_GB/all.js#xfbml=1&appId=211598199034258';fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>
		</div>
		<div class="col span_1_of_11"><br></div>
		<div class="col span_4_of_11 textcenter">
			<script src="//serve.adsi.st/javascript.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Rectangle&AdsistAdSize=Large"></script>
			<noscript><iframe src="//serve.adsi.st/iframe.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Rectangle&AdsistAdSize=Large"></iframe></noscript>
			<script src="//serve.adsi.st/javascript.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Rectangle&AdsistAdSize=Large"></script>
			<noscript><iframe src="//serve.adsi.st/iframe.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Rectangle&AdsistAdSize=Large"></iframe></noscript>
			<p class="about-ads">Advertisement <a href="http://eustasy.org/advertisements">Why are there ads?</a></p>
		</div>
		<div class="clear"></div>
	</div>

	<footer class="group">

		<div class="col span_2_of_12">
			<a href="http://eustasy.org/" title="eustasy organisation"><img src="http://eustasy.org/images/eustasy-dark.png" class="eustasy"></a>
		</div>

		<div class="col span_1_of_12"><br></div>

		<div class="col span_3_of_12">
			<p class="nomargin textcenter"><a rel="license"  href="http://eustasy.org/licenses#cc">Creative Commons</a></p>
			<p class="nomargin textcenter"><a rel="license"  href="http://eustasy.org/licenses#by">Attribution</a></p>
			<p class="nomargin textcenter"><a rel="license"  href="http://eustasy.org/licenses#nc">Non-Commercial</a></p>
			<p class="nomargin textcenter"><a rel="license"  href="http://eustasy.org/licenses#sa">Share-Alike</a></p>
		</div>

		<div class="col span_1_of_12"><br></div>

		<div class="col span_2_of_12">
			<h4 class="nomargin textcenter">powered by</h4>
			<h2 class="nomargin textcenter"><a href="http://simplet.eustasy.org/">Simplet</a></h2>
			<p class="nomargin textcenter">the file-based blog for github</p>
		</div>

		<div class="col span_1_of_12"><br></div>

		<div class="col span_2_of_12">
			<p class="nomargin"><a href="http://eustasy.org/legal/website-disclaimer" title="Website Disclaimer">disclaimer</a></p>
			<p class="nomargin"><a href="http://eustasy.org/legal/copyright-notice" title="Copyright Notice">copyright</a></p>
			<p class="nomargin"><a href="http://eustasy.org/legal/cookie-policy" title="Cookie Policy">cookies</a></p>
			<p class="nomargin"><a href="http://eustasy.org/legal/privacy-policy" title="Privacy Policy">privacy</a></p>
			<p class="nomargin"><a href="http://eustasy.org/legal/terms-of-service" title="Terms Of Service">terms</a></p>
		</div>

		<div class="clear"></div>

		<p class="textcenter"><a href="http://www.ubuntu.com/">Ubuntu</a>, <a href="http://www.canonical.com/">Canonical</a> and the <a href="http://design.canonical.com/the-toolkit/ubuntu-logo-and-circle-of-friends/">Circle of Friends</a> are registered trademarks of <a href="http://www.canonical.com/">Canonical Ltd</a>.</p>

	</footer>

	<!-- AdCheck -->
	<script src="<?php echo $Sitewide_Root; ?>assets/js/ad.js"></script>

</body>
</html>
