<?php 
/*-----------------------------------------------------------------------------------*/
/* Initializing Widgetized Areas (Sidebars)																			 */
/*-----------------------------------------------------------------------------------*/

/*----------------------------------*/
/* Sidebar							*/
/*----------------------------------*/

function cityhall_widgets_init() {

register_sidebar(array(
	'name' => __('Sidebar: Primary','city-hall'),
	'id' => 'sidebar-primary',
	'before_widget' => '<div class="widget %2$s clearfix" id="%1$s">',
	'after_widget' => '</div>',
	'before_title' => '<p class="widget-title">',
	'after_title' => '</p>',
));

register_sidebar(array(
	'name' => __('Sidebar: Secondary','city-hall'),
	'id' => 'sidebar-secondary',
	'before_widget' => '<div class="widget %2$s clearfix" id="%1$s">',
	'after_widget' => '</div>',
	'before_title' => '<p class="widget-title">',
	'after_title' => '</p>',
));

register_sidebar(array(
	'name' => __('Homepage: Content Widgets','city-hall'),
	'id' => 'homepage-content-widgets',
	'description' => __('Recommended widgets: [Academia: Recent Posts], [Academia: Featured Pages]','city-hall'),
	'before_widget' => '<div class="site-section"><div class="site-section-wrapper site-section-wrapper-widget %2$s clearfix" id="%1$s">',
	'after_widget' => '</div><!-- .site-section-wrapper .site-section-wrapper-widget .clearfix --></div><!-- .site-section -->',
	'before_title' => '<p class="widget-title">',
	'after_title' => '</p>',
));

register_sidebar(array(
	'name' => __('Header: Secondary Widgets','city-hall'),
	'id' => 'header-widgets',
	'description' => __('These widgets will appear in the header to the right of the primary website logo. Recommended widgets: Academia: Call to Action, Social Icons, etc.','city-hall'),
	'before_widget' => '<div class="widget %2$s clearfix" id="%1$s">',
	'after_widget' => '</div>',
	'before_title' => '<p class="widget-title">',
	'after_title' => '</p>',
));

register_sidebar( array(
	'name'          => esc_html__( 'Footer: Column 1', 'city-hall' ),
	'id'            => 'footer-col-1',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
	'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
	'before_title'  => '<p class="widget-title"><span>',
	'after_title'   => '</span></p>',
) );

register_sidebar( array(
	'name'          => esc_html__( 'Footer: Column 2', 'city-hall' ),
	'id'            => 'footer-col-2',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
	'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
	'before_title'  => '<p class="widget-title"><span>',
	'after_title'   => '</span></p>',
) );

register_sidebar( array(
	'name'          => esc_html__( 'Footer: Column 3', 'city-hall' ),
	'id'            => 'footer-col-3',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
	'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
	'before_title'  => '<p class="widget-title"><span>',
	'after_title'   => '</span></p>',
) );

} 

add_action( 'widgets_init', 'cityhall_widgets_init' );