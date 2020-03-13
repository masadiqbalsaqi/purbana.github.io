<?php
/**
 * Blog
 */
excellent_business_Kirki::add_panel('blog_panel', array(
    'priority' => 90,
    'title' => esc_attr__('Blog', 'excellent-business'),
    'description' => esc_attr__('Blog', 'excellent-business'),
));
// Blog Layout
excellent_business_Kirki::add_section( 'blog_section', array(
    'title'          => esc_attr__( 'Blog Layout', 'excellent-business' ),
    'panel'          => 'blog_panel',
    'priority'       => 10,
) );
// Blog Columns
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'select',
    'settings'    => 'blog_layout',
    'label'       => __( 'Number of columns', 'excellent-business' ),
    'section'     => 'blog_section',
    'default'     => 'default',
    'priority'    => 10,
    'choices'     => array(
        'default' => esc_attr__( 'Default', 'excellent-business' )
    ),
) );
// Meta Post
excellent_business_Kirki::add_section( 'blog_meta_post_section', array(
    'title'          => esc_attr__( 'Meta Post', 'excellent-business' ),
    'panel'          => 'blog_panel',
    'priority'       => 15,
) );
// Hide Blog Posts Meta
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'blog_post_meta',
    'label'       => esc_attr__( 'Hide Blog Posts Meta', 'excellent-business' ),
    'section'     => 'blog_meta_post_section',
    'default'     => '1',
    'priority'    => 10,
) );
// Hide Single Posts Meta
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'single_post_meta',
    'label'       => esc_attr__( 'Hide Single Posts Meta', 'excellent-business' ),
    'section'     => 'blog_meta_post_section',
    'default'     => '1',
    'priority'    => 10,
) );
// Featured Image
excellent_business_Kirki::add_section( 'blog_featured_image_section', array(
    'title'          => esc_attr__( 'Featured Image', 'excellent-business' ),
    'panel'          => 'blog_panel',
    'priority'       => 20,
) );
// Hide Blog Posts Meta
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'blog_featured_image',
    'label'       => esc_attr__( 'Hide Blog Featured Image', 'excellent-business' ),
    'section'     => 'blog_featured_image_section',
    'default'     => '1',
    'priority'    => 10,
) );
// Hide Single Posts Meta
excellent_business_Kirki::add_field( 'excellent-business', array(
    'type'        => 'toggle',
    'settings'    => 'single_featured_image',
    'label'       => esc_attr__( 'Hide Single Featured Image', 'excellent-business' ),
    'section'     => 'blog_featured_image_section',
    'default'     => '1',
    'priority'    => 10,
) );