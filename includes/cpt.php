<?php
/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package Regiment
 * @since 1.0.0
 */

/**
 * Register a custom post type called "Testimonials".
 *
 * @see get_post_type_labels() for label keys.
 */
function theme_register_cpt_testimonials() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post type general name', 'regiment_textdomain' ),
		'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'regiment_textdomain' ),
		'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'regiment_textdomain' ),
		'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'regiment_textdomain' ),
		'add_new'               => __( 'Add New', 'regiment_textdomain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'regiment_textdomain' ),
		'new_item'              => __( 'New Testimonial', 'regiment_textdomain' ),
		'edit_item'             => __( 'Edit Testimonial', 'regiment_textdomain' ),
		'view_item'             => __( 'View Testimonial', 'regiment_textdomain' ),
		'all_items'             => __( 'All Testimonials', 'regiment_textdomain' ),
		'search_items'          => __( 'Search Testimonials', 'regiment_textdomain' ),
		'parent_item_colon'     => __( 'Parent Testimonials:', 'regiment_textdomain' ),
		'not_found'             => __( 'No testimonials found.', 'regiment_textdomain' ),
		'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'regiment_textdomain' ),
		'featured_image'        => _x( 'Testimonial Image', 'Overrides the “Featured Image” phrase.', 'regiment_textdomain' ),
		'set_featured_image'    => _x( 'Set testimonial image', 'Overrides the “Set featured image” phrase.', 'regiment_textdomain' ),
		'remove_featured_image' => _x( 'Remove testimonial image', 'Overrides the “Remove featured image” phrase.', 'regiment_textdomain' ),
		'use_featured_image'    => _x( 'Use as testimonial image', 'Overrides the “Use as featured image” phrase.', 'regiment_textdomain' ),
		'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus.', 'regiment_textdomain' ),
		'insert_into_item'      => _x( 'Insert into testimonial', 'Overrides the “Insert into post” phrase.', 'regiment_textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this testimonial', 'Overrides the “Uploaded to this post” phrase.', 'regiment_textdomain' ),
		'filter_items_list'     => _x( 'Filter testimonials list', 'Screen reader text for the filter links.', 'regiment_textdomain' ),
		'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination.', 'regiment_textdomain' ),
		'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list.', 'regiment_textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => 'testimonials',
			'with_front' => 1,
		),
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-smiley',
		'map_meta_cap'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'testimonials', $args );
}

add_action( 'init', 'theme_register_cpt_testimonials' );
