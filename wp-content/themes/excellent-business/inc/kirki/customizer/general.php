<?php
/**
 * General Setting
 */
excellent_business_Kirki::add_panel('general_panel', array(
    'priority' => 10,
    'title' => esc_attr__('General Settings', 'excellent-business'),
    'description' => esc_attr__('General Settings', 'excellent-business'),
));
// Site Layout Section
excellent_business_Kirki::add_section( 'site_layout_section', array(
    'title'          => esc_attr__( 'Site Width', 'excellent-business' ),
    'panel'          => 'general_panel',
    'priority'       => 10,
) );
// Site Layout
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'site_layout',
    'label'       => __( 'Site Layout', 'excellent-business' ),
    'section'     => 'site_layout_section',
    'default'     => 'wide',
    'priority'    => 10,
    'choices'     => array(
        'wide'   => esc_attr__( 'Wide', 'excellent-business' ),
        'boxed' => esc_attr__( 'Boxed', 'excellent-business' ),
    ),
) );
// Body Background Image
excellent_business_Kirki::add_section( 'background_image', array(
    'title'          => __( 'Body Background Image', 'excellent-business' ),
    'theme_supports' => 'custom-background',
    'panel'          => 'general_panel',
    'priority'       => 20,
) );

// Margin Top
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'slider',
    'settings'    => 'section_margin_top',
    'label'       => esc_attr__( 'Margin Bottom from header', 'excellent-business' ),
    'section'     => 'site_layout_section',
    'default'     => 30,
    'transport'	  => 'auto',
    'choices'   => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.site-header',
            'property' => 'margin-bottom',
            'units'    => 'px',
        ),
    )
) );