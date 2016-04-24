<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
	
	<div id="inner-wrapper" class="grid-950">
		<div id="inner-sidebar">
			<?php get_sidebar(); ?>
		</div>

		<div id="inner-content" class="single-post">
			<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
			?>
			<div id="single-intro">
				<p class="section-text"><?php the_title(); ?></p>
				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
						echo '<img src="'.$src[0].'" alt="'.get_the_title().'"/>';
					} 
				?>
				
				<?php if (get_field( "price" ) or get_field("price_agree")) { ?>
					<div class="order">
						<p class="order-price">Цена <span><?php if(get_field("price_agree")) { echo "Договорная"; } else { echo get_field( "price" )."Руб."; } ?></span></p>
						<a href="#" class="order-go" data-toggle="modal" data-target="#myModal">Заказать</a>
					</div>
				<?php } ?>
			</div>

			<div id="single-content">
				<?php
					the_content();
				?>		
			</div>

			<div id="single-compectation">
				<?php echo get_field( "complectation" ); ?>
			</div>	
			
			<div id="single-examples">
				<h2><?php echo get_field( "examples" ); ?></h2>
				<?php
					// check if the repeater field has rows of data
					if( have_rows('img_category') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('img_category') ) : the_row();
					 
					        echo '<h3>'.get_sub_field('subtitle').'</h3>';

							if( have_rows('allimages') ):
								echo '<div class="images_preview">';
							    while ( have_rows('allimages') ) : the_row();
							 		echo '<a href="'.get_sub_field('images').'" data-lightbox="roadtrip"><span></span><img src="'.get_sub_field('images').'" alt=""/></a>';
							    endwhile;
							 	echo '<div class="clear"></div></div>';
							else :
							endif;	 

					    endwhile;
					 
					else :
					endif;	 
				?>
			</div>


			<div id="single-description">
				<?php
					the_field('last_content');
				?>
			</div>
			

			<div class="price-bot">
				<p class="section-text"><?php the_title(); ?></p>
				
				<?php if (get_field( "price" ) or get_field("price_agree")) { ?>
					<div class="order">
						<p class="order-price">Цена <span><?php if(get_field("price_agree")) { echo "Договорная"; } else { echo get_field( "price" )."Руб."; } ?></span></p>
						<a href="#" class="order-go" data-toggle="modal" data-target="#myModal">Заказать</a>
					</div>
				<?php } ?>
			</div>

			<?php
				endwhile;
				endif;
			?>
		</div>
		<div class="clear"></div>
	</div>

<?php
get_footer();
