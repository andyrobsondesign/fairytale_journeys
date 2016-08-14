<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage sparkling theme child
 * @since sparkling theme
 */
?>

		</div><!-- #main -->
				
		<nav class= 'footer-navigation' role="navigation">
				<?php wp_nav_menu() ; ?>
			</nav>

				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>