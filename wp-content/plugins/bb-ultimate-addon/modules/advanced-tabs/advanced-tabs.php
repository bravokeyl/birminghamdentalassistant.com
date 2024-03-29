<?php

/**
 *
 * @class AdvancedTabsModule
 */
class AdvancedTabsModule extends FLBuilderModule {

    /**
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Advanced Tabs', 'uabb'),
            'description'   => __('Advanced Tabs', 'uabb'),
            'category'      => UABB_CAT,
            'dir'           => BB_ULTIMATE_ADDON_DIR . 'modules/advanced-tabs/',
            'url'           => BB_ULTIMATE_ADDON_URL . 'modules/advanced-tabs/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        add_filter( 'fl_builder_render_settings_field', array( $this , 'uabb_tab_render_settings_field' ), 10, 3 );
    }


    /**
     *
     * @method uabb_tab_render_settings_field
     */
    function uabb_tab_render_settings_field( $field, $name, $settings ) {
        
        if ( isset( $field['form'] ) && $field['form'] == 'uabb_tab_items_form' ) {

            foreach( $settings->items as $item ) {

                if( is_object( $item ) && isset( $item->content ) && $item->ct_content == ''  ) {
                    $item->ct_content = $item->content;
                }
            }
        }

        if( isset($settings->style) && $settings->style == 'underline' ) {
            $settings->style = 'topline';
            $settings->line_position = 'bottom';
        }

        return $field;
    }


    /**
     *
     * @method get_tab_content
     */
    function get_tab_content( $settings ) {
        $content_type = $settings->content_type;
        switch($content_type) {
            case 'content':
                return $settings->ct_content;
            break;
            case 'photo':
                if ( isset( $settings->ct_photo_src ) ) {
                    return '<img src="' . $settings->ct_photo_src . '" />';
                }
                return '<img src="" />';
            break;
            case 'video':
                global $wp_embed;
                return $wp_embed->autoembed($settings->ct_video);
            break;
            case 'saved_rows':
                ob_start();
                echo do_shortcode('[fl_builder_insert_layout id="'.$settings->ct_saved_rows.'" type="fl-builder-template"]');
                return ob_get_clean();
            case 'saved_modules':
                ob_start();
                echo do_shortcode('[fl_builder_insert_layout id="'.$settings->ct_saved_modules.'" type="fl-builder-template"]');
                return ob_get_clean();
            case 'saved_page_templates':
                ob_start();
                echo do_shortcode('[fl_builder_insert_layout id="'.$settings->ct_page_templates.'" type="fl-builder-template"]');
                return ob_get_clean();
            break;
            default:
                return;
            break;
        }
    }
}

$default_breakpoint = ( trim(UABB_Model_Helper::$bb_global_settings->responsive_breakpoint) != '' ) ? UABB_Model_Helper::$bb_global_settings->responsive_breakpoint : '';

FLBuilder::register_module('AdvancedTabsModule', array(
    'items'         => array(
        'title'         => __('Tab Items', 'uabb'),
        'sections'      => array(
            'general'       => array(
                'title'         => '',
                'fields'        => array(
                    'items'         => array(
                        'type'          => 'form',
                        'label'         => __('Item', 'uabb'),
                        'form'          => 'uabb_tab_items_form', // ID from registered form below
                        'preview_text'  => 'label', // Name of a field to use for the preview text
                        'multiple'      => true
                    ),
                )
            )
        )
    ),
    'style'         => array(
        'title'         => __('Tab', 'uabb'),
        'sections'      => array(
            'general'       => array(
                'title'         => '',
                'fields'        => array(
                    'style'        => array(
                        'type'          => 'select',
                        'label'         => __('Tab Appearance', 'uabb'),
                        'default'       => 'bar',
                        'help'          => __( 'Choose from the different tab styles', 'uabb'),
                        'options'       => array(
                            'simple'        => __('Simple', 'uabb'),
                            'bar'           => __('Bar', 'uabb'),
                            'iconfall'      => __('Icon fall', 'uabb'),
                            'topline'       => __('Topline', 'uabb'),
                            'linebox'       => __('Line box', 'uabb'),
                        ),
                        'toggle' => array(
                            'simple' => array(
                                'fields' => array(
                                    'title_color',
                                    'title_hover_color',
                                    'title_active_color',
                                    'tab_padding'
                                ),
                            ),
                            'bar' => array(
                                'fields' => array(
                                    'title_color',
                                    'title_hover_color',
                                    'title_background_color',
                                    'title_background_color_opc',
                                    'title_background_hover_color',
                                    'title_background_hover_color_opc',
                                    'title_active_color',
                                    'title_active_background_color',
                                    'title_active_background_color_opc',
                                    'tab_padding'
                                ),
                                'sections' => array( 'label_border' )
                            ),
                            'iconfall' => array(
                                'fields' => array(
                                    'title_color',
                                    'title_hover_color',
                                    'title_active_color',
                                ),
                                'sections' => array( 'underline_settings' )
                            ),
                            'topline' => array(
                                'fields' => array(
                                    'title_color',
                                    'title_hover_color',
                                    'title_background_color',
                                    'title_background_color_opc',
                                    'title_active_color',
                                    /*'line_position',*/
                                    'tab_padding'
                                ),
                                'sections' => array( 'underline_settings' )
                            ),
                            'linebox' => array(
                                'fields' => array(
                                    'title_color',
                                    /*'title_hover_color',*/
                                    'title_active_color',
                                    'title_background_color',
                                    'title_active_background_color',
                                    'title_active_background_color_opc',
                                    'tab_padding'
                                )
                            ),
                        )
                    ),
                    'tab_padding' => array(
                        'type'      => 'uabb-spacing',
                        'label'     => __( 'Tab Padding', 'uabb' ),
                        'mode'      => 'padding',
                        'default'   => 'padding: 15px;',
                    ),
                    'responsive'        => array(
                        'type'          => 'select',
                        'label'         => __('Responsive Mode for Tabs', 'uabb'),
                        'default'       => 'accordion',
                        'help'          => __( 'Display normal tab or convert them into accordion on responsive devices.', 'uabb'),
                        'options'       => array(
                            'tabs'          => __('Tabs', 'uabb'),
                            'accordion'     => __('Accordion', 'uabb'),
                        ),
                        'toggle'        => array(
                            'accordion'     => array( 
                                'fields'        => array('responsive_breakpoint','enable_first'),
                            )
                        ),
                    ),
                    'responsive_breakpoint'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Responsive Breakpoint', 'uabb' ),
                        'placeholder'   => $default_breakpoint,
                        'size'          => '8',
                        'description'   => 'px',
                        'help'          => __( 'Enter breakpoint to change Tabs into Accordion', 'uabb' ),
                    ),
                    'enable_first'       => array(
                        'type'          => 'select',
                        'label'         => __('Collapse All Tabs', 'uabb'),
                        'default'       => 'no',
                        'options'       => array(
                            'no'             => __('No', 'uabb'),
                            'yes'             => __('Yes', 'uabb')
                        ),
                        'help'          => __('Choosing yes will collapse all tabs by default.', 'uabb')
                    )
                )
            ),
              'icon_style'       => array(
                'title'         => __( 'Tab Icon', 'uabb'),
                'fields'        => array(
                    'show_icon'        => array(
                        'type'          => 'select',
                        'label'         => __('Show Icon', 'uabb'),
                        'default'       => 'yes',
                        'options'       => array(
                            'no'    => __('Disable', 'uabb'),
                            'yes'      => __('Enable', 'uabb'),
                        ),
                    ),
                    'icon_position'        => array(
                        'type'          => 'select',
                        'label'         => __('Icon Position', 'uabb'),
                        'default'       => 'left',
                        'options'       => array(
                            'left'    => __('Left', 'uabb'),
                            'right'      => __('Right', 'uabb'),
                            'top'      => __('Top', 'uabb'),
                        )
                    ),
                    'icon_size'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Icon Size', 'uabb' ),
                        'placeholder'   => __( 'Inherit', 'uabb'),
                        'size'          => '8',
                        'description'   => 'px',
                        'help'   => __( 'If icon size is kept bank then title font size would be applied', 'uabb' ),
                    ),
                    'icon_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Icon Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'icon_hover_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Icon Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                        'preview'       => array(
                                'type'      => 'none',
                        ),
                    ),
                    'icon_active_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Icon Active Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                )
            ),
            'tab_style'       => array(
                'title'         => __('Tab Style','uabb'),
                'fields'        => array(
                    'tab_style'     => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __( 'Style', 'uabb' ),
                        'default'       => 'full',
                        'help'          => __( 'Use Full if you want the Tabs to occupy complete width of container and Inline for auto width', 'uabb'),
                        'options'       => array(
                            'full'       => __('Full','uabb'),
                            'inline'     => __('Inline','uabb'),
                        ),
                        'toggle' => array(
                            'inline' => array(
                                'fields' => array( 'tab_style_alignment' )
                            ),
                        )
                    ),
                    'tab_style_alignment' => array(
                        'type'          => 'select',
                        'label'         => __('Alignment', 'uabb'),
                        'default'       => 'left',
                        'options'       => array(
                            'left'      => __('Left', 'uabb'),
                            'right'     => __('Right', 'uabb'),
                            'center'    => __('Center', 'uabb'),
                        ),
                    ),
                    'tab_style_width' => array(
                        'type'          => 'select',
                        'label'         => __('Tab Width', 'uabb'),
                        'default'       => 'auto',
                        'help'          => __( 'To make the Tabs of equal width use Equal width option.', 'uabb'),
                        'options'       => array(
                            'auto'      => __('Auto', 'uabb'),
                            'equal'     => __('Equal', 'uabb'),
                        ),
                    ),

                    'title_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Text Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'title_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Text Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'title_active_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Text Active Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'title_background_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Background Color', 'uabb'),
                        'default'       => 'f6f6f6',
                        'show_reset' => true,
                    ),
                    'title_background_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                                        
                    'title_background_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'title_background_hover_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                    
                    'title_active_background_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Active Background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'title_active_background_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                    
                )
            ),
            'underline_settings' => array(
                'title' => __( 'Highlight Border Style', 'uabb' ),
                'fields' => array(
                    'line_position' => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __( 'Line Position', 'uabb' ),
                        'default'       => 'top',
                        'options'       => array(
                            'top'       => __('Top','uabb'),
                            'bottom'    => __('Bottom','uabb'),
                        ),
                    ),
                    'underline_border_size'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Border Thickness', 'uabb' ),
                        'placeholder'   => '6',
                        'size'          => '8',
                        'help'          => __('To change the Highlight border thickness use this options','uabb'),
                        'description'   => 'px',
                    ),
                    'underline_border_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Border Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    
                )
            ),
            'label_border' => array(
                'title' => __( 'Tab Spacing', 'uabb' ),
                'fields' => array(
                    'tab_spacing'   => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __('Tab Spacing', 'uabb'),
                        'default'       => 'yes',
                        'help'          => __( 'To manage the space between tabs use this setting', 'uabb'),
                        'options'       => array(
                            'yes'      => __('Yes', 'uabb'),
                            'no'      => __('No', 'uabb'),
                        ),
                        'toggle' => array(
                            'yes' => array(
                                'fields' => array( 'tab_spacing_size' )
                            ),
                        ),
                    ),
                    'tab_spacing_size'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Margin', 'uabb' ),
                        'placeholder'   => '10',
                        'size'          => '8',
                        'description'   => 'px',
                    ),
                )
            ),          
        )
    ),
    'content' => array(
        'title' => __( 'Content', 'uabb' ),
        'sections' => array(
            'content_style'       => array(
                'title'         => __('Content Style', 'uabb'),
                'fields'        => array(
                    'content_padding' => array(
                        'type'      => 'uabb-spacing',
                        'label'     => __( 'Padding', 'uabb' ),
                        'default'   => 'padding: 25px;',
                        'mode'      => 'padding',
                    ),
                    'content_alignment' => array(
                        'type'          => 'select',
                        'label'         => __('Alignment', 'uabb'),
                        'default'       => 'left',
                        'options'       => array(
                            'left'      => __('Left', 'uabb'),
                            'center'    => __('Center', 'uabb'),
                            'right'     => __('Right', 'uabb'),
                        ),
                    ),
                    'content_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'content_background_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'content_background_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                )
            ),
            'border-styles' => array(
                'title'         => __('Content Border','uabb'),
                'fields'        => array(
                    'content_border_style'   => array(
                        'type'          => 'select',
                        'label'         => __('Border Style', 'uabb'),
                        'default'       => 'solid',
                        'help'          => __('The type of border to use. Double borders must have a width of at least 3px to render properly.', 'uabb'),
                        'options'       => array(
                            'none'      => __('None', 'uabb'),
                            'solid'      => __('Solid', 'uabb'),
                            'dashed'      => __('Dashed', 'uabb'),
                            'dotted'      => __('Dotted', 'uabb'),
                            'double'      => __('Double', 'uabb'),
                        ),
                        'toggle' => array(
                            'none' => array(
                                'fields' => array( 'content_border_radius' )
                            ),
                            'solid' => array(
                                'fields' => array( 'content_border_size', 'content_border_color' )
                            ),
                            'dashed' => array(
                                'fields' => array( 'content_border_size', 'content_border_color' )
                            ),
                            'dotted' => array(
                                'fields' => array( 'content_border_size', 'content_border_color' )
                            ),
                            'double' => array(
                                'fields' => array( 'content_border_size', 'content_border_color' )
                            ),
                        ),
                    ),
                    'content_border_size'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Border Size', 'uabb' ),
                        'placeholder'   => '1',
                        'size'          => '8',
                        'description'   => 'px',
                    ),
                    'content_border_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Border Color', 'uabb'),
                        'default'       => 'f6f6f6',
                        'show_reset' => true,
                    ),
                    'content_border_radius'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Border Radius', 'uabb' ),
                        'placeholder'   => '0',
                        'size'          => '8',
                        'description'   => 'px',
                    ),
                )
            )
        )
    ),
    'typography'       => array( // Tab
        'title'         => __('Typography', 'uabb'), // Tab title
        'sections'      => array( // Tab Sections
            'title_typography' => array(
                'title' => __( 'Title', 'uabb' ),
                'fields'    => array(
                    'title_tag_selection'   => array(
                        'type'          => 'select',
                        'label'         => __('Tag', 'uabb'),
                        'default'       => 'h4',
                        'options'       => array(
                            'h1'      => __('H1', 'uabb'),
                            'h2'      => __('H2', 'uabb'),
                            'h3'      => __('H3', 'uabb'),
                            'h4'      => __('H4', 'uabb'),
                            'h5'      => __('H5', 'uabb'),
                            'h6'      => __('H6', 'uabb'),
                            'div'     => __('Div', 'uabb'),
                            'p'       => __('p', 'uabb'),
                            'span'    => __('span', 'uabb'),
                        )
                    ),
                    'title_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.uabb-tabs ul li a *'
                        )
                    ),
                    'title_font_size'     => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                    'title_line_height'    => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Line Height', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                )
            ),
            'content_typography' => array(
                'title' => __( 'Content', 'uabb' ),
                'fields'    => array(
                    'content_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.uabb-content-wrap .uabb-content, .uabb-content-wrap .uabb-content-current, .uabb-content-wrap .uabb-content p, .uabb-content-wrap .uabb-content-current p'
                        )
                    ),
                    'content_font_size'     => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                    'content_line_height'    => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Line Height', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                )
            ),
        ),
    )
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('uabb_tab_items_form', array(
    'title' => __('Add Item', 'uabb'),
    'tabs'  => array(
        'general'      => array(
            'title'         => __('General', 'uabb'),
            'sections'      => array(
                'general'       => array(
                    'title'         => '',
                    'fields'        => array(
                        'label'         => array(
                            'type'          => 'text',
                            'default'       => __('Ticketing', 'uabb'),
                            'label'         => __('Tab Title', 'uabb')
                        ),
                        'tab_icon'          => array(
                            'type'          => 'icon',
                            'label'         => __('Icon', 'uabb'),
                            'default'       => 'ua-icon ua-icon-envelope',
                            'show_remove'   => true
                        ),
                    )
                ),
                'content_type' => array(
                    'title'     => __('Content', 'uabb'),
                    'fields'    => array(
                        'content_type'       => array(
                            'type'          => 'select',
                            'label'         => __('Type', 'uabb'),
                            'default'       => 'content',
                            'options'       => array(
                                'content'       => __('Content', 'uabb'),
                                'photo'         => __('Photo', 'uabb'),
                                'video'         => __('Video Embed Code', 'uabb'),
                                'saved_rows'        => array(
                                    'label'         => __('Saved Rows', 'uabb'),
                                    'premium'       => true
                                ),
                                'saved_modules'     => array(
                                    'label'         => __('Saved Modules', 'uabb'),
                                    'premium'       => true
                                ),
                                'saved_page_templates'      => array(
                                    'label'         => __('Saved Page Templates', 'uabb'),
                                    'premium'       => true
                                ),
                            ),
                            'toggle'        => array(
                                'content'       => array(
                                    'fields'        => array('ct_content')
                                ),
                                'photo'        => array(
                                    'fields'        => array('ct_photo')
                                ),
                                'video'         => array(
                                    'fields'        => array('ct_video')
                                ),
                                'saved_rows'     => array(
                                    'fields'        => array('ct_saved_rows')
                                ),
                                'saved_modules'     => array(
                                    'fields'        => array('ct_saved_modules')
                                ),
                                'saved_page_templates'     => array(
                                    'fields'        => array('ct_page_templates')
                                )
                            )
                        ),
                        'ct_content'   => array(
                            'type'                  => 'editor',
                            'label'                 => '',
                            'default'               => '',
                        ),
                        'ct_photo'     => array(
                            'type'                  => 'photo',
                            'label'                 => __('Select Photo', 'uabb'),
                            'show_remove'           => true,
                        ),
                        'ct_video'     => array(
                            'type'                  => 'textarea',
                            'label'                 => __('Embed Code / URL', 'uabb'),
                            'rows'                  => 6
                        ),
                        'ct_saved_rows'      => array(
                            'type'                  => 'select',
                            'label'                 => __('Select Row', 'uabb'),
                            'options'               => UABB_Model_Helper::get_saved_row_template(),
                        ),
                        'ct_saved_modules'      => array(
                            'type'                  => 'select',
                            'label'                 => __('Select Module', 'uabb'),
                            'options'               => UABB_Model_Helper::get_saved_module_template(),
                        ),
                        'ct_page_templates'      => array(
                            'type'                  => 'select',
                            'label'                 => __('Select Page Template', 'uabb'),
                            'options'               => UABB_Model_Helper::get_saved_page_template(),
                        )
                    )
                )
            )
        )
    )
));
