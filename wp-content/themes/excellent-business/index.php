<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package excellent-business
 */

get_header();
?>

    <main id="main" class="site-main default-blog">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <?php
                    if ( is_home() && ! is_front_page() ) :
                        ?>
                        <header class="col-md-12 col-xs-12 entry-header">
                            <h1 class="entry-title mb-30"><?php single_post_title(); ?></h1>
                        </header>
                    <?php
                    endif;
                    ?>
                    <div class="col-md-9 col-sm-8 col-xs-12 masonry">
                        <div class="row">

                            <?php
                            if ( have_posts() ) :
                                ?><div class="masonry-wrap"><?php
                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();

                                    /*
                                     * Include the Post-Type-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_type() );

                                endwhile;
                                ?></div><?php
                                the_posts_pagination( array(
                                    'mid_size' => 2,
                                    'prev_text' => __( '&larr;', 'excellent-business' ),
                                    'next_text' => __( '&rarr;', 'excellent-business' ),
                                ) );

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif;
                            ?>

                        </div>
                    </div>
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
