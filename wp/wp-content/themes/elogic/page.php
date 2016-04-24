<?php
/**
 * Template Name: InnerPage
 */

global $white;
$white = '-white';

get_header(); ?>

	<section class="section -description">
		<div class="base-col">
			<h3 class="description__header"><?php the_title(); ?></h3>
			<img src="<?php echo get_field('image'); ?>" alt="description" class="description__img">
			<p class="img_signature"><?php echo get_field('image_description'); ?></p>
			<div class="description__text">
				<p class="description__head-text"><?php echo get_field('page_description'); ?></p>

				<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					endif;
				?>

				<div class="results">
					<?php
						if( have_rows('results') ):
							while( have_rows('results') ): the_row();
								echo
									'<div class="result--item">
										<h3>'.get_sub_field('headline').' <span>'.get_sub_field('sub_headline').'</span></h3>
										<p>'.get_sub_field('description').'</p>
									</div>';
							endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>


<?php
get_footer();
?>
