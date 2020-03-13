<?php 
 function cphotopic_lite_style()
 {
    wp_enqueue_style( 'cphotopic-lite-basic-style', get_stylesheet_uri() );
    wp_enqueue_style( 'cphotopic-lite-style', get_template_directory_uri() .'/skin/css/cphotopic-lite-main.css');
    wp_enqueue_style( 'cphotopic-lite-responsive', get_template_directory_uri() .'/skin/css/cphotopic-lite-responsive.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/skin/css/font-awesome.css');
    wp_enqueue_script( 'cphotopic-lite-toggle', get_template_directory_uri() . '/skin/js/cphotopic-lite-toggle.js', array('jquery'));
 }
 add_action( 'wp_enqueue_scripts', 'cphotopic_lite_style' );
?>
<?php
function cphotopic_lite_header_style() {
	$cphotopic_lite_header_text_color = get_header_textcolor();
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $cphotopic_lite_header_text_color ) {
		return;
	}
	echo '<style id="cphotopic-lite-custom-header-styles" type="text/css">';
	if ( 'blank' !== $cphotopic_lite_header_text_color ) 
	{
		echo '.header_top .logo a,
			.header_top .logo p,
			.learnmore
			 {
				color: #'.esc_attr( $cphotopic_lite_header_text_color ).'
			}';
	}	
	echo '</style>';	
}