<?php

/**
 * Global Filters for Beaver Builder theme customizer values
 *
 */

if ( !class_exists( 'UABB_GeneratepressGlobalIntegration' ) ) {
	
	class UABB_GeneratepressGlobalIntegration {
		public $gp_options;
			
		function __construct() {
			/** 
			 *	**
			 *	* Tracing Beaver Builder Theme Colors
			 *	**
			 *
			 *	# Theme
			 *	Primary Color 			- Accent Color 			- fl-accent
			 *	Primary Text Color 		- Text Color 		 	- fl-body-text-color
  			 *
			 *	# Button
			 *	Background Color 		- Accent Color  		- fl-accent
			 *	Background Hover Color  - Accent Hover Color 	- fl-accent-hover
			 *	Text Color  			- accent-fg-color 		- accent-fg-color
			 *	Text Hover Color  		- accent-fg-hover-color - accent-fg-hover-color
 			 *
			 **/

			/* Get BB Theme Customizer Options */
			
			$mods = wp_parse_args( 
				get_option( 'generate_settings', array() ), 
				generate_get_color_defaults() 
			);

			/* Primary Color */
			$var['theme_color']			= ( isset( $mods['link_color'] ) ) ? $mods['link_color'] : '';
			/* Primary Text Color */
			$var['theme_text_color']    = ( isset( $mods['text_color'] ) ) ? $mods['text_color'] : '';
			
			/* Button */
			/* Background Colors */
			$var['btn_bg_color']		 = $mods['form_button_background_color'];
			$var['btn_bg_hover_color']	 = $mods['form_button_background_color_hover'];
			
			/* Text Colors */
			$var['btn_text_color']		 = $mods['form_button_text_color'];
			$var['btn_text_hover_color'] = $mods['form_button_text_color_hover'];

			$this->gp_options = $var;

			add_filter( 'uabb/global/theme_color', array( $this, 'uabb_global_theme_color' ) );
			add_filter( 'uabb/global/text_color', array( $this, 'uabb_global_text_color' ) );

			add_filter( 'uabb/global/button_bg_color', array( $this, 'uabb_global_button_bg_color' ) );
			add_filter( 'uabb/global/button_bg_hover_color', array( $this, 'uabb_global_button_bg_hover_color' ) );

			add_filter( 'uabb/global/button_text_color', array( $this, 'uabb_global_button_text_color' ) );
			add_filter( 'uabb/global/button_text_hover_color', array( $this, 'uabb_global_button_text_hover_color' ) );

		}

		/**
		 * Theme Color -
		 */
		function uabb_global_theme_color() {
			$color = $this->gp_options['theme_color'];

			return $color;
		}

		/**
		 * Theme Text Color -
		 */
		function uabb_global_text_color() {
			$color = $this->gp_options['theme_text_color'];

			return $color;
		}

		/**
		 * Button Background Color -
		 */
		function uabb_global_button_bg_color() {
		    $color = $this->gp_options['btn_bg_color'];

		    return $color;
		}


		/**
		 * Button Background Hover Color -
		 */
		function uabb_global_button_bg_hover_color() {
		    $color = $this->gp_options['btn_bg_hover_color'];

		    return $color;
		}

		/**
		 * Button Text Color -
		 */
		function uabb_global_button_text_color() {
			$color = $this->gp_options['btn_text_color'];

			return $color;
		}


		/**
		 * Button Text Hover Color -
		 */
		function uabb_global_button_text_hover_color() {
		    $color = $this->gp_options['btn_text_hover_color'];

		    return $color;
		}


	}

	new UABB_GeneratepressGlobalIntegration();
}