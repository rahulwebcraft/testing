<?php

Kirki::add_section('cl_colors_content', array(
	'title' => esc_attr__('Content Colors', 'regn') ,
	'tooltip' => '',
	'panel' => 'cl_colors',
	'type' => '',
	'priority' => 8,
	'capability' => 'edit_theme_options'
));


Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'btn_primary_color_border',
    'label'    => '',
    'section'  => 'cl_colors_content',
    'type'     => 'groupdivider',

));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'background_color',
    'label' => 'Background Color',
    'default' => '#ffffff',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => 'body:not(.cl-layout-boxed), body.cl-layout-boxed #wrapper.cl-boxed-layout, .cl-layout-bordered .cl-layout-border-container>div',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'alt_background_color',
    'label' => 'Alternate Background Color',
    'default' => '#f3f3f3',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'alt_background_color' ),
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'alt_background_dark_color',
    'label' => 'Alternate Dark Background Color',
    'default' => '#191e23',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'alt_background_dark_color', 'background_color' ),
            'property' => 'background-color'
        ),
        array(
            'element' => codeless_dynamic_css_register_tags( 'alt_background_dark_color', 'border_color' ),
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'border_color',
    'label' => 'Border Color',
    'default' => '#eaeaea',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'border_color' ),
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'primary_color',
    'label' => 'Primary Color',
    'default' => '#675478',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'primary_color', 'color' ),
            'property' => 'color'
        ),
        array(
            'element' => codeless_dynamic_css_register_tags( 'primary_color', 'background_color' ),
            'property' => 'background-color' 
        ),
        array(
            'element' => codeless_dynamic_css_register_tags( 'primary_color', 'border-color' ),
            'property' => 'border-color' 
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'text_color',
    'label' => 'Text Color',
    'default' => '#8e999c',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'text_color' ),
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'headings_color',
    'label' => 'Heading Color',
    'default' => '#2b3031',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'heading_color' ),
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'labels_color',
    'label' => 'Labels Color',
    'default' => '#6c7781',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'labels_color', 'color' ),
            'property' => 'color'
        ),

        array(
            'element' => codeless_dynamic_css_register_tags( 'labels_color', 'background_color' ),
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'dark_labels_color',
    'label' => 'Dark Labels Color',
    'default' => '#323639',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'dark_labels_color', 'color' ),
            'property' => 'color'
        ),

        array(
            'element' => codeless_dynamic_css_register_tags( 'dark_labels_color', 'background_color' ),
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));



Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'link_color',
    'label' => 'Link Color',
    'default' => '#191e23',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'link_color' ),
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'link_color_hover',
    'label' => 'Link Color Hover',
    'default' => codeless_get_mod( 'primary_color' ),
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags( 'link_color_hover' ),
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));


Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'btn_color_start',
    'label'    => '',
    'section'  => 'cl_colors_content',
    'type'     => 'groupdivider',

));



Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_font_color',
    'label' => 'Button Font Color',
    'default' => '#fff',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-normal',
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_font_color_hover',
    'label' => 'Button Font Color Hover',
    'default' => '#fff',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-normal:hover',
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_bg_color',
    'label' => 'Button BG Color',
    'default' => codeless_get_mod( 'primary_color' ),
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-normal',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_bg_color_hover',
    'label' => 'Button BG Color Hover',
    'default' => '#78536e',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-normal:hover',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_border_color',
    'label' => 'Button Border Color',
    'default' => codeless_get_mod( 'primary_color' ),
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-normal',
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_border_color_hover',
    'label' => 'Button Border Color Hover',
    'default' => '#78536e',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-normal:hover',
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));


Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'btn_alt_start',
    'label'    => '',
    'section'  => 'cl_colors_content',
    'type'     => 'groupdivider',

));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_alt_font_color',
    'label' => 'Button Alt Font Color',
    'default' => '#2b3031',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-alt',
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_alt_font_color_hover',
    'label' => 'Button Alt Font Color Hover',
    'default' => '#fff',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-alt:hover',
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_alt_bg_color',
    'label' => 'Button Alt BG Color',
    'default' => 'rgba(0,0,0,0)',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-alt',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_alt_bg_color_hover',
    'label' => 'Button Alt BG Color Hover',
    'default' => '#78536e',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-alt:hover',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_alt_border_color',
    'label' => 'Button Alt Border Color',
    'default' => '#524445',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-alt',
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'button_alt_border_color_hover',
    'label' => 'Button Alt Border Color Hover',
    'default' => '#78536e',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.cl-btn--color-alt:hover',
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));





Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'forms_start',
    'label'    => '',
    'section'  => 'cl_colors_content',
    'type'     => 'groupdivider',

));



Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'forms_bg_color',
    'label' => 'Input/Select/Textarea BG Color',
    'default' => '#fff',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => 'input:not([type="submit"]), select, textarea',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'forms_placeholder_color', 
    'label' => 'Input/Select/Textarea Placeholder',
    'default' => '#222',
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    
    'transport' => 'refresh'
));

Kirki::add_field( 'cl_regn', array(
		    
    'settings' => 'elements_start',
    'label'    => '',
    'section'  => 'cl_colors_content',
    'type'     => 'groupdivider',

));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'tabs_header_bg',
    'label' => 'Tabs Header BG',
    'default' => '#2e3335',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.vc_tta-tabs.vc_tta-style-default .vc_tta-tabs-container ul.vc_tta-tabs-list li.vc_tta-tab',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'tabs_header_bg_active',
    'label' => 'Tabs Header BG Active',
    'default' => '#eb513c',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.vc_tta-tabs.vc_tta-style-default .vc_tta-tabs-container ul.vc_tta-tabs-list li.vc_tta-tab.vc_active',
            'property' => 'background-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'tabs_header_border',
    'label' => 'Tabs Header Border',
    'default' => '#fff',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.vc_tta-tabs.vc_tta-style-default .vc_tta-tabs-container ul.vc_tta-tabs-list li.vc_tta-tab',
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field( 'cl_regn', array(
    'type' => 'color',
    'settings' => 'tabs_header_font',
    'label' => 'Tabs Header Font',
    'default' => '#fff',
    'choices' => array(
        'alpha' => true,
        'palettes' => codeless_generate_palettes()
    ),
    'section'  => 'cl_colors_content',
    'output' => array(
        array(
            'element' => '.vc_tta-tabs.vc_tta-style-default .vc_tta-tabs-container ul.vc_tta-tabs-list li.vc_tta-tab',
            'property' => 'color'
        )
    ),
    'transport' => 'auto'
));