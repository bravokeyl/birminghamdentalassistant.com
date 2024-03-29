<?php

/**
 *
 * @class iHoverModule
 */
class iHoverModule extends FLBuilderModule {

    /**
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('iHover', 'uabb'),
            'description'   => __('iHover', 'uabb'),
            'category'      => UABB_CAT,
            'dir'           => BB_ULTIMATE_ADDON_DIR . 'modules/ihover/',
            'url'           => BB_ULTIMATE_ADDON_URL . 'modules/ihover/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }

    /**
     * @method render_image
     */
    public function render_image($i) {
        if( isset( $this->settings->ihover_item[$i]->photo_src ) ) {
            $photo_data = FLBuilderPhoto::get_attachment_data($this->settings->ihover_item[$i]->photo);
            $alt = ( isset( $photo_data->alt ) ) ? $photo_data->alt : '';
            echo '<img src="' . $this->settings->ihover_item[$i]->photo_src . '" alt="' . $alt . '" class="uabb-ih-image">';
        }
    }
}



/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('iHoverModule', array(
    'general'       => array(
        'title'          => __('General', 'uabb'), // Tab title
        'sections'  => array(
            'items' => array(
                'title' => __('iHover Items', 'uabb'), // Section Title
                'fields' => array(
                    'ihover_item'   => array(
                        'type'         => 'form',
                        'label'        => __('iHover Item', 'uabb'),
                        'form'         => 'ihover_item_form',
                        'preview_text' => 'title',
                        'multiple'     => true
                    ),
                )
            )
        )
    ),
    'design'       => array( // Tab
        'title'         => __('Design', 'uabb'), // Tab title
        'sections'      => array( // Tab Sections
            'alignment'       => array( // Section
                'title'         => '', // Section Title
                'fields'        => array( // Section Fields
                    'align'   => array(
                        'type'          => 'select',
                        'label'         => __('iHover Alignment', 'uabb'),
                        'default'       => 'circle',
                        'help'          => __( 'This is the overall alignment of iHover', 'uabb'),
                        'options'       => array(
                            'center'      => __('Center', 'uabb'),
                            'left'      => __('Left', 'uabb'),
                            'right'      => __('Right', 'uabb'),
                        ),
                    ),                    
                    'spacing'      => array(
                        'type'          => 'text',
                        'label'         => __('Spacing', 'uabb'),
                        'default'       => '30',
                        'size'          => '8',
                        'description'   => 'px',
                        'help'          => __('Spacing between two iHovers','uabb'),
                    ),
                    'content_padding' => array(
                        'type'      => 'uabb-spacing',
                        'label'     => __( 'Content Padding', 'uabb' ),
                        'help'         => __('To manage the inner padding use this setting.', 'uabb'),
                        'default'   => '',    //optional
                        'mode'      => 'padding',
                    ),
                )
            ),
            'style'       => array( // Section
                'title'         => __('Style', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'shape'   => array(
                        'type'          => 'select',
                        'label'         => __('Thumbnail Shape', 'uabb'),
                        'default'       => 'circle',
                        'help'          => __( 'Select the shape of iHover image, we have used CSS to shape the image, for best output use relevant images', 'uabb'),
                        'options'       => array(
                            'circle'      => __('Circle', 'uabb'),
                            'square'      => __('Square', 'uabb'),
                        ),
                    ),
                    'height_width_options'     => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __('Thumbnail Height & Width', 'uabb'),
                        'default'       => 'default',
                        'help'          => __( 'By selecting Custom, you can decide the height and width of iHover Box, by Default 250px height and width is applied', 'uabb'),
                        'options'       => array(
                            'default'      => __('Default', 'uabb'),
                            'custom'      => __('Custom', 'uabb'),
                        ),
                        'toggle' => array(
                            'default' => array(
                                'fields' => array()
                            ),
                            'custom' => array(
                                'fields' => array( 'height_width' )
                            ),
                        ),
                    ),
                    'height_width'      => array(
                        'type'          => 'text',
                        'label'         => __('Height / Width', 'uabb'),
                        'default'       => '250',
                        'size'          => '8',
                        'description'   => 'px',
                    ),
                    'responsive_size'     => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __('Responsive Size', 'uabb'),
                        'default'       => 'no',
                        'help'          => __( 'Add responsive size for medium devices', 'uabb'),
                        'options'       => array(
                            'yes'      => __('Yes', 'uabb'),
                            'no'      => __('No', 'uabb'),
                        ),
                        'toggle' => array(
                            'no' => array(
                                'fields' => array()
                            ),
                            'yes' => array(
                                'fields' => array( 'height_width_responsive' )
                            ),
                        ),
                    ),
                    'height_width_responsive'      => array(
                        'type'          => 'text',
                        'label'         => __('Responsive Height / Width', 'uabb'),
                        'default'       => '100',
                        'size'          => '8',
                        'description'   => 'px',
                    ),
                )
            ),
        )
    ),
    'typography'       => array( // Tab
        'title'         => __('Typography', 'uabb'), // Tab title
        'sections'      => array( // Tab Sections
            'title_typography' => array(
                'title' => __( 'Title', 'uabb' ),
                'fields'    => array(
                    'title_typography_tag_selection'   => array(
                        'type'          => 'select',
                        'label'         => __('Tag', 'uabb'),
                        'default'       => 'h3',
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
                    'title_typography_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.uabb-ih-heading'
                        )
                    ),
                    'title_typography_font_size'     => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                    'title_typography_line_height'    => array(
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
            'desc_typography' => array(
                'title' => __( 'Description', 'uabb' ),
                'fields'    => array(
                    'desc_typography_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.uabb-ih-description p'
                        )
                    ),
                    'desc_typography_font_size'     => array(
                        'type'          => 'uabb-simplify',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'default'       => array(
                            'desktop'       => '',
                            'medium'        => '',
                            'small'         => '',
                        ),
                    ),
                    'desc_typography_line_height'    => array(
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
            'spacing_settings'       => array( // Section
                'title'         => __('Space Settings', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'title_margin_top'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Title Top Margin', 'uabb' ),
                        'size'          => '8',
                        'placeholder'   => '5',
                        'class'         => '',
                        'description'   => 'px',                    ),
                    'title_margin_bottom'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Title Bottom Margin', 'uabb' ),
                        'size'          => '8',
                        'placeholder'   => '5',
                        'class'         => '',
                        'description'   => 'px',
                    ),
                    'separator_margin_top'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Separator Top Margin', 'uabb' ),
                        'size'          => '8',
                        'placeholder'   => '7',
                        'class'         => '',
                        'description'   => 'px',
                    ),
                    'separator_margin_bottom'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Separator Bottom Margin', 'uabb' ),
                        'size'          => '8',
                        'placeholder'   => '7',
                        'class'         => '',
                        'description'   => 'px',
                    ),
                    'desc_margin_top'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Description Top Margin', 'uabb' ),
                        'size'          => '8',
                        'placeholder'   => '5',
                        'class'         => '',
                        'description'   => 'px',
                    ),
                    'desc_margin_bottom'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Description Bottom Margin', 'uabb' ),
                        'size'          => '8',
                        'placeholder'   => '5',
                        'class'         => '',
                        'description'   => 'px',
                    ),
                )
            ),
        ),
    )
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('ihover_item_form', array(
    'title' => __('Add iHover Item', 'uabb'),
    'tabs'  => array(
        'general' => array(
            'title' => __('General', 'uabb'), // Tab title,
            'sections' => array(
                'general'       => array( // Section
                    'title'         => '', // Section Title
                    'fields'        => array( // Section Fields
                        'photo' => array(
                            'type'          => 'photo',
                            'label'         => __('iHover Image', 'uabb'),
                            'show_remove'   => true,
                        ),
                    )
                ),
                'title'       => array( // Section
                    'title'         => __('Title', 'uabb'), // Section Title
                    'fields'        => array( // Section Fields
                        'title'     => array(
                            'type'          => 'text',
                            'label'         => __('Title', 'uabb'),
                            'default'       => 'iHover',
                            'help'          => __('Perhaps, this is the most highlighted text.','uabb'),
                        ),
                    )
                ),
                'separator'       => array( // Section
                    'title'         => __('Title & Description Divider', 'uabb'), // Section Title
                    'fields'        => array( // Section Fields
                        'separator_style'     => array(
                            'type'          => 'select',
                            'label'         => __('Divider Style', 'uabb'),
                            'default'       => 'solid',
                            'help'          => __('Select the border style.','uabb'),
                            'options'       => array(
                                'none'      => __('None', 'uabb'),
                                'solid'      => __('Solid', 'uabb'),
                                'dashed'      => __('Dashed', 'uabb'),
                                'dotted'      => __('Dotted', 'uabb'),
                                'double'      => __('Double', 'uabb'),
                                'inset'      => __('Inset', 'uabb'),
                                'outset'      => __('Outset', 'uabb')
                            ),
                            'toggle' => array(
                                'none' => array(
                                    'fields' => array()
                                ),
                                'solid' => array(
                                    'fields' => array( 'separator_size', 'separator_width', 'separator_color', 'separator_margin_top', 'separator_margin_bottom' )
                                ),
                                'dashed' => array(
                                    'fields' => array( 'separator_size', 'separator_width', 'separator_color', 'separator_margin_top', 'separator_margin_bottom' )
                                ),
                                'dotted' => array(
                                    'fields' => array( 'separator_size', 'separator_width', 'separator_color', 'separator_margin_top', 'separator_margin_bottom' )
                                ),
                                'double' => array(
                                    'fields' => array( 'separator_size', 'separator_width', 'separator_color', 'separator_margin_top', 'separator_margin_bottom' )
                                ),
                                'inset' => array(
                                    'fields' => array( 'separator_size', 'separator_width', 'separator_color', 'separator_margin_top', 'separator_margin_bottom' )
                                ),
                                'outset' => array(
                                    'fields' => array( 'separator_size', 'separator_width', 'separator_color', 'separator_margin_top', 'separator_margin_bottom' )
                                )
                            ),
                        ),
                        'separator_size'    => array(
                            'type'          => 'text',
                            'label'         => __( 'Divider thickness', 'uabb' ),
                            'default'       => '1',
                            'size'          => '8',
                            'placeholder'   => __( 'Size of border', 'uabb' ),
                            'class'         => '',
                            'description'   => 'px',
                            'help'          => __( 'Enter value in pixels.', 'uabb' ),
                        ),
                        'separator_width'    => array(
                            'type'          => 'text',
                            'label'         => __( 'Divider Width', 'uabb' ),
                            'default'       => '50',
                            'size'          => '8',
                            'placeholder'   => __( 'Width of border', 'uabb' ),
                            'class'         => '',
                            'description'   => '%',
                            'help'          => __( 'Enter value in percentage.', 'uabb' ),
                        ),
                    )
                ),
                'description'       => array( // Section
                    'title'         => __('Description', 'uabb'), // Section Title
                    'fields'        => array( // Section Fields
                        'description'     => array(
                            'type'          => 'editor',
                            'media_buttons' => false,
                            'rows'          => 10,
                            'label'         => '',
                            'default'       => __('Enter description text here.','uabb'),
                        ),
                    )
                ),
                'link'       => array( // Section
                    'title'         => __('Link', 'uabb'), // Section Title
                    'fields'        => array( // Section Fields
                        'on_click'     => array(
                            'type'          => 'select',
                            'label'         => __('On Click', 'uabb'),
                            'default'       => 'do_nothing',
                            'options'       => array(
                                'do_nothing'      => __('Do Nothing', 'uabb'),
                                'link'      => __('Link', 'uabb'),
                            ),
                            'toggle' => array(
                                'do_nothing' => array(
                                    'fields' => array()
                                ),
                                'link' => array(
                                    'fields' => array( 'link_url', 'link_target' )
                                ),
                            ),
                        ),
                        'link_url'    => array(
                            'type'          => 'text',
                            'label'         => __( 'Link URL', 'uabb' ),
                            'placeholder'   => __( 'URL', 'uabb' ),
                        ),
                        'link_target'    => array(
                            'type'          => 'select',
                            'label'         => __('Link target', 'uabb'),
                            'default'       => '_blank',
                            'help'          => __('Description would appear in the selected tag','uabb'),
                            'options'       => array(
                                '_blank'      => __('New Page', 'uabb'),
                                ''      => __('Same Page', 'uabb'),
                            ),
                        ),
                    )
                ),
            )
        ),
        'hover'       => array( // Tab
            'title'         => __('Design', 'uabb'), // Tab title
            'sections'      => array( // Tab Sections
                'effect'       => array( // Section
                    'title'         => __('Effects and Colors', 'uabb'), // Section Title
                    'fields'        => array( // Section Fields
                        'effect'     => array(
                            'type'          => 'select',
                            'label'         => __('Effect', 'uabb'),
                            'default'       => 'effect1',
                            'options'       => array(
                                'effect1'      => __('Effect 1', 'uabb'),
                                'effect2'      => __('Effect 2', 'uabb'),
                                'effect3'      => __('Effect 3', 'uabb'),
                                'effect4'      => __('Effect 4', 'uabb'),
                                'effect5'      => __('Effect 5', 'uabb'),
                                'effect6'      => __('Effect 6', 'uabb'),
                                'effect7'      => __('Effect 7', 'uabb'),
                                'effect8'      => __('Effect 8', 'uabb'),
                                'effect9'      => __('Effect 9', 'uabb'),
                                'effect10'      => __('Effect 10', 'uabb'),
                                'effect11'      => __('Effect 11', 'uabb'),
                                'effect12'      => __('Effect 12', 'uabb'),
                                'effect13'      => __('Effect 13', 'uabb'),
                                'effect14'      => __('Effect 14', 'uabb'),
                                'effect15'      => __('Effect 15', 'uabb'),
                                'effect16'      => __('Effect 16', 'uabb'),
                                'effect17'      => __('Effect 17', 'uabb'),
                                'effect18'      => __('Effect 18', 'uabb'),
                                'effect19'      => __('Effect 19', 'uabb'),
                            ),
                            'toggle' => array(
                                'effect1' => array(
                                    'fields' => array()
                                ),
                                'effect2' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect3' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect4' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect5' => array(
                                    'fields' => array()
                                ),
                                'effect6' => array(
                                    'fields' => array( 'advanced_effect2' )
                                ),
                                'effect7' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect8' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect9' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect10' => array(
                                    'fields' => array( 'advanced_effect3' )
                                ),
                                'effect11' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect12' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect13' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect14' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect15' => array(
                                    'fields' => array()
                                ),
                                'effect16' => array(
                                    'fields' => array( 'advanced_effect4' )
                                ),
                                'effect17' => array(
                                    'fields' => array()
                                ),
                                'effect18' => array(
                                    'fields' => array( 'advanced_effect1' )
                                ),
                                'effect19' => array(
                                    'fields' => array()
                                ),
                            ),
                        ),
                        'advanced_effect1'     => array(
                            'type'          => 'select',
                            'label'         => __('Hover Effect Direction', 'uabb'),
                            'default'       => 'right_to_left',
                            'options'       => array(
                                'right_to_left'      => __('Towards Left', 'uabb'),
                                'left_to_right'      => __('Towards Right', 'uabb'),
                                'bottom_to_top'      => __('Towards Top', 'uabb'),
                                'top_to_bottom'      => __('Towards Bottom', 'uabb'),
                            ),
                        ),
                        'advanced_effect2'     => array(
                            'type'          => 'select',
                            'label'         => __('Hover Effect Scale', 'uabb'),
                            'default'       => 'scale_up',
                            'options'       => array(
                                'scale_up'      => __('Scale Up', 'uabb'),
                                'scale_down'      => __('Scale Down', 'uabb'),
                                'scale_down_up'      => __('Scale Down Up', 'uabb'),
                            ),
                        ),
                        'advanced_effect3'     => array(
                            'type'          => 'select',
                            'label'         => __('Hover Effect Direction', 'uabb'),
                            'default'       => 'top_to_bottom',
                            'options'       => array(
                                'top_to_bottom'      => __('Towards Bottom', 'uabb'),
                                'bottom_to_top'      => __('Towards Top', 'uabb'),
                            ),
                        ),
                        'advanced_effect4'     => array(
                            'type'          => 'select',
                            'label'         => __('Hover Effect Direction', 'uabb'),
                            'default'       => 'left_to_right',
                            'options'       => array(
                                'left_to_right'      => __('Towards Right', 'uabb'),
                                'right_to_left'      => __('Towards Left', 'uabb'),
                            ),
                        ),
                        'title_color' => array( 
                            'type'       => 'color',
                            'label'      => __('Title Color', 'uabb'),
                            'default'    => '',
                            'show_reset' => true,
                        ),
                        'description_color' => array( 
                            'type'       => 'color',
                            'label'      => __('Description Color', 'uabb'),
                            'default'    => '',
                            'show_reset' => true,
                        ),
                        'background_color'    => array( 
                            'type'       => 'color',
                            'label'      => __('Background Color', 'uabb'),
                            'default'    => '',
                            'show_reset' => true,
                        ),
                        'background_color_opc'    => array( 
                            'type'        => 'text',
                            'label'       => __('Opacity', 'uabb'),
                            'default'     => '',
                            'description' => '%',
                            'maxlength'   => '3',
                            'size'        => '5',
                        ),                       
                        'separator_color' => array( 
                            'type'       => 'color',
                            'label'      => __('Divider Color', 'uabb'),
                            'default'    => '',
                            'show_reset' => true,
                        ),
                    )
                ),
                'border'       => array( // Section
                    'title'         => __('Border', 'uabb'), // Section Title
                    'fields'        => array( // Section Fields
                        'border_style'     => array(
                            'type'          => 'select',
                            'label'         => __('Border Style', 'uabb'),
                            'default'       => 'solid',
                            'help'          => __('Select the border style.','uabb'),
                            'options'       => array(
                                'none'      => __('None', 'uabb'),
                                'solid'      => __('Solid', 'uabb'),
                                'dashed'      => __('Dashed', 'uabb'),
                                'dotted'      => __('Dotted', 'uabb'),
                                'double'      => __('Double', 'uabb'),
                                'inset'      => __('Inset', 'uabb'),
                                'outset'      => __('Outset', 'uabb')
                            ),
                        ),
                        'border_size'    => array(
                            'type'          => 'text',
                            'label'         => __( 'Border thickness', 'uabb' ),
                            'default'       => '25',
                            'size'          => '8',
                            'placeholder'   => __( 'Size of border', 'uabb' ),
                            'class'         => '',
                            'description'   => 'px',
                            'help'          => __( 'Enter value in pixels.', 'uabb' ),
                        ),
                        'border_color' => array( 
                            'type'       => 'color',
                            'label'      => __('Border Color', 'uabb'),
                            'default'    => '',
                            'show_reset' => true,
                        ),
                    )
                ),
            )
        ),
    )
));
