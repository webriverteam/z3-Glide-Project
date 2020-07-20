<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

// Footer Socials - Advanced custom fields variables
$z3_to_ftr_first_menu			= $option_fields['z3_to_ftr_first_menu'];
$z3_to_ftr_second_menu			= $option_fields['z3_to_ftr_second_menu'];
$z3_to_ftr_copyright_text			= $option_fields['z3_to_ftr_copyright_text'];

// Schema Markup - Advanced custom fields variables
$schema_locality				= $option_fields['locality'];
$schema_region					= $option_fields['region'];
$schema_postal_code				= $option_fields['postal_code'];
$schema_street_address			= $option_fields['street_address'];
$schema_map_short_link			= $option_fields['map_short_link'];
$schema_latitude				= $option_fields['latitude'];
$schema_longitude				= $option_fields['longitude'];
$schema_business_name			= $option_fields['business_name'];
$schema_opening_hours			= $option_fields['opening_hours'];
$schema_telephone				= $option_fields['telephone'];
$schema_business_email			= $option_fields['business_email'];
$schema_business_image_logo		= $option_fields['business_image_logo'];
$schema_business_legal_name		= $option_fields['business_legal_name'];
$schema_price_range				= $option_fields['price_range'];

?>

</main>
	<footer>
		<div class="wrapper">
		<div class="footer-logo">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-icon.svg" alt="Logo Icon"/></a>
		</div>
		<div class="footer-widgets">
			<div class="widget">
			<h6><?php echo $z3_to_ftr_first_menu['title']; ?></h6>
				<?php echo $z3_to_ftr_first_menu['menu_selection']; ?>
			</div>
			<div class="widget">
			<h6><?php echo $z3_to_ftr_second_menu['title']; ?></h6>
				<?php echo $z3_to_ftr_second_menu['menu_selection']; ?>
			</div>
		</div>
		<div class="socials-widget">
			<div class="social-icons"></div>
			<div class="copyright">
			    <?php echo $z3_to_ftr_copyright_text; ?>
			</div>
		</div>
		</div>
		<div class="clear"></div>
	</footer>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Restaurant",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "<?php echo $schema_locality; ?> ",
				"addressRegion": "<?php echo  $schema_region;?> ",
				"postalCode": "<?php echo  $schema_postal_code;?> ",
				"streetAddress": "<?php echo $schema_street_address; ?> "
			},

			"hasMap": "<?php echo $schema_map_short_link; ?>",
			"geo": {
				"@type": "GeoCoordinates",
				"latitude": "<?php echo $schema_latitude; ?> ",
				"longitude": "<?php echo $schema_longitude; ?> "
			},

			"name": "<?php echo $schema_business_name; ?>",

			"openingHours": [
				<?php echo $schema_opening_hours; ?>
			],

			"telephone": "<?php echo  $schema_telephone;?> ",
			"email": "<?php echo $schema_business_email; ?> ",
			"url": "<?php echo esc_url( home_url() ) ; ?>",
			"image": "<?php echo $schema_business_image_logo; ?> ",
			"legalName": "<?php echo $schema_business_legal_name; ?> ",
			"priceRange":"<?php echo $schema_price_range; ?>"
		}
	</script>
</footer>

<?php wp_footer(); ?>

</body>
</html>
