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

		<div id="inner-content">
			
			<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();

					$permalink = get_permalink();
			?>

			<p class="section-text"><a href="<?php echo $permalink; ?>"><?php the_title(); ?></a></p>
			<div class="section-post">
				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
						echo '<a href="'.$permalink.'"><img src="'.$src[0].'" alt="'.get_the_title().'"/></a>';
					} 
				?>
				<div class="section-post-right">
					<?php echo '<a href="'.$permalink.'" class="textlink">'.get_field( "description" ).'</a>'; ?>
					<span class="price"><?php if(get_field("price_agree")) { echo "Цена договорная"; } else { echo get_field( "price" )."Руб."; } ?> </span>
					<a href="<?php echo $permalink; ?>">подробнее</a>
				</div>
			</div>
					
			<?php
					endwhile;
				endif;
			?>
		</div>
		<div class="clear"></div>
	</div>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
	<?php endif; ?>

<?php
get_footer();
