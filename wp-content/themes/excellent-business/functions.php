<?php
/**
 * excellent-business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package excellent-business
 */

if ( ! function_exists( 'excellent_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function excellent_business_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on excellent-business, use a find and replace
		 * to change 'excellent-business' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'excellent-business', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'excellent-business' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'excellent_business_custom_background_args', array(
			'default-color' => 'f9f9f9',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'excellent_business_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function excellent_business_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'excellent_business_content_width', 640 );
}
add_action( 'after_setup_theme', 'excellent_business_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function excellent_business_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'excellent-business' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'excellent-business' ),
        'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
	) );
    $excellent_business_footer_widgets = array(
        'name'          => esc_html__( 'Footer %d', 'excellent-business' ),
        'id'            => 'footer-widget',
        'description'   => esc_html__( 'Add widgets here.', 'excellent-business' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>'
    );
    register_sidebars( 4, $excellent_business_footer_widgets );
}
add_action( 'widgets_init', 'excellent_business_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function excellent_business_scripts() {
    if ( ! class_exists( 'Kirki' ) ) {
        wp_enqueue_style('excellent-business-body-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,500,700');
    }

    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '2.0.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );

	wp_enqueue_style( 'excellent-business-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), '1.0.4', true );
    wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );

	wp_enqueue_script( 'excellent-business-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'masonry' );

    wp_enqueue_script( 'excellent-business-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'excellent-business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'excellent_business_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Bootstrap Nav walker
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}

/**
 * Kirki Plugin Admin Notice Dismiss
 */
add_action( 'admin_notices', 'excellent_business_plugin_dismiss_notice' );
function excellent_business_plugin_dismiss_notice() {

    global $pagenow;

    if ( $pagenow == 'customize.php' ) :
        $user_id = get_current_user_id();
        if ( !get_user_meta( $user_id, 'excellent_business_kirki_plugin_dismissed' ) )
            echo '<p><a href="?excellent_business_kirki_dismissed">'.esc_html( 'Dismiss' ).'</a></p>';
    endif;
}

add_action( 'admin_init', 'excellent_business_kirki_plugin_dismissed' );
function excellent_business_kirki_plugin_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['excellent_business_kirki_dismissed'] ) )
        add_user_meta( $user_id, 'excellent_business_kirki_plugin_dismissed', 'true', true );
}
/**
 * Load TGM Plugin
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'excellent_business_active_plugins' );

function excellent_business_active_plugins() {
    $plugins = array(
        array(
            'name'      => 'Elementor Page Builder by Elementor',
            'slug'      => 'elementor',
            'required'  => false,
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'kirki Customizer',
            'slug'      => 'kirki',
            'required'  => false,
        ),
        array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => false,
        )
    );
    tgmpa( $plugins );
}