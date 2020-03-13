<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package excellent-business
 */
$class[] = 'col-md-4 col-sm-6 col-xs-12 masonry-has mb-30';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <div class="blog-style">
        <?php
        if ( true == get_theme_mod( 'blog_featured_image', true ) ) :
            excellent_business_post_thumbnail();
        endif;  ?>
        <div class="blog-gap">
            <div class="entry-header">
                <?php
                the_title( '<h2 class="entry-title text-left mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

                if ( 'post' === get_post_type() && true == get_theme_mod( 'blog_post_meta', true )   ) :
                    ?>
                    <div class="entry-meta text-left">
                        <?php
                        excellent_business_posted_on();
                        ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </div><!-- .entry-header -->

            <div class="entry-content">
                <?php
                the_excerpt();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'excellent-business' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div><!-- .entry-content -->
            <div class="entry-footer">
                <a class="read-more text-uppercase" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php esc_html_e( 'Read More', 'excellent-business'); ?></a>
            </div><!-- .entry-footer -->
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->