<?php get_header(); ?>

<div id="content">
	
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post() ?>
		
		<?php 
			$diff = abs(time() - strtotime(get_the_time('Y-m-d')));
			$years = floor($diff / (365*60*60*24));
		?>

		<article id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<div class="date_category">
				<span class="date"><?php the_time('m/d/y') ?></span> &#8226; <span class="category"><?php the_category('') ?></span>
			</div>
			<div class="content">
				<?php if ($years > 0) : ?>
					<p class="disclaimer">This post is more than <?= ($years == 1) ? 'one year old' : $years.' years old' ?>. It might not reflect my current skills and convictions.</p>
				<?php endif; ?>
				<?php the_content(''); ?>
			</div>
			<div class="social">
        <div class="share" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
				<a href="<?php comments_link() ?>" class="social_comments social_link"><strong><?php comments_number('0','1','%') ?></strong></a>
				<a href="<?php the_permalink() ?>#respond" class="social_respond social_link"><strong>+</strong></a>
			</div>
		</article>
		
		<?php comments_template(); ?>
		
		<?php endwhile; ?>

		<?php if (!is_singular()) : ?>

			<div id="pager">
				<?php previous_posts_link(__('<span id="pager_left" title="Précédent">&laquo; Précédent</span>')) ?>
				<?php next_posts_link(__('<span id="pager_right" title="Suivant">Suivant &raquo;</span>')) ?>
			</div>

		<?php endif; ?>
	
	<?php else : ?>
		
		<div class="nothing">
			<h2 class="page">Sorry...</h2>
			<p class="sorry">There is nothing to see here...</p>
		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
