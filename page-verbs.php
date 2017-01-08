<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title() ?></h1>
				</div>
			</div>
			<div class="row">
				<?php 
					$args = array(
						'post_type'	=> 'verb',
						'orderby'	=> 'title',
						'order'		=> 'ASC'	
					);
					$loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-xs-12 col-sm-4 entry">
						<h4><?php the_title()?></h4>
						<p><?php the_field('definition')?></p>
						<table>
							<tr>
								<td></td>
								<td colspan=3 class="table-label">Present Active</td>
							</tr>
							<tr>
								<td></td>
								<td class="table-label">Indicative</td>
								<td class="table-label">Imperative</td>
							</tr>
							<tr>
								<td class="table-label">1st Singular</td>
								<td><?php the_field('present_indicative_active_first_singular')?></td>
								<td></td>
							</tr>
							<tr>
								<td class="table-label">2nd Singular</td>
								<td><?php the_field('present_indicative_active_second_singular')?></td>
								<td><?php the_field('present_imperative_active_singular')?></td>
							</tr>
							<tr>
								<td class="table-label">3rd Singular</td>
								<td><?php the_field('present_indicative_active_third_singular')?></td>
								<td></td>
							</tr>
							<tr></tr>
							<tr>
								<td class="table-label">1st Plural</td>
								<td><?php the_field('present_indicative_active_first_plural')?></td>
								<td></td>
							</tr>
							<tr>
								<td class="table-label">2nd Plural</td>
								<td><?php the_field('present_indicative_active_second_plural')?></td>
								<td><?php the_field('present_imperative_active_plural')?></td>
							</tr>
							<tr>
								<td class="table-label">3rd Plural</td>
								<td><?php the_field('present_indicative_active_third_plural')?></td>
								<td></td>
							</tr>
						</table>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>