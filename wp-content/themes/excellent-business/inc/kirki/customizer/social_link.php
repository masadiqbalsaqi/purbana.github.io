<?php
/**
 * Social Link
 */
excellent_business_Kirki::add_section( 'social_Link_section', array(
    'title'          => esc_attr__( 'Social Media', 'excellent-business' ),
    'priority'       => 60,
) );
// FB
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'fb_link',
    'label'       => esc_html__( 'Facebook', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 10,
) );
// TW
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'tw_link',
    'label'       => esc_html__( 'Twitter', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 15,
) );
// LI
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'li_link',
    'label'       => esc_html__( 'Linkedin', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 20,
) );
// PI
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'pi_link',
    'label'       => esc_html__( 'Pinterest', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 25,
) );
// IN
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'in_link',
    'label'       => esc_html__( 'Instagram', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 30,
) );
// DRI
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'dri_link',
    'label'       => esc_html__( 'Dribbble', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 35,
) );
// GP
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'gp_link',
    'label'       => esc_html__( 'Google Plus', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 40,
) );
// YO
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'text',
    'settings'    => 'yo_link',
    'label'       => esc_html__( 'YouTube', 'excellent-business' ),
    'section'     => 'social_Link_section',
    'default'     => '',
    'priority'    => 45,
) );