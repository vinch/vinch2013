<?php get_header(); ?>

<div id="content">
	
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post() ?>
	
		<article id="post-<?php the_ID(); ?>">
			<h2 class="page"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<div class="meta"></div>
			<div class="content">
				<?php the_content(''); ?>
			</div>
		</article>
	
		<?php endwhile; ?>
	
	<?php else : ?>
		
		<div class="nothing">
			<h2 class="page">Tiens donc...</h2>
			<p class="sorry">Désolé, nous n'avons rien trouvé de bon pour vous par ici...</p>
		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
