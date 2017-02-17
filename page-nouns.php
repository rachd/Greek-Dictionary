<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title() ?></h1>
				</div>
			</div>

			<?php $loop = new WP_Query( array( 'post_type' => 'noun') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="row">
					<div class="col-xs-12">
						<h4>
							<?php the_title()?>, 
							<?php $gender = get_field('gender'); 
							switch ($gender) {
							    case "Male":
							        echo "ὁ";
							        break;
							    case "Female":
							        echo "ἡ";
							        break;
							    case "Neuter":
							        echo "τό";
							        break;
							}
							?>
							<?php $term = get_field('noun_type'); 
							if( $term ): ?>
								<span class="noun-type">(<?php echo $term->name; ?>)</span>
							<?php endif; ?>
						</h4>
						<p><?php the_field('definition')?></p>
						<table>
							<tr>
								<td></td>
								<td>Singular</td>
								<td>Plural</td>
							</tr>
							<tr>
								<td>Nominative</td>
								<td><?php the_field('nominative_singular')?></td>
								<td><?php the_field('nominative_plural')?></td>
							</tr>
							<tr>
								<td>Accusative</td>
								<td><?php the_field('accusative_singular')?></td>
								<td><?php the_field('accusative_plural')?></td>
							</tr>
							<tr>
								<td>Genitive</td>
								<td><?php the_field('genitive_singular')?></td>
								<td><?php the_field('genitive_plural')?></td>
							</tr>
							<tr>
								<td>Dative</td>
								<td><?php the_field('dative_singular')?></td>
								<td><?php the_field('dative_plural')?></td>
							</tr>
							<tr>
								<td>Vocative</td>
								<td><?php $vocativeSingular = get_field('vocative_singular');
									if ($vocative_singular == ""): 
										echo the_field('nominative_singular');
									else:
										echo the_field('vocative_singular');
									endif; ?>
								</td>
								<td><?php $vocativePlural = get_field('vocative_singular');
									if ($vocative_plural == ""): 
										echo the_field('nominative_plural');
									else:
										echo the_field('vocative_plural');
									endif; ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>