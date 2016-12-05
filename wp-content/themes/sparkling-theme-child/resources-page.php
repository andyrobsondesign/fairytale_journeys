<?php
/**
 * The template for displaying resources
* Template Name: Resources
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling-theme-child
 */

get_header(); ?>

		<section class="resources">
		<div class="resources-content">
		<h4>Height Charts</h4>
		<ul class="height-charts">
		<?php query_posts('post_type=heightchart'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "thumbnail";
			?>
			<li class="height_chart">
			<figure>
				<?php echo wp_get_attachment_image($image_1, $size); ?>
			</figure>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		</li>
		<?php endwhile; //endwhile loop ?>
		<?php wp_reset_query(); // resets the altered query back to the original /?>

		</div><!-- #content -->
	</div><!-- #primary -->
<br>
<br>
<br>

