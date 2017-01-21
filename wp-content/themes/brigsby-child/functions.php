<?php
/**
 * Sparkling theme child functions and definitions
 *
 * @package brigsby-child
 */


function create_custom_post_types() {
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'services' ),
                'singular_name' => __( 'services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );
    register_post_type( 'height chart',
        array(
            'labels' => array(
                'name' => __( 'heightchart' ),
                'singular_name' => __( 'height_chart' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'height_chart' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

function brigsby_child_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'brigsby_child' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'brigsby_child-theme-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'brigsby_child' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'brigsby_child-theme-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'brigsby_child_widgets_init' );

