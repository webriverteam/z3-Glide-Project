<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample Theme
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

// Newsletter Section - Advanced custom fields variables
$to_newsletter_section_image 			= $option_fields['to_newsletter_section_image'];
$to_newsletter_section_headline 		= $option_fields['to_newsletter_section_headline'];
$to_newsletter_section_sub_heading 		= $option_fields['to_newsletter_section_sub_heading'];
$to_newsletter_section_form_code 		= $option_fields['to_newsletter_section_form_code'];

?>

<?php while ( have_posts() ) : the_post();

	//Include specific template for the content.
	get_template_part( 'partials/content', 'page' );
endwhile; ?>

<div class="clear"></div>

<section class="newsletter">
	<div class="wrapper">
		<img src="<?php  echo $to_newsletter_section_image; ?>" alt="Mail Icon" title="Mail Icon" class="banner-icon"/>
		<h2 class="heading" id="newsletter-heading"><?php  echo $to_newsletter_section_headline; ?></h2>
		<h3 class="subheading" id="newsletter-sub-heading"><?php  echo $to_newsletter_section_sub_heading; ?></h3>
		<div class="newsletter-form">
			<?php echo do_shortcode('[gravityform id="'.$to_newsletter_section_form_code.'" title="false" description="false" ajax="true"]') ; ?>
			<div class="clear"></div>
		</div><!-- .newsletter-form -->
	</div>
</section>

<?php get_footer(); ?>
