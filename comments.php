<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please don\'t load this page directly!');

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	
	<h3 id="comments"><?php comments_number('0 comments','1 comment','% comments'); ?></h3>
	
	<ul class="commentlist">
	
	<?php foreach ($comments as $comment) : ?>
		
		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			
			<?php if (get_comment_author_url() != '') : ?>
			<a href="<?php comment_author_url(); ?>"><img alt="<?php comment_author(); ?>" class="gravatar" src="http://www.gravatar.com/avatar.php?gravatar_id=<? echo md5($comment->comment_author_email); ?>&default=http%3A%2F%2Fwww.vinch.be%2Fattic%2Fblank_gravatar.png&size=50&rating=G" /></a>
			<?php else : ?>
				<img alt="<?php comment_author(); ?>" class="gravatar" src="http://www.gravatar.com/avatar.php?gravatar_id=<? echo md5($comment->comment_author_email); ?>&default=http%3A%2F%2Fwww.vinch.be%2Fattic%2Fblank_gravatar.png&size=50&rating=G" />
			<?php endif; ?>
				<div class="meta">
					<strong class="author"><?php comment_author_link() ?></strong>
					<span class="date"><a href="#comment-<?php comment_ID() ?>"><?php comment_date('d F Y') ?> @ <?php comment_time('H:i') ?></a></span>
				</div>
				<div class="comment_content">
					<?php if ($comment->comment_approved == '0') : ?>
					<em>This comment is awaiting moderation.</em>
					<?php endif; ?>
					<?php comment_text() ?>
				</div>

		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ul>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">Leave a comment</h3>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<p>
  <input class="text"  type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="Name" />
</p>

<p>
  <input class="text"  type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="Email" />
</p>

<p>
  <input class="text" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" placeholder="Website (optional)" />
</p>

<p>
  <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" placeholder="Write your comment here..."></textarea>
</p>

<p><input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // if you delete this the sky will fall on your head ?>
