<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Article">
<head>

	<meta charset="utf-8">
	<meta name="description" content="<?php echo $Description_Plain; ?>">
	<meta name="keywords" content="<?php echo $Keywords . ' ' . $Sitewide_Title; ?>">
	<meta itemprop="name" content="<?php echo $Title_Plain; ?>">
	<meta itemprop="description" content="<?php echo $Description_Plain; ?>">
	<meta itemprop="image" content="<?php echo $Featured_Image; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<title><?php echo $Title_Plain . ' &nbsp;&middot;&nbsp; ' . $Sitewide_Title; ?></title>

	<link rel="canonical" href="<?php echo $Sitewide_Root.$Canonical; ?>">
	<link rel="icon" href="<?php echo $Sitewide_Root; ?>favicon.ico">
	<link rel="shortcut icon" href="<?php echo $Sitewide_Root; ?>favicon.ico">
	<link rel="stylesheet prefetch" type="text/css" media="all" href="//fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:300,300italic,400">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/combined.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $Sitewide_Root; ?>assets/css/htu.css">

	<!-- Google Analytics -->
	<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-45667989-2','howtoubuntu.org');ga('send','pageview');</script>

	<!-- jQuery with JQi -->
	<script>var jQl={q:[],dq:[],gs:[],ready:function(a){'function'==typeof a&&jQl.q.push(a);return jQl},getScript:function(a,c){jQl.gs.push([a,c])},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},ungs:function(){for(var a=0;a<jQl.gs.length;a++)jQuery.getScript(jQl.gs[a][0],jQl.gs[a][1]);jQl.gs=[]},bId:null,boot:function(a){'undefined'==typeof window.jQuery.fn?jQl.bId||(jQl.bId=setInterval(function(){jQl.boot(a)},25)):(jQl.bId&&clearInterval(jQl.bId),jQl.bId=0,jQl.unqjQdep(),jQl.ungs(),jQuery(jQl.unq()), 'function'==typeof a&&a())},booted:function(){return 0===jQl.bId},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement('script');b.src=a;document.getElementsByTagName('head')[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){a&&('undefined'!==typeof window.jQuery.fn&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a))},unqjQdep:function(){if('undefined'==typeof window.jQuery.fn)setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]); jQl.dq=[]}},rs:function(a){var c=document.createElement('script');document.getElementsByTagName('head')[0].appendChild(c);c.text=a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){4!=b.readyState||200!=b.status||c(b.responseText,a)};try{b.open('GET',a,!0),b.send('')}catch(d){}},getxo:function(){var a=!1;try{a=new XMLHttpRequest}catch(c){for(var b=['MSXML2.XMLHTTP.5.0','MSXML2.XMLHTTP.4.0','MSXML2.XMLHTTP.3.0','MSXML2.XMLHTTP','Microsoft.XMLHTTP'],d=0;d<b.length;++d){try{a= new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}};if('undefined'==typeof window.jQuery){var $=jQl.ready,jQuery=$;$.getScript=jQl.getScript};</script>
	<!-- If pre-9 IE, use legacy jQuery and add in Selectivizr -->
	<!--[if lt IE 9]>
		<script>jQl.loadjQ('//cdn.jsdelivr.net/g/selectivizr,modernizr,prefixfree,jquery@1.11.0,colorbox,jquery.autosize,jquery.equalize,jquery.downboy');</script>
	<![endif]-->
	<!-- Else, just play it cool and load stuff -->
	<!--[if IE 9]><!-->
		<script>jQl.loadjQ('//cdn.jsdelivr.net/g/modernizr,prefixfree,jquery,colorbox,jquery.autosize,jquery.equalize,jquery.downboy');</script>
	<!--<![endif]-->

	<!-- Initialize -->
	<script>
		$(function() {
			// Colorbox
			$('.fancybox, .colobox, .gallery').colorbox({rel:'gallery'});
			$('.fancybox-media, .youtube').colorbox({ iframe: true, width: 1280, height: 720 });
			// Code select-all functions
			$('input.code').one('click', function() { $(this).select(); });
			$('input.code').dblclick(function() { $(this).select(); });
			$('textarea.code').one('click', function() { $(this).select(); });
			$('textarea.code').dblclick(function() { $(this).select(); });
			// Autosize Textarea
			$('textarea.resize').autosize();
			// Equalize Columns
			equalize();
			downBoy();
			window.onresize = function() {
				equalize();
				downBoy();
			}
		});
	</script>

</head>

<body>

	<div id="skiptomain"><a href="#content">skip to main content</a></div>

	<header class="group">
		<div class="col span_1_of_2">
			<h1><a href="<?php echo $Sitewide_Root.'">'.$Sitewide_Title; ?></a></h1>
		</div>
		<div class="col span_1_of_2 search">
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
