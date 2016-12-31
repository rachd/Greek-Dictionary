<?php get_header();?>
<div id="content" class="site-content">
	<div id="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>