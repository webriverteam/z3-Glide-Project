<?php
/**
 * Template part for displaying content of about us page.
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

// Default page ACF Masthead values

$blok_sngl_mho_headline = $fields['blok_sngl_mho_headline'];




/**
 * Homepage Masthead
 */
if ( is_page_template( 'templates/template-home.php' ) ) {

	?>



	<?php
}

/**
 * Donation Page
 */
elseif ( is_page_template( 'templates/template-requestquote.php' ) ) {
	$regiment_cu_mho_headline = $fields['regiment_cu_mho_headline'];
	if ( ! $regiment_cu_mho_headline ) {
		$regiment_cu_mho_headline = get_the_title();
	}
	?>

	<section>
		<div class="banner-container banner-bg-image">
			<div class="banner-bgfilter">
				<div class="banner-content-area">
					<div class="wrapper">
						<h1><?php echo $regiment_cu_mho_headline; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
}

/**
 * Contact Page
 */
elseif ( is_single() ) {
	?>
	<?php
}


/**
 * 404 Error page masthead
 */
elseif ( is_404() ) {

	?>

		<section>
			<div class="banner-container banner-bg-image" style="background-image: url(<?php echo $to_dlft_page_bgimg; ?>);">
				<div class="banner-bgfilter">
					<div class="banner-content-area">
						<div class="wrapper">
							<h1>404</h1>
							<p>
								Page not found
							</p>
							<!-- /.banner-form-container -->
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php
}


/**
 * Archive masthead
 */
elseif ( is_archive() ) {
	?>

	<section>
		<div class="banner-container banner-bg-image" style="background-image: url(<?php echo $to_dlft_page_bgimg; ?>);">
			<div class="banner-bgfilter">
				<div class="banner-content-area">
					<div class="wrapper">
						<h1><?php the_archive_title(); ?></h1>
						<p>
							Archive Page
						</p>
						<!-- /.banner-form-container -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
}


/**
 * Search masthead
 */
elseif ( is_search() ) {
	?>

	<section>
		<div class="banner-container banner-bg-image" style="background-image: url(<?php echo $to_dlft_page_bgimg; ?>);">
			<div class="banner-bgfilter">
				<div class="banner-content-area">
					<div class="wrapper">
						<h1>Search Results for</h1>
						<p>
							"<?php echo the_search_query(); ?>"
						</p>
						<!-- /.banner-form-container -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
}


/**
 * Index masthead
 */
elseif ( is_home() & is_front_page() ) {
	?>

		<div class="banner-container banner-bg-image"  style="background-image: url(<?php echo $blok_sngl_mho_bg_image; ?>);">
			<div class="banner-bgfilter">
				<div class="banner-content-area">
					<div class="wrapper">
						<h1><?php bloginfo( 'name' ); ?></h1>
						<p><?php bloginfo( 'description' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
}


/**
 * Page masthead
 */
else {
	// page Banner - Advanced custom fields variables
	$regiment_page_qls_first_links  = $fields['regiment_page_qls_first_links'];
	$regiment_page_qls_second_links = $fields['regiment_page_qls_second_links'];
	?>

	<section>
		<div class="banner-container banner-bg-image" style="background-image: url(<?php echo $blok_sngl_mho_bg_image; ?>);">
			<div class="banner-bgfilter  simple-banner<?php // echo $extra_banner_class; ?>">
				<div class="banner-content-area
				<?php
				if ( $regiment_page_qls_first_links || $regiment_page_qls_second_links ) {
					echo 'has-quicklinks'; }
				?>
				">
					<div class="wrapper">
						<h1><?php echo $blok_sngl_mho_headline; ?></h1>
						<?php
						if ( $blok_sngl_mho_text ) {
							echo $blok_sngl_mho_text;
						}
						?>
						<?php
						if ( $blok_sngl_mho_button ) :
							echo build_acf_button( $blok_sngl_mho_button, 'button' );
							endif;
						?>
						<!-- /.banner-form-container -->
					</div>
				</div>
				<?php if ( $regiment_page_qls_style_selection == 'none' ) { ?>

					<?php
				} elseif ( $regiment_page_qls_style_selection == 'threelinks' ) {
					$regiment_page_qls_headline    = $fields['regiment_page_qls_headline'];
					$regiment_page_qls_subheadline = $fields['regiment_page_qls_subheadline'];
					?>

				<div class="quick-links">
					<div class="wrapper">
						<div class="quick-link-container">
						<div class="quick-link-left"
						<?php
						if ( ! $regiment_page_qls_first_links ) {
							?>
							style="margin-right:0px;" <?php } ?>>
								<a class="quick-link-content">
									<?php if ( $regiment_page_qls_headline ) { ?>
										<h4><?php echo $regiment_page_qls_headline; ?></h4>
									<?php } ?>
									<?php if ( $regiment_page_qls_subheadline ) { ?>
										<p><?php echo $regiment_page_qls_subheadline; ?></p>
									<?php } ?>
								</a>
							</div>
							<?php if ( $regiment_page_qls_first_links ) { ?>
							<div class="quick-link-right valign-wrapper">
								<?php foreach ( $regiment_page_qls_first_links as $link ) { ?>
								<div class="quick-link-single">
									<a href="#<?php echo $link['hashlink']; ?>" class="quick-title">
										<span class="quick-tab-icon">
										<?php if ( $link['icon'] ) { ?>
											<img src="<?php echo $link['icon']; ?>" alt="Icon" />
										<?php } ?>
										</span>
										<span class="quick-tab-title"><?php echo $link['title']; ?></span>
									</a>
								</div>
								<?php } ?>
							</div>
							<?php } ?>
							<div class="clear"></div>
						</div>
					</div>
				</div>

					<?php
				} elseif ( $regiment_page_qls_style_selection == 'fourlinks' ) {

					?>
					<?php if ( $regiment_page_qls_second_links ) { ?>

				<div class="quick-links">
					<div class="wrapper">
						<div class="quick-link-container quick-links-icon-tabs">
							<?php foreach ( $regiment_page_qls_second_links as $link ) { ?>

							<div class="quick-link-single">
								<a href="#<?php echo $link['hashlink']; ?>" class="quick-title">
									<span class="quick-tab-icon">
										<?php if ( $link['icon'] ) { ?>
											<img src="<?php echo $link['icon']; ?>" alt="Icon" />
										<?php } ?>
									</span>
									<span class="quick-tab-title"><?php echo $link['title']; ?></span>
								</a>
							</div>

							<?php } ?>
						</div>

						<div class="clear"></div>
					</div>
				</div>

				<?php } ?>
				<?php } ?>
			</div>
		</div>
	</section>

	<?php
}
