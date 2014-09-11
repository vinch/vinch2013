<!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('/', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="Le blog de Vincent Battaglia" href="http://feeds.feedburner.com/vinch" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <script type="text/javascript" src="http://use.typekit.com/pek2yuw.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta name="google-site-verification" content="fu4OZZhZ-OTLDfSe2syR1Y620bAiXFYhfNlO0XQh3SE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<script>
	  (function(s,u,b,hh,uu,bb){
	    uu=document.createElement(u);
	    uu.setAttribute('data-subhub',hh);
	    uu.setAttribute('data-panel',true);
	    uu.async=1;uu.src=b;
	    bb=s.getElementsByTagName(u)[0];
	    bb.parentNode.insertBefore(uu,bb);
	  })(document, 'script',
	    'https://assets.subhub.io/v1/subhub.js',
	    'ae7f8c20-774e-41a2-896d-daccac18a490');
	</script>
</head>
<body <?php body_class(); ?>>

<header>
	<h1><a href="http://v1n.ch">Hello, I’m <strong>Vinch</strong></a></h1>
	<div class="subtitle">And this is my website.</div>
</header>

<nav>
	<div class="inner">
		<a href="http://v1n.ch">Home</a>
		<a href="http://v1n.ch/about">About</a>
		<a href="<?php bloginfo('url'); ?>/" class="active">Blog</a>
		<a href="http://v1n.ch/experiments">Experiments</a>
		<a href="#" class="search fa fa-search"></a>
	</div>
</nav>

<div id="search">
	<form method="get" action="<?php bloginfo('url'); ?>/">
		<input type="text" name="s" autocomplete="off" />
	</form>
</div>

<div id="container">