<?php

function academia_customizer_define_general_sections( $sections ) {
    $panel           = 'academia' . '_general';
    $general_sections = array();

    $theme_sidebar_positions = array(
        'both'     => esc_html__('Both', 'city-hall'),
        'left'      => esc_html__('Left', 'city-hall'),
        'right'     => esc_html__('Right', 'city-hall'),
        'none'    => esc_html__('None', 'city-hall')
    );

    $general_sections['general'] = array(
        'title'     => esc_html__( 'Theme Settings', 'city-hall' ),
        'priority'  => 4900,
        'options'   => array(

            'theme-sidebar-position'    => array(
                'setting'               => array(
                    'default'           => 'both',
                    'sanitize_callback' => 'academia_sanitize_text'
                ),
                'control'           => array(
                    'label'         => esc_html__( 'Default Layout', 'city-hall' ),
                    'type'          => 'select',
                    'choices'       => $theme_sidebar_positions
                ),
            ),

        ),
    );

    return array_merge( $sections, $general_sections );
}

add_filter( 'academia_customizer_sections', 'academia_customizer_define_general_sections' );
