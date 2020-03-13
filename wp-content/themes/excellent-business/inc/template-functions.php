<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package excellent-business
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function excellent_business_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	if ( !is_front_page() ){
        $classes[] = 'top-gap-main';
    }

	return $classes;
}
add_filter( 'body_class', 'excellent_business_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function excellent_business_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'excellent_business_pingback_header' );

/**
 *  Social Media
 */
add_action( 'excellent_business_social_links', 'excellent_businesssocial_action' );
function excellent_businesssocial_action() {

    if( get_theme_mod( 'fb_link' ) ) {
        echo '<a class="fb" href="'.esc_url( get_theme_mod( 'fb_link' ) ).'"  target="_blank"><i class="ion-social-facebook-outline"></i></a>';
    }
    if( get_theme_mod( 'tw_link' ) ) {
        echo '<a class="tw"  href="'.esc_url( get_theme_mod( 'tw_link' ) ).'" target="_blank"><i class="ion-social-twitter-outline"></i></a>';
    }
    if( get_theme_mod( 'li_link') ) {
        echo '<a class="li" href="'.esc_url( get_theme_mod('li_link') ).'" target="_blank"><i class="ion-social-linkedin-outline"></i></a>';
    }

    if( get_theme_mod('pi_link') ) {
        echo '<a class="pi" href="'.esc_url( get_theme_mod('pi_link') ).'" target="_blank"><i class="ion-social-pinterest-outline"></i></a>';
    }
    if( get_theme_mod('in_link') ) {
        echo '<a class="in" href="'.esc_url( get_theme_mod('in_link') ).'" target="_blank"><i class="ion-social-instagram-outline"></i></a>';
    }
    if( get_theme_mod('dri_link') ) {
        echo '<a class="dr" href="'.esc_url( get_theme_mod('dri_link') ).'" target="_blank"><i class="ion-social-dribbble-outline"></i></a>';
    }
    if( get_theme_mod('yo_link') ) {
        echo '<a class="yo" href="'.esc_url( get_theme_mod('yo_link') ).'" target="_blank"><i class="ion-social-youtube-outline"></i></a>';
    }
    if( get_theme_mod('gp_link') ) {
        echo '<a class="gp" href="'.esc_url( get_theme_mod('gp_link') ).'" target="_blank"><i class="ion-social-googleplus-outline"></i></a>';
    }
}