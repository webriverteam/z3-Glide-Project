<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Regiment
 * @since 1.0.0
 */

/**
 * Register custom Gutenberg blocks category
 */
function acf_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'glide-blocks',
				'title' => __( 'Regiment Blocks', 'regiment_textdomain' ),
				'icon'  => 'admin-generic',
			),
		)
	);
}
add_filter( 'block_categories', 'acf_block_categories', 10, 2 );


/**
 * Register custom Gutenberg blocks
 */
add_action( 'acf/init', 'theme_acf_init' );
function theme_acf_init() {

	if ( function_exists( 'acf_register_block' ) ) {

		// register CTA Tiles
		acf_register_block(
			array(
				'name'            => 'cta-tiles',
				'title'           => __( 'CTA Tiles', 'regiment_textdomain' ),
				'description'     => __( 'A custom CTA tiles block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'cta', 'tiles' ),
			)
		);
		// register Testimonials block
		acf_register_block(
			array(
				'name'            => 'testimonials',
				'title'           => __( 'Testimonials', 'regiment_textdomain' ),
				'description'     => __( 'A custom testimonials block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'smiley',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'testimonials' ),
			)
		);
		// register CTA Block
		acf_register_block(
			array(
				'name'            => 'cta',
				'title'           => __( 'CTA Block', 'regiment_textdomain' ),
				'description'     => __( 'A custom CTA block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'image-flip-horizontal',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'cta' ),
			)
		);
		// register Statistics with content
		acf_register_block(
			array(
				'name'            => 'stat-with-content',
				'title'           => __( 'Statistics with content', 'regiment_textdomain' ),
				'description'     => __( 'A custom statistics with content.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'performance',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'statistics with content' ),
			)
		);
		// register Icon List with Intro
		acf_register_block(
			array(
				'name'            => 'icon-list-with-intro',
				'title'           => __( 'Icon List with Intro', 'regiment_textdomain' ),
				'description'     => __( 'A custom icon list with intro.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'feedback',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Icon List with Intro' ),
			)
		);
		// register Intro to Video
		acf_register_block(
			array(
				'name'            => 'intro-to-video',
				'title'           => __( 'Intro to Video', 'regiment_textdomain' ),
				'description'     => __( 'A custom intro to video.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'format-video',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Intro to Video' ),
			)
		);
		// register Lead Paragraphy with Headline
		acf_register_block(
			array(
				'name'            => 'lead-paragraphy-with-headline',
				'title'           => __( 'Lead Paragraphy with Headline', 'regiment_textdomain' ),
				'description'     => __( 'A custom lead paragraphy with headline.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'editor-insertmore',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'lead paragraphy with headline' ),
			)
		);
		// register Info Call Out
		acf_register_block(
			array(
				'name'            => 'info-callout',
				'title'           => __( 'Info Call Out', 'regiment_textdomain' ),
				'description'     => __( 'A custom info call out.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'align-none',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Info Call Out' ),
			)
		);
		// register Logo Block
		acf_register_block(
			array(
				'name'            => 'logo',
				'title'           => __( 'Logo Block', 'regiment_textdomain' ),
				'description'     => __( 'A custom logo block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'align-none',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Logo' ),
			)
		);
		// register Image Alongside Text
		acf_register_block(
			array(
				'name'            => 'image-along-text',
				'title'           => __( 'Image Alongside Text', 'regiment_textdomain' ),
				'description'     => __( 'A custom Image Alongside Text.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'format-image',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Logo' ),
			)
		);
		// register Blog Teaser
		acf_register_block(
			array(
				'name'            => 'blog-teaser',
				'title'           => __( 'Blog Teaser', 'regiment_textdomain' ),
				'description'     => __( 'A custom blog teaser block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'feedback',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Logo' ),
			)
		);
		// register Custom Glide Spacer
		acf_register_block(
			array(
				'name'            => 'custom-glide-spacer',
				'title'           => __( 'Glide Spacer', 'regiment_textdomain' ),
				'description'     => __( 'A custom glide Spacer block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'move',
				'mode'            => 'edit',
				'keywords'        => array( 'Custom Glide Spacer' ),
			)
		);
		// register Buttons
		acf_register_block(
			array(
				'name'            => 'buttons',
				'title'           => __( 'Buttons', 'regiment_textdomain' ),
				'description'     => __( 'A buttons block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'move',
				'mode'            => 'edit, preview',
				'keywords'        => array( 'Buttons' ),
			)
		);
		// register Flow Block
		acf_register_block(
			array(
				'name'            => 'flow',
				'title'           => __( 'Flow Block', 'regiment_textdomain' ),
				'description'     => __( 'A custom flow block.', 'regiment_textdomain' ),
				'render_callback' => 'acf_block_render_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'forms',
				'mode'            => 'auto',
				'keywords'        => array( 'Flow Block' ),
			)
		);

	}
}

/**
 * Reder custom Gutenberg blocks
 */
function acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace( 'acf/', '', $block['name'] );

	// include a template part from within the blocks folder
	if ( file_exists( get_theme_file_path( "/blocks/block-{$slug}.php" ) ) ) {
		include get_theme_file_path( "/blocks/block-{$slug}.php" );
	}
}
