<?php
/**
 * excellent-business Theme Customizer
 *
 * @package excellent-business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function excellent_business_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'excellent_business_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'excellent_business_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'excellent_business_customize_register' );

/**
 * Adding Go to Pro Section in Customizer
 * https://github.com/justintadlock/trt-customizer-pro
 */
if( class_exists( 'WP_Customize_Section' ) ) :

    class excellent_businessCustomize_Section_Pro extends WP_Customize_Section {

        /**
         * The type of customize section being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'pro-section';

        /**
         * Custom button text to output.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_text = '';

        /**
         * Custom pro button URL.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_url = '';

        /**
         * Add custom parameters to pass to the JS via JSON.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function json() {
            $json = parent::json();

            $json['pro_text'] = $this->pro_text;
            $json['pro_url']  = esc_url( $this->pro_url );

            return $json;
        }

        /**
         * Outputs the Underscore.js template.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        protected function render_template() { ?>
            <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand get-pro-theme" style="display: block !important;">
                <h3 class="accordion-section-title">
                    {{ data.title }}
                    <# if ( data.pro_text && data.pro_url ) { #>
                    <a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
                    <# } #>
                </h3>
            </li>
        <?php }
    }
endif;

add_action( 'customize_register', 'excellent_businessmagazine_sections_pro' );
function excellent_businessmagazine_sections_pro( $wp_customize ) {
    // Register custom section types.
    $wp_customize->register_section_type( 'excellent_businessCustomize_Section_Pro' );

    // Register sections.
    $wp_customize->add_section(
        new excellent_businessCustomize_Section_Pro(
            $wp_customize,
            'excellent_businessget_pro',
            array(
                'title'    => esc_html__( 'Pro Available', 'excellent-business' ),
                'priority' => 5,
                'pro_text' => esc_html__( 'Get Pro Theme', 'excellent-business' ),
                'pro_url'  => 'https://www.themetim.com/wordpress-themes/excellent-business-pro/'
            )
        )
    );
}

/**
 * Early exit if Kirki exists.
 */
$user_id = get_current_user_id();
if ( !get_user_meta( $user_id, 'excellent_businesskirki_plugin_dismissed' ) ){
    require get_template_directory() . '/inc/kirki/include-kirki.php';
}
require get_template_directory() . '/inc/kirki/excellent-business-kirki.php';
/**
 * Kirki Customizer settings
 */
excellent_business_Kirki::add_config( 'excellent-business', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );
require get_template_directory() . '/inc/kirki/kirki-customizer.php';

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function excellent_business_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function excellent_business_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function excellent_business_customize_preview_js() {
	wp_enqueue_script( 'excellent-business-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'excellent_business_customize_preview_js' );
