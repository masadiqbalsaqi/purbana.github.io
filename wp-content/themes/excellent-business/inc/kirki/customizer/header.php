<?php
/**
 * Header
 */
excellent_business_Kirki::add_panel('header_panel', array(
    'priority' => 15,
    'title' => esc_attr__('Header', 'excellent-business'),
    'description' => esc_attr__('Header General Settings', 'excellent-business'),
));
/**
 * General Settings
 */
excellent_business_Kirki::add_section( 'header_section', array(
    'title'          => esc_attr__( 'General Settings', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'       => 10,
) );
// Layout Settings
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'radio-image',
    'settings'    => 'header_style',
    'label'       => esc_html__( 'Select Header Style', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => 'header-1',
    'priority'    => 10,
    'choices'     => array(
        'header-1'   => get_template_directory_uri() . '/inc/kirki/customizer/img/header-1.png'
    ),
) );
// Header Design Option
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'header_background_color',
    'label'       => __( 'Header Background Color', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => '',
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.site-header',
            'property' => 'background-color',
        ),
    ),
) );
// Padding Top
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'slider',
    'settings'    => 'header_padding_top',
    'label'       => esc_attr__( 'Padding Top', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => 0,
    'transport'	  => 'auto',
    'choices'   => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.site-header',
            'property' => 'padding-top',
            'units'    => 'px',
        ),
    )
) );
// Padding Bottom
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'slider',
    'settings'    => 'header_padding_bottom',
    'label'       => esc_attr__( 'Padding Bottom', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => 0,
    'transport'	  => 'auto',
    'choices'   => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.header-2',
            'property' => 'padding-bottom',
            'units'    => 'px',
        ),
    )
) );
// Hide search
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'hide_search',
    'label'       => __( 'Hide Search', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => '1',
    'priority'    => 10
) );
if( class_exists( 'WooCommerce' )  ) :
// Hide Mini Cart
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'woo_hide_cart',
    'label'       => __( 'Hide Cart', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => '1',
    'priority'    => 10,
) );
endif;
// Social
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'hide_social',
    'label'       => __( 'Hide Social', 'excellent-business' ),
    'section'     => 'header_section',
    'default'     => '1',
    'priority'    => 10,
) );
/**
 * Logo With Favicon
 */
excellent_business_Kirki::add_section( 'header_contents', array(
    'title'          => esc_attr__( 'Logo With Favicon', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'       => 20,
) );
excellent_business_Kirki::add_section( 'title_tagline', array(
    'title'          => esc_attr__( 'Logo With Favicon', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'       => 30,
) );
/**
 * Menu Design
 */
excellent_business_Kirki::add_section( 'menu_design', array(
    'title'          => esc_attr__( 'Menu Design', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'       => 40,
) );
// Menu Background Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'menu_background_color',
    'label'       => __( 'Menu Background Color', 'excellent-business' ),
    'section'     => 'menu_design',
    'default'     => '',
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.navbar-collapse',
            'property' => 'background-color',
        ),
    ),
) );
// Menu Item Font Size
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'typography',
    'settings'    => 'menu_color_variant',
    'label'       => esc_attr__( 'Menu Typography', 'excellent-business' ),
    'section'     => 'menu_design',
    'default'     => array(
        'font-family'    => 'inherit',
        'variant'        => '500',
        'font-size'      => '14px',
        'line-height'    => 'inherit',
        'letter-spacing' => '0',
        'color'          => '#000',
        'text-transform' => 'capitalize'
    ),
    'priority'    => 10,
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.navbar-default .navbar-nav>li>a,.primary-menu .dropdown-menu li a',
        ),
    ),
) );
/**
 * Top Bar
 */
// Top Bar
excellent_business_Kirki::add_section( 'top_bar', array(
    'title'          => __( 'Top Bar', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'    => 50,
) );
// Hide Top Bar
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'hide_top_bar',
    'label'       => __( 'Hide Top Bar', 'excellent-business' ),
    'section'     => 'top_bar',
    'default'     => '1',
    'priority'    => 10,
) );
// Background Color
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'color',
    'settings'    => 'top_bar_bg',
    'label'       => __( 'Background Color', 'excellent-business' ),
    'section'     => 'top_bar',
    'default'     => '#f2fdff',
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.header-1',
            'property' => 'background-color',
        ),
    ),
) );
// Font Size
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'typography',
    'settings'    => 'top_bar_font',
    'label'       => esc_attr__( 'Typography', 'excellent-business' ),
    'section'     => 'top_bar',
    'default'     => array(
        'font-family'    => 'inherit',
        'variant'        => 'inherit',
        'font-size'      => '14px',
        'line-height'    => 'inherit',
        'letter-spacing' => '0',
        'color'          => '#000',
        'text-transform' => 'inherit'
    ),
    'priority'    => 10,
    'transport'	  => 'auto',
    'output'      => array(
        array(
            'element'  => '.header-1,.search-cart-social a',
        ),
    ),
) );
// Padding Top
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'slider',
    'settings'    => 'top_bar_padding',
    'label'       => esc_attr__( 'Padding Top/Bottom', 'excellent-business' ),
    'section'     => 'top_bar',
    'default'     => 5,
    'transport'	  => 'auto',
    'choices'   => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.header-1',
            'property' => 'padding-top',
            'units'    => 'px',
        ),
        array(
            'element'  => '.header-1',
            'property' => 'padding-bottom',
            'units'    => 'px',
        ),
    )
) );
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'custom',
    'settings'    => 'emailphone',
    'label'       => __( ' ', 'excellent-business' ),
    'section'     => 'top_bar',
    'default'     => '<div style="background:#f9f9f9; padding: 8px 5px; text-align: center; font-weight: bold;">' . esc_html__( 'Email & Phone Number', 'excellent-business' ) . '</div>',
    'priority'    => 10,
) );
// Email
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'     => 'textarea',
    'settings' => 'emailAddress',
    'label'    => __( 'Email Address', 'excellent-business' ),
    'section'  => 'top_bar',
    'default'  => esc_attr__( ' ', 'excellent-business' ),
    'priority' => 10,
) );
// Phone
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'     => 'textarea',
    'settings' => 'phoneNumber',
    'label'    => __( 'Phone Number', 'excellent-business' ),
    'section'  => 'top_bar',
    'default'  => esc_attr__( ' ', 'excellent-business' ),
    'priority' => 10,
) );
/**
 * Hero Area
 */
// Header Image
excellent_business_Kirki::add_section( 'header_image', array(
    'title'          => __( 'Hero Area', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'    => 50,
) );
// Hero Show
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'hero_area_show',
    'label'       => esc_attr__( 'Show Hero Area', 'excellent-business' ),
    'section'     => 'header_image',
    'default'     => true,
    'priority'    => 5,
) );
// Blog Columns
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'select',
    'settings'    => 'hero_txt_alignment',
    'label'       => __( 'Text Alignment', 'excellent-business' ),
    'section'     => 'header_image',
    'default'     => 'text-left',
    'priority'    => 10,
    'choices'     => array(
        'text-left' => esc_attr__( 'Left', 'excellent-business' ),
        'text-right' => esc_attr__( 'Right', 'excellent-business' ),
        'text-center' => esc_attr__( 'Center', 'excellent-business' ),
    ),
) );
// Hero Sub Title
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'     => 'text',
    'settings' => 'hero_sub_title',
    'label'    => __( 'Sub Title', 'excellent-business' ),
    'section'  => 'header_image',
    'priority' => 10,
    'default'  => '',
    'transport'	  => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '.hero-content h3',
            'function' => 'html',
        ),
    )
) );
// Hero Title
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'     => 'text',
    'settings' => 'hero_title',
    'label'    => __( 'Title', 'excellent-business' ),
    'section'  => 'header_image',
    'default'  => '',
    'priority' => 10,
    'transport'	  => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '.hero-content h2',
            'function' => 'html',
        ),
    )
) );
// Hero Content / Text
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'     => 'textarea',
    'settings' => 'hero_text',
    'label'    => __( 'Content', 'excellent-business' ),
    'section'  => 'header_image',
    'default'  => '',
    'priority' => 10,
    'transport'	  => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '.hero-content p',
            'function' => 'html',
        ),
    )
) );
// Hero Button Text
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'     => 'text',
    'settings' => 'hero_button_text',
    'label'    => __( 'Button Text', 'excellent-business' ),
    'section'  => 'header_image',
    'priority' => 10,
    'default'  => '',
    'transport'	  => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '.hero-content a',
            'function' => 'html',
        ),
    )
) );
// Hero Button Link
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'hero_button_url',
    'label'       => esc_attr__( 'Button URL', 'excellent-business' ),
    'section'     => 'header_image',
    'default'     => '',
    'priority'    => 10,
) );
/**
 * Sticky Header
 */
/*excellent_business_Kirki::add_section( 'sticky_header', array(
    'title'          => esc_attr__( 'Sticky Header', 'excellent-business' ),
    'panel'          => 'header_panel',
    'priority'       => 60,
) );*/
// Sticky Hide
/*excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'sticky_hide',
    'label'       => esc_attr__( 'Disable Sticky Header', 'excellent-business' ),
    'section'     => 'sticky_header',
    'default'     => 1,
    'priority'    => 10,
) );*/