<?php
/**
 * Colors
 */
// Primary Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => __( 'Primary Color', 'excellent-business' ),
    'section'     => 'colors',
    'default'     => '#2185f5',
    'priority'       => 5,
    'output'      => array(
        array(
            'element' => '.form-submit input,.elementor-widget-button a.elementor-button, .elementor-widget-button .elementor-button,.pagination a, .pagination .current',
            'property' => 'background-color',
        ),
        array(
            'element' => '.form-submit input,.elementor-widget-button a.elementor-button, .elementor-widget-button .elementor-button',
            'property' => 'border-color',
        ),
        array(
            'element' => '.elementor-slick-slider ul.slick-dots li.slick-active button:before',
            'property' => 'color',
        )
    ),
) );
// Link Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'link_color',
    'label'       => __( 'Link Color', 'excellent-business' ),
    'section'     => 'colors',
    'default'     => '#2185f5',
    'priority'       => 20,
    'output'      => array(
        array(
            'element' => 'a',
            'property' => 'color',
        ),
    ),
) );
// Link Hover Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'link_hover_color',
    'label'       => __( 'Link Hove Color', 'excellent-business' ),
    'section'     => 'colors',
    'default'     => '#989898',
    'priority'       => 25,
    'output'      => array(
        array(
            'element' => 'a:hover',
            'property' => 'color',
        ),
    ),
) );