<?php 
 if ( ! function_exists( 'cphotopic_lite_setup' ) ) :
function cphotopic_lite_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'cphotopic-lite' )
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	

		$defaults = array(
		'default-image'          => get_template_directory_uri() .'/skin/images/slider.jpg',
		'default-text-color' => 'ffffff',
		'width'                  => 1400,
		'height'                 => 500,
		'uploads'                => true,
		'wp-head-callback'   => 'cphotopic_lite_header_style',			
		);
		add_theme_support( 'custom-header', $defaults );
} 
endif; // cphotopic_lite_setup
add_action( 'after_setup_theme', 'cphotopic_lite_setup' );
?>