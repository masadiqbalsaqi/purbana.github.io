<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package excellent-business
 */
$class[] = 'blog-style search-fix';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <div class="blog-gap">
        <div class="entry-header">
            <?php the_title( sprintf( '<h3 class="entry-title text-left"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php
                    excellent_business_posted_on();
                    excellent_business_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </div><!-- .entry-header -->

        <div class="entry-summary">
            <?php excellent_business_post_thumbnail(); ?>
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->

        <div class="entry-footer">
            <div class="entry-meta">
                <?php excellent_business_entry_footer(); ?>
            </div>
            <a class="read-more text-uppercase" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php esc_html_e( 'Read More', 'excellent-business'); ?></a>
        </div><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
