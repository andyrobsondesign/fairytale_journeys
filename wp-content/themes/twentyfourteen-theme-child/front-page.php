<?php
/**
 * The template for displaying the front-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
<section class="featured-services">
	<div class="site-content">
	<h4>Services Offered</h4>
	<ul class="services-offered">
	<?php query_posts('posts_per_page=3&post_type=services'); ?>
		<?php while ( have_posts() ) : the_post(); 
			$image_1 = get_field("image_1");
			$size = "thumbnail";
		?>
		<li class="services">
		<figure>
			<?php echo wp_get_attachment_image($image_1, $size); ?>
		</figure>
		<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
	</li>
	<?php endwhile; //endwhile loop ?>
	<?php wp_reset_query(); // resets the altered query back to the original /?>
</ul>
</div>
<h2>Do you want to plan you Disney Destination Vacation but don't know where to start? You're in the right place!</h2>

