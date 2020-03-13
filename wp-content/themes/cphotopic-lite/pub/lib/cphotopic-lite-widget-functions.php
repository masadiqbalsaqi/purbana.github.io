<?php 
 function cphotopic_lite_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cphotopic-lite' ),
		'description'   => esc_html__( 'Appears on sidebar', 'cphotopic-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );	
	register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'cphotopic-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'cphotopic-lite' ),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-1 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'cphotopic-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'cphotopic-lite' ),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-2 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 3', 'cphotopic-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'cphotopic-lite' ),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 4', 'cphotopic-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'cphotopic-lite' ),
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s footercont">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cphotopic_lite_widgets_init' );
?>