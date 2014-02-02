<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Article">
<head>

	<meta charset="utf-8">
	<meta name="description" content="<?php echo $Description; ?>">
	<meta name="keywords" content="<?php echo $Keywords . ' ' . $Sitewide_Title; ?>">
	<meta itemprop="name" content="<?php echo $WebTitle; ?>">
	<meta itemprop="description" content="<?php echo $Description; ?>">
	<meta itemprop="image" content="<?php echo $FeaturedImage; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<title><?php echo $WebTitle . ' &nbsp;&middot;&nbsp; ' . $Sitewide_Title; ?></title>

	<link rel="canonical" href="<?php echo $Sitewide_Root.$Canonical; ?>">
	<link rel="icon" href="<?php echo $Sitewide_Root; ?>favicon.ico">
	<link rel="shortcut icon" href="<?php echo $Sitewide_Root; ?>favicon.ico">
	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:300,300italic,400">
	<link rel="stylesheet" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/reset.col.min.css">
	<link rel="stylesheet" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/htu.css">

	<script async>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-45667989-2', 'howtoubuntu.org');
		ga('send', 'pageview');
	</script>

	<script async src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
	<!--[if (lt IE 9) & (!IEMobile)]><script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script><![endif]-->

	<!-- jQuery -->
	<script>var jQl={q:[],dq:[],gs:[],ready:function(a){'function'==typeof a&&jQl.q.push(a);return jQl},getScript:function(a,c){jQl.gs.push([a,c])},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},ungs:function(){for(var a=0;a<jQl.gs.length;a++)jQuery.getScript(jQl.gs[a][0],jQl.gs[a][1]);jQl.gs=[]},bId:null,boot:function(a){'undefined'==typeof window.jQuery.fn?jQl.bId||(jQl.bId=setInterval(function(){jQl.boot(a)},25)):(jQl.bId&&clearInterval(jQl.bId),jQl.bId=0,jQl.unqjQdep(),jQl.ungs(),jQuery(jQl.unq()), 'function'==typeof a&&a())},booted:function(){return 0===jQl.bId},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement('script');b.src=a;document.getElementsByTagName('head')[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){a&&('undefined'!==typeof window.jQuery.fn&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a))},unqjQdep:function(){if('undefined'==typeof window.jQuery.fn)setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]); jQl.dq=[]}},rs:function(a){var c=document.createElement('script');document.getElementsByTagName('head')[0].appendChild(c);c.text=a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){4!=b.readyState||200!=b.status||c(b.responseText,a)};try{b.open('GET',a,!0),b.send('')}catch(d){}},getxo:function(){var a=!1;try{a=new XMLHttpRequest}catch(c){for(var b=['MSXML2.XMLHTTP.5.0','MSXML2.XMLHTTP.4.0','MSXML2.XMLHTTP.3.0','MSXML2.XMLHTTP','Microsoft.XMLHTTP'],d=0;d<b.length;++d){try{a= new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}};if('undefined'==typeof window.jQuery){var $=jQl.ready,jQuery=$;$.getScript=jQl.getScript};</script>
	<!--[if lt IE 9]>
		<script>jQl.loadjQ('//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js');</script>
	<![endif]-->
	<!--[if IE 9]><!-->
		<script>jQl.loadjQ('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js');</script>
	<!--<![endif]-->

	<!-- Fancybox -->
	<script>
		jQl.loadjQdep('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js');
		jQl.loadjQdep('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js');
		$(function(){
			$('.fancybox').fancybox();
			$('.fancybox-media').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				'padding'	: 0,
				width		: 1072,
				height		: 603,
				helpers : {
					media : {}
				}
			});
		});
	</script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

	<!-- Autosize Textarea -->
	<script>
		jQl.loadjQdep('//cdnjs.cloudflare.com/ajax/libs/autosize.js/1.18.1/jquery.autosize.min.js');
		$(function(){
			$('textarea.resize').autosize();
		});
	</script>

	<!-- jQuery.equalize -->
	<script>
		jQl.loadjQdep('<?php echo $Sitewide_Root; ?>assets/js/jquery.equalize.min.js');
		$(function(){
			equalize();
			window.onresize=function(){equalize()};
		});
	</script>

	<!-- Code select-all functions -->
	<script>
		$(function(){
			$('input.code').one('click', function() { $(this).select(); });
			$('input.code').dblclick(function() { $(this).select(); });
			$('textarea.code').one('click', function() { $(this).select(); });
			$('textarea.code').dblclick(function() { $(this).select(); });
		});
	</script>

</head>

<body>

	<div id="skiptomain"><a href="#content">skip to main content</a></div>

	<header class="group">
		<div class="col span_1_of_3">
			<h1><a href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>"><!--<img src=""> --><?php echo $Sitewide_Title; ?></a></h1>
		</div>
		<div class="col span_2_of_3 search">
			<script>
				(function() {
					var cx = '016342184554362490504:58zeicq5nbc';
					var gcse = document.createElement('script');
					gcse.type = 'text/javascript';
					gcse.async = true;
					gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//www.google.com/cse/cse.js?cx=' + cx;
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(gcse, s);
				})();
			</script>
			<gcse:search></gcse:search>
		</div>
		<nav class="clear">
			<div class="col span_1_of_3"><a href="<?php echo $Sitewide_Root; ?>about">About</a></div>
			<div class="col span_1_of_3"><a href="<?php echo $Sitewide_Root; ?>countdown">Countdown</a></div>
			<div class="col span_1_of_3"><a href="<?php echo $Sitewide_Root; ?>contribute">Contribute</a></div>
		</nav>
	</header>

	<div id="main" class="content top">

		<div class="ad-banner">
			<script src="//serve.adsi.st/javascript.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Banner&AdsistAdSize=Leaderboard"></script>
			<noscript><iframe src="//serve.adsi.st/iframe.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Banner&AdsistAdSize=Leaderboard"></iframe></noscript>
			<p class="about-ads">Advertisement <a href="http://eustasy.org/advertisements">Why are there ads?</a></p>
		</div>
