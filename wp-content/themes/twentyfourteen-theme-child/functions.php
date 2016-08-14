<?php
/**
 * TwentyFourteen-Child-theme functions and definitions
 *
 * @package twentyfourteen
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
}
add_action( 'init', 'create_custom_post_types' );