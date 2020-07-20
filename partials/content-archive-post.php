<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Regiment
 * @since 1.0.0
 */

// Global variables

$pID    = get_the_ID();
$fields = get_fields( $pID );

if ( has_post_thumbnail() ) {
	$post_img_src = get_the_post_thumbnail_url( $pID, $size = 'full' );
} else {
	$post_img_src = get_template_directory_uri() . '/assets/img/Regiment-default-post-img.jpg';
}

if ( get_the_author_meta( 'first_name', $author_id ) || get_the_author_meta( 'last_name', $author_id ) ) {
	$author_name = get_the_author_meta( 'first_name', $author_id ) . ' ' . get_the_author_meta( 'last_name', $author_id );
} elseif ( get_the_author_meta( 'display_name', $author_id ) ) {
	$author_name = get_the_author_meta( 'display_name', $author_id );
}

$regiment_sngl_minute_read = $fields['regiment_sngl_minute_read'];

?>

<div id="post-<?php the_ID(); ?>" class="single-blog-post">
	<a href="<?php the_permalink(); ?>" class="blog-post-inner">
		<div class="post-image-container">
			<div
				class="blog-post-img"
				style="background-image: url(<?php echo $post_img_src; ?>);"
			></div>
		</div>
		<!-- /.post-image-container -->
		<div class="blog-post-content">
		<div class="blog-post-content-inner">
			<h4><?php the_title(); ?></h4>
			<?php
				$count = strlen( strip_tags( do_shortcode( get_the_title() ) ) );
			?>

			<p class="
				<?php
				if ( $count <= 33 ) {
						echo 'head-single-line';
				} elseif ( $count > 33 && $count <= 66 ) {
					echo 'head-double-line';
				} else {
					echo 'head-tripple-line';
				}
				?>
				">
				<?php echo custom_excerpt_no_more( 500 ); ?>
			</p>
			</div>
			<div class="client-detail">
				<div
					class="client-image"
					style="background-image: url(<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>);"
				></div>
				<div class="client-name">
				<?php echo $author_name; ?> <span><?php echo get_the_date( 'M j' ); ?>
					<?php
					if ( $regiment_sngl_minute_read ) {
						echo ' - ' . $regiment_sngl_minute_read;
						?>
					min read<?php } ?></span>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</a>
</div>
