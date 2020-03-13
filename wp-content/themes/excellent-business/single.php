<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package excellent-business
 */

get_header();
?>

    <main id="main" class="site-main">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content-single', get_post_type() );

                            the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
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
