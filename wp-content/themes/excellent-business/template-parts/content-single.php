<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package excellent-business
 */
$class[] = 'blog-style single-blog';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <div class="blog-gap">
        <div class="entry-header mb-1">
            <?php
            the_title( '<h1 class="entry-title text-left">', '</h1>' );

            if ( 'post' === get_post_type() && true == get_theme_mod( 'single_post_meta', true )  ) :
                ?>
                <div class="entry-meta text-left">
                    <?php
                    excellent_business_posted_on();
                    excellent_business_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </div><!-- .entry-header -->

        <?php
        if ( true == get_theme_mod( 'single_featured_image', true ) ) :
            excellent_business_post_thumbnail();
        endif;
        ?>
        <div class="entry-content">
            <?php
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'excellent-business' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'excellent-business' ),
                'after'  => '</div>',
            ) );
            ?>
        </div><!-- .entry-content -->
        <?php if ( true == get_theme_mod( 'single_post_meta', true ) ) : ?>
            <div class="entry-footer mt-1 display-inline-b">
                <div class="entry-meta">
                    <?php excellent_business_entry_footer(); ?>
                </div>
            </div><!-- .entry-footer -->
        <?php endif; ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->