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
 * @package brigsby-child
 */

get_header(); ?>
		<?php
		// Dispay Loop Meta at top
		if ( hoot_page_header_attop() ) {
			get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
		}

		// Template modification Hook
		do_action( 'hoot_template_before_content_grid', 'page.php' );
		?>


			<?php hybridextend_get_sidebar( 'primary' ); // Loads the template-parts/sidebar-primary.php template. ?>
			
	<div class="resources-content">
		<h2>Height Charts</h2>
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
			<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
		</li>
		<?php endwhile; //endwhile loop ?>
		<?php wp_reset_query(); // resets the altered query back to the original /?>

		</div><!-- #content -->
	</div><!-- #primary -->
<br>
<br>
<br>

