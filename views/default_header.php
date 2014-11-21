<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $title ?> - Chris Horak | Web Designer &amp; Developer</title>
		<meta name="description" content="<?= $description ?>">
		<meta name="keywords" content="chris, christopher, horak, web design, web development, designer, developer, <?= $keywords ?>">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="stylesheet" href="/css/style.css">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-25844251-5', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<header class="page-header <?= !empty($header_class) ? $header_class : '' ?>">
			<div class="anchor">
				<nav id="toggle-nav">
					<a href="/" class="logo">
						<img src="/img/logo@2x.png" alt="" class="logo-img">
					</a>

					<a href="#toggle-nav" title="Menu" class="menu-icon menu-icon--open">
						<img src="/img/menu-icon@2x.png" alt="">
					</a>
					<a href="#" title="Close Menu" class="menu-icon menu-icon--close">
						<img src="/img/close-menu-icon@2x.png" alt="">
					</a>

					<ul class="top-nav">
						<li><a href="/">Home</a></li>
						<li><a href="/portfolio">Portfolio</a></li>
						<li><a href="/resume">Resume</a></li>
						<li><a href="mailto:chris@chrishorak.com">Contact</a></li>
					</ul>
					<div class="clear"></div>
				</nav>
				
				<?php if (empty($header_class) || $header_class != 'page-header--small') { ?>
				<h1 class="page-headline"><?= $header_headline ?></h1>
				<p class="page-desc"><?= $header_description ?></p>
				<?php } ?>
			</div>
		</header>