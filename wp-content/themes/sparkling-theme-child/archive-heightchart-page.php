<?php
/**
 * The template for displaying height chart
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling-theme-child
 */

get_header(); ?>

			<div id="primary" class="site-content">
				<div id="content" role="main">
					<?php while ( have_posts() ) : the_post(); 
			
					$park_name = get_field('park name'); 
					$image_1 = get_field('image_1'); 
					$size1 = "full"; 
					$size2 = "medium"; 
					$size3 = "thumbnail"; 
	
					?>
			
					<article class="heightchart">
						<aside class="heightchart-sidebar">
					
							<h2><?php the_title(); ?></h2>
							<h5><?php echo $park_name; ?></h5>
							<?php the_content(); ?>
		
					
						</aside>

						<div class="height-chart-images">
					
							<?php 	if ($image_1) { 						
								echo wp_get_attachment_image ( $image_1, $size1 ); } ?>

						</div>
					</article>
					<?php endwhile; // end of the loop. ?>

				</div><!-- #content -->
			</div><!-- #primary -->

		<?php get_footer(); ?>