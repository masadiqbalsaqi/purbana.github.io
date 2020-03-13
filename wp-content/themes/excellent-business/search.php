<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package excellent-business
 */

get_header();
?>

    <main id="main" class="site-main">
        <section class="search-result">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="search-title entry-header">
                            <h1 class="entry-title">
                                <?php
                                /* translators: %s: search query. */
                                printf( esc_html__( 'Search Results for: %s', 'excellent-business' ), '<span>' . get_search_query() . '</span>' );
                                ?>
                            </h1>
                        </div><!-- .page-header -->
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <?php if ( have_posts() ) : ?>

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'search' );

                            endwhile;

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
                    <?php
                    get_sidebar();
                    ?>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
