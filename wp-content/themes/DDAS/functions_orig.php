<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'ddas', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'ddas' ) );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Load Lora and Oswald Google fonts
add_action( 'wp_enqueue_scripts', 'ddas_google_fonts' );
function ddas_google_fonts() {
wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Quattrocento:400|Quattrocento+Sans:400', array());
}

//* Add new featured image size
add_image_size( 'grid-featured', 270, 100, TRUE );

//* Add support for custom header
// add_theme_support( 'custom-header', array(
// 'width'	=> 438,
// 'height'	=> 120,
// 'header-selector'	=> '.site-header .title-area',
// 'header-text'	=> false
// ) );

//* Add support for custom background
add_theme_support( 'custom-background', array(
'default-image' => '',
'default-color' => 'eee',
) );

//* Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
'header',
'nav',
'subnav',
'site-inner',
'footer-widgets',
'footer'
) );

//* Add support for additional color styles
add_theme_support( 'genesis-style-selector', array(
'ddas-pro-blue'	=> __( 'Blue', 'ddas' ),
'ddas-pro-green'	=> __( 'Green', 'ddas' ),
'ddas-pro-red'	=> __( 'Red', 'ddas' ),
'ddas-pro-logo'	=> __( 'Logo', 'ddas' )
) );

//* Reposition the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

//* Reposition the primary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_nav' );

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav');

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

add_filter('genesis_footer_output','ddas_footer_output');
function ddas_footer_output($output) {
$creds_text = '<p class="site-copyright">Copyright © 2014 | Austin Medical Assistant School is a division of Vandelay Education LLC and regulated by the Texas Workforce Commission.</p>';
$output = $creds_text;
return $output;
}

remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
add_action( 'genesis_site_title' , 'ddas_logo_svg');

function ddas_logo_svg() { ?>
<a href="<?php echo esc_url(home_url()); ?>" title="Austin Medical Assistant School">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/AustinMedical.svg" alt="Austin Medical Assistant School" />
</a>
<? }