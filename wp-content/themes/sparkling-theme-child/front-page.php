<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling-theme-child
 */

get_header(); ?>
<section class="home-page">
	<div class="main-content"
		<?php the_content(); ?>
		<div>
			<class="welcome"><h1>Welcome! <h1></div>
			<h3>Do you want to plan you Disney Destination Vacation but don't know where to start? You're in the right place!</h3>
	 <img class="alignnone size-medium wp-image-51" src="http://localhost:8888/fairytale_journeys/wp-content/uploads/2016/08/Cinderella-300x128.png" alt="Cinderella" width="760" height="300" /></img>
 <p> I specialize in booking Disney Destinations!   It can be overwhelming to try and book a trip especially to somewhere as big as Disney!  Let me help you! My services are absolutely free, there are no hidden fees or charges.  I work for YOU! not the destination so I look for the best possible pricing that you can get. </p>	

 <br>		
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
<br>
<br>
<h4> Where would you like to go?</h4>
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
			<h4><a href="http://localhost:8888/fairytale_journeys/contact-me/">Contact me!</a></h4>
			<p> Contact me today about booking your trip for a free, no obligation <a href=<a href="http://localhost:8888/fairytale_journeys/quote-request"> quote</p>
			<br>
<br>
<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/cxXFZNpIddU" frameborder="0" allowfullscreen></iframe>
<br>
<br>

<?php get_sidebar (); ?>

			
<?php get_footer(); ?>