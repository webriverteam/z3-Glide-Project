<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample Theme
 * @since 1.0.0
 */

// Global variables
global $option_fields;
global $pID;
global $fields;
$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

$option_fields = get_fields( 'option' );
$fields        = get_fields( $pID );

// Page variables - Advanced custom fields variables
$z3_to_hdr_first_button = $option_fields['z3_to_hdr_first_button'];
$z3_to_hdr_second_button = $option_fields['z3_to_hdr_second_button'];

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<!-- Google Tag Manager -->
	<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-N8L8MBN');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

	<script>
	// Identifies the Browser type in the HTML tag for specific browser CSS
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
	doc.setAttribute("data-platform", navigator.platform);
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8L8MBN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'theme_textdomain' ); ?></a>

	<header class="site-header big-section trp-header">
      <div class="wrapper">
        <div class="left-header">
          <div class="logo">
            <a href="<?php echo home_url(); ?>" class="blue-logo"
              ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/z3-logo.svg" alt="Site Logo"
            /></a>
            <a href="<?php echo home_url(); ?>" class="white-logo"
              ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/z3-white-logo.svg" alt="Site Logo"
            /></a>
          </div>
        </div>
        <div class="right-header">
          <div class="menu-overlay">
            <div class="menu-container">
              <div class="menu-content">
                <div class="main-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main',
								'fallback_cb' => 'fallbackmenu',
							)
						);
					?>
                </div>
                <div class="header-btns">
					<?php
						if ( $z3_to_hdr_first_button ) :
							echo build_acf_button( $z3_to_hdr_first_button, 'button white-bg small-btn' );
						endif;
					?>
					<?php
						if ( $z3_to_hdr_second_button ) :
							echo build_acf_button( $z3_to_hdr_second_button, 'button small-btn' );
						endif;
					?>
                </div>
                <!-- /.header-btns -->
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="menu-btn">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <!-- /.wrapper -->
    </header>

	<main id="content" class="site-content">

		<?php
		/**
		 * Include masthead
		 *
		 * Contains masthead settings for each type and template for the theme
		 */
		get_template_part( 'partials/masthead' );
		?>
