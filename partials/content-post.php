<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Regiment
 * @since 1.0.0
 */
// Global variables
$pID    = get_the_ID();
$fields = get_fields( $pID );

$categories = get_the_category();

if ( get_the_author_meta( 'first_name', $author_id ) || get_the_author_meta( 'last_name', $author_id ) ) {
	$author_name = get_the_author_meta( 'first_name', $author_id ) . ' ' . get_the_author_meta( 'last_name', $author_id );
} elseif ( get_the_author_meta( 'display_name', $author_id ) ) {
	$author_name = get_the_author_meta( 'display_name', $author_id );
}

$regiment_sngl_minute_read = $fields['regiment_sngl_minute_read'];


?>

<article class="post-single-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="wp-block-glide-section-block">
			<div class="m-section">
				<div class="wrapper">
					<div class="feature-image">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'single-post-thumbnail' );
						}
						?>
					</div>
				</div>
			</div>
			<div class="s-section">
				<div class="wrapper">
					<h1><?php the_title(); ?></h1>
					<div class="auther-details valign-wrapper">
						<div class="client-detail">
							<div
								class="client-image"
								style="background-image: url(<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>);"
							></div>
							<div class="client-name"><?php echo $author_name; ?> <span><?php echo get_the_date( 'M j' ); ?>
								<?php
								if ( $regiment_sngl_minute_read ) {
									echo ' - ' . $regiment_sngl_minute_read;
									?>
								min read<?php } ?></span>
							</div>
							<div class="clear"></div>
						</div>
						<div class="client-social">
							<ul>

								<li><a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" rel="noopener noreferrer" class="twitter-share" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt=""/></a></li>

								<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" class="linkedin-share" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt=""/></a></li>

								<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" class="facebook-share" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt=""/></a></li>

								<li>
									<a href="mailto:?subject=I wanted to share this post with you from <?php bloginfo( 'name' ); ?>&body=<?php the_title( '', '', true ); ?>&#32;&#32;<?php the_permalink(); ?>" title="Email to a friend/colleague" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-lane.svg" alt=""/></a>
								</li>

							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
	</div>

	<?php
		the_content(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'regiment_textdomain' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'regiment_textdomain' ),
				'after'  => '</div>',
			)
		);

		?>
</article>

<div style="display:none">
	<?php
		// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>
</div>
