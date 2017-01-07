<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title() ?></h1>
				</div>
			</div>

			<?php $loop = new WP_Query( array( 'post_type' => 'verb') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="row">
					<div class="col-xs-12">
						<h4><?php the_title()?></h4>
						<p><?php the_field('definition')?></p>
						<table>
							<tr>
								<td></td>
								<td colspan=3>Present Active</td>
							</tr>
							<tr>
								<td></td>
								<td>Indicative</td>
								<td>Imperative</td>
							</tr>
							<tr>
								<td>1st Singular</td>
								<td><?php the_field('present_indicative_active_first_singular')?></td>
								<td></td>
							</tr>
							<tr>
								<td>2nd Singular</td>
								<td><?php the_field('present_indicative_active_second_singular')?></td>
								<td><?php the_field('present_imperative_active_singular')?></td>
							</tr>
							<tr>
								<td>3rd Singular</td>
								<td><?php the_field('present_indicative_active_third_singular')?></td>
								<td></td>
							</tr>
							<tr></tr>
							<tr>
								<td>1st Plural</td>
								<td><?php the_field('present_indicative_active_first_plural')?></td>
								<td></td>
							</tr>
							<tr>
								<td>2nd Plural</td>
								<td><?php the_field('present_indicative_active_second_plural')?></td>
								<td><?php the_field('present_imperative_active_plural')?></td>
							</tr>
							<tr>
								<td>3rd Plural</td>
								<td><?php the_field('present_indicative_active_third_plural')?></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>