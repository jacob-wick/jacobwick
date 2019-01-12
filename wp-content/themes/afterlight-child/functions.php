<?php
/**
 * afterlight child functions and definitions
 *
 * @package Afterlight
 * @since Afterlight 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */


function afterlight_child_enqueue_styles() {

    $parent_style = 'afterlight-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style ( 'afterlight-child-google-fonts', '//fonts.googleapis.com/css?family=Comfortaa|Poppins');

}
add_action( 'wp_enqueue_scripts', 'afterlight_child_enqueue_styles' );

// Create CV Post Type

function create_custom_post_types() {
	register_post_type( 'CV',
		array(
			'labels' => array(
				'name' => __( 'CV' ),
				'singular_name' => __( 'CV_single' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'cv' ),
			'taxonomies' => array('category')
		)
	);
}
add_action( 'init', 'create_custom_post_types' );


// Create Footer Widget Area

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widget Area',
		'id'            => 'footer_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
