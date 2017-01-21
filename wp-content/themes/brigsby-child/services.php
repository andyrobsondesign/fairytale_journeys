<?php
/**
 * The template for displaying services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package brigsby-child
 */

get_header(); ?>

		<section class="services">
	<?php while ( have_posts() ) : the_post();
				$itinerary_planning =get_field ('itinerary_planning');
				$advance_dining=get_field('advance_dining');
				$promotion_and_discount_monitoring= get_field('promotion_&_discount_monitoring');
				$image1= get_field('itinerary_icon');
				$image2= get_field ('dining_icon');
				$image3= get_field('promotion_icon')
					$size1-"full";
				$size2 = "medium";
				$size3 ='thumbnail';
				?>
			<article class="services">
					<section class="featured-services">
					<div class="image-1 align-left">
						<?php echo wp_get_attachment_image( $image_1, $size3 ); ?>
					</div>
					<div class="itinerary_planning">
						<h2>Itinerary Planning</h2> 
						<p><?php echo $itinerary_planning; ?></p>
				</div>
			</article>
			
					
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
