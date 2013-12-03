<!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('/', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="Le blog de Vincent Battaglia" href="http://feeds.feedburner.com/vinch" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <script type="text/javascript" src="http://use.typekit.com/pek2yuw.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <meta name="google-translate-customization" content="d2cb1b370495bdd2-939990c76313e922-gef469feeccf0a079-c" />
	<meta name="google-site-verification" content="fu4OZZhZ-OTLDfSe2syR1Y620bAiXFYhfNlO0XQh3SE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body <?php body_class(); ?>>

<header>
	<h1><a href="<?php bloginfo('url'); ?>/">Hello, I’m <strong>Vinch</strong></a></h1>
	<div class="subtitle">And this is my blog.</div>
</header>

<nav>
	<div class="inner">
		<a href="http://v1n.ch/about">About</a> ·
		<a href="<?php bloginfo('url'); ?>/contact">Contact</a> ·
		<a href="#" id="search_link">Search</a>
	</div>
</nav>

<div id="search">
	<form method="get" action="<?php bloginfo('url'); ?>/">
		<input type="text" name="s" autocomplete="off" />
	</form>
</div>

<div id="container">