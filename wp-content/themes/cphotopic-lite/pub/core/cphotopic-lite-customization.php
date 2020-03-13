<?php
function cphotopic_lite_customize_register($wp_customize){
    	
	$wp_customize->add_section('cphotopic_lite_footer', array(
        'title'    => esc_html__('CPhotoPic Lite Footer', 'cphotopic-lite'),
        'description' => '',
        'priority' => 37,
    ));
 
   
	//  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('cphotopic_lite_banner', array(
        'title'    => esc_html__('CPhotoPic Lite Home banner Text', 'cphotopic-lite'),
        'description' => esc_html__('add home banner text here.','cphotopic-lite'),
        'priority' => 36,
    ));
   
// Banner heading Text
    $wp_customize->add_setting('banner_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner heading here','cphotopic-lite'),
            'section'   => 'cphotopic_lite_banner',
            'setting'   => 'banner_heading'
    )); // Banner heading Text

    // Banner heading Text
    $wp_customize->add_setting('banner_sub_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_sub_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner sub heading here','cphotopic-lite'),
            'section'   => 'cphotopic_lite_banner',
            'setting'   => 'banner_sub_heading'
    )); // Banner heading Text

  //  =============================
    //  = Footer              =
    //  =============================
	
	// Footer design and developed
	 $wp_customize->add_setting('cphotopic_lite_design', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'
    ));
 
    $wp_customize->add_control('cphotopic_lite_design', array(
        'label'      => esc_html__('Design and developed', 'cphotopic-lite'),
        'section'    => 'cphotopic_lite_footer',
        'setting'   => 'cphotopic_lite_design',
		'type'	   =>'textarea'
    ));
	// Footer copyright
	 $wp_customize->add_setting('cphotopic_lite_copyright', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('cphotopic_lite_copyright', array(
        'label'      => esc_html__('Copyright', 'cphotopic-lite'),
        'section'    => 'cphotopic_lite_footer',
        'setting'   => 'cphotopic_lite_copyright',
		'type'	   =>'textarea'
    ));	
}
add_action('customize_register', 'cphotopic_lite_customize_register');
?>