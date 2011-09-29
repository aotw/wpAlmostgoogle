<?php get_header(); ?>

<div class="component share">
  <ul>
    <li><a href="#"><div class="buzz"><img src="<?php bloginfo('template_directory'); ?>/images/social/buzz.png"></div><p><span>Buzz</span></p></a></li>
    <li><a href="#"><div class="twitter"><img src="<?php bloginfo('template_directory'); ?>/images/social/twitter.png"></div><p><span>Twitter</span></p></a></li>
    <li><a href="#"><div class="fb"><img src="<?php bloginfo('template_directory'); ?>/images/social/fb.png"></div><p><span>Facebook</span></p></a></li>
    <li><a href="#"><div class="mail"><img src="<?php bloginfo('template_directory'); ?>/images/social/mail.png"></div><p><span>Email</span></p></a></li>
  </ul>
</div>


	<div class="canvas">

<h1 class="headline"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<h2 class="description"><?php bloginfo('description'); ?></h2>
		


	<ul>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<li>
		
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry info">
				<?php the_content(); ?>
			</div><!--entry-->

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				<?php the_category(', ') ?>  
				
			</div><!--postMeta-->
		
		</div><!--post-->
		
		</li>
		
	<?php endwhile; ?>
	
	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
		
	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
		</ul>



	</div><!--canvas-->
	</div>


<?php get_footer(); ?>



