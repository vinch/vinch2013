</div>

<footer>
	<div class="inner">
		<a href="#browse" class="more">+</a>
		<div id="browse">
			<strong>Categories</strong> ·
			<ul><?php wp_list_categories('show_count=1&title_li') ?></ul>
			<br /><strong>Archives</strong> ·
			<?php wp_get_archives('type=monthly&show_post_count=1') ?>
		</div>
	</div>
</footer>

<div id="google_translate_element"></div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/_js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/_js/peep.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/_js/vinch.js"></script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
	_uacct = "UA-192063-2";
	urchinTracker();
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, gaTrack: true, gaId: 'UA-192063-2'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>