<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package excellent-business
 */

$footer_layout = get_theme_mod( 'footer_columns', 'one' );
?>

<footer id="colophon" class="site-footer footer-layout-<?php echo $footer_layout; ?>">
    <?php if ( get_theme_mod( 'enable_footer_top' ) ) : ?>
    <section>
        <div class="container-fluid">
            <div class="row">
                <?php

                if ( get_theme_mod( 'footer_columns' ) == 'four' ) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget' ) ) :
                            dynamic_sidebar( 'footer-widget' );
                        endif;
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget-2' ) ) :
                            dynamic_sidebar( 'footer-widget-2' );
                        endif;
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget-3' ) ) :
                            dynamic_sidebar( 'footer-widget-3' );
                        endif;
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget-4' ) ) :
                            dynamic_sidebar( 'footer-widget-4' );
                        endif;
                        ?>
                    </div>

                    <?php

                } elseif ( get_theme_mod( 'footer_columns' ) == 'three' ) { ?>

                    <div class="col-lg-4 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget' ) ) :
                            dynamic_sidebar( 'footer-widget' );
                        endif;
                        ?>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget-2' ) ) :
                            dynamic_sidebar( 'footer-widget-2' );
                        endif;
                        ?>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget-3' ) ) :
                            dynamic_sidebar( 'footer-widget-3' );
                        endif;
                        ?>
                    </div>
                <?php } elseif ( get_theme_mod( 'footer_columns' ) == 'two' ) { ?>

                    <div class="col-lg-6 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget' ) ) :
                            dynamic_sidebar( 'footer-widget' );
                        endif;
                        ?>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget-2' ) ) :
                            dynamic_sidebar( 'footer-widget-2' );
                        endif;
                        ?>
                    </div>

                <?php } else { ?>
                    <div class="col-lg-12 col-12 mb-30">
                        <?php
                        if ( is_active_sidebar( 'footer-widget' ) ) :
                            dynamic_sidebar( 'footer-widget' );
                        endif;
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="footer-bottom">
        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 footer-social">
                        <?php
                        $hide_footer_social = get_theme_mod( 'hide_footer_social', 1 );
                        if( $hide_footer_social ) :
                            do_action( 'excellent_business_social_links' );
                        endif;
                        ?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 site-info">
                        <a href="<?php echo esc_url( __( 'https://www.themetim.com/', 'excellent-business' ) ); ?>">
                            <?php
                            $copayright = get_theme_mod( 'footer_copyright', 'Excellent business powered by themetim' );
                            echo esc_html( $copayright );
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
