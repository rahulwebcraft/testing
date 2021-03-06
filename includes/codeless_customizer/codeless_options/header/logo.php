<?php

/* -------------------------- Logo ----------------------------- */

Kirki::add_section('cl_header_logo', array(
	'title' => esc_attr__('Logo', 'regn') ,
	'tooltip' => esc_attr__('Logo Options', 'regn') ,
	'panel' => 'cl_header',
	'type' => '',
	'priority' => 6,
	'capability' => 'edit_theme_options'
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_type',
	'label' => esc_attr__('Logo Type', 'regn') ,
	'tooltip' => esc_attr__('Select font or image logo type', 'regn') ,
	'section' => 'cl_header_logo',
	'type' => 'radio-buttonset',
	'default' => 'font',
	'priority' => 10,
	'choices' => array(
		'font' => esc_attr__('Font', 'regn') ,
		'image' => esc_attr__('Image', 'regn') 
	) ,
	'transport' => 'postMessage',
	'partial_refresh' => array(
		'logo_refresh_type' => array(
			'selector' => '#logo',
			'container_inclusive' => true,
			'render_callback' =>
			function ()
				{
				echo codeless_load_header_element('cl_header_logo');
				}

			,
		)
	)
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_default',
	'description' => esc_attr__('Default Logo', 'regn') ,
	'tooltip' => esc_attr__('Upload here the logo that is placed in top of the page', 'regn') ,
	'section' => 'cl_header_logo',
	'type' => 'image',
	'priority' => 10,
	'default' => get_template_directory_uri() . '/img/logo.png',
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image'
		) ,
	) ,
	'transport' => 'postMessage',
	'partial_refresh' => array(
		'logo_refresh_default' => array(
			'selector' => '#logo',
			'container_inclusive' => true,
			'render_callback' =>
			function ()
				{
				echo codeless_load_header_element('cl_header_logo');
				}

			,
		)
	)
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_light',
	'description' => esc_attr__('Logo Light', 'regn') ,
	'tooltip' => esc_attr__('Upload logo that will be shown on dark baackground or header', 'regn') ,
	'section' => 'cl_header_logo',
	'type' => 'image',
	'priority' => 10,
	'default' => get_template_directory_uri() . '/img/logo_light.png',
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image'
		) ,
	) ,
	'transport' => 'postMessage',
	'partial_refresh' => array(
		'logo_refresh_light' => array(
			'selector' => '#logo',
			'container_inclusive' => true,
			'render_callback' =>
			function ()
				{
				echo codeless_load_header_element('cl_header_logo');
				}

			,
		)
	)
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_height',
	'description' => esc_attr__('Logo Height', 'regn') ,
	'tooltip' => esc_attr__('Define the Height of your logo', 'regn') ,
	'section' => 'cl_header_logo',
	'type' => 'slider',
	'priority' => 10,
	'default' => 66,
	'choices' => array(
		'min' => 10,
		'max' => 300,
		'step' => 1,
	) ,
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image',
			'transport' => 'postMessage'
		) ,
	) ,
	'transport' => 'auto',
	'output' => array(
		array(
			'element' => '.cl-logo__img',
			'units' => 'px',
			'property' => 'height'
		)
	) ,
	'js_vars' => array(
		array(
			'suffix' => '!important'
		)
	)
));


Kirki::add_field('cl_regn', array(
	'settings' => 'logo_iphone',
	'description' => esc_attr__('Logo Additional in iPhone', 'regn') ,
	'tooltip' => esc_attr__('Upload logo that will be shown only on iPhone', 'regn') ,
	'section' => 'cl_header_logo',
	'into_group' => true,
	'type' => 'image',
	'priority' => 10,
	'default' => '',
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image',
			'transport' => 'postMessage'
		) ,
	) ,
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_height_iphone',
	'description' => esc_attr__('Logo Height (iPhone)', 'regn') ,
	'tooltip' => esc_attr__('Define the Height of your logo in iPhone', 'regn') ,
	'section' => 'cl_header_logo',
	'into_group' => true,
	'type' => 'slider',
	'priority' => 10,
	'default' => 37,
	'choices' => array(
		'min' => 1,
		'max' => 100,
		'step' => 1,
	) ,
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image',
			'transport' => 'postMessage'
		) ,
	) ,
	'output' => array(
		array(
			'element' => '.cl-logo__img',
			'units' => 'px',
			'property' => 'height',
			'suffix'	=> '!important',
			'media_query' => '@media (max-width: 480px)'
		)
	)
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_ipad',
	'description' => esc_attr__('Logo Additional in iPad', 'regn') ,
	'tooltip' => esc_attr__('Upload logo that will be shown only on iPad', 'regn') ,
	'section' => 'cl_header_logo',
	'into_group' => true,
	'type' => 'image',
	'priority' => 10,
	'default' => '',
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image',
			'transport' => 'postMessage'
		) ,
	) ,
));

Kirki::add_field('cl_regn', array(
	'settings' => 'logo_height_ipad',
	'description' => esc_attr__('Logo Height (iPad)', 'regn') ,
	'tooltip' => esc_attr__('Define the Height of your logo in iPad', 'regn') ,
	'section' => 'cl_header_logo',
	'into_group' => true,
	'type' => 'slider',
	'priority' => 10,
	'default' => 37,
	'choices' => array(
		'min' => 1,
		'max' => 100,
		'step' => 1,
	) ,
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'image',
			'transport' => 'postMessage'
		) ,
	) ,
	'output' => array(
		array(
			'element' => '.cl-logo__img',
			'units' => 'px',
			'property' => 'height',
			'media_query' => '@media (max-width: 767px)'
		)
	)
));

Kirki::add_field('cl_regn', array(
	'type' => 'text',
	'settings' => 'logo_font_text',
	'description' => esc_attr__('Text to display as logo font', 'regn') ,
	'section' => 'cl_header_logo',
	'default' => 'Regn',
	'priority' => 10,
	'into_group' => true,
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'font',
			'transport' => 'postMessage'
		) ,
	) ,
	'transport' => 'postMessage',
));

Kirki::add_field('cl_regn', array(
	'type' => 'typography',
	'settings' => 'logo_font',
	'description' => esc_attr__('Typography', 'regn') ,
	'section' => 'cl_header_logo',
	'into_group' => true,
	'default' => array(
		'font-family' => 'Syncopate',
		'variant' => '700',
		'font-weight' => '700',
		'font-size' => '36px',
		'line-height' => '',
		'font-style' => '',
		'letter-spacing' => '',
		'subsets' => array(
			'latin-ext'
		) ,
		
		'text-transform' => 'uppercase',
		'text-align' => 'left'
	) ,
	'priority' => 10,
	'transport' => 'auto',
	'output' => array(
		array(
			'element' => codeless_dynamic_css_register_tags('logo_font')
		) ,
	) ,
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'font',
			'transport' => 'postMessage'
		) ,
	) ,
));


Kirki::add_field('cl_regn', array(
	'settings' => 'logo_font_responsive_color',
	'description' => esc_attr__('Responsive Color', 'regn') ,
	'section' => 'cl_header_logo',
	'type' => 'select',
	'default' => 'dark',
	'priority' => 10,
	'choices' => array(
		'light' => esc_attr__('Light', 'regn') ,
		'dark' => esc_attr__('Dark', 'regn') ,
	) ,
	'transport' => 'postMessage',
	'required' => array(
		array(
			'setting' => 'logo_type',
			'operator' => '==',
			'value' => 'font',
			'transport' => 'postMessage'
		) ,
	) ,
));

?>