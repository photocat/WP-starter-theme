<?php
/**
 * Register custom post types.
 */

add_action('init', 'create_post_type');
function create_post_type() {
    register_post_type( 'merch',
        array(
            'labels' => array(
                'name' => __( 'Merch' ),
                'singular_name' => __( 'Merch' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'merch'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'menu_icon' => 'dashicons-buddicons-activity',
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'hierarchical'       => false,
            'menu_position'      => 10,
            'show_in_rest'       => true,
        )
    );

    register_post_type( 'clients',
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'Client' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'client'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'menu_icon' => 'dashicons-businessperson',
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'hierarchical'       => false,
            'menu_position'      => 11,
            'show_in_rest'       => true,
        )
    );
}
