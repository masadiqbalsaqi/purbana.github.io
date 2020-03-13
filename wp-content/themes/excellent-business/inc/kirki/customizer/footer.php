<?php
/**
 * Footer
 */
excellent_business_Kirki::add_panel('footer_panel', array(
    'title' => esc_attr__('Footer', 'excellent-business'),
    'description' => esc_attr__('Footer General Settings', 'excellent-business'),
    'priority' => 80,
));
// Footer Settings
excellent_business_Kirki::add_section( 'footer_settings', array(
    'title'          => esc_attr__( 'Footer Settings', 'excellent-business' ),
    'panel'          => 'footer_panel',
    'priority'       => 10,
) );
// Footer Columns
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'select',
    'settings'    => 'footer_columns',
    'label'       => __( 'Number of columns', 'excellent-business' ),
    'section'     => 'footer_settings',
    'default'     => 'four',
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => array(
        'one' => esc_attr__( 'One', 'excellent-business' ),
        'two' => esc_attr__( 'Two', 'excellent-business' ),
        'three' => esc_attr__( 'Three', 'excellent-business' ),
        'four' => esc_attr__( 'Four', 'excellent-business' ),
    ),
) );
// Hide Social
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'hide_footer_social',
    'label'       => __( 'Hide Social Links', 'excellent-business' ),
    'section'     => 'footer_settings',
    'default'     => '1',
    'priority'    => 10,
) );
// Footer Design
excellent_business_Kirki::add_section( 'footer_design', array(
    'title'          => esc_attr__( 'Footer Design', 'excellent-business' ),
    'panel'          => 'footer_panel',
    'priority'       => 15,
) );
// Footer Background Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'footer_bg',
    'label'       => __( 'Footer Background Color', 'excellent-business' ),
    'section'     => 'footer_design',
    'default'     => '#fff',
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element' => '.site-footer',
            'property' => 'background-color',
        ),
    ),
) );
// Footer Title Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'footer_title_color',
    'label'       => __( 'Footer Title Color', 'excellent-business' ),
    'section'     => 'footer_design',
    'default'     => '#000',
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element' => '.site-footer .footer-title',
            'property' => 'color',
        ),
    ),
) );
// Footer Text Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'footer_text_color',
    'label'       => __( 'Footer Text Color', 'excellent-business' ),
    'section'     => 'footer_design',
    'default'     => '#000',
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element' => '.site-footer,.site-footer a',
            'property' => 'color',
        ),
    ),
) );
// Footer Title Font Size
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'slider',
    'settings'    => 'footer_title_font_size',
    'label'       => esc_attr__( 'Heading Size', 'excellent-business' ),
    'section'     => 'footer_design',
    'default'     => 18,
    'choices'     => array(
        'min'  => '12',
        'max'  => '60',
        'step' => '1',
    ),
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element' => '.site-footer .footer-title',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );
// Footer Text Font Size
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'slider',
    'settings'    => 'footer_text_font_size',
    'label'       => esc_attr__( 'Text Size', 'excellent-business' ),
    'section'     => 'footer_design',
    'default'     => 14,
    'choices'     => array(
        'min'  => '8',
        'max'  => '50',
        'step' => '1',
    ),
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element' => '.site-footer',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );
// Footer Copyright
excellent_business_Kirki::add_section( 'footer_copyright_section', array(
    'title'          => esc_attr__( 'Footer Copy Right', 'excellent-business' ),
    'panel'          => 'footer_panel',
    'priority'       => 20,
) );
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'footer_copyright',
    'label'       => esc_html__( 'Copy Right Text', 'excellent-business' ),
    'section'     => 'footer_copyright_section',
    'default'     => 'excellent_business powered by themetim',
    'transport'	  => 'postMessage',
    'priority'    => 10,
    'js_vars'   => array(
        array(
            'element'  => '.site-info',
            'function' => 'html',
        ),
    )
) );