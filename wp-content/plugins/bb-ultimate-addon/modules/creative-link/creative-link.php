<?php

/**
 *
 * @class CreativeLink
 */
class CreativeLink extends FLBuilderModule {

    /**
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Creative Link', 'uabb'),
            'description'   => __('Creative Link', 'uabb'),
            'category'		=> UABB_CAT,
            'dir'           => BB_ULTIMATE_ADDON_DIR . 'modules/creative-link/',
            'url'           => BB_ULTIMATE_ADDON_URL . 'modules/creative-link/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }

    public function render_text( $title ) {
        switch ( $this->settings->link_style ) {
            case 'simple':
            case 'style1':
            case 'style3':
            case 'style4':
            case 'style6':
            case 'style7':
            case 'style8':
            case 'style10':
            case 'style12':
            case 'style13':
            case 'style14':
            case 'style15':
            case 'style16':
            case 'style20':
                echo trim( $title , '' );
                break;
            
            case 'style2':
            case 'style5':
            case 'style17':
            case 'style18':
            case 'style19':
                echo '<span data-hover="' . trim( $title , '' ) . '">' . trim( $title , '' ) . '</span>';
                break;

            case 'style9':
            case 'style11':
                echo '<span>' . trim( $title , '' ) . '</span>';
                break;
        }
    }

}



/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('CreativeLink', array(
    'general'       => array( // Tab
        'title'         => __('Title', 'uabb'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => '', // Section Title
                'fields'        => array( // Section Fields
                    'screens'     => array(
                        'type'         => 'form',
                        'label'        => __('Title', 'uabb'),
                        'form'         => 'screens_form',
                        'preview_text' => 'title',
                        'multiple'     => true
                    ),
                )
            ),
        )
    ),
    'style'       => array( // Tab
        'title'         => __('Style', 'uabb'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Style', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'link_style'    => array(
                        'type'          => 'select',
                        'label'         => __('Link Style', 'uabb'),
                        'default'       => 'style3',
                        'options'       => array(
                            'style1'         => __('Style 1', 'uabb'),
                            'style2'         => __('Style 2', 'uabb'),
                            'style3'         => __('Style 3', 'uabb'),
                            'style4'         => __('Style 4', 'uabb'),
                            'style5'         => __('Style 5', 'uabb'),
                            'style6'         => __('Style 6', 'uabb'),
                            'style7'         => __('Style 7', 'uabb'),
                            'style8'         => __('Style 8', 'uabb'),
                            'style9'         => __('Style 9', 'uabb'),
                            /*'style10'         => __('Style 10', 'uabb'),*/
                            'style11'         => __('Style 10', 'uabb'),
                            'simple'         => __('Style 11', 'uabb'),
                            /*'style12'         => __('Style 12', 'uabb'),
                            'style13'         => __('Style 13', 'uabb'),*/
                            'style14'         => __('Style 12', 'uabb'),
                            'style15'         => __('Style 13', 'uabb'),
                            'style16'         => __('Style 14', 'uabb'),
                            'style17'         => __('Style 15', 'uabb'),
                            'style18'         => __('Style 16', 'uabb'),
                            'style19'         => __('Style 17', 'uabb'),
                            'style20'         => __('Style 18', 'uabb'),
                        ),
                        'toggle' => array(
                            'simple' => array(
                                'fields' => array()
                            ),
                            'style1' => array(
                                'fields' => array()
                            ),
                            'style2' => array(
                                'fields' => array( 'background_color', 'background_color_opc', 'background_hover_color', 'background_hover_color_opc' ),
                            ),
                            'style3' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style4' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style5' => array(
                                'fields' => array(),
                            ),
                            'style6' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style7' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style8' => array(
                                'fields' => array( 'border_size', 'border_color', 'border_style', 'border_hover_color'  ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style9' => array(
                                'fields' => array( 'background_color', 'background_color_opc', 'background_hover_color', 'background_hover_color_opc'  ),
                            ),
                            'style10' => array(
                                'fields' => array( 'border_size', 'border_color', 'border_style', 'border_hover_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style11' => array(
                                'fields' => array( 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style12' => array(
                                'fields' => array(),
                            ),
                            'style13' => array(
                                'fields' => array('border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style14' => array(
                                'fields' => array(),
                            ),
                            'style15' => array(
                                'fields' => array(),
                            ),
                            'style16' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style17' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                            'style18' => array(
                                'fields' => array( 'background_color', 'background_color_opc', 'background_hover_color', 'background_hover_color_opc', 'box_width' ),
                            ),
                            'style19' => array(
                                'fields' => array( 'background_color', 'background_color_opc', 'background_hover_color', 'background_hover_color_opc' ),
                            ),
                            'style20' => array(
                                'fields' => array( 'border_size', 'border_color' ),
                                'sections' => array( 'border_settings' )
                            ),
                        )
                    ),
                    'alignment'    => array(
                        'type'          => 'select',
                        'label'         => __('Overall Alignment', 'uabb'),
                        'default'       => 'center',
                        'options'       => array(
                            'left'         => __('Left', 'uabb'),
                            'right'          => __('Right', 'uabb'),
                            'center'          => __( 'Center', 'uabb' ),
                        ),
                    ),
                    'spacing'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Space Between Links', 'uabb' ),
                        'placeholder'   => '10',
                        'size'          => '8',
                        'description'   => 'px',
                        'help'          => __( 'This option controls the left-right spacing of each link.', 'uabb' ),
                    ),
                    'bottom_spacing'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Link Bottom Spacing', 'uabb' ),
                        'placeholder'   => '15',
                        'size'          => '8',
                        'description'   => 'px',
                        'help'          => __( 'Controls the bottom margin of each link. This setting is useful when links are distributed in more than one row for medium / small width devices. ', 'uabb' ),
                    ),

                    'mobile_structure' => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __('Mobile Structure', 'uabb'),
                        'default'       => 'stacked',
                        'options'       => array(
                            ''              => __('Inline', 'uabb'),
                            'stacked'       => __('Stacked', 'uabb'),
                        ),
                        'help'      => __('Display structure on Mobile', 'uabb')
                    ),
                    'box_width' => array(
                        'type'          => 'text',
                        'label'         => __( 'Box Width', 'uabb' ),
                        'default'       => '200',
                        'size'          => '8',
                        'description'   => 'px',
                    )
                )
            ),
            'color_settings'       => array( // Section
                'title'         => __('Color Settings', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'link_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Link Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'link_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Link Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'background_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    
                    'background_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                )
            ),
            'border_settings'       => array( // Section
                'title'         => __('Border Settings', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'border_style' => array(
                        'type'          => 'select',
                        'label'         => __('Border Style', 'uabb'),
                        'default'       => 'solid',
                        'options'       => array(
                            'solid'        => __('Solid', 'uabb'),
                            'dashed'       => __('Dashed', 'uabb'),
                            'double'       => __('Double', 'uabb'),
                            'dotted'       => __('Dotted', 'uabb'),
                        ),
                    ),
                    'border_size'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Border Size', 'uabb' ),
                        'placeholder'   => '1',
                        'size'          => '8',
                        'description'   => 'px',
                    ),
                    'border_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Border Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'border_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Border Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                        'preview'       => array(
                                'type'      => 'none',
                        )
                    ),
                )
            ),
        )
    ),
    'typography'       => array( // Tab
        'title'         => __('Typography', 'uabb'), // Tab title
        'sections'      => array( // Tab Sections
            'link_typography' => array(
                'title' => __('Title Text', 'uabb' ),
                'fields'    => array(
                    'link_typography_tag_selection'   => array(
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
                    'link_typography_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.uabb-creative-link a, .uabb-creative-link a span'
                        )
                    ),
                    'link_typography_font_size'     => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                    'link_typography_line_height'    => array(
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
        )
    ),
));

FLBuilder::register_settings_form('screens_form', array(
    'title' => __( 'Title', 'uabb' ),
    'tabs'  => array(
        'general'      => array(
            'title'         => __('General', 'uabb'),
            'sections'      => array(
                'features'       => array(
                    'title'         => '',
                    'fields'        => array(
                        'title'         => array(
                            'type'          => 'text',
                            'label'         => __('Title', 'uabb'),
                            'default'         => __('Let\'s do this!', 'uabb'),
                        ),
                        'link'          => array(
                            'type'          => 'link',
                            'label'         => __('Link', 'uabb'),
                            'placeholder'   => 'http://www.example.com',
                        ),
                        'target' => array(
                            'type'          => 'select',
                            'label'         => __('Target', 'uabb'),
                            'default'       => '',
                            'options'       => array(
                                '_blank'        => __('New Page', 'uabb'),
                                ''              => __('Same Page', 'uabb'),
                            ),
                        )
                    )
                ),
            )
        ),
    )
));
