<?php
/**
 * The Secondary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkling-theme-child
 */

?>
<?php
$default_sidebar = apply_filters( 'sparkling_theme_child_default_sidebar_id', 'sidebar-2', 'secondary' );
?>
<div id="sidebar-secondary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $default_sidebar ) ) :  ?>
		<?php dynamic_sidebar( $default_sidebar ); ?>
	<?php else : ?>
		<?php
			/**
			 * Hook - sparkling_theme_child_action_default_sidebar.
			 */
			do_action( 'sparkling_theme_child_action_default_sidebar', $default_sidebar, 'secondary' );
		?>
		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>
		<aside id="contact-us">
		</aside>
	<?php endif ?>
</div><!-- #sidebar-secondary -->
