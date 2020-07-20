<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Regiment
 * @since 1.0.0
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

?>

<div class="wrapper">
	<div class="blog-posts">

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			// Include specific template for the content
			get_template_part( 'partials/content', 'archive-post' );
		endwhile;
		?>
		<div class="clear"></div>
		<?php
	else :

		// If no content, include the "No posts found" template.
		get_template_part( 'partials/content', 'none' );
	endif;
	?>

	<div class="clear"></div>

	<div class="archive-loadmore-btn">
		<a href="" id="loadMore" class="button">Load More</a> <!-- /.button -->
	</div>
	<!-- /.archive-loadmore-btn -->

	</div>
</div>
<!-- /.wrapper -->

<?php get_footer(); ?>
