<?php
/**
 * Function for registering custom widget areas
 *
 * @link https://developer.wordpress.org/themes/functionality/widgets/
 *
 * @package Regiment
 * @since 1.0.0
 */

/**
 * Register custom widget areas.
 */

function theme_widgets_init() {

	// Widget area on about us page
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Widgets', 'regiment_textdomain' ),
			'id'            => 'sidebar-widgets',
			'description'   => __( 'These are widgets for the sidebar.', 'regiment_textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clear"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	// Widget area on about us page
	register_sidebar(
		array(
			'name'          => __( 'HomePage Widgets', 'regiment_textdomain' ),
			'id'            => 'homepage-widgets',
			'description'   => __( 'These are widgets for the homepage.', 'regiment_textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clear"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	// Widget area on about us page
	register_sidebar(
		array(
			'name'          => __( 'About Us Widgets', 'regiment_textdomain' ),
			'id'            => 'aboutus-widgets',
			'description'   => __( 'These are widgets for About Us page.', 'regiment_textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clear"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}

add_action( 'widgets_init', 'theme_widgets_init' );
