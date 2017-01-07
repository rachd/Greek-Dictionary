<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h4><?php the_title()?></h4>
						<?php $cases = get_field('cases_governed');
							foreach ($cases as $case) {
								echo '<p>(+' . $case . ') ' . get_field(strtolower($case)) . '</p>';
							}
						?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>