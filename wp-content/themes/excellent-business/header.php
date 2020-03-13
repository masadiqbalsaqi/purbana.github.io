<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package excellent-business
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-width">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'excellent-business' ); ?></a>

    <header id="masthead" class="site-header">
        <?php
        $hide_top_bar = get_theme_mod( 'hide_top_bar', 1 );

        $emailAddress = get_theme_mod( 'emailAddress' );
        $phoneNumber = get_theme_mod( 'phoneNumber' );

        $hide_search = get_theme_mod( 'hide_search', 1 );
        $woo_hide_cart = get_theme_mod( 'woo_hide_cart', 1 );
        $hide_social = get_theme_mod( 'hide_social', 1 );

        if( $hide_top_bar ) : ?>
            <section class="header-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="top-email-phone">
                                <?php if ( $emailAddress != '' ) : ?>
                                    <span><i class="ion-ios-paperplane-outline"></i> <?php echo esc_html( $emailAddress ); ?></span>
                                <?php endif;
                                if ( $phoneNumber != '' ) :
                                    ?>
                                    <span><i class="ion-ios-telephone-outline"></i> <?php echo esc_html( $phoneNumber ); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 search-cart-social text-right">
                            <?php if( $hide_social ) : ?>
                                <div class="social-header display-inline-b">
                                    <?php do_action( 'excellent_business_social_links' ); ?>
                                </div>
                            <?php endif;
                            if( $hide_search ) : ?>
                                <div class="dropdown display-inline-b header-search-dropdown">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="search-dropdown" href="#"><i class="ion-ios-search"></i></a>

                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                        <?php echo get_search_form(); ?>
                                    </ul>
                                </div>
                            <?php endif;
                            if( $woo_hide_cart && class_exists( 'WooCommerce' )  ) : ?>
                                <a class="cart-count" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="ion-bag"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <section class="header-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 main-menu">
                        <nav class="navbar navbar-default primary-menu">
                            <div class="logo pull-left">
                                <div class="site-branding">
                                    <?php
                                    the_custom_logo();
                                    if ( is_front_page() && is_home() ) :
                                        ?>
                                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php
                                    else :
                                        ?>
                                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php
                                    endif;
                                    $progress_description = get_bloginfo( 'description', 'display' );
                                    if ( $progress_description || is_customize_preview() ) :
                                        ?>
                                        <p class="site-description"><?php echo $progress_description; /* WPCS: xss ok. */ ?></p>
                                    <?php endif; ?>
                                </div><!-- .site-branding -->
                            </div>
                            <div class="navbar-header">
                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar-collapse" class="navbar-collapse collapse pull-right">
                                <?php
                                wp_nav_menu( array(
                                        'menu'              => 'menu-1',
                                        'theme_location'    => 'menu-1',
                                        'menu_id'			=> 'primary-menu',
                                        'container'         => '',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'text-capitalize nav navbar-nav',
                                        'fallback_cb'       => 'excellent_business_wp_bootstrap_navwalker::fallback',
                                        'walker'            => new excellent_business_wp_bootstrap_navwalker())
                                );
                                ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $hero_area_show = get_theme_mod( 'hero_area_show', true );
        $hero_title = get_theme_mod( 'hero_title' );
        $hero_sub_title = get_theme_mod( 'hero_sub_title' );
        $hero_text = get_theme_mod( 'hero_text' );
        $hero_button_text = get_theme_mod( 'hero_button_text' );
        $hero_button_url = get_theme_mod( 'hero_button_url' );
        $hero_txt_alignment = get_theme_mod( 'hero_txt_alignment', 'text-center' );
        if ( $hero_area_show && is_front_page() ): ?>
            <section class="hero-area position-relative <?php echo $hero_txt_alignment; ?>">
                <?php if ( get_header_image() ) : ?>
                    <img src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" class="img-fluid">
                <?php endif; ?>
                <div class="hero-container">
                    <div class="hero-content">
                        <div>
                            <?php if( $hero_sub_title ) : ?>
                                <h4><?php echo esc_html( $hero_sub_title ); ?></h4>
                            <?php endif; ?>
                            <h2><?php echo esc_html( $hero_title ); ?></h2>
                            <?php if( $hero_text ) : ?>
                                <p><?php echo esc_html( $hero_text ); ?></p>
                            <?php endif;?>
                            <?php if( $hero_button_text || $hero_button_url ) : ?>
                                <a href="<?php echo esc_url( $hero_button_url ); ?>" class="btn text-capitalize"><?php echo esc_html( $hero_button_text ); ?></a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </header><!-- #masthead -->