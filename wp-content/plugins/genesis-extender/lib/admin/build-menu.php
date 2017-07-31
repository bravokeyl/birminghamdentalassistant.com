<?php
/**
 * Build and hook in the Genesis Extender admin menus.
 *
 * @package Extender
 */

add_action( 'genesis_admin_menu', 'genesis_extender_add_admin_submenus', 11 );
/**
 * Add the Genesis Extender admin sub menus under the Genesis admin items.
 *
 * @since 1.0
 */
function genesis_extender_add_admin_submenus()
{
	add_action( 'admin_menu', 'genesis_extender_build_admin_submenus' );
}
/**
 * Build the Genesis Extender admin sub menus.
 *
 * @since 1.0
 */
function genesis_extender_build_admin_submenus()
{
	$user = wp_get_current_user();
	if( !get_the_author_meta( 'disable_genesis_extender_settings_menu', $user->ID ) && ( !defined( 'CHILD_THEME_NAME' ) || CHILD_THEME_NAME != 'Dynamik Website Builder' ) )
	{
		$_genesis_extender_settings = add_submenu_page( 'genesis', __( 'Extender Settings', 'extender' ), __( 'Extender Settings', 'extender' ), 'manage_options', 'genesis-extender-settings', 'genesis_extender_settings' );
		
		add_action( 'admin_print_styles-' . $_genesis_extender_settings, 'genesis_extender_admin_styles' );
		add_action( 'admin_print_styles-' . $_genesis_extender_settings, 'genesis_extender_settings_styles' );
	}
	if( !get_the_author_meta( 'disable_genesis_extender_custom_menu', $user->ID ) && ( !defined( 'CHILD_THEME_NAME' ) || CHILD_THEME_NAME != 'Dynamik Website Builder' ) )
	{
		$_genesis_extender_custom_options = add_submenu_page( 'genesis', __( 'Extender Custom', 'extender' ), __( 'Extender Custom', 'extender' ), 'manage_options', 'genesis-extender-custom', 'genesis_extender_custom_options' );
	
		add_action( 'admin_print_styles-' . $_genesis_extender_custom_options, 'genesis_extender_admin_styles' );
		add_action( 'admin_print_styles-' . $_genesis_extender_custom_options, 'genesis_extender_custom_styles' );
		
		add_action( 'admin_print_scripts-' . $_genesis_extender_custom_options, 'genesis_extender_custom_php_vars' );
	}
}

/**
 * Build the javascript variables that are used in Custom Options.
 *
 * @since 1.0
 */
function genesis_extender_custom_php_vars()
{
	$enable_ace_editor_syntax_validation = genesis_extender_get_settings( 'enable_ace_editor_syntax_validation' );
	$ace_editor_syntax_validation = !empty( $enable_ace_editor_syntax_validation ) ? 'true' : 'false';
?>
<script type="text/javascript">
	var genesis_extender_custom_url = '<?php echo admin_url( 'admin.php?page=genesis-extender-custom' ); ?>';
	var ace_editor_syntax_validation = <?php echo $ace_editor_syntax_validation ?>;
	var e_name = '<?php _e( 'Name', 'extender' ); ?>';
	var e_file_name = '<?php _e( 'File Name', 'extender' ); ?>';
	var e_template_name = '<?php _e( 'Template Name', 'extender' ); ?>';
	var e_template_post_types = '<?php _e( 'Template Post Types', 'extender' ); ?>';
	var e_template_post_type_examples = '<?php _e( '(example: page, post, product)', 'extender' ); ?>';
	var e_label_create_conditional = '<?php _e( 'Automatically create a Custom Conditional for this Label', 'extender' ); ?>';
	var e_tag = '<?php _e( 'Tag', 'extender' ); ?>';
	var e_do_shortcode = '<?php _e( '[do_shortcode]', 'extender' ); ?>';
	var e_delete = '<?php _e( 'Delete', 'extender' ); ?>';
	var e_hook = '<?php _e( 'Hook', 'extender' ); ?>';
	var e_priority = '<?php _e( 'Priority', 'extender' ); ?>';
	var e_hooked = '<?php _e( 'Hooked', 'extender' ); ?>';
	var e_shortcode = '<?php _e( 'Shortcode', 'extender' ); ?>';
	var e_both = '<?php _e( 'Both', 'extender' ); ?>';
	var e_css = '<?php _e( 'CSS', 'extender' ); ?>';
	var e_deactivate = '<?php _e( 'Deactivate', 'extender' ); ?>';
	var e_page_template = '<?php _e( 'Page Template', 'extender' ); ?>';
	var e_wp_template = '<?php _e( 'WordPress Template', 'extender' ); ?>';
	var e_conditionals = '<?php _e( 'Conditionals', 'extender' ); ?>';
	var e_class = '<?php _e( 'Class', 'extender' ); ?>';
	var e_description = '<?php _e( 'Widget Area Description:', 'extender' ); ?>';
	var f_genesis_extender_list_conditional_examples = '<?php genesis_extender_list_conditional_examples(); ?>';
	var f_genesis_extender_list_hooks = '<?php genesis_extender_list_hooks(); ?>';
	var f_genesis_extender_list_conditionals = '<?php genesis_extender_list_conditionals(); ?>';
</script>
<?php
}

add_action( 'admin_init', 'genesis_extender_admin_init' );
/**
 * Register styles and scripts for the Genesis Extender admin menus.
 *
 * @since 1.0
 */
function genesis_extender_admin_init()
{
	wp_register_style( 'genesis_extender_admin_styles', GENEXT_URL . 'lib/css/admin.css' );
	wp_register_style( 'genesis_extender_jqui_css', GENEXT_URL . 'lib/css/smoothness/jquery-ui-1.7.3.custom.css' );
	wp_register_style( 'genesis_extender_ms_css', GENEXT_URL . 'lib/js/multiselect/multiselect.css' );

	wp_register_script( 'genesis_extender_ace', GENEXT_URL . 'lib/js/ace/ace.js' );
	wp_register_script( 'genesis_extender_ace_autocomplete', GENEXT_URL . 'lib/js/ace/ext-language_tools.js' );
	wp_register_script( 'genesis_extender_code_builder', GENEXT_URL . 'lib/js/code-builder.js' );
	wp_register_script( 'genesis_extender_admin', GENEXT_URL . 'lib/js/admin-options.js' );
	wp_register_script( 'genesis_extender_settings', GENEXT_URL . 'lib/js/settings.js' );
	wp_register_script( 'genesis_extender_ms_js', GENEXT_URL . 'lib/js/multiselect/multiselect.js' );
	wp_register_script( 'genesis_extender_custom', GENEXT_URL . 'lib/js/custom-options.js' );
	wp_register_script( 'genesis_extender_jscolor', GENEXT_URL . 'lib/js/jscolor/jscolor.js' );
	wp_register_script( 'genesis_extender_custom_css_builder', GENEXT_URL . 'lib/js/custom-css-builder.js' );
}

/**
 * Enqueue styles and scripts for the Genesis Extender admin menus.
 *
 * @since 1.0
 */
function genesis_extender_admin_styles()
{
	wp_enqueue_style( 'genesis_extender_admin_styles' );
	
	wp_enqueue_script( 'genesis_extender_admin' );
}

/**
 * Enqueue styles and scripts for the Genesis Extender Settings menu.
 *
 * @since 1.0
 */
function genesis_extender_settings_styles()
{
	wp_enqueue_script( 'genesis_extender_settings' );
}

/**
 * Enqueue styles and scripts for the Genesis Extender Custom Options menu.
 *
 * @since 1.0
 */
function genesis_extender_custom_styles()
{
	wp_enqueue_style( 'genesis_extender_jqui_css' );
	wp_enqueue_style( 'genesis_extender_ms_css' );

	wp_enqueue_script( 'genesis_extender_ace' );
	wp_enqueue_script( 'genesis_extender_ace_autocomplete' );
	wp_enqueue_script( 'genesis_extender_ms_js' );
	wp_enqueue_script( 'genesis_extender_code_builder' );
	wp_enqueue_script( 'genesis_extender_custom_css_builder' );
	wp_enqueue_script( 'genesis_extender_custom' );
	wp_enqueue_script( 'genesis_extender_jscolor' );
}
