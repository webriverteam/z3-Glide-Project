<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Regiment
 * @since 1.0.0
 */

// Global variables
global $option_fields;
global $pID;
global $fields;

$Regiment_cta_headline = $option_fields['to_ftr_cta_headline'];
if ( $fields['Regiment_page_cta_hedline'] ) {
	$Regiment_cta_headline = $fields['Regiment_page_cta_hedline'];
}
$Regiment_cta_button = $option_fields['to_ftr_cta_button'];
if ( $fields['Regiment_page_cta_button'] ) {
	$Regiment_cta_button = $fields['Regiment_page_cta_button'];
}

$Regiment_page_cta_visibility = $fields['Regiment_page_cta_visibility'];

if ( is_404() || is_archive() || is_search() ) {
	$Regiment_page_cta_visibility = 0;
}

?>
<?php if ( $Regiment_page_cta_visibility ) { ?>
	<?php if ( $Regiment_cta_headline || $Regiment_cta_button ) { ?>
		<section class="footer-cta">
			<div class="footer-top-particles">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-cta-top-particles.svg" alt="Particles">
			</div>
			<div class="wrapper">
				<div class="footer-cta-content valign-wrapper">

					<div class="footer-cta-desc">
						<?php if ( $Regiment_cta_headline ) { ?>
							<h3><?php echo $Regiment_cta_headline; ?></h3>
						<?php } ?>
					</div>
					<?php
					if ( $Regiment_cta_button ) :
						?>
							<div class="footer-cta-btn">
						<?php
						echo build_acf_button( $Regiment_cta_button, 'button' );
						?>
						</div>
						<?php
						endif;
					?>
					<div class="clear"></div>

				</div>
			</div>
			<div class="footer-bottom-particles">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-cta-bottom-particles.svg" alt="Particles">
			</div>
		</section>
	<?php } ?>
<?php } ?>
