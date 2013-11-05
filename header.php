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

	<link rel="canonical" href="<?php echo $Request['scheme'].'://'.$Request['host'].'/'.$Canonical; ?>">
	<link rel="icon" href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/favicon.ico">
	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:300,300italic,400">
	<link rel="stylesheet" media="all" href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/assets/css/col.min.css">
	<link rel="stylesheet" media="all" href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/assets/css/simplet.css">
	<link rel="stylesheet" media="all" href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/assets/css/htu.css">

	<script>var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-28932148-2"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>

	<script async src="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/assets/js/modernizr.min.js"></script>
	<!--[if (lt IE 9) & (!IEMobile)]><script src="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/assets/selectivizr.min.js"></script><![endif]-->

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
		<nav class="section group span_1_of_1">
			<div class="col span_1_of_3"><a href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/about">About</a></div>
			<div class="col span_1_of_3"><a href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/countdown">Countdown</a></div>
			<div class="col span_1_of_3"><a href="<?php echo $Request['scheme'].'://'.$Request['host']; ?>/contribute">Contribute</a></div>
		</nav>
	</header>

	<div id="content" class="top">

		<div class="ad-banner">
			<script src="//serve.adsi.st/javascript.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Banner&AdsistAdSize=Leaderboard"></script>
			<noscript><iframe src="//serve.adsi.st/iframe.php?AdsistMemberID=lewisgoddard&AdsistAdClass=Banner&AdsistAdSize=Leaderboard"></iframe></noscript>
			<p class="right about-ads"><a href="http://eustasy.org/advertisements">Why are there ads?</a></p>
		</div>
