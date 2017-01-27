<?php 
// Loads the header.php template.
get_header();
?>

<?php
// Dispay Loop Meta at top
if ( hoot_page_header_attop() ) {
	get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
}

// Template modification Hook
do_action( 'hoot_template_before_content_grid', 'page.php' );
?>

<div class="grid main-content-grid">

	<?php
	// Template modification Hook
	do_action( 'hoot_template_before_main', 'page.php' );
	?>

	<main <?php hybridextend_attr( 'content' ); ?>>

		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_start', 'page.php' );

		// Checks if any posts were found.
		if ( have_posts() ) :
		?>

			<div id="content-wrap">

				<?php
				// Template modification Hook
				do_action( 'hoot_loop_start', 'page.php' );

				// Dispay Loop Meta in content wrap
				if ( ! hoot_page_header_attop() ) {
					get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
				}

				// Display Featured Image if present
				if ( hoot_get_mod( 'post_featured_image' ) && !hybridextend_is_404() ) {
					$img_size = apply_filters( 'hoot_post_image_page', '' );
					hoot_post_thumbnail( 'entry-content-featured-img', $img_size, true );
				}

				// Begins the loop through found posts, and load the post data.
				while ( have_posts() ) : the_post();

					// Loads the template-parts/content-{$post_type}.php template.
					hybridextend_get_content_template();

				// End found posts loop.
				endwhile;

				// Template modification Hook
				do_action( 'hoot_loop_end', 'page.php' );
				?>

			</div><!-- #content-wrap -->

			<?php
			// Template modification Hook
			do_action( 'hoot_template_after_content_wrap', 'page.php' );

			// Loads the comments.php template if this page is not being displayed as frontpage or a custom 404 page or if this is attachment page of media attached (uploaded) to a page.
			if ( !is_front_page() && !hybridextend_is_404() && !is_attachment() ) :

				// Loads the comments.php template
				comments_template( '', true );

			endif;

		// If no posts were found.
		else :

			// Loads the template-parts/error.php template.
			get_template_part( 'template-parts/error' );

		// End check for posts.
		endif;

		// Template modification Hook
		do_action( 'hoot_template_main_end', 'page.php' );
		?>

	</main><!-- #content -->

	<?php
	// Template modification Hook
	do_action( 'hoot_template_after_main', 'page.php' );
	?>

	<?php hybridextend_get_sidebar( 'primary' ); // Loads the template-parts/sidebar-primary.php template. ?>


<section class="home-page">
	<div class="main-content"
		<?php the_content(); ?>
		<div>
			<class="welcome"><h1>Welcome! </h1></div>
			<h3>Do you want to plan you Disney Destination Vacation but don't know where to start? You're in the right place!</h3>
	 <img class="alignnone size-medium wp-image-51" src="http://localhost:8888/fairytale_journeys/wp-content/uploads/2016/08/Cinderella-300x128.png" alt="Cinderella" width="760" height="300" /></img>
 <p> I specialize in booking Disney Destinations!   It can be overwhelming to try and book a trip especially to somewhere as big as Disney!  Let me help you! My services are absolutely free! With Fairytale Journeys by Bobbi there are no hidden fees or charges...EVER!  I work for <strong>YOU </strong> not the destination so I look for the best possible pricing that you can get. </p>	

 <br>		
<section class="featured-services">
	<div class="site-content">
	<h2>Services Offered</h2>
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
		<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
	</li>
	<?php endwhile; //endwhile loop ?>
	<?php wp_reset_query(); // resets the altered query back to the original /?>
</ul>
</div>
<br>
<br>
<h2> Where would you like to go?</h2>
	<p>Select the destination below to current offers, packages, resort information and more!</p>

<div class= "disney-images">
<a href="https://www.disneytravelcenter.com/ms8b21ad81/"target="_blank"><img src="https://media.disneywebcontent.com/StaticFiles/CSA/WDW/button_library/headers_200_square_WDW.jpg" alt="WDW" border="0" /></a> 
<a href="https://www.disneytravelcenter.com/mse78d3be8/" target="_blank"><img src="https://media.disneywebcontent.com/StaticFiles/CSA/DLR/button_library/headers_200_square_DLR.jpg" alt="DLR" border="0" /></a>
<a href="https://www.disneytravelcenter.com/ms92b9092f/" target="_blank"><img src="https://media.disneywebcontent.com/StaticFiles/CSA/DCL/button_library/headers_200_square_DCL.jpg" alt="DCL" border="0" /></a>
<a href="https://www.disneytravelcenter.com/ms17bec8e3/" target="_blank"><img src="https://media.disneywebcontent.com/StaticFiles/CSA/ABD/button_library/ABD_CSB_200x200.jpg" alt="ABD" border="0" /></a></br>
 </div>
<br>
<br>
	
		<class="contact me">
			<h2><a href="http://localhost:8888/fairytale_journeys/contact-me/">Contact me!</a></h2>
			<p> Contact me today about booking your trip for a free, no obligation <a href=<a href="http://localhost:8888/fairytale_journeys/quote-request"> <strong>quote!</strong></p>
			<br>
<br>
<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/cxXFZNpIddU" frameborder="0" allowfullscreen></iframe>
<br>
<br>

<?php get_sidebar (); ?>

<br>	
<br>
<br>		
<?php get_footer(); ?>