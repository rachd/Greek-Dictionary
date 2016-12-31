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
						<p><?php the_field('definition')?></p>
						<table>
							<tr>
								<td><?php the_field('masculine_nominative_singular')?></td>
								<td><?php the_field('feminine_nominative_singular')?></td>
								<td><?php the_field('neuter_nominative_singular')?></td>
							</tr>
							<tr>
								<td><?php the_field('masculine_accusative_singular')?></td>
								<td><?php the_field('feminine_accusative_singular')?></td>
								<td><?php the_field('neuter_accusative_singular')?></td>
							</tr>
							<tr>
								<td><?php the_field('masculine_genitive_singular')?></td>
								<td><?php the_field('feminine_genitive_singular')?></td>
								<td><?php the_field('neuter_genitive_singular')?></td>
							</tr>
							<tr>
								<td><?php the_field('masculine_dative_singular')?></td>
								<td><?php the_field('feminine_dative_singular')?></td>
								<td><?php the_field('neuter_dative_singular')?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>