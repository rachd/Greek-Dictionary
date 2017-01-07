<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title() ?></h1>
				</div>
			</div>

			<?php $loop = new WP_Query( array( 'post_type' => 'preposition') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
			<?php endwhile; wp_reset_query(); ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>